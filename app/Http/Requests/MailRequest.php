<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MailRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email'=>'required | max:50',
            'name'=>'required | max:50',
            'description'=>'required | max:5000'
        ];
    }
    public function messages(){
        return[
            'email.required'=>"L'email è obbligatoria!",
            'email.max'=>"L'email è troppo lunga!",
            'name.required'=>"Il nome è obbligatorio!",
            'name.max'=>"Il nome è troppo lungo!",
            'description.required'=>"La descrizione è obbligatoria!",
            'description.max'=>"La descrizione è troppo lunga!"
        ];
    }
}
