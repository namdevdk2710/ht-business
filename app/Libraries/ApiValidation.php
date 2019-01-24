<?php

namespace App\Libraries\Traits;

use Illuminate\Support\Facades\Validator;

trait ApiValidation
{
    public function checkValidate($request, string $validation)
    {
        $rules = resolve('Validation');

        return Validator::make($request, $rules[$validation]);
    }
}
