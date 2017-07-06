<?php

namespace App\Http\Requests;

use App\Book;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class BookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if($this->segment(2)){
            $book = $this->segment(2);
            $id_user = (int)Book::find($book)->user_id;
            if($id_user === Auth::user()->id){
                return true;
            }else{
                return false;
            }
        }else{
            return true;
        }

    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'subtitle' => 'required',
            'price' => 'required',
        ];
    }
}
