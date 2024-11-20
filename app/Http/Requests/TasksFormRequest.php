<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TasksFormRequest extends FormRequest
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
                'descricao' => 'required',
                'status' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'titulo.required' => 'O campo título é obrigatório!',
            'descricao.required' => 'O campo descrição é obrigatório!',
            'status.required' => 'O campo status é obrigatório!'
        ];
    }
}
