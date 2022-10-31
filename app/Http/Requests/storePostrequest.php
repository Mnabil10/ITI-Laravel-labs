<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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


    /**
 * Get the error messages for the defined validation rules.
 *
 * @return array
 */


public function rules()
{
    return [
        'title' => 'required|min:3|unique:posts,title,'.$this->post,
        'desc' => 'required|min:10',
        'posted_by' => 'required|exists:users,id',
        'image' => 'mimes:jpeg,jpg,png'
    ];
}
}
