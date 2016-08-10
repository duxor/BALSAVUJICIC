<!DOCTYPE html>
<html lang="rs">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Balsa Vujicic - Teniserski trener</title>

    {{--STILOVI::SATRT--}}
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/css/animation.css" />
    <link rel="stylesheet" type="text/css" href="/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="/style.css" />
    <link rel="stylesheet" type="text/css" href="/responsive.css" />
    <link rel="stylesheet" type="text/css" href="/css/set2.css" />
    <style type="text/css">.style1 {color: #000000}.limg{width:auto;float:left;padding:5px}.float-right{float: right}</style>
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
            <div class="col-sm-2">
                <h4>KONTAKT</h4>
                <p>+381 63 839 86 65</p>
                <a href="mailto:contact@balsavujicic.com">contact@balsavujicic.com</a><a href="#"></a>        </div>
            <div class="col-sm-2">
                <ul>
                    <li><a href="index.html">POCETNA</a></li>
                    <li><a href="about.html">BALŠA</a></li>
                    <li><a href="service.html">SERVICES</a></li>
                    <li><a href="portfolio.html">GALERIJA</a></li>
                    <li><a href="blog.html">BLOG</a></li>
                </ul>
            </div>
            <div class="col-sm-5">
                <h4>SUBSCRIBE TO OUR NEWSLETTER</h4>
                <form>
                    <div class="input-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your email address">
                        <div class="input-group-addon"><button type="submit" class="btn btn-default">Submit</button></div>
                    </div>
                </form>
                <div class="social_icon">
                    <a href="#"><i class="fa fa-twitter-square"></i></a>
                    <a href="#"><i class="fa fa-facebook-square"></i></a>
                    <a href="#"><i class="fa fa-google-plus-square"></i></a>
                    <a href="#"><i class="fa fa-skype"></i></a>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="wpm_img_grup">
                    <img src="/images/work/01.jpg">
                    <img src="/images/work/02.jpg">
                    <img src="/images/work/03.jpg">
                    <img src="/images/work/04.jpg">
                    <img src="/images/work/05.jpg">
                    <img src="/images/work/06.jpg">
                    <img src="/images/work/07.jpg">
                    <img src="/images/work/08.jpg">
                    <img src="/images/work/09.jpg">
                    <img src="/images/work/03.jpg">
                </div>
            </div>
        </div>
    </div>
</footer>

<section class="wpm_frooter_ending">
    <div class="container">
        <div class="col-sm-12 text-center wpm_mobile_center">
            <p>Copyright &copy; {{date('Y')}} <strong>balsavujicic.com</strong></p>
            <div class="copytext">
                Design & Develop By <a href="mailto:#" target="_blank" class="copylink">rudi</a> &<a href="http://dusanperisic.com" target="_blank" class="copylink">duXor</a>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</section>

<script src="/js/jquery.min.js"></script>
<script src="/js/Main-script.min.js"></script>
@yield('end-script')
</body>
</html>