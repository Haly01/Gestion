<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AttendanceRequest extends FormRequest
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
        'last_name' => ['required', 'string', 'min:3', 'max:30'],
        'date' => ['required', 'date'],
        'hour' => ['required', 'time'],
        ];
    }

    public function messages(): array
    {
        return [

        'name.required' => 'El nombre es requerido',
        'name.string' => 'Debe ingresar texto',
        'name.min' => 'El minimo de texto es de 3',
        'name.max' => 'El maximo de texto es de 30',

        'last_name.required' => 'El apellido es requerido',
        'last_name.string' => 'Debe ingresar texto',
        'last_name.min' => 'El minimo de texto es de 3',
        'last_name.max' => 'El maximo de texto es de 30',

        'date.required' => 'La fecha es requerida',
        'date.date' => 'Debe ingresar fecha',

        'hour.required' => 'La hora es requerida',
        'hour.time' => 'Debe ingresar un valores numerico',
    ];
}
}
