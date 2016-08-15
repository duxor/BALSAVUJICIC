@extends('master')
@section('body')

{{--SLAJDER::START--}}
<section class="wpm_slider_area">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">

            <div class="item active">
                <img src="/images/slider/01.jpg" alt="nase nade">
                <div class="carousel-caption">
                    <h1>Tenisrke i teniseri</h1><br>

                    <a href="#"><button class="btn btn-default hvr-pulse-shrink" type="submit">Get Started</button></a>
                    <a href="#"><button class="btn btn-default hvr-pulse-shrink" type="submit">Learn More</button></a>
                </div>
            </div>
            <div class="item">
                <img src="/images/slider/02.jpg" alt="...">
                <div class="carousel-caption">
                    <h1>Budući teniski šampioni</h1><br>

                    <a href="#"><button class="btn btn-default hvr-pulse-shrink" type="submit">Get Started</button></a>
                    <a href="#"><button class="btn btn-default hvr-pulse-shrink" type="submit">Learn More</button></a>
                </div>
            </div>

            <div class="item">
                <img src="/images/slider/03.jpg" alt="...">

                <div class="carousel-caption">
                    <h1>Budući teniski šampioni</h1><br>

                    <a href="#"><button class="btn btn-default hvr-pulse-shrink" type="submit">Get Started</button></a>
                    <a href="#"><button class="btn btn-default hvr-pulse-shrink" type="submit">Learn More</button></a>
                </div>
            </div>

            <div class="item">

                <img src="/images/slider/04.jpg" alt="...">

                <div class="carousel-caption">
                    <h1>Moja malenkost</h1><br>


                    <a href="#"><button class="btn btn-default hvr-pulse-shrink" type="submit">Get Started</button></a>
                    <a href="#"><button class="btn btn-default hvr-pulse-shrink" type="submit">Learn More</button></a>
                </div>
            </div>

            <div class="item">

                <img src="/images/slider/05.jpg" alt="...">

                <div class="carousel-caption">
                    <h1>Lorem ipsum dolor sit amet</h1><br>


                    <a href="#"><button class="btn btn-default hvr-pulse-shrink" type="submit">Get Started</button></a>
                    <a href="#"><button class="btn btn-default hvr-pulse-shrink" type="submit">Learn More</button></a>
                </div>
            </div>

        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

</section>
{{--slajder::end--}}

{{--O-MENI::START--}}
<section class="wpm_about_area" id="{{trans('tekstovi.nav-omeni')}}">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 data-uk-scrollspy="{cls:'uk-animation-fade',}">{{trans('tekstovi.nav-omeni-txt')}}</h2>
                <h5 class="sub_title">{!! trans('tekstovi.omeni-opis') !!}</h5>
                <div class="wpm_border"> <div class="wpm_inside_border"> </div>  </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="clearfix"></div>
                {!! trans('tekstovi.omeni-opis-lijevo') !!}
                <a href="/o-meni" class="btn btn-primary">{{trans('tekstovi.vise')}}</a>
            </div>
            <div class="col-sm-6 wpm_ing_col">
                <img src="/images/pozadina.jpg" width="1900" height="1330" data-uk-scrollspy="{cls:'uk-animation-slide-right', }">
            </div>
        </div>
    </div>
</section>
<section class="wpm_order_area">
    <div class="wpm_opacity">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 wpm_mobile_center">
                    <h3>{{trans('tekstovi.deo-tima')}}</h3>
                    <a class="btn btn-default" href="#{{trans('tekstovi.nav-kontakt')}}">{{trans('tekstovi.pridruzi-se')}}</a>
                    <p>{{trans('tekstovi.pridruzi-se-opis')}}</p>
                </div>
            </div>
        </div>
    </div>
</section>
{{--o-meni::end--}}

{{--PROGRAM::START--}}
<section class="wpm_service_area" id="{{trans('tekstovi.nav-program')}}">
    <div class="wpm_opacity">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1>{{trans('tekstovi.program-naslov')}}</h1>
                    <p>{{trans('tekstovi.program-opis')}}</p>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-3">
                    <div class="wpm_service_box bg0">
                        <i data-uk-scrollspy="{cls:'uk-animation-scale-up', repeat: true}">
                            <svg width="100%" height="70%" viewBox="0 0 70 70"
                                 xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink">
                                <image xlink:href="/images/tennis-ball.svg" x="0" y="0" height="70" width="70" />
                            </svg>
                        </i>
                        <h2>{{trans('tekstovi.program-plan-naslov')}}</h2>
                        <div class="wpm_border"></div>
                        <p>{{trans('tekstovi.program-plan-opis')}}</p>
                        <a href="/program/{{trans('tekstovi.program-plan-slug')}}" class="btn btn-primary">{{trans('tekstovi.vise')}}</a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="wpm_service_box bg1">
                        <i data-uk-scrollspy="{cls:'uk-animation-scale-up', repeat: true}">
                            <svg width="100%" height="70%" viewBox="0 0 70 70"
                                 xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink">
                                <image xlink:href="/images/tennis-ball.svg" x="0" y="0" height="70" width="70" />
                            </svg>
                        </i>
                        <h{{ $h=Session::has('applocale')?(Session::get('applocale')=='en'?'3':'2'):2 }}>{{trans('tekstovi.program-takmicari-naslov')}}</h{{ $h }}>
                        <div class="wpm_border"></div>
                        <p>{{trans('tekstovi.program-takmicari-opis')}}</p>
                        <a href="/program/{{trans('tekstovi.program-takmicari-slug')}}" class="btn btn-primary">{{trans('tekstovi.vise')}}</a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="wpm_service_box bg2">
                        <i data-uk-scrollspy="{cls:'uk-animation-scale-up', repeat: true}">
                            <svg width="100%" height="70%" viewBox="0 0 70 70"
                                 xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink">
                                <image xlink:href="/images/tennis-ball.svg" x="0" y="0" height="70" width="70" />
                            </svg>
                        </i>
                        <h2>{{trans('tekstovi.program-amateri-naslov')}}</h2>
                        <div class="wpm_border"></div>
                        <p>{{trans('tekstovi.program-amateri-opis')}}</p>
                        <a href="/program/{{trans('tekstovi.program-amateri-slug')}}" class="btn btn-primary">{{trans('tekstovi.vise')}}</a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="wpm_service_box bg3">
                        <i data-uk-scrollspy="{cls:'uk-animation-scale-up', repeat: true}">
                            <svg width="100%" height="70%" viewBox="0 0 70 70"
                                 xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink">
                                <image xlink:href="/images/tennis-ball.svg" x="0" y="0" height="70" width="70" />
                            </svg>
                        </i>
                        <h2>{{trans('tekstovi.program-sparing-naslov')}}</h2>
                        <div class="wpm_border"></div>
                        <p>{{trans('tekstovi.program-sparing-opis')}}</p>
                        <a href="/program/{{trans('tekstovi.program-sparing-slug')}}" class="btn btn-primary">{{trans('tekstovi.vise')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{--program::end--}}

{{--GALERIJA::START--}}
<section class="wpm_portfolio_area" id="{{trans('tekstovi.nav-galerija')}}">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2>{{trans('tekstovi.nav-galerija-txt')}}</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="wpm_mixitup_menu">
                    <a href="/{{strtolower(trans('tekstovi.foto'))}}/1" title="{{trans('tekstovi.foto')}} {{trans('tekstovi.nav-galerija')}} 1">{{trans('tekstovi.foto')}} {{trans('tekstovi.nav-galerija')}} 1</a>
                    <a href="/{{strtolower(trans('tekstovi.foto'))}}/2" title="{{trans('tekstovi.foto')}} {{trans('tekstovi.nav-galerija')}} 2">{{trans('tekstovi.foto')}} {{trans('tekstovi.nav-galerija')}} 2</a>
                    <a href="/{{strtolower(trans('tekstovi.foto'))}}/3" title="{{trans('tekstovi.foto')}} {{trans('tekstovi.nav-galerija')}} 3">{{trans('tekstovi.foto')}} {{trans('tekstovi.nav-galerija')}} 3</a>

                    <a href="/{{strtolower(trans('tekstovi.video'))}}" title="{{trans('tekstovi.video')}}">{{trans('tekstovi.video')}}</a>
                </div>
                <div id="Container">
                    <div class="mix all" data-my-order="1">
                        <img src="/images/work/01.jpg">
                    </div>
                    <div class="mix webdesign" data-my-order="2">
                        <img src="/images/work/02.jpg">
                    </div>
                    <div class="mix webdesign" data-my-order="2">
                        <img src="/images/work/03.jpg">
                    </div>
                    <div class="mix webdesign" data-my-order="2">
                        <img src="/images/work/04.jpg">
                    </div>
                    <div class="mix php" data-my-order="3">
                        <img src="/images/work/05.jpg">
                    </div>
                    <div class="mix php" data-my-order="3">
                        <img src="/images/work/06.jpg">
                    </div>
                    <div class="mix jquery" data-my-order="4">
                        <img src="/images/work/07.jpg">
                    </div>
                    <div class="mix jquery" data-my-order="4">
                        <img src="/images/work/08.jpg">
                    </div>
                    <div class="mix jquery" data-my-order="4">
                        <img src="/images/work/09.jpg">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div id="Container">
                    <div class="mix all" data-my-order="1">
                        <img src="/images/work/01.jpg">
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div id="Container">
                    <div class="mix all" data-my-order="1">
                        <img src="/images/work/02.jpg">
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div id="Container">
                    <div class="mix all" data-my-order="1">
                        <img src="/images/work/03.jpg">
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div id="Container">
                    <div class="mix all" data-my-order="1">
                        <img src="/images/work/04.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{--galerija::end--}}

{{--VESTI::START--}}
<?php $vesti=\App\Vesti::dajVesti(); ?>
<section class="wpm_blog_area" id="{{trans('tekstovi.nav-vesti')}}">
    <div class="container">
        <div class="row">
            <h2 data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true}">{{trans('tekstovi.nav-vesti-txt')}}</h2>
            <h5 class="sub_title">{{trans('tekstovi.vesti-opis')}}</h5>
            <div class="wpm_border"><div class="wpm_inside_border"></div></div>
            <div class="col-sm-8" data-uk-scrollspy="{cls:'uk-animation-slide-left',}">
                <img src="/images/slider/01.jpg" alt="{{$vesti['vesti'][$vesti['active']]['naslov']}}">
                <div class="blog_link_area">
                    <h3><a href="/{{trans('tekstovi.nav-vesti')}}/{{$vesti['vesti'][$vesti['active']]['slug']}}">{{$vesti['vesti'][$vesti['active']]['naslov']}}</a></h3>
                    <a href="#" class="date">{{$vesti['vesti'][$vesti['active']]['datum']}}</a>
                    {{--<span> In:<a href="#">Web tutorials</a></span>
                    <span> Note:<a href="#">22 comment</a></span>--}}
                </div>
                <p class="para">{{$vesti['vesti'][$vesti['active']]['part-txt']}} <a href="/{{trans('tekstovi.nav-vesti')}}/{{$vesti['vesti'][$vesti['active']]['slug']}}">{{trans('tekstovi.vise')}}...</a></p>
            </div>
            <div class="col-sm-4" data-uk-scrollspy="{cls:'uk-animation-slide-right',}">
                <h3>{{trans('tekstovi.vesti-sve')}}</h3>
                <ul class="list-group wpm_list">
                    @foreach($vesti['vesti'] as $vest)
                        <a href="/{{trans('tekstovi.nav-vesti')}}/{{$vest['slug']}}"><li class="list-group-item">{{$vest['naslov']}} <small class="float-right">{{$vest['datum']}}</small></li></a>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>
{{--vesti::end--}}

{{--KONTAKT::START--}}
<section class="wpm_contact_area" id="{{trans('tekstovi.nav-kontakt')}}">
    <div class="container">
        <div class="row">
            <div class="col-sm-6" data-uk-scrollspy="{cls:'uk-animation-slide-left', repeat: true}">
                <div class="wpm_address">
                    <h3>{{trans('tekstovi.kontakt-lokacija')}}</h3>
                    <p>TK Đukić</p>
                    <p>Partizanske avijacije 1</p>
                    <p>Bežanijska kosa</p>
                    <p>11000 Beogra , Srbija</p>
                    <p>{{trans('tekstovi.kontakt-telefon')}}: +381 63 839 86 65</p>
                    <p>Email: <a href="mailto:contact@balsavujicic.com" class="style1">contact@balsavujicic.com</a></p>
                </div>
                <div class="embed-responsive embed-responsive-16by9 wpm_maph ">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2332.394079310231!2d20.387583650521634!3d44.82408748384491!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a658f65979265%3A0xd710f74cf7e0d8ad!2sPartizanske+avijacije+1%2C+Beograd!5e1!3m2!1sen!2srs!4v1470350302674" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-sm-6" data-uk-scrollspy="{cls:'uk-animation-slide-right', repeat: true}">
                <h3>{{trans('tekstovi.kontakt-forma')}}</h3>
                {!! Form::open(['url'=>'/mail']) !!}
                    <span class="input input--nao">
                        <input name="ime" class="input__field input__field--nao" type="text" id="input-1" />
                        <label class="input__label input__label--nao" for="input-1">
                            <span class="input__label-content input__label-content--nao">{{trans('tekstovi.kontakt-ime')}}</span>
                        </label>
                        <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                            <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                        </svg>
				    </span>
                    <span class="input input--nao">
                        <input name="email" class="input__field input__field--nao" type="text" id="input-2" />
                        <label class="input__label input__label--nao" for="input-2">
                            <span class="input__label-content input__label-content--nao">Email</span>
                        </label>
                        <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                            <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                        </svg>
				    </span>
                    <span class="input input--nao">
                        <input name="naslov" class="input__field input__field--nao" type="text" id="input-3" />
                        <label class="input__label input__label--nao" for="input-3">
                            <span class="input__label-content input__label-content--nao">{{trans('tekstovi.kontakt-naslov')}}</span>
                        </label>
                        <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                            <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                        </svg>
				    </span>
                    <span class="input input--nao">
                        <textarea name="poruka" class="input__field input__field--nao" cols="40" rows="8" id="input-4"></textarea>
                        <label class="input__label input__label--nao" for="input-4">
                            <span class="input__label-content input__label-content--nao">{{trans('tekstovi.kontakt-poruka')}}</span>
                        </label>
                        <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                            <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                        </svg>
				    </span>
                    <input class="wpm_send_btn" type="submit" value="{{trans('tekstovi.kontakt-posalji')}}">
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</section>
{{--kontakt::end--}}

@endsection