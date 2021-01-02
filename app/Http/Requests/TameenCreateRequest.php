<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TameenCreateRequest extends FormRequest
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
                'name' => 'required|max:255',
                'email' => 'string|email|max:255',
                'mobile' => 'required|phone_number|regex:/[0-9]{11}/',
                'question1' => 'required',
                'question3' => 'required',
                'budget' => 'required',
                'service' => 'required|string',
            ];

        }
    public function messages()
    {
        return [
            'name.required' => 'برجاء ادخال الاسم',
            'email.required' => 'برجاء ادخال البريد الالكتروني',
            'mobile.required' => 'برجاء ادخال رقم الهاتف مكون من 11 رقم و يبدا
             ب 011 او 012 او 010 او 015',
            'question1.required' => 'برجاء الاختيار',
            'question3.required' => 'برجاء الاختيار',
            'budget.required' => 'برجاء الاختيار',
            'service.required' => 'برجاء كتابه الخصائص',
        ];
            }
}
