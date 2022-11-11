<?php

namespace App\Http\Requests\Auth;

use JetBrains\PhpStorm\ArrayShape;
use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\Pure;

/**
 * @property string password
 * @property string email
 */
class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    #[Pure] #[ArrayShape(
        [
            'email' => "string",
            'password' => "string",
        ]
    )]
    final public function rules(): array
    {
        return [
            'email' => ['required','string','email','max:255','unique:users,email'],
            'password' => ['required', 'string', 'min:8'],
        ];
    }
}
