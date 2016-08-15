<?php

namespace App\Http\Controllers;

use App\Vesti;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Input;

class OsnovniC extends Controller{
    public function getIndex(){
        return view('index');
    }
    public function getOMeni(){
        $podaci=[
            'txt'=>trans('tekstovi.omeni-cv'),
            'img'=>['/images/mali-balsa.jpg']
        ];
        return view('prezenter')->with(compact('podaci'));
    }

    public function getFoto($id=1,$podaci=null){
        if(!$podaci){
            $brojFotografija=[
                1=>10,
                2=>12,
                3=>9
            ];
            $podaci=[
                'id'=>$id,
                'tip'=>'foto',
                'broj'=>$brojFotografija[$id],
                'naslov'=>trans('tekstovi.foto').' '.trans('tekstovi.nav-galerija').' '.$id
            ];
        }
        return view('galerija')->with(compact('podaci'));
    }
    public function getPhoto($id=1){
        return $this->getFoto($id);
    }
    public function getVideo($id=1){
        $podaci=[
            'tip'=>'video',
            'naslov'=>trans('tekstovi.video'),
            'video'=>[
                [
                    'naslov'=>'Snimak Ane Popovic (Priprema za koledz u Americi)',
                    'url'=>'https://www.youtube.com/embed/KJFrl8QmACE'
                ],
                [
                    'naslov'=>'',
                    'url'=>'https://www.youtube.com/embed/5vZ7CRTsn_4'
                ]
            ]
        ];
        return $this->getFoto(null, $podaci);
    }
    public function getVesti($slug){
        $podaci=Vesti::dajVesti(false, $slug);
        return view('vesti')->with(compact('podaci'));
    }
    public function getNews($slug){
        return $this->getVesti($slug);
    }

    public function postMail(){dd(Input::except('_token'));
        //
    }
}
