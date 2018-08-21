<?php

namespace CodeEduBook\Http\Requests;

use CodeEduBook\Http\Requests\BookCreateRequest;
use CodeEduBook\Repositories\BookRepository;
use Illuminate\Support\Facades\Auth;

class BookUpdateRequest extends BookCreateRequest
{
    /**
     * @var BookRepository
     */
    private $repository;

    /**
     * BookUpdateRequest constructor.
     */
    public function __construct(BookRepository $repository)
    {
        $this->repository = $repository;
    }


    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $id = (int) $this->route('book');
        if($id == 0){
            return false;
        }

        $book = $this->repository->find($id);
        return $book->author_id == Auth::user()->id;



//        if($this->segment(2)){
//            $book = $this->segment(2);
//            $id_user = (int)Book::find($book)->user_id;
//            if($id_user === Auth::user()->id){
//                return true;
//            }else{
//                return false;
//            }
//        }else{
//            return true;
//        }

    }
}
