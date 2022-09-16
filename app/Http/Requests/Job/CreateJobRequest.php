<?php

namespace App\Http\Requests\Job;

use Illuminate\Foundation\Http\FormRequest;

class CreateJobRequest extends FormRequest
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
            'title'             => 'required|string',
            'description'       => 'required|string',
            'job_function'      => 'required',
            'industry'          => 'required|string',
            'work_type'         => 'required|string',
            'job_level'         => 'required|string',
            'experience'        => 'required|string',
            'qualification'     => 'required|string',
            'expected_salary'   => 'required|string',
            'gender'            => 'required|string',
            'state'             => 'required',
            'deadline'          => 'required|string',
            'opening'           => 'required|string',
        ];
    }
}
