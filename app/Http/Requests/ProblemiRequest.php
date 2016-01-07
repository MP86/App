<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProblemiRequest extends Request
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
        		'nome' => ['required', 'max:255'],
        		'foto' => ['required', 'mimes:jpeg,bmp,png,jpg'],
        		'tipo' => ['required', 'max:255'],
        		'descrizione' => ['required'],
        		'indirizzo' => ['required', 'max:255'],
        		'CAP' => ['required', 'numeric'],
        ];
    }
}
