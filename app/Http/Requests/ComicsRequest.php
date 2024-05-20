<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicsRequest extends FormRequest
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
            'title' => 'required',
            'thumb' => 'required',
            'description' => 'required',
            'price' => 'required',
            'series' => 'required',
            'sale_date' => 'required',
            'type' => 'required',
            'artists' => 'required',
            'writers' => 'required',
        ];
    }
    public function messages(){
        return [
            'title.required' => 'Il titolo è un campo obbligatorio',
            'thumb.required' => 'L\'immagine è un campo obbligatorio',
            'description.required' => 'La descrizione è un campo obbligatorio',
            'price.required' => 'Il prezzo è un campo obbligatorio',
            'series.required' => 'La serie è un campo obbligatorio',
            'sale_date.required' => 'La data di vendita è un campo obbligatorio',
            'type.required' => 'Il tipo è un campo obbligatorio',
            'artists.required' => 'L\'artista è un campo obbligatorio',
            'writers.required' => 'Lo scrittore è un campo obbligatorio',
        ];
    }
}
