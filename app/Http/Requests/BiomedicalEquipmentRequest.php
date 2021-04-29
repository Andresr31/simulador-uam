<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BiomedicalEquipmentRequest extends FormRequest
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
            // update
            return [
                'name'        => 'required',
                'description' => 'required',
                'risk_factor_id' => 'nullable|exists:risk_factors,id',
                'category_id' => 'required|exists:biomedical_equipment_categories,id',
                'image' => 'nullable|image',
            ];
        } else {
            // store
            return [
                'name'        => 'required',
                'description' => 'required',
                'risk_factor_id' => 'nullable|exists:risk_factors,id',
                'category_id' => 'required|exists:biomedical_equipment_categories,id',
                'image' => 'required|image',
            ];
        }
    }
}
