<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTicketRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'tittle'       => ['string', 'max:255'],
            'description' => ['string'],
            'status'      => ['string'],
            'attachment'  => ['sometimes', 'file', 'mimes:jpg,jpeg,png,pdf'],
        ];
    }
}
