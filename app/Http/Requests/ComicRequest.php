<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|max:100|min:2',
            'thumb' => 'required|max:255|min:10',
            'price' => 'required|max:5|min:2',
            'series' => 'required|max:50|min:2',
            'sale_date' => 'required|max:15|min:2',
            'type' => 'required|max:20|min:2',
        ];
    }

    /* Qui vanno i msg custom made. es:
    public function messages()
    {
        return [
            'title.required' => 'Il titolo è un campo obbligatorio',
            'title.max' => 'Il titolo deve avere al massimo :max caratteri',
            'title.min' => 'Il titolo deve avere minimo :min caratteri'
        ];
    }
    */
}
