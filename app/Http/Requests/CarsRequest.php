<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarsRequest extends FormRequest
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
        return [
            'image' => 'required',
//            'mark_id' => 'required',
//            'fuel_id' => 'required',
//            'milleage' => 'required|digits_between:1,7',
//            'model_id' => 'required',
//            'year' => 'required|digits_between:4,4',
//            'color_id' => 'required',
//            'price' => 'required',
//            'transmission_id' => 'required',
//            'location_id' => 'required',
//            'city_id' => 'required',
//            'title' => 'min:1|max:240',
//            'description' => 'min:1|max:240',
//            'air_conditioning' => 'boolean',
//            'Bluetooth' => 'boolean',
//            'GPS' => 'boolean',
//            'heated_seats' => 'boolean',
//            'power_seat' => 'boolean',
//            'speed_control' => 'boolean',
//            'ABS' => 'boolean',
//            'airbag' => 'boolean',
//            'alarm' => 'boolean',
//            'fog_lights' => 'boolean',
//            'heated_mirrors' => 'boolean',
//            'tow_package' => 'boolean',
        ];
    }
}
