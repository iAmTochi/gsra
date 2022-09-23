<?php

namespace App\Http\Requests\Resume;

use Illuminate\Foundation\Http\FormRequest;

class CreateResumeRequest extends FormRequest
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
        //dd($this->request->all());
        return [

            'title'               => 'required',
            'job_function_id'     => 'required',
            'about_me'            => 'required',
            'school'            => 'required',
            'qualification'     => 'required',
            'school_end_date'   => 'nullable|required',
            'employer'          => 'required',
            'job_title'         => 'required',
            'job_start_date'    => 'nullable|required',
            'job_end_date'      => 'nullable|required',
            'skill_name'        => 'required',
            'responsibility.*'    => 'required',


        ];
    }
}
