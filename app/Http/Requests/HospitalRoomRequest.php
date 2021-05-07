<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HospitalRoomRequest extends FormRequest
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
                'name'        => 'required',
                'description' => 'required',
                'mesh' => 'required',
                'floor_id' => 'required|exists:floors,id',
                'celling_id' => 'required|exists:cellings,id',
                'wall_id' => 'required|exists:walls,id',
                'image' => 'nullable|image',
            ];
        } else {
            // Create Form
            return [
                'name'        => 'required',
                'description' => 'required',
                'mesh' => 'required',
                'floor_id' => 'required|exists:floors,id',
                'celling_id' => 'required|exists:cellings,id',
                'wall_id' => 'required|exists:walls,id',
                'image' => 'required|image',
            ];
        }
    }
}
