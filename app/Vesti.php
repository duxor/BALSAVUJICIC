<?php

namespace App;

class Vesti{
    public static function vesti(){
        return [
            [
                'naslov'=>trans('tekstovi.vest-1-naslov'),
                'slug'=>trans('tekstovi.vest-1-slug'),
                'part-txt'=>'',
                'full-txt'=>trans('tekstovi.vest-1-ft'),
                'datum'=>'02.12.2016. 15:27'
            ],
            [
                'naslov'=>trans('tekstovi.vest-2-naslov'),
                'slug'=>trans('tekstovi.vest-2-slug'),
                'part-txt'=>'',
                'full-txt'=>trans('tekstovi.vest-2-ft'),
                'datum'=>'02.12.2016. 15:39'
            ],
            [
                'naslov'=>trans('tekstovi.vest-3-naslov'),
                'slug'=>trans('tekstovi.vest-3-slug'),
                'part-txt'=>'',
                'full-txt'=>trans('tekstovi.vest-3-ft'),
                'datum'=>'02.12.2016. 15:44'
            ],
            [
                'naslov'=>trans('tekstovi.vest-4-naslov'),
                'slug'=>trans('tekstovi.vest-4-slug'),
                'part-txt'=>'',
                'full-txt'=>trans('tekstovi.vest-4-ft'),
                'datum'=>'02.12.2016. 16:07'
            ],
            [
                'naslov'=>trans('tekstovi.vest-5-naslov'),
                'slug'=>trans('tekstovi.vest-5-slug'),
                'part-txt'=>'',
                'full-txt'=>trans('tekstovi.vest-5-ft'),
                'datum'=>'12.03.2012. 11:52'
            ],
            [
                'naslov'=>trans('tekstovi.vest-6-naslov'),
                'slug'=>trans('tekstovi.vest-6-slug'),
                'part-txt'=>'',
                'full-txt'=>trans('tekstovi.vest-6-ft'),
                'datum'=>'27.03.2012. 13:43'
            ],
            [
                'naslov'=>trans('tekstovi.vest-7-naslov'),
                'slug'=>trans('tekstovi.vest-7-slug'),
                'part-txt'=>'',
                'full-txt'=>trans('tekstovi.vest-7-ft'),
                'datum'=>'27.03.2012 13:44'
            ],
            [
                'naslov'=>trans('tekstovi.vest-8-naslov'),
                'slug'=>trans('tekstovi.vest-8-slug'),
                'part-txt'=>trans('tekstovi.vest-8-pt'),
                'full-txt'=>trans('tekstovi.vest-8-ft'),
                'datum'=>'18.07.2012. 11:52'
            ]/*,
            [
                'naslov'=>'',
                'part-txt'=>'',
                'full-txt'=>'',
                'datum'=>''
            ],*/
        ];
    }
    public static function dajVesti($lastFull=true, $slug=null){
        $all=Vesti::vesti();
        $vesti=[];
        $active=0;
        for($i=sizeof($all)-1;$i>=0;$i--){
            $vest=[
                'naslov'=>$all[$i]['naslov'],
                'slug'=>$all[$i]['slug'],
                'datum'=>$all[$i]['datum'],
            ];
            if($i==sizeof($all)-1 && $lastFull) $vest['part-txt']=$all[$i]['part-txt'];
            if($slug) if($all[$i]['slug']==$slug){
                $vest['full-txt']=$all[$i]['full-txt'];
                $active=sizeof($all)-1-$i;
            }
            array_push($vesti,$vest);
        }
        return ['vesti'=>$vesti, 'active'=>$active];
    }
}
