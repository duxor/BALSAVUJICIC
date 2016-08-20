<!DOCTYPE html>
<html lang="rs">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Balsa Vujicic - Teniserski trener</title>

    {{--STILOVI::SATRT--}}
    <link rel="stylesheet" type="text/css" href="/css/css.css" />
    <link rel="stylesheet" type="text/css" href="/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="/style.css" />
    {{--<link rel="stylesheet" type="text/css" href="/responsive.css" />--}}
    <link rel="stylesheet" type="text/css" href="/css/set2.css" />
    <link href="https://fonts.googleapis.com/css?family=Trocchi" rel="stylesheet">
    <style type="text/css">
        .style1 {color: #000000}.limg{width:auto;float:left;padding:5px}.float-right{float: right}</style>
    {{--stilovi::end--}}
</head>

<body>
<div id="{{trans('tekstovi.nav-pocetna')}}"></div>

{{--MENI::START--}}
<header class="wpm_header">
    <div class="container">
        <div class="row">
            <div class="col-sm-4" data-uk-scrollspy="{cls:'uk-animation-slide-left', repeat: true}">
                <a href="/">
                    <img src="/images/logo/logo.png" alt="Balša Vujičić - Logo" width="414" height="113" class="wpm_mobile_center">
                </a>
            </div>
            <div class="col-sm-8">
                <nav class="navbar navbar-default wpm_navber">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mnav">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="mnav">
                        <ul class="nav navbar-nav navbar-right wpm_menu">
                            <li><a href="{{Request::segment(1) == ''?'#'.trans('tekstovi.nav-pocetna'):'/'}}">{{trans('tekstovi.nav-pocetna-txt')}}</a></li>
                            <li><a href="/#{{trans('tekstovi.nav-omeni')}}">{{trans('tekstovi.nav-omeni-txt')}}</a></li>
                            <li><a href="/#{{trans('tekstovi.nav-program')}}">{{trans('tekstovi.nav-program-txt')}}</a></li>
                            <li><a href="/#{{trans('tekstovi.nav-galerija')}}">{{trans('tekstovi.nav-galerija-txt')}}</a> </li>
                            <li><a href="/#{{trans('tekstovi.nav-vesti')}}">{{trans('tekstovi.nav-vesti-txt')}}</a></li>
                            <li><a href="/#{{trans('tekstovi.nav-kontakt')}}">{{trans('tekstovi.nav-kontakt-txt')}}</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="/images/lang/{{$l=\Illuminate\Support\Facades\Session::has('applocale')?\Illuminate\Support\Facades\Session::get('applocale'):'rs'}}.gif" alt="Active Language image" title="Active Language image" width="18" height="12" class="limg"> {{strtoupper($l)}} <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="/lang/rs"><img src="/images/lang/rs.gif" width="18" height="12" alt="Srpska zastava" title="Srpska zastava" class="limg"> Srpski</a></li>
                                    <li><a href="/lang/en"><img src="/images/lang/en.gif" width="18" height="12" alt="Engleska zastava" title="Engleska zastava" class="limg"> English</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
{{--meni::end--}}

@yield('body')

<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <p><strong>{{trans('tekstovi.nav-kontakt-txt')}}</strong><br><br>
                TK Đukić<br>
                <p>Partizanske avijacije 1<br>
                <p>Bežanijska kosa<br>
                <p>11000 {{trans('tekstovi.beograd')}}, {{trans('tekstovi.srbija')}}<br>
                <p>{{trans('tekstovi.kontakt-telefon')}}: +381 63 839 86 65<br>
                <p>Email: <a href="mailto:contact@balsavujicic.com">contact@balsavujicic.com</a><br>
            </div>
            <div class="col-sm-5">
                <a href="/foto" title="">
                    <div class="wpm_img_grup">
                        <img src="/images/work/1.jpg" width="50" height="50" alt="Teniserski trener Balša Vijičić - Img">
                        <img src="/images/work/2.jpg" width="50" height="50" alt="Teniserski trener Balša Vijičić - Img">
                        <img src="/images/work/3.jpg" width="50" height="50" alt="Teniserski trener Balša Vijičić - Img">
                        <img src="/images/work/4.jpg" width="50" height="50" alt="Teniserski trener Balša Vijičić - Img">
                        <img src="/images/work/5.jpg" width="50" height="50" alt="Teniserski trener Balša Vijičić - Img">
                        <img src="/images/work/6.jpg" width="50" height="50" alt="Teniserski trener Balša Vijičić - Img">
                        <img src="/images/work/7.jpg" width="50" height="50" alt="Teniserski trener Balša Vijičić - Img">
                        <img src="/images/work/8.jpg" width="50" height="50" alt="Teniserski trener Balša Vijičić - Img">
                        <img src="/images/work/9.jpg" width="50" height="50" alt="Teniserski trener Balša Vijičić - Img">
                        <img src="/images/work/10.jpg" width="50" height="50" alt="Teniserski trener Balša Vijičić - Img">
                    </div>
                </a>
                <br clear="all"><br>
                <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FBalsa-Vujicic%2F248654798522767&width=176&layout=button_count&action=like&size=small&show_faces=true&share=true&height=46&appId=309465932735687" width="176" height="46" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
            </div>
            <div class="col-sm-3 text-right">
                <ul>
                    <li><a href="/">{{trans('tekstovi.nav-pocetna-txt')}}</a></li>
                    <li><a href="/{{trans('tekstovi.nav-omeni')}}">{{trans('tekstovi.nav-omeni-txt')}}</a></li>
                    <li><a href="/{{trans('tekstovi.nav-program')}}">{{trans('tekstovi.nav-program-txt')}}</a></li>
                    <li><a href="/foto">{{trans('tekstovi.nav-galerija-txt')}}</a> </li>
                    <li><a href="/#{{trans('tekstovi.nav-vesti')}}">{{trans('tekstovi.nav-vesti-txt')}}</a></li>
                    <li><a href="/#{{trans('tekstovi.nav-kontakt')}}">{{trans('tekstovi.nav-kontakt-txt')}}</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<section class="wpm_frooter_ending">
    <div class="container">
        <div class="col-sm-12 text-center wpm_mobile_center">
            <p>Copyright &copy; {{date('Y')}} <strong>balsavujicic.com</strong></p>
            <p>
                <small>
                    Design & Develop By <a href="mailto:#" target="_blank" class="copylink">rudi</a> &<a href="http://dusanperisic.com" target="_blank" class="copylink">duXor</a>
                </small>
            </p>
        </div>
    </div>
</section>

<script src="/js/jquery.min.js"></script>
<script src="/js/Main-script.min.js"></script>
@yield('end-script')
</body>
</html>