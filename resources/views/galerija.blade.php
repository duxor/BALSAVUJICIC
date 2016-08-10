@extends('master')
@section('body')
    <style>
        .activeimg,.miniimg{
            margin: 0 auto;width: auto;
        }
        .miniimg{width: 800px}
        .miniimg img{
            width: auto; float:left; margin: 0 5px 5px 0;
        }
    </style>
    <section class="wpm_about_area">
        <div class="container">
            <div class="col-xs-12">
                <h1 class="text-center">{{$podaci['naslov']}}</h1>
            </div>
            <div class="col-xs-2">
                <a href="/{{strtolower(trans('tekstovi.foto'))}}/1" title="{{trans('tekstovi.foto')}} {{trans('tekstovi.nav-galerija')}} 1">{{trans('tekstovi.foto')}} {{trans('tekstovi.nav-galerija')}} 1</a><br>
                <a href="/{{strtolower(trans('tekstovi.foto'))}}/2" title="{{trans('tekstovi.foto')}} {{trans('tekstovi.nav-galerija')}} 2">{{trans('tekstovi.foto')}} {{trans('tekstovi.nav-galerija')}} 2</a><br>
                <a href="/{{strtolower(trans('tekstovi.foto'))}}/3" title="{{trans('tekstovi.foto')}} {{trans('tekstovi.nav-galerija')}} 3">{{trans('tekstovi.foto')}} {{trans('tekstovi.nav-galerija')}} 3</a><br>
                <a href="/{{strtolower(trans('tekstovi.video'))}}" title="{{trans('tekstovi.video')}}">{{trans('tekstovi.video')}}</a>
            </div>
            <div class="col-xs-10">
                @if($podaci['tip']=='foto')
                <div class="miniimg">
                    @for($i=1;$i<$podaci['broj']+1;$i++)
                        <img src="/images/galerije/{{$podaci['id']}}/mini/{{$i}}.jpg" alt="" width="75" height="56" class="miniimg" data-id="{{$i}}" data-gid="{{$podaci['id']}}" onclick="prikaziFoto(this)" onmouseenter="prikaziFoto(this)">
                    @endfor
                </div>
                <img src="/images/galerije/{{$podaci['id']}}/full/1.jpg" alt="" width="800" height="600" class="activeimg">
                @else
                    @foreach($podaci['video'] as $video)
                        {{$video['naslov']}}<br>
                        <object width="600" height="450" data="{{$video['url']}}"></object>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
@endsection
@section('end-script')
    <script>
        function prikaziFoto(el){
            if($(el).data('id')!=$('.activeimg').data('id'))
            $('.activeimg').attr('src','/images/galerije/'+$(el).data('gid')+'/full/'+$(el).data('id')+'.jpg').data('id',$(el).data('id'));
        }
    </script>
@endsection