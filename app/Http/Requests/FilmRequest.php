<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilmRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:150'],
            'country_id' => ['required', 'numeric', 'exists:countries,id'],
            'duration' => ['required', 'numeric'],
            'year_of_issue' => ['required', 'numeric'],
            'age' => ['required', 'numeric'],
            'link_img' => ['nullable', 'string', 'max:255'],
            'link_kinopoisk' => ['nullable', 'string', 'max:255'],
            'link_video' => ['required', 'string', 'max:255'],
        ];
    }
}
