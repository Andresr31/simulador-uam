<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GroupRequest extends FormRequest
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
                'name'=> 'required',
                'code' => 'required',
                'main_teacher'=> 'required',
                'assistant_teacher'=> 'required',
            ];
        } else {
            // Create Form
            return [
                'name'=> 'required|unique:groups',
                'code' => 'required|unique:groups',
                'main_teacher'=> 'required',
                'assistant_teacher'=> 'required',
            ];
        }
    }
}
