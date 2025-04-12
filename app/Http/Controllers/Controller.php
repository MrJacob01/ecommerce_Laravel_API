<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;
use Ramsey\Uuid\Type\Integer;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs;


    public function response($message, array $data=null): JsonResponse
    {
        return response()->json([
            'status'=>'responed',
            'message'=>$message,
            'data'=>$data
        ]);
    }

    public function success($message, array $data=null): JsonResponse
    {
        return response()->json([
            'success'=>true,
            'status'=>'success',
            'message'=> $message ?? 'successfully',
            'data'=>$data
        ]);
    }


    public function error($message, array $data=null): JsonResponse
    {
        return response()->json([
            'success'=>false,
            'status'=> 'error',
            'message'=> $message ?? 'error',
            'data'=>$data
        ]);
    }
}
