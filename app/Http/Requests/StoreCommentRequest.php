<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCommentRequest extends FormRequest
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
        $rules = [
            'post_id' => ['required','exists:posts,id'],
            'parent_id'=>['nullable','exists:comments,id'],
            'body' => ['required','string','max:500']
        ];
        if(!auth()->check())
        {
            $rules['guest_name'] = ['required','string','max:50'];
            $rules['guest_email']=['required','email','max:75'];
        }
        return $rules;
    }

    public function messages():array
    {
        return [
            'guest_name.required' => "Name is required for guest comments",
            'guest_email.required' => "Email is required for guest comments"
        ];
    }
}
