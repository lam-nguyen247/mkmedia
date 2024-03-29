<!DOCTYPE html>
<html data-theme="{{ session('theme', $config->theme ?? '') }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="google-site-verification" content="GxpVzZUSABfW7adX1AkgLcuts3754LLq_Smstart-hg" />
    <meta property="og:image" content="@yield('cover', '/images/home/mkmedia-logo.png')" />
    <meta property="og:image:alt" content="@yield('cover', '/images/home/mkmedia-logo.png')" />
    <meta name="twitter:image" content="@yield('cover', '/images/home/mkmedia-logo.png')" />
    <meta property="og:url" content=" {{ Request::url() }} " />
    <meta property="og:type" content=" {{ Request::url() }} " />
    @isset($seo)
        <title>{{ $seo->title }}</title>
        <meta name="description" content="{{ $seo->description }}">
        <meta property="og:title" content="{{ $seo->description }}">
        <meta property="og:description" content="{{ $seo->description }}">
        <meta name="robots" content="{{ $seo->robots }}" />
    @else
        <title>@yield('title') </title>
        <meta property="og:title" content="@yield('title')">
        <meta property="og:description" content="@yield('description')">
        <meta name="description" content="@yield('description') ">
        @endif
        @cms
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="/images/admin/favicon.png">
        <link rel="canonical" href="{{ request()->url() }}">
        <!-- Custom CSS -->
        <link href="/css/home/app.min.css" rel="stylesheet">
        <!-- Google Tag Manager -->

        <!-- End Google Tag Manager -->
        @yield('css')
    </head>

    <body id="body-site">
        <!-- Google Tag Manager (noscript) -->

        <!-- End Google Tag Manager (noscript) -->
        <svg aria-hidden="true" class="common-svg" version="1.1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink">
            <defs>
                <symbol id="icon-quotes-left" viewbox="0 0 32 32">
                    <path
                        d="M7.031 14c3.866 0 7 3.134 7 7s-3.134 7-7 7-7-3.134-7-7l-0.031-1c0-7.732 6.268-14 14-14v4c-2.671 0-5.182 1.040-7.071 2.929-0.364 0.364-0.695 0.751-0.995 1.157 0.357-0.056 0.724-0.086 1.097-0.086zM25.031 14c3.866 0 7 3.134 7 7s-3.134 7-7 7-7-3.134-7-7l-0.031-1c0-7.732 6.268-14 14-14v4c-2.671 0-5.182 1.040-7.071 2.929-0.364 0.364-0.695 0.751-0.995 1.157 0.358-0.056 0.724-0.086 1.097-0.086z">
                    </path>
                </symbol>
                <symbol id="icon-send" viewbox="0 0 18 18">
                    <path
                        d="M15.9488 0.738308L1.26884 6.87831C0.43884 7.22831 0.45884 8.40831 1.28884 8.72831L6.62884 10.7983C6.88884 10.8983 7.09884 11.1083 7.19884 11.3683L9.25884 16.6983C9.57884 17.5383 10.7688 17.5583 11.1188 16.7283L17.2688 2.05831C17.5988 1.22831 16.7688 0.398308 15.9488 0.738308Z">
                    </path>
                </symbol>
                <symbol id="icon-plus" viewbox="0 0 24 24">
                    <path xmlns="http://www.w3.org/2000/svg"
                        d="M12 3C11.45 3 11 3.45 11 4V11H4C3.45 11 3 11.45 3 12C3 12.55 3.45 13 4 13H11V20C11 20.55 11.45 21 12 21C12.55 21 13 20.55 13 20V13H20C20.55 13 21 12.55 21 12C21 11.45 20.55 11 20 11H13V4C13 3.45 12.55 3 12 3Z">
                    </path>
                </symbol>
                <symbol id="icon-expand-more" viewbox="0 0 24 14">
                    <path xmlns="http://www.w3.org/2000/svg"
                        d="M4.25078 13.1479L12.0108 5.38794L19.7708 13.1479C20.1444 13.5224 20.6517 13.7329 21.1808 13.7329C21.7098 13.7329 22.2171 13.5224 22.5908 13.1479C23.3708 12.3679 23.3708 11.1079 22.5908 10.3279L13.4108 1.14794C12.6308 0.367938 11.3708 0.367938 10.5908 1.14794L1.41078 10.3279C0.630781 11.1079 0.630781 12.3679 1.41078 13.1479C2.19078 13.9079 3.47078 13.9279 4.25078 13.1479Z">
                    </path>
                </symbol>
                <symbol id="icon-facebook" viewbox="0 0 17 17">
                    <path xmlns="http://www.w3.org/2000/svg"
                        d="M26.0998 12.4367C26.0998 11.089 24.9107 9.8999 23.563 9.8999H13.3366C11.9889 9.8999 10.7998 11.089 10.7998 12.4367V22.6631C10.7998 24.0108 11.9889 25.1999 13.3366 25.1999H18.4894V19.4129H16.5869V16.8761H18.4894V15.8455C18.4894 14.1015 19.7578 12.5952 21.3433 12.5952H23.4045V15.132H21.3433C21.1055 15.132 20.8677 15.3698 20.8677 15.8455V16.8761H23.4045V19.4129H20.8677V25.1999H23.563C24.9107 25.1999 26.0998 24.0108 26.0998 22.6631V12.4367Z">
                    </path>
                </symbol>
                <symbol id="icon-arrow" viewbox="0 0 16 16">
                    <path xmlns="http://www.w3.org/2000/svg"
                        d="M1.20898 9.0002H12.379L7.49898 13.8802C7.10898 14.2702 7.10898 14.9102 7.49898 15.3002C7.88898 15.6902 8.51898 15.6902 8.90898 15.3002L15.499 8.7102C15.889 8.3202 15.889 7.6902 15.499 7.3002L8.91898 0.7002C8.73215 0.512948 8.4785 0.407715 8.21398 0.407715C7.94947 0.407715 7.69582 0.512948 7.50898 0.7002C7.11898 1.0902 7.11898 1.7202 7.50898 2.1102L12.379 7.0002H1.20898C0.658984 7.0002 0.208984 7.4502 0.208984 8.0002C0.208984 8.5502 0.658984 9.0002 1.20898 9.0002Z">
                    </path>
                </symbol>
                <symbol id="icon-close" viewbox="0 0 10 10">
                    <path xmlns="http://www.w3.org/2000/svg"
                        d="M9.72504 0.282528C9.58492 0.142089 9.39468 0.0631641 9.19629 0.0631641C8.9979 0.0631641 8.80766 0.142089 8.66754 0.282528L5.00004 3.94253L1.33254 0.275028C1.19242 0.134589 1.00218 0.0556641 0.803789 0.0556641C0.605401 0.0556641 0.415163 0.134589 0.275039 0.275028C-0.0174609 0.567528 -0.0174609 1.04003 0.275039 1.33253L3.94254 5.00003L0.275039 8.66753C-0.0174609 8.96003 -0.0174609 9.43253 0.275039 9.72503C0.567539 10.0175 1.04004 10.0175 1.33254 9.72503L5.00004 6.05753L8.66754 9.72503C8.96004 10.0175 9.43254 10.0175 9.72504 9.72503C10.0175 9.43253 10.0175 8.96003 9.72504 8.66753L6.05754 5.00003L9.72504 1.33253C10.01 1.04753 10.01 0.567528 9.72504 0.282528Z">
                    </path>
                </symbol>
                <symbol id="icon-chevron-up" viewbox="0 0 28 28">
                    <path
                        d="M26.297 20.797l-2.594 2.578c-0.391 0.391-1.016 0.391-1.406 0l-8.297-8.297-8.297 8.297c-0.391 0.391-1.016 0.391-1.406 0l-2.594-2.578c-0.391-0.391-0.391-1.031 0-1.422l11.594-11.578c0.391-0.391 1.016-0.391 1.406 0l11.594 11.578c0.391 0.391 0.391 1.031 0 1.422z">
                    </path>
                </symbol>
            </defs>
        </svg>
        <div class="navigation">
            <input type="checkbox" class="navigation__checkbox" id="navi-toggle">

            {{-- icon --}}
            {{-- <label id="navigation__button" for="navi-toggle" class="navigation__button">
        <span class="navigation__icon"></span>
    </label>
    <div id="navigation__background" class="navigation__background">
    </div> --}}
            <div id="navigation__title" class="navigation__title menu">
                <nav class="site-nav">
                    <ul class="my-menu">
                        <li class="my-item">
                            <a href="/mua-group-facebook">Danh sách Group</a>
                        </li class="my-item">
                        {{-- <li class="my-item"> <a href="/@lang('news')" class="navigation__link" >@lang('News')</a> </li>
                <li class="my-item"> <a href="/@lang('contact')" class="navigation__link">@lang('Contact')</a></li>
                <li class="my-item"><a href="#"> <a href="/thong-tin-thanh-toan" class="navigation__link">Thông tin thanh toán</a></a></li> --}}

                    </ul>
                </nav>
            </div>
            {{-- <h3 id="navigation__title" class="navigation__title" style="color:white !important" data-cms="{{app()->getLocale()}}-layouts-app-23">LIÊN HỆ HOTLINE:  0988.50.8769 </h3> --}}

            {{-- language --}}
            <div class="navigation__language language-picker js-language-picker"
                data-trigger-class="btn btn--subtle js-tab-focus">
                <button class="language-picker__button" onclick="toggleDropdown()">
                    <img class="img-fluid" @src="/images/home/flag_{{ app()->getLocale() }}.png" alt="image">
                    <em>{{ app()->getLocale() == 'en' ? __('English') : __('Vietnamese') }}</em>
                    <svg viewBox="0 0 16 16" class="icon">
                        <polygon points="3,5 8,11 13,5 "></polygon>
                    </svg>
                </button>
                <div id="language-content" class="dropdown-content">
                    <ul class="language-picker__list">
                        <li>
                            <a href="/en" title="@lang('English')">
                                <img class="img-fluid" @src="/images/home/flag_en.png" alt="@lang('English')">
                                <span>@lang('English')</span>
                            </a>
                        </li>
                        <li>
                            <a href="/vi" title="@lang('Vietnamese')">
                                <img class="img-fluid" @src="/images/home/flag_vi.png" alt="@lang('Vietnamese')">
                                <span>@lang('Vietnamese')</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <nav class="navigation__nav">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="navigation__flex">
                                <div class="navigation__content">
                                    <h4 class="navigation__lable" data-cms="{{ app()->getLocale() }}-layouts-app-47">Menu
                                    </h4>
                                    <ul class="navigation__list" id="navi-menu">
                                        <li class="navigation__item">
                                            <a href="/mua-group-facebook" class="navigation__link">►Danh sách Group</a>
                                        </li>
                                        <li class="navigation__item">
                                            <a href="/@lang('news')" class="navigation__link">►@lang('News')</a>
                                        </li>
                                        <li class="navigation__item">
                                            <a href="/@lang('contact')" class="navigation__link">►@lang('Contact')</a>
                                        </li>
                                        <li class="navigation__item">
                                            <a href="/thong-tin-thanh-toan" class="navigation__link">►Thông tin thanh
                                                toán</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="navigation__flex">
                                <div class="navigation__content">
                                    <div class="navigation__image">
                                        <img id="menu-image" class="img-fluid" @src="/images/home/menu-about.png"
                                            alt="Images" data-cms="{{ app()->getLocale() }}-layouts-app-65">
                                    </div>
                                    <div class="navigation__info">
                                        <ul class="navigation-list">
                                            <li><span
                                                    data-cms="{{ app()->getLocale() }}-layouts-app-731">HotLine:</span><i
                                                    class="fa fa-phone" aria-hidden="true"></i> <a
                                                    href="tel:{{ $config->phone ?? '' }}" title="Số điện thoại"
                                                    data-cms="{{ app()->getLocale() }}-layouts-app-70">0988.50.8769</a>
                                            </li>
                                            <li><span data-cms="{{ app()->getLocale() }}-layouts-app-732">Email:</span> <a
                                                    href="mailto:{{ $config->email ?? '' }}" title="Email"
                                                    data-cms="{{ app()->getLocale() }}-layouts-app-74">adgroup.vnn@gmail.com</a>
                                            </li>
                                            <li><span data-cms="{{ app()->getLocale() }}-layouts-app-733">Zalo:</span><i
                                                    class="fa fa-map-marker" aria-hidden="true"></i> <span
                                                    data-cms="{{ app()->getLocale() }}-layouts-app-77">0965590009</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <header id="header" class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
                        <div class="header__logo-box d-flex align-items-center">
                            <a href="/" title="logo">
                                <img style="padding:10px; border-radius: 50%;" class="img-fluid"
                                    @src="/images/home/mkmedia-logo.png" alt="{{ config('app.name') }}">
                            </a>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="header__nav"></div>
                    </div>
                </div>
            </div>
        </header>
        @yield('content')
        <footer class="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-4 col-lg-6">
                            <div class="footer-content">
                                <h1 style="font-size: 2rem" data-cms="{{ app()->getLocale() }}-layouts-app-footer-1"
                                    class="title">Thông tin công ty</h1>
                                <ul class="footer-list">
                                    <li><span data-cms="{{ app()->getLocale() }}-layouts-app-footer-2">CÔNG TY CỔ PHẦN
                                            CÔNG NGHỆ TRUYỀN THÔNG MK MEDIA</span></li>
                                    <li><span data-cms="{{ app()->getLocale() }}-layouts-app-footer-3">Địa chỉ: Số 15A Ngõ
                                            21/13 Lĩnh Nam - Hoàng Mai - Hà Nội</span></li>
                                    <li><span data-cms="{{ app()->getLocale() }}-layouts-app-footer-4">Mã số thuế:
                                            0109379379</span> </li>
                                    <li><a href="tel:+840965590009" title="Số điện thoại">Hotline:
                                            {{ $config->phone ?? '' }}</a></li>
                                    <li><span>Email:</span> <a href="mailto:{{ $config->email ?? '' }}"
                                            title="Email">{{ $config->email ?? '' }}</a></li>
                                    <li><span>Zalo:</span> <a href="https://zalo.me/{{ $config->zalo ?? '' }}"
                                            title="Zalo">{{ $config->zalo ?? '' }}</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-3">
                            <div class="footer-content">
                                <h3 class="title" data-cms="{{ app()->getLocale() }}-layouts-app-footer-9">Facebook</h3>
                                <ul class="footer-list">
                                    <li class="sub-item">
                                        <a href="/mua-group-facebook"
                                            data-cms="{{ app()->getLocale() }}-layouts-app-footer-5">Bán Group</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-8 col-md-3 col-lg-3">
                            <div class="footer-content">
                                <h3 class="title" data-cms="{{ app()->getLocale() }}-layouts-app-footer-10">
                                    @lang('Follow us')</h3>
                                <div class="fb-page" data-href="https://www.facebook.com/mkmedia.shop.vn/" data-tabs=""
                                    data-width="" data-height="" data-small-header="false"
                                    data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                                    <blockquote cite="https://www.facebook.com/mkmedia.shop.vn/"
                                        class="fb-xfbml-parse-ignore"><a
                                            href="https://www.facebook.com/mkmedia.shop.vn/">Mua Bán Group Fanpage - MK
                                            Media</a></blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <p>@lang('Design by') Mkmedia</p>
            </div>
        </footer>
        <a id="scrolltop" class="scroll-top" onclick="document.documentElement.scrollIntoView({ behavior: 'smooth' });">
            <svg class="icon icon-chevron-up">
                <use xlink:href="#icon-chevron-up"></use>
            </svg>
        </a>
        <div class="overlay" id="modal-overlay"></div>
        <div class="modal" id="modal-form">
            <button class="modal-close-btn" id="close-btn">
                <svg class="icon">
                    <use xlink:href="#icon-close"></use>
                </svg>
            </button>
        </div>
        <div class="box-contact">
            <div class="hotline-phone" style="display: none;">
                <div class="ring">
                    <div class="ring-circle"></div>
                    <div class="ring-circle-fill"></div>
                    <div class="ring-img-circle">
                        <a href="tel:+0965590009" class="btn-img">
                            <img src="/images/home/phone.png" width="38">
                        </a>
                    </div>
                </div>
            </div>
            {{-- <div class="messenger">
                <div class="ring">
                    <div class="">
                        <a href="https://telegram.me/mrkieng09" class="btn-img" target="_blank">
                            <img src="/images/home/telegram.png" width="38">
                        </a>
                    </div>
                </div>
                <div class="bar">
                    <a href="https://telegram.me/mrkieng09" target="_blank">
                        <span class="text-hotline">Tele</span>
                    </a>
                </div>
            </div> --}}

            <div class="zalo">
                <div class="ring">
                    <div class="">
                        <a href="/zalo" class="btn-img" target="_blank">
                            <img src="/images/home/communication.png" width="38">
                        </a>
                    </div>
                </div>
                <div class="bar">
                    <a href="/zalo" target="_blank">
                        <span class="text-hotline">Zalo</span>
                    </a>
                </div>
            </div>
            <div id="fb-root"></div>
        </div>

        <script src="/js/home/jquery-3.6.0.min.js"></script>
        <script async defer crossorigin="anonymous" type="text/javascript" src="/js/home/app.min.js"></script>

        <script async defer crossorigin="anonymous"
            src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v13.0&appId=2174410252844536&autoLogAppEvents=1"
            nonce="DUFHJS7Q"></script>

        @yield('js')
    </body>

    </html>
