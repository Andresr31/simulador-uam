<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
                'fullname' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users,email,'.$this->user->id,
                'password' => 'required|string|min:8|confirmed',
                'career_id' => 'nullable|exists:careers,id',
                'semester' => 'nullable|integer|min:1|max:10',
                'role' => 'required|exists:roles,id'
            ];
        } else {
            // Create Form
            return [
                'fullname' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8|confirmed',
                'career_id' => 'nullable|exists:careers,id',
                'semester' => 'nullable|integer|min:1|max:10',
                'role' => 'required|exists:roles,id'
            ];
        }
    }
}
