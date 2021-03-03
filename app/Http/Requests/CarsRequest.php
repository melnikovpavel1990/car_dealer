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
//            'mark_id' => 'required|min:3|max:240',
//            'fuel_id' => 'required|min:5|max:240',
//            'milleage' => 'required|digits_between:1,7',
//            'model_id' => 'required|min:5|max:240',
//            'year' => 'required|digits_between:4,4',
//            'color_id' => 'required|min:2|max:20',
//            'price' => 'required|digits_between:1,7',
//            'transmission_id' => 'required|min:5|max:240',
//            'location_id' => 'required|min:3|max:240',
//            'city_id' => 'required|min:5|max:240',
//            'title' => 'required|min:1|max:240',
//            'description' => 'required|min:5|max:240',
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
