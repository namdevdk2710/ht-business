<?php

namespace App\Libraries;

use Illuminate\Support\Facades\Validator;

trait ApiResponse
{
    public function responseSuccess(array $data, string $message)
    {
        if (empty($message)) {
            $message = config('define.MSG_SUCCESS');
        }

        return response()->json([
            'status' => true,
            'content' => $data,
            'message' => $message,
        ]);
    }

    public function responseError(array $errors, string $message)
    {
        if (empty($message)) {
            $message = config('define.MSG_FAIL');
        }

        return response()->json([
            'status' => false,
            'errors' => $errors,
            'message' => $message,
        ]);
    }
}
