<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProgramC extends Controller
{
    public function getIndex($slug){
        switch($slug){
            case trans('tekstovi.program-takmicari-slug'):
                $podaci=[
                    'txt'=>trans('tekstovi.program-takmicari-opis-vise'),
                    'img'=>['/images/program/takmicari-1.jpg','/images/program/takmicari-2.jpg','/images/program/takmicari-3.jpg']
                ];
                break;
            case trans('tekstovi.program-amateri-slug'):
                $podaci=[
                    'txt'=>trans('tekstovi.program-amateri-opis-vise'),
                    'img'=>['/images/program/amateri.jpg']
                ];
                break;
            case trans('tekstovi.program-sparing-slug'):
                $podaci=[
                    'txt'=>trans('tekstovi.program-sparing-opis-vise'),
                    'img'=>['/images/program/sparing.jpg']
                ];
                break;
            default:
                $podaci=[
                    'txt'=>trans('tekstovi.program-plan-opis-vise'),
                    'img'=>['/images/program/plan-rada.jpg']
                ];
                break;
        }
        return view('prezenter')->with(compact('podaci'));
    }
}
