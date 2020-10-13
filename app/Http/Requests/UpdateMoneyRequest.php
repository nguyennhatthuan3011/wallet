<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMoneyRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'wallet_id' => 'sometimes|exists:wallets,id',
            'amount'    => 'sometimes|numeric|min:0',
            'type'      => 'sometimes|boolean',
            'name'      => 'sometimes|string'
        ];
    }
}
