<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApiCreateRequest extends FormRequest
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
            'api-name' => 'required|max:50',
            'api-desc' => 'required|max:300',
            'api-url' => 'required|url',
            'api-endpoint-name' => 'required|max:50',
            'api-endpoint-desc' => 'required|max:300',
            'api-endpoint' => 'required|max:300',
        ];
    }
}
