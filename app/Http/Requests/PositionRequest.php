<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PositionRequest extends FormRequest
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

        'name' => ['required', 'string', 'min:3', 'max:30', 'unique'],
        'description' => ['required', 'string', 'min:3', 'max:100'],
        'salary' => ['required', 'float', 'min:2', 'max:10'],
        ];
    }

    public function messages(): array
    {
        return [

        'name.required' => 'El nombre es requerido',
        'name.string' => 'Debe ingresar texto',
        'name.min' => 'El minimo de texto es de 3',
        'name.max' => 'El maximo de texto es de 50',

        'description.required' => 'La descripcion es requerida',
        'description.string' => 'Debe ingresar texto',
        'description.min' => 'El minimo de texto es de 3',
        'description.max' => 'El maximo de texto es de 100',

        'salary.required' => 'El salario es requerido',
        'salary.float' => 'Debe ingresar valores numericos',
        'salary.min' => 'El minimo de valor numerico es de 2',
        'salary.max' => 'El maximo de valor numerico es de 10',
    ];
}
}
