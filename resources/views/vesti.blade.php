@extends('master')
@section('body')
    <section class="wpm_about_area">
        <div class="container">
            <div class="col-xs-8">
                <h1 class="text-center">{{$podaci['vesti'][$podaci['active']]['naslov']}}</h1>
                <p class="text-center">{{$podaci['vesti'][$podaci['active']]['datum']}}</p>
                {!! $podaci['vesti'][$podaci['active']]['full-txt'] !!}
            </div>
            <div class="col-xs-4">
                <h3>{{trans('tekstovi.vesti-sve')}}</h3>
                <ul class="list-group wpm_list">
                    @foreach($podaci['vesti'] as $vest)
                        <a href="/vest/{{$vest['slug']}}"><li class="list-group-item">{{$vest['naslov']}} <small class="float-right">{{$vest['datum']}}</small></li></a>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
@endsection