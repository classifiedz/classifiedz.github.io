<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProduct extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // If currently logged in user is owner of product
        //      return true;
        // Else
        //      return false;
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $statuses = array('ACTIVE', 'PURCHASED', 'INACTIVE', 'REMOVED');

        return [
            'title' => 'string|max:200',
            'description' => 'nullable|string',
            'price' => 'numeric',
            'category_id' => 'numeric|exists:product_categories,id',
            'status' => 'in:' . implode(',', $statuses),
        ];
    }
}
