<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProfile extends FormRequest
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
        if (!Auth::check()) {
            return redirect('/login');
        }

        $id = Auth::user()->id;

        return [
            'name' => 'required|string|max:255',
            'username' => 'required|string|min:3|unique:users,username,'.$id,
            'email' => 'required|string|email|max:255|unique:users,email,'.$id,
            'city' => 'nullable|string|max:255',
            'phoneNumber' => 'nullable|string|max:255'
        ];
    }
}
