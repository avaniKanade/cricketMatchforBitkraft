<?php

namespace App\Http\Requests;

use App\Player;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StorePlayerRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('player_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'nullable',
            ],
            'surname' => [
                'string',
                'nullable',
            ],
        ];
    }
}
