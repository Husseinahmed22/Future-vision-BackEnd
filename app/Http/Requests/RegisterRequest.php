<?php

namespace App\Http\Requests;


class RegisterRequest extends MasterApiRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
   

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'email' => 'required|string|unique:users',
            'password' => 'required|string|min:6',
            // 'college_id' => 'required',
            // 'uni_id' => 'required',
            "gender" => 'required',
            'img' => 'nullable',
            "location" => 'required',
            "birth" => 'required',
            'department' => 'required',
            "Philosophymark" => 'nullable',
            "historymark" => 'nullable',
            "psychologymark" => 'nullable',
            "geologymark" => 'nullable',
            "thirdlangmark" => 'required',
            "arabicMark" => 'required',
            "physicsMark" => 'nullable',
            "mathMark" => 'nullable',
            "chemistryMark" => 'nullable',
            "englishMark" => 'required',
            "totalPercentage" => 'required',
        ];
    }
}
