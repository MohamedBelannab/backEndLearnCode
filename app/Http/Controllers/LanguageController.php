<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLanguageRequest;
use App\Http\Requests\UpdateLanguageRequest;
use App\Models\Language;
use App\Traits\HttpResponses;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth ;
use Illuminate\Support\Facades\Gate ;

class LanguageController extends Controller
{
    use HttpResponses ;

    public function getAllLanguages(){
        $languages = Language::orderBy('id', 'DESC')->get();
        return  $this->success($languages , "get all languages") ;
    }

    public function addLanguages(StoreLanguageRequest $request){

        if(Gate::allows('only_admin', Auth::user())){

            $request->validated($request->all());

            $language = Language::where('titre' , $request->titre)->first() ;
            
            if(!$language){
                $img  = $request->file('images') ;
                $path = $img->hashName();
                Storage::putFileAs('media', $img, $path);
                Language::create([
                    'img' => asset("media/" . $path) ,
                    'titre' => $request->titre,
                    'description' => $request->description ,
                    'WhyLearn'  => $request->WhyLearn, 
                    'example' => $request->example,
                    'frameworks' => $request->frameworks,
                    'Applications' =>  $request->Applications,
                    'Guide' => $request->Guide,
                ]);
                return $this->success([] , 'success : You add Language') ;
            }

            return $this->error([] , 'this language it exists' , 401) ;
        }
        return $this->error([], 'you dont have the permission', 403);
    }


    public function removeLanguage($id , $titre){
        // if(Gate::allows('only_admin', Auth::user())){
            $language = Language::where(['titre' => $titre, 'id' => $id])->first();

            if($language){

                $language->delete() ;
                return $this->success([] , "you remove language : $titre");
            }

            return $this->error([] , "language $titre not exist" , 404) ;
        // }
        return $this->error([], 'you dont have the permission', 403);
    }

    public function editLanguage(UpdateLanguageRequest $request){

        if(Gate::allows('only_admin', Auth::user())){
           $request->validated($request->all());
            $language = Language::where(['titre' => $request->titre, 'id' => $request->id])->first();
            if($language){
                if($request->hasFile('img')){
                    $img  = $request->file('images') ;
                    $path = $img->hashName();
                    Storage::putFileAs('media', $img, $path);
                    $language->update([
                        'img' => asset("media/" . $path) ,
                    ]);
                }
                $language->update($request->all()) ;
                return $this->success([] , "you update language : $request->titre");
            }

            return $this->error([] , "language $request->titre not exist" , 404) ;  
        }
        return $this->error([], 'you dont have the permission', 403);
    }
}
