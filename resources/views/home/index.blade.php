@extends('home.layouts.app')

@section('title', 'mkmedia.info Đơn Vị Mua Bán Chuyển Nhượng Group Uy Tín')
@section('description', 'Bạn đang có nhu cầu mua bán Group chất lượng? mkmedia.info - đơn vị mua bán chuyển nhượng Group uy tín tại Việt Nam sẽ giúp bạn làm điều đó.')
@section('css')

<style>
    .mybox{
        display: inline-block;
        width: 48%;
    }
    .swal2-confirm{
        background: #D4B639 !important;
        border-color: #D4B639 !important;
    }
    .popup-btn {
        padding: 7px 19px;
        border-radius: 2px;
        background-color: #2196F3;
        font-size: 20px;
        border: 1px solid #2196F3;
        display: block;
        min-height: 40px;
        text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.3);
        margin: 10px;
        color: white
    }
    .myimg{
        width: 100px;
        height: 100px;
        border-radius: 6px;
    }
    .swal2-container .swal2-popup{
        min-width: 825px ;
    }
    @media only screen and (max-width: 600px) {
        .popup-btn {
            font-size: 13px;
            min-height: 32px;
        }
        .swal2-container .swal2-popup{
            min-width: 100% ;
        }
        .mybox{
            width: 100%;
        }
        .myimg{
            width: 80px;
            height: 80px;
        }
    }
</style>
@endsection
@section('content')
    {{-- Block hero --}}
    <div class="grid-hero" id="grid-hero">
        <div id="grid-hero-banner">
        </div>
    </div>

    {{-- Block call --}}
    <div class="grid-call">
        <div class="container">
            <div class="box-service-home branding">
                <div class="box-content row">
                    <div class="col-12 col-md-12 " style="text-align: center; padding-bottom:20px;">
                        <div class="video-container" style="position: relative; text-align: right">
                            <img style="width:100%" src="/images/mkmedia-bg-2.png"/>
                            <div class="box-price">
                                <div class="btn-normal" style="margin-top: 10px; display: inline-block;">
                                    <a style="background: #4F4F4F; border-radius: 24px;" href="/@lang('channels')" title="Get to know us">
                                        <span style="color: white !important" class="btn-normal__title" data-cms="{{app()->getLocale()}}-index-330">Xem bảng giá</span>
                                        <svg style="color: white !important" class="icon"><use xlink:href="#icon-arrow"></use></svg>
                                    </a>
                                </div>
                                <div class="click">
                                 <div class="ring-circle"></div>
                                 <div class="ring-circle-fill"></div>
                                 <div class="ring-img-circle">
                                   <a href="/mua-group-facebook" class="btn-img">
                                     <img src="/images/home/click.png" width="50">
                                   </a>
                                 </div>
                               </div>
                            </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    {{-- Block service --}}
    <div class="grid-service servicee">
        <div class="container">
            <div class="box-call">
                <h3 class="title" data-cms="{{app()->getLocale()}}-index-24">Tại sao nên sở hữu một Group Facebook</h3>
                <div class="sapo" style="max-width:740px">
                    <p style="text-align: left" data-cms="{{app()->getLocale()}}-index-26">
                        ► Group Facebook giúp nâng tầm thương hiệu Sản Phẩm, Doanh Nghiệp của bạn.
                        ► Đưa Sản Phẩm của bạn đến với khách hàng một cách tự nhiên mà không tốn phí.
                        ► Group Facebook đem lại doanh thu cho bạn từ những đối tác quảng cáo SP.
                        ► Group Facebook sức mạnh khủng khiếp đến từ cộng đồng!
                    </p>
                    <div class="btn-normal" style="margin-top: 10px;">
                        <a style="background: #4F4F4F; border-radius: 24px;" href="/@lang('channels')" title="Get to know us">
                            <span style="color: white !important" class="btn-normal__title" data-cms="{{app()->getLocale()}}-index-30">Danh Sách Group</span>
                            <svg style="color: white !important" class="icon"><use xlink:href="#icon-arrow"></use></svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    @include('home.includes.consultation')
@endsection

@section('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    Swal.fire({
        width: 'auto',
  title: '<strong>Nhu cầu của bạn?</u></strong>',

  html:
    `<div class='mybox'>
        <div>
            <img class='myimg' src='/images/home/fb_icon_325x325.png'>
        </div>
        <a class='popup-btn' href='https://shopgroup.vn/mua-group-facebook'> Tôi muốn: Mua Group FB</a>
    </div>
    <div class='mybox'>
        <div>
            <img class='myimg' src='/images/home/social-media.png'>
        </div>
        <a class='popup-btn' href='https://m.me/mkmedia.info.vn'> Tôi muốn: Được tư vấn </a>
    </div>
    `,
  showCloseButton: true,
  confirmButtonText:
    '<i class="fa fa-thumbs-up"></i> Hủy',
  confirmButtonAriaLabel: 'Thumbs up, great!',
})
</script>
@endsection
