@extends('home.layouts.app')

@section('title', __('Channels'))
@section('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
    <style>
        .dataTables_length {
            margin-bottom: 15px;
        }

        th,
        td {
            text-align: center !important;
        }

        table,
        td,
        th {
            border: 1px solid #DEDEDE !important;
        }

        #customers_wrapper {
            margin-bottom: 20px !important;
        }

        @media only screen and (max-width: 768px) {
            #box-filter {
                text-align: center !important;
            }
        }
    </style>
@endsection
@section('content')
    <div class="page-wrapper page-contact">
        {{-- Block contact --}}
        <div class="grid-contact" id="grid-hero">
            <div class="container">
                <div class="grid-head" style="text-align: center">
                    <h2 class="title" style="text-align: center" data-cms="{{ app()->getLocale() }}-channel-index-4">Danh
                        sách group!</h2>
                    <div class="sapo">
                        <p style="color: black !important" data-cms="{{ app()->getLocale() }}-channel-index-6">Vui lòng liên
                            hệ với chúng tôi qua email hoặc hotline.</p>
                    </div>
                </div>
                <div class="row" style="background-color:white; padding: 15px">
                    <div style="order: 1 !important;" class="col-12 col-md-12 col-lg-12">
                        <form id="ds" action="/mua-group-facebook" method="GET">
                            @csrf
                            <div class="container">
                                <div class="row" style="margin-bottom: 20px;">
                                    <div class="col-lg-6 col-md-12" style="order: 1 !important">
                                        <div class="row">
                                            <div class="col-12 col-sm-12">
                                                <label style="margin-right:10px;">Giá: </label>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <span style="width: 32px; display: inline-block;"> Từ </span> <input
                                                    style="width: 85%; margin-bottom: 10px; margin-left: 5px;"
                                                    placeholder="từ"
                                                    value="{{ isset($_GET['price_f']) ? $_GET['price_f'] : 0 }}"
                                                    type="number" id="price_f" name="price_f">
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <span style="width: 32px; display: inline-block;"> Đến </span> <input
                                                    style="width: 85%; margin-bottom: 10px; margin-left: 5px;"
                                                    placeholder="đến"
                                                    value="{{ isset($_GET['price_t']) ? $_GET['price_t'] : 0 }}"
                                                    type="number" id="price_t" name="price_t">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12" style="order: 2 !important">
                                        <div class="row">
                                            <div class="col-2 col-sm-12">
                                                <label style="margin-right:10px;">Lượng Members: </label>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <span style="width: 32px; display: inline-block;"> Từ </span> <input
                                                    style="width: 85%; margin-bottom: 10px; margin-left: 5px;"
                                                    value="{{ isset($_GET['sub_f']) ? $_GET['sub_f'] : 0 }}" type="number"
                                                    id="sub_f" name="sub_f">
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <span style="width: 32px; display: inline-block;"> Đến </span> <input
                                                    style="width: 85%; margin-bottom: 10px; margin-left: 5px;"
                                                    value="{{ isset($_GET['sub_t']) ? $_GET['sub_t'] : 0 }}" type="number"
                                                    id="sub_t" name="sub_t">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12" id="box-filter"
                                        style="margin-top:10px; text-align: right; order: 3 !important">
                                        <button id="reset" type="submit"
                                            style="color:black !important; background-color: #E1CE69; border: 1px solid #E1CE69; margin-right: 10px;  box-shadow: 0 3px 5px -1px rgb(0 0 0 / 20%), 0 6px 10px 0 rgb(0 0 0 / 14%),
                                    0 1px 18px 0 rgb(0 0 0 / 12%); padding: 5px 10px;">Hủy
                                            bỏ</button>
                                        <button id="submit" type="submit"
                                            style="color:black !important; background-color: #8CE78C; border: 1px solid #8CE78C;  box-shadow: 0 3px 5px -1px rgb(0 0 0 / 20%), 0 6px 10px 0 rgb(0 0 0 / 14%),
                                     0 1px 18px 0 rgb(0 0 0 / 12%); padding: 5px 10px;">Lọc</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div style="order: 2 !important; overflow-x: auto; padding: 10px !important"
                        class="col-12 col-md-12 col-lg-12">
                        <table id="customers" style="margin-top: 10px;">
                            <thead>
                                <tr>
                                    <th>{{ $values[0][0] }}</th>
                                    <th>{{ $values[0][1] }}</th>
                                    <th>{{ $values[0][2] }}</th>
                                    <th>{{ $values[0][3] }}</th>
                                    {{-- <th>{{$values[0][4]}}</th>
                                <th>{{$values[0][5]}}</th> --}}
                                    <th>{{ $values[0][6] }}</th>
                                    <th>{{ $values[0][7] }}</th>
                                </tr>
                            </thead>

                            <tbody>
                                @for ($i = 1; $i < count($values); $i++)
                                    <tr>
                                        <td>
                                            {{ $values[$i][0] }}
                                        </td>
                                        <td>{{ number_format($values[$i][1], 0, '.', ',') }}</td>

                                        <td>
                                            {{ $values[$i][2] }}
                                        </td>
                                        <td>
                                            <input value="{{ $values[$i][3] }}" type="text" style="display: none;"
                                                id="link_{{ $i }}" />
                                            <button onclick="xemKenh('{{ $values[$i][3] }}')" title="{{ $values[$i][3] }}"
                                                alt="{{ $values[$i][3] }}" target="_blank"
                                                style="color:black !important;  background-color: #2196F3; border: 1px solid #2196F3;  box-shadow: 0 3px 5px -1px rgb(0 0 0 / 20%), 0 6px 10px 0 rgb(0 0 0 / 14%),
                                        0 1px 18px 0 rgb(0 0 0 / 12%); padding: 5px 10px; margin: 5px; min-width: 61px;"
                                                onclick="copy('link_{{ $i }}')">Xem group</button>
                                            <button
                                                style="color:black !important; background-color: #8CE78C; border: 1px solid #8CE78C; margin: 5px;  box-shadow: 0 3px 5px -1px rgb(0 0 0 / 20%), 0 6px 10px 0 rgb(0 0 0 / 14%),
                                        0 1px 18px 0 rgb(0 0 0 / 12%); padding: 5px 10px; min-width: 61px;"
                                                onclick="copy('link_{{ $i }}')">Sao chép</button>
                                        </td>
                                        <td>{{ number_format($values[$i][4], 0, '.', ',') }} </td>
                                        <td>
                                            <button onclick="go()"
                                                style="color:black !important; background-color: #E1CE69; border: 1px solid #E1CE69;  box-shadow: 0 3px 5px -1px rgb(0 0 0 / 20%), 0 6px 10px 0 rgb(0 0 0 / 14%),
                                    0 1px 18px 0 rgb(0 0 0 / 12%); padding: 5px 10px;">Đặt
                                                mua</button>
                                            <br />
                                            {{ isset($values[$i][5]) ? $values[$i][5] : '' }}
                                        </td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                        <h3 style="text-align: center; font-weight: bold;">Còn nhiều Group khác.. Vui lòng liên hệ
                            Hotline/Zalo: {{ $config->zalo }} để được tư vấn thêm</h3>
                        <h3 data-cms="{{ app()->getLocale() }}-channel-index-1a"
                            style="font-weight: bold; margin-top: 10px;">1. Giao dịch trực tiếp tại văn phòng Hà Nội
                            Công ty cổ phần công nghệ truyền thông MK Media</h3>
                        <p style="padding-left: 10px" data-cms="{{ app()->getLocale() }}-channel-index-1b"> - Địa chỉ: Số
                            15A, Ngõ 21/13 Lĩnh Nam, Hoàng Mai, Hà Nội </p>
                        <p style="padding-left: 10px" data-cms="{{ app()->getLocale() }}-channel-index-1c">- Hotline/ Zalo:
                            0988.50.8769</p>
                        <h3 style="font-weight: bold;" data-cms="{{ app()->getLocale() }}-channel-index-1d">2. Giao dịch
                            online </h3>
                        <p style="padding-left: 10px" data-cms="{{ app()->getLocale() }}-channel-index-1e">- Khách hàng
                            sau khi lựa chọn được Group ưng ý vui lòng chuyển khoản theo số tài khoản bên dưới. Nhân viên
                            của MK Media sẽ hướng dẫn khách hàng chuyển đổi thông tin Group.</p>
                        <p style="padding-left: 10px" data-cms="{{ app()->getLocale() }}-channel-index-1f">- Mọi thắc mắc
                            vui lòng LH: 0988.50.8769 để gặp nhân viên tư vấn.</p>
                        <p style="padding-left: 10px" data-cms="{{ app()->getLocale() }}-channel-index-1g">- Thông tin
                            tài khoản : Chủ tài khoản: Nguyễn Thế Hưng</p>
                        <p style="padding-left: 20px" data-cms="{{ app()->getLocale() }}-channel-index-1h">+ Ngân hàng
                            MBbank: 3325556789999</p>
                        <p style="padding-left: 20px" data-cms="{{ app()->getLocale() }}-channel-index-1j"> + Ngân hàng
                            Techcombank: 19132475877777 </p>
                        <p style="padding-left: 10px" data-cms="{{ app()->getLocale() }}-channel-index-1k"> (Nếu quý
                            khách cần lấy hóa đơn VAT vui lòng liên hệ Hotline/ Zalo: 0988.50.8769) </p>
                    </div>
                    <div class="col-12" style="order: 3 !important;">
                        <div class="container">
                            {!! $page->content !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Block action --}}
        @include('home.includes.consultation')
    </div>
@endsection
@section('js')
    <script src="/js/home/datatables.min.js"></script>
    <script>
        function go() {
            window.open('/quy-trinh-giao-dich-group-facebook', '_blank');
        }

        $("#reset").click(function(e) {
            $("#price_f").val("");
            $("#price_t").val("");
            $("#sub_f").val("");
            $("#sub_t").val("");
            $("#ds").submit();
        })

        $("#submit").click(function(e) {
            var min = document.getElementById("price_f").value;
            var max = document.getElementById("price_t").value;
            if (parseInt(max) < parseInt(min)) {
                alert("Giá kết thúc phải lớn hơn giá bắt đầu.");
                e.preventDefault();
            } else {
                min = document.getElementById("sub_f").value;
                max = document.getElementById("sub_t").value;
                if (parseInt(min) > parseInt(max)) {
                    alert("Lượng subscribers bắt đầu phải nhỏ hơn kết thúc.");
                    e.preventDefault();
                } else {
                    $("#ds").submit();
                }
            }
        })

        function xemKenh(url) {
            if (/iPhone|iPad|iPod/i.test(navigator.platform) || /iPhone|iPad|iPod/i.test(navigator.userAgent)) {
                // Sử dụng biểu thức chính quy để trích xuất giá trị ID
                var match = url.match(/\/profile\.php\?id=(\d+)/);

                // Kiểm tra xem có kết quả từ biểu thức chính quy hay không
                if (match) {
                    var userID = match[1];
                    url = 'fb://group/' + userID;
                }
            }
            window.open(url);
        }

        function copy(id) {
            /* Get the text field */
            var copyText = document.getElementById(id);
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val(copyText.value).select();
            document.execCommand("copy");
            $temp.remove();
        }

        $(document).ready(function() {
            $('#customers').DataTable({
                'pageLength': 25,
                'responsive': true,
                "order": [
                    [0, "asc"]
                ],
                "language": {
                    "sProcessing": "Đang tìm kiếm...",
                    "sLengthMenu": "Hiển thị _MENU_ group",
                    "sZeroRecords": "No se encontraron resultados",
                    "sEmptyTable": "Ningún dato disponible en esta tabla",
                    "sInfo": "Bắt đầu từ group _START_ đến _END_ trong tổng _TOTAL_ group",
                    "sInfoEmpty": "Không có group nào",
                    "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix": "",
                    "sSearch": "Tìm kiếm:",
                    "sUrl": "",
                    "sInfoThousands": ",",
                    "sLoadingRecords": "Cargando...",
                    "oPaginate": {
                        "sFirst": "Về đầu",
                        "sLast": "Về cuối",
                        "sNext": "Tiếp",
                        "sPrevious": "Lùi"
                    },
                    "oAria": {
                        "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                    }
                }
            });
        });
    </script>
@endsection
