<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RuleRequest extends FormRequest
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
                'biomedical_equipment_id' => 'required',
                'required'       => 'required',
                'feedback'       => 'required',
            ];
        } else {
            // Create Form
            return [
                'hospital_room_id'        => 'required',
                'biomedical_equipment_id' => 'required',
                'required'       => 'required',
                'feedback'       => 'required',
            ];
        }
    }
}
