<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CellingRequest extends FormRequest
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
                'name'        => 'required,'.$this->id,
                'description' => 'required',
                
            ];
        } else {
            // Create Form
            return [
                'name'        => 'required|unique:cellings',
                'description' => 'required',
                'image'       => 'image',
            ];
        }
        
    }

    public function messages() {
        return [
            'name.required'        => 'El campo "Nombre" es obligatorio.',
            'description.required' => 'El campo "Descripción" es obligatorio.',
            'image.required' => 'La imagen es obligatoria.'
        ];
    }
}
