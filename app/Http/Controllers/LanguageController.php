<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLanguageRequest;
use App\Http\Requests\UpdateLanguageRequest;
use App\Models\Language;
use App\Traits\HttpResponses;
use App\Models\Quiz;
use App\Http\Resources\Quiz as resQuiz;

class LanguageController extends Controller
{
    use HttpResponses ;

    public function getAllLanguages(){
        $languages = Language::orderBy('id', 'DESC')->get();
        return  $this->success($languages , "get all languages") ;
    }

    public function getQuiz($id)
    {
        $quiz =Language::where('id' , $id)->with(['quiz' => function($query){

            $query->with(['question' => function($query){
                $query->with('answers')->get();
            }])->get() ;

        }])->first() ;

        // return $quiz ;
        return $this->success(resQuiz::collection([$quiz]) ,'Quiz') ;
    }

}
