<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FloorRequest extends FormRequest
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
        if ($this->method() == 'PUT') {
            // Edit Form
            return [
                'name'        => 'required'.$this->id,
                'description' => 'required',
                // 'image'       => 'image',
            ];
        } else {
            // Create Form
            return [
                'name'        => 'required|unique:floors',
                'description' => 'required',
                'image'       => 'required|image',
            ];
        }
    }

    public function messages() {
        return [
            'name.required'        => 'El campo "Nombre" es obligatorio.',
            'description.required' => 'El campo "Descripción" es obligatorio.'
        ];
    }
}
