<?php

namespace App\Http\Resources;

use App\Models\UserSetting;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            "id"=> $this->id,
            "username"=> $this->username,
            "firstname"=> $this->firstname,
            "lastname"=> $this->lastname,
            "full name"=> $this->firstname . " " . $this->lastname,
            "email"=> $this->email,
            "phone"=> $this->phone,
            "email_verified_at"=> $this->email_verified_at,
            "created_at"=> $this->created_at,
            "roles" => $this->getRoleNames(),
            "permissions"=>$this->getAllPermissions(),
            "settings"=>UserSettingResource::collection($this->userSetting)
        ];
    }
}
