<?php

namespace App\Http\Requests;

use App\Result;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateResultRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('result_edit');
    }

    public function rules()
    {
        return [];
    }
}
