<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BillsRequest extends FormRequest
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
            'billNumber' => 'required',
            'imponibleBill' => 'required|numeric',
            'pdf' => 'required|mimes:pdf',
            'iva' => 'numeric',
            'total' => 'numeric',
            'cost_send' => 'numeric',
            'percent_send' => 'numeric',
        ];
    }
}
