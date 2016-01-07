<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AziendeRequest extends Request
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
        		'nome' => ['required', 'min:3'],
        		'tipo' => ['required', 'max:255'],
        		'indirizzo' => ['required', 'max:255'],
        		'CAP' => ['required', 'numeric', 'min:5'],
        ];
    }
}
