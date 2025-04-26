<?php

namespace App\Http\Controllers;

use App\Models\UserSetting;
use App\Http\Requests\StoreUserSettingRequest;
use App\Http\Requests\UpdateUserSettingRequest;
use App\Http\Resources\SettingResource;
use App\Http\Resources\UserSettingResource;
use App\Models\Setting;

class UserSettingController extends Controller
{
    public function __construct()
    {   
        $this->middleware('auth:sanctum');
    }

    public function index()
    {
        return $this->response(null, UserSettingResource::collection(auth()->user()->userSetting));
    }

    public function store(StoreUserSettingRequest $request)
    {
        if (auth()->user()->userSetting()->where('setting_id', $request->setting_id)->exists())
        {
            return $this->error('Already exists', Setting::where('id', $request->setting_id));
        }
        $userSetting = auth()->user()->userSetting()->create([
            'setting_id'=>$request->setting_id,
            'value_id'=>$request->value_id ?? null,
            'swtich'=>$request->swtich ?? null,
        ]);

        return $this->success('User setting saved', $userSetting);
    }

    public function update(UpdateUserSettingRequest $request, UserSetting $userSetting)
    {
       $setting = $userSetting->update([
            'switch'=>$request->switch ?? null,
            'value_id'=>$request->value_id ?? null
       ]);

       return $this->success('changed your setting', $userSetting);
    }

    public function destroy(UserSetting $userSetting)
    {
        $userSetting->delete();
        return $this->success('deleted your setting', $userSetting);
    }
}
