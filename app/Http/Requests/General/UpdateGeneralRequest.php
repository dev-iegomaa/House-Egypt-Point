<?php

namespace App\Http\Requests\General;

use App\Models\General;
use Illuminate\Foundation\Http\FormRequest;

class UpdateGeneralRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return array_merge(General::createRule(), [
            'id' => 'required|integer|exists:generals,id'
        ]);
    }
}