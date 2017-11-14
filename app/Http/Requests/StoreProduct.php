<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProduct extends FormRequest
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
        /*$statuses = array('ACTIVE', 'PURCHASED', 'INACTIVE', 'REMOVED');
        'status' => 'required|in:' . implode(',', $statuses),*/

        return [
            'title' => 'required|string|max:200',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'category_id' => 'required|numeric|exists:product_categories,id',
            'image' => 'required|image',
        ];
    }
}
