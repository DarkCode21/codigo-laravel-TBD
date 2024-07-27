<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateServicioRequest extends FormRequest
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
                'titulo' => 'required',
                'descripcion' => 'required',
                // 'image' => ['required','mimes:png,jpg,jpeg',
                //     'dimensions:width=600,height:400',
                //     'dimensions:min_width=400,min_height=200',
                //     'dimensions:ratio=16/9',
                //     'max:2000'],
                'image' => ['required','mimes:jpeg,png,jpg']

                // 'image' => [
                //     $this->route('servicios') ? 'nullable' : 'required','mimes:jpeg,png,jpg',
                // ]
                
        ];
    }

    public function messages()
    {
        return [
            'titulo.required' => 'Se necesita titulo para el servicio',
            'descripcion.required' => 'Ingresa una descripcion,es necesaria',
            'image.required' => 'Debes seleccionar una imagen'
        ];
    }

}
