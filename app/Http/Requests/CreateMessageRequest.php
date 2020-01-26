<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

//use App\Http\Requests\Request;

class CreateMessageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // todos los usuarios están autorizados para envíar un mensaje si es false
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        'nombre1'=> 'required',
        'email' => 'required|email',
        'Mensaje' => 'required|min:5'
        ];
    }
}
