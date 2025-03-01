<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Setting;

class UpdateSettingRequest extends FormRequest
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
        $rules = Setting::$rules;
        $rules['institution_name'] = $rules['institution_name'].",".$this->route("setting");$rules['contact_two'] = $rules['contact_two'].",".$this->route("setting");
        return $rules;
    }
}
