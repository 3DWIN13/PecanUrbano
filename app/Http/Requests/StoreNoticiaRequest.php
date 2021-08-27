<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNoticiaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if ($this->user_id == auth()->user()->id) {
            # code...
            return true;
        }else{
            return false;
        } 
        
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        
        $rules =[
                'title' => 'required',
                'slug' => 'required',
                'body'=> 'required',
                'picture'=>'required',
                'description'=>'required',
                'tags'=>'required'
        ];

        if (isset($this->etik)||isset($this->edita)||isset($this->eliminar)) {
            # code...
            return [];
        }else{
            return $rules;
        }
        
    }
}
