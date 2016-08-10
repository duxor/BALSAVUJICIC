@extends('master')
@section('body')
    <section class="wpm_about_area">
        <div class="container">
            <div class="col-sm-6">
                {!! $podaci['txt'] !!}
            </div>
            <div class="col-sm-6">
                @if($podaci['img'])
                    @foreach($podaci['img'] as $img)
                        <img src="{{$img}}" alt="Balša Vujičić - img">
                    @endforeach
                @endif
            </div>
        </div>
    </section>
@endsection