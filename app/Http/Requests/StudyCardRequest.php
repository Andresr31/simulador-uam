<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudyCardRequest extends FormRequest
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
                'title'        => 'required',
                'summary' => 'required',
                'content' => 'required',
                'image'       => 'image',
            ];
        } else {
            // Create Form
            return [
                'title'        => 'required|unique:study_cards',
                'summary' => 'required',
                'content' => 'required',
                'image'       => 'image',
                
            ];
        }
    }
}
