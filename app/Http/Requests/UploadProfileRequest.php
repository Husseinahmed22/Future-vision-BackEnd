<?php

namespace App\Http\Requests;

class UploadProfileRequest extends MasterApiRequest
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
            'img' => 'required|mimes:jpeg,jpg,png,gif'
        ];
    }
}
