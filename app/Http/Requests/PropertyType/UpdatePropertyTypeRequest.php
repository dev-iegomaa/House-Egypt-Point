<?php

namespace App\Http\Requests\PropertyType;

use App\Models\PropertyType;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePropertyTypeRequest extends FormRequest
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
        return array_merge(PropertyType::createRule(), [
            'id' => 'required|integer|exists:property_types,id'
        ]);
    }
}
