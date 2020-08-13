<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StartTimeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; //-- この行を変更
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            // 'title' => 'required|max:50',
            // 'body' => 'required|max:500',
        ];
    }

    public function attributes()
    {
        return [
            'start_time' => '出勤時刻',
            // 'body' => '本文',
        ];
    }
}
