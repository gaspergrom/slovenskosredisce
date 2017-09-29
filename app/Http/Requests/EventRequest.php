<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            'name.*'        => 'required|string|min:3',
            'description.*' => 'required|string',
            'excerpt.*'     => 'required|string',
            'location'      => 'required|string',
            'price'         => 'integer|nullable',
            'type'          => 'in:fans,slo',
            //'image'         => 'required_if:type,fans,slo|file|sometimes|image',
            'begins_at'     => 'required|date',
            'ends_at'       => 'sometimes|date',
        ];
    }
}
