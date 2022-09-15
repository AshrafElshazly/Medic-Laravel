<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppointmentPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'        => 'required|string|max:100',
            'phone'       => 'required|integer|digits:11',
            'email'       => 'required|email|max:100',
            'date'        => 'required|date',
            'doctor'      => 'required|string',
            'department'  => 'required|string',
            'message'     => 'required|string'
        ];
    }
}
