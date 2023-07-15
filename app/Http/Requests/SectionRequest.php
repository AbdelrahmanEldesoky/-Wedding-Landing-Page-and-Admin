<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SectionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required',
            'description'=>'required',
            'type_id'=>'required'
        ];
    }
    public function messages(): array
    {
        return [
            'type_id.required'=>'من فضلك نوع الحجز',
            'name.required'=>'من فضلك ادخل اسم القسم',
            'description.required'=>'من فضلك ادخل الوصف',
        ];
    }
}
