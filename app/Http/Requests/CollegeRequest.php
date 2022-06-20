<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class CollegeRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'student_id' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'college' => 'required|string|max:255',
            'block' => 'required',
            'room' => 'required|string|max:255',
            'address' => 'required',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'success'   => true,
            'message'   => 'Validation Store errors',
            'data'      => $validator->errors()
        ]));
    }
    public function messages() //OPTIONAL
    {
        return [
            'student_id.required' => 'Student id is required',
            'name.required' => 'Name is required',
            'college.required' => 'College is required',
            'block.required' => 'Block is required',
            'room.required' => 'Room is required',
            'address.required' => 'Address is required',
        ];
    }
}
