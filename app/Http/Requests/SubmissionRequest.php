<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubmissionRequest extends FormRequest
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
            'name'               => 'required|string',
            'email'              => 'required|email',
            'phone'              => 'required|string',
            'status'             => 'required_if:self_payer,1|string|in:student,zaposlen,drugo',
            'work'               => 'required_if:self_payer,1|string',
            'message'            => 'required_if:self_payer,1|string',
            'address'            => 'required_if:self_payer,0|string',
            'fax'                => 'required_if:self_payer,0|string',
            'account'            => 'required_if:self_payer,0|string',
            'web'                => 'required_if:self_payer,0|url',
            'address'            => 'required_if:self_payer,0|string',
            'contact_name'       => 'required_if:self_payer,0|string',
            'contact_email'      => 'required_if:self_payer,0|string',
            'contact_phone'      => 'required_if:self_payer,0|string',
            'activity'           => 'required_if:self_payer,0|string',
            'revenue'            => 'required_if:self_payer,0|string',
            'interest'           => 'required_if:self_payer,0|string',
            'cooperation'        => 'required_if:self_payer,0|string',
            'persons'            => 'required_if:self_payer,0',
            'persons.*.ime'      => 'required_if:self_payer,0|string',
            'persons.*.funkcija' => 'required_if:self_payer,0|string',
            'persons.*.email'    => 'required_if:self_payer,0|email',
            'persons.*.telefon'  => 'required_if:self_payer,0|string',
        ];
    }
}
