<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComputerRequest extends FormRequest
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
        $current_id = (request()->route('computer')->id);
        return route('computer');
        dd ($current_id);
        return [
            'name'=>"required|unique:computers,name,$current_id",
        ];
    }
}
