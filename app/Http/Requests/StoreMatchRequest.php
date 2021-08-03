<?php

namespace App\Http\Requests;

use App\Match;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreMatchRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('match_create');
    }

    public function rules()
    {
        return [
            'start_game' => [
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
                'nullable',
            ],
            'result_1' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'result_2' => [
                'string',
                'nullable',
            ],
        ];
    }
}
