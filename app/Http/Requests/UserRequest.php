<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        		'nickname' => ['required', 'max:255'],
        		'email' => ['required', 'email', 'unique:users' . ($this->method() == 'POST' ? '' : (',email,' . $this->route('users')->id))],
        		'password' => ['required', 'min:8'],
        ];
    }
}
