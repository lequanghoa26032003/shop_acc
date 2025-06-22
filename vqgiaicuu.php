
<?php
require_once('TMQ/function.php');
require_once('TMQ/head.php');
?><div class="c-layout-page">

<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all' rel='stylesheet' type='text/css'>
<link href="assets/frontend/vongquay/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="assets/frontend/vongquay/css/components.css" id="style_components" rel="stylesheet" type="text/css" />
<link href="assets/frontend/vongquay/css/style.css" rel="stylesheet" type="text/css" />

    <style>	
        .ui-autocomplete {
            max-height: 500px;
            overflow-y: auto;
            overflow-x: hidden;
        }

        .input-group-addon {
            background-color: #FAFAFA;
        }

        .input-group .input-group-btn > .btn, .input-group .input-group-addon {
            background-color: #FAFAFA;
        }

        .modal {
            text-align: center;
        }

        @media  screen and (min-width: 768px) {
            .modal:before {
                display: inline-block;
                vertical-align: middle;
                content: " ";
                height: 100%;
            }
        }

        @media (min-width: 992px) and (max-width: 1200px) {
            .c-layout-header-fixed.c-layout-header-topbar .c-layout-page {
                margin-top: 245px;
            }
        }

        @media  screen and (max-width: 767px) {
            .modal-dialog:before {
                margin-top: 75px;
                display: inline-block;
                vertical-align: middle;
                content: " ";
                height: 100%;
            }

            .modal-dialog {
                width: 100%;

            }

            .modal-content {
                margin-right: 20px;
            }
        }

        .modal-dialog {
            display: inline-block;
            text-align: left;

        }

        .mfp-wrap {
            z-index: 20000 !important;
        }

        .c-content-overlay .c-overlay-wrapper {
            z-index: 6;
        }

        .z7 {
            z-index: 7 !important;
        }
<style>

    .btn + .btn{
        margin-left: 0!important;
    }

    .btn-right .btn{
        float: left;
        width: 100%;
        background: #fb236a;
        font-size: 13px;
        color: #ffffff;
        text-align: center;
        -webkit-border-radius: 8px;
        -moz-border-radius: 8px;
        -ms-border-radius: 8px;
        -o-border-radius: 8px;
        border-radius: 8px;
        border: 2px solid #fb236a;
        padding: 11px 0;
        margin-top: 10px;
        font-size: 20px;
        font-weight: bold;
    }

    .btn-right .btn:hover{
        background-color: #ff8db2;
        border: 2px solid #ff8db2;
    }
    .square{
        width: 100%;
    }
    #squaredesktop .box{
        min-width: 40px;
        min-height: 40px;
        /*background-color: #ccc;*/
        padding: 10px;
    }
    #squaremobile .box{
        padding: 5px;
    }
    .box img.active{

          box-shadow:
            0 0  5px #fff, 
            0 0  10px #fff, 
            0 0  15px #fff, 
            0 0  20px #49fff7, 
            0 0  35px #49fff7
    }
    .outer-btn{
        width: 100%
    }
    .outer-btn:hover{
        opacity: 0.7
    }
    #squaremobile .outer-btn{
        margin-bottom: -50px;
    }
    .nopadding{
        padding: 0;
    }
</style>
<meta name="csrf-token" content="SRjHDFJ7JAem51PiIs38m0nuMlXmNKdywxZkaRHL">
<div class="c-content-title-1 pd50">
    <h3 class="c-center c-font-uppercase c-font-bold">Vòng Quay Giải Cứu Thế Giới 50k</h3>
    <div class="c-line-center c-theme-bg"></div>
</div>
<div class="col-lg-1 col-md-hidden"></div>
<div id="boxfull" class="col-lg-6 col-md-12">
    <div class="c-content-box c-size-md">
        <!-- <div class="container"> -->
            <div class="c-content-client-logos-slider-1  c-bordered" data-slider="owl">
 
                <div class="row-flex-safari game-list" style="display: flex; flex-wrap: wrap">
                    <table id="squaredesktop" class="square">
                        <tr>
                            <td></td>
                            <td><div id="" data-num="1" class="gift1 box"><img src='https://shopbanho.com/storage/images/t01jIVlb9o_1589443453.jpg'/></div></td>
                            <td><div id="" data-num="2" class="gift2 box"><img src='https://shopbanho.com/storage/images/5GWgasw6nX_1589443631.jpg'/></div></td>
                            <td><div id="" data-num="3" class="gift3 box"><img src='https://shopbanho.com/storage/images/BWOgZLPsRn_1589443483.jpg'/></div></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><div id="" data-num="12" class="gift12 box"><img src='https://shopbanho.com/storage/images/K5cbrR1RVZ_1589443591.jpg'/></div></td>
                            <td colspan="3"></td>
                            <td><div id="" data-num="4" class="gift4 box"><img src='https://shopbanho.com/storage/images/3rRvpoI2YT_1589443495.jpg'/></div></td>
                        </tr>
                        <tr>
                            <td><div id="" data-num="11" class="gift11 box"><img src='https://shopbanho.com/storage/images/IZBDbv5JSR_1589443579.jpg'/></div></td>
                            <td colspan="3">
                                <div class="outer-btn">
                                <div class="play btn m-btn m-btn--custom m-btn--icon m-btn--pill" style="display: block; margin: 0 auto; width: 80%">
                                    <img src="https://shopbanho.com/storage/images/H6cuYEMnZx_1589549669.png" alt="">
                                </div>
                                </div>
                            </td>
                            <td><div id="" data-num="5" class="gift5 box"><img src='https://shopbanho.com/storage/images/faW2so4m17_1589443506.jpg'/></div></td>
                        </tr>
                        <tr>
                            <td><div id="" data-num="10" class="gift10 box"><img src='https://shopbanho.com/storage/images/Eb8KBqOvqs_1589443567.jpg'/></div></td>
                            <td colspan="3"></td>
                            <td><div id="" data-num="6" class="gift6 box"><img src='https://shopbanho.com/storage/images/kMgjhJ8dwX_1589443520.jpg'/></div></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><div id="" data-num="9" class="gift9 box"><img src='https://shopbanho.com/storage/images/k9XnczMl0k_1589443557.jpg'/></div></td>
                            <td><div id="" data-num="8" class="gift8 box"><img src='https://shopbanho.com/storage/images/f26qN6FsGT_1589443534.jpg'/></div></td>
                            <td><div id="" data-num="7" class="gift7 box"><img src='https://shopbanho.com/storage/images/WJWFf8CUiD_1589443544.jpg'/></div></td>
                            <td></td>
                        </tr>
                    </table>

                    <table id="squaremobile" class="square">
                        <tr>
                            <td></td>
                            <td><div id="" data-num="1" class="gift1 box"><img src='https://shopbanho.com/storage/images/t01jIVlb9o_1589443453.jpg'/></div></td>
                            <td><div id="" data-num="2" class="gift2 box"><img src='https://shopbanho.com/storage/images/5GWgasw6nX_1589443631.jpg'/></div></td>
                            <td><div id="" data-num="3" class="gift3 box"><img src='https://shopbanho.com/storage/images/BWOgZLPsRn_1589443483.jpg'/></div></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><div id="" data-num="12" class="gift12 box"><img src='https://shopbanho.com/storage/images/K5cbrR1RVZ_1589443591.jpg'/></div></td>
                            <td colspan="3"></td>
                            <td><div id="" data-num="4" class="gift4 box"><img src='https://shopbanho.com/storage/images/3rRvpoI2YT_1589443495.jpg'/></div></td>
                        </tr>
                        <tr>
                            <td><div id="" data-num="11" class="gift11 box"><img src='https://shopbanho.com/storage/images/IZBDbv5JSR_1589443579.jpg'/></div></td>
                            <td colspan="3">
                                <div class="outer-btn">
                                <div class="play btn m-btn m-btn--custom m-btn--icon m-btn--pill" style="display: block; margin: 0 auto; width: 80%">
                                    <img src="https://shopbanho.com/storage/images/H6cuYEMnZx_1589549669.png" alt="">
                                </div>
                                </div>
                            </td>
                            <td><div id="" data-num="5" class="gift5 box"><img src='https://shopbanho.com/storage/images/faW2so4m17_1589443506.jpg'/></div></td>
                        </tr>
                        <tr>
                            <td><div id="" data-num="10" class="gift10 box"><img src='https://shopbanho.com/storage/images/Eb8KBqOvqs_1589443567.jpg'/></div></td>
                            <td colspan="3"></td>
                            <td><div id="" data-num="6" class="gift6 box"><img src='https://shopbanho.com/storage/images/kMgjhJ8dwX_1589443520.jpg'/></div></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><div id="" data-num="9" class="gift9 box"><img src='https://shopbanho.com/storage/images/k9XnczMl0k_1589443557.jpg'/></div></td>
                            <td><div id="" data-num="8" class="gift8 box"><img src='https://shopbanho.com/storage/images/f26qN6FsGT_1589443534.jpg'/></div></td>
                            <td><div id="" data-num="7" class="gift7 box"><img src='https://shopbanho.com/storage/images/WJWFf8CUiD_1589443544.jpg'/></div></td>
                            <td></td>
                        </tr>
                    </table>

                </div>
            </div>
        <!-- </div> -->
    </div>
</div>
<div class="col-lg-1 col-md-hidden"></div>
<div class="col-lg-3 col-md-12 col-sm-12 btn-right">
    <!-- <div class="btn-top"> -->
    <div class="text-center">           
<div class="Gold">Số tiền hiện còn:  <em><?php echo number_format($TMQ[cash]);?><sup>VNĐ</sup></em>
						</div>
						<br>
    </a>
    </div>
    <a href="#" class="col-xs-12 thele btn btn-success m-btn m-btn--custom m-btn--icon m-btn--pill">
        <span>
            <i class="la la-cloud-upload"></i>
            <span>Thể Lệ</span>
        </span>
    </a>
    <a href="#" class="col-xs-12 luotquay btn btn-success m-btn m-btn--custom m-btn--icon m-btn--pill">
        <span>
            <i class="la la-cloud-upload"></i>
            <span>Lượt quay gần đây</span>
        </span>
    </a>
    <a href="/squarewheel/logacc/1428" class="col-xs-12 btn btn-success m-btn m-btn--custom m-btn--icon m-btn--pill">
        <span>
            <i class="la la-cloud-upload"></i>
            <span>Lịch sử quay trúng vật phẩm</span>
        </span>
    </a>
    <a href="/squarewheel/logaccgame/1428" class="col-xs-12 btn btn-success m-btn m-btn--custom m-btn--icon m-btn--pill">
        <span>
            <i class="la la-cloud-upload"></i>
            <span>Lịch sử quay trúng nick</span>
        </span>
    </a>
        
    <div class="text-center"> &nbsp</div>
    <!-- </div> -->
</div>
<div class="col-lg-2 col-md-hidden"></div>
<div class="modal fade" id="theleModal" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" style="font-weight: bold;text-transform: uppercase;color: #FF0000;text-align: center">Thể Lệ</h4>
            </div>

            <div class="modal-body" style="font-family: helvetica, arial, sans-serif;">
                <p><strong>V&ograve;ng quay giải cứu thế giới của c&aacute;c nh&acirc;n vật trong Game Free Fire trước đại dịch CORONA</strong></p>

<p><strong>Mỗi lượt quay 50k c&oacute; cơ hội nhận từ 100kc- 11999kc</strong></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $(".thele").on("click", function(){
            $("#theleModal").modal('show');
        })
        $(".uytin").on("click", function(){
            $("#uytinModal").modal('show');
        })
        $(".luotquay").on("click", function(){
            $("#luotquayModal").modal('show');
        })
    });
</script>
<div class="modal fade" id="uytinModal" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" style="font-weight: bold;text-transform: uppercase;color: #FF0000;text-align: center">Uy Tín</h4>
            </div>

            <div class="modal-body" style="font-family: helvetica, arial, sans-serif;">
                <p>shop ch&iacute;nh chủ Ho&agrave;ng B&aacute;</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="luotquayModal" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" style="font-weight: bold;text-transform: uppercase;color: #FF0000;text-align: center">Lượt chơi gần đây</h4>
            </div>

            <div class="modal-body" style="font-family: helvetica, arial, sans-serif;">
                                Đang cập nhật...
                            </div>
            <div class="modal-footer">
                <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>
    <div class="modal fade" id="noticeModal" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" style="font-weight: bold;text-transform: uppercase;color: #FF0000;text-align: center">Thông báo</h4>
                </div>

                <div class="modal-body content-popup" style="font-family: helvetica, arial, sans-serif;">
                   àdsafdsafdsaf
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>
    
    <input type="hidden" id="numgift" value="12">

<script type="text/javascript">
    var isMobile = {
        Android: function() {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function() {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function() {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function() {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function() {
            return navigator.userAgent.match(/IEMobile/i) || navigator.userAgent.match(/WPDesktop/i);
        },
        any: function() {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }
    };
    if( isMobile.any() ) {
        $('#squaredesktop').remove();
        $('#boxfull').addClass('nopadding');
    }else{
        $('#squaremobile').remove();
    }
</script>
<script>
    var width = screen.width;
    if(width <= 1000){
        alert('Màn Hình Của Bạn Không Đủ Rộng Để Sử Dụng Vòng Quay Này (Có Thể Bạn Đang Dùng Điện Thoại,Hãy Sử Dụng Máy Tính Để Sài Chức Năng Này)')
        window.location.href = "/";
    }
    $(document).ready(function(e){
        var roll_check = true;
        //Click nút quay
        $('body').delegate('#quay', 'click', function(){
            if(roll_check){
                roll_check = false;
                $.ajax({
                    url: "/ajax/wheel10.php",
                    type: "POST",
                    data: { type: "nimo" },
                    dataType: "json",

                    success : function (data) {
                        if (data.status == "login") {
                            window.location.href="/dang-nhap.php";
                        }
                        else if (data.status == "success") {
                            loop(data.pos,data.phanqua);
                        }
                         else {
                            $('.content-popup').text(data.msg);
                        $('#noticeModal').modal('show');

                            roll_check = true;
                        }
                    }
                });
            }
        });

        function loop(deg,gift) {
            var items = $(".list_item").length;
            var i=0,dem=0;
            id = setInterval(function(){
                if(i == items){
                    i=0;
                    dem++;
                }
                if(dem == 5 && i == deg){
                    clearInterval(id);
                     $('.content-popup').text('Phần thưởng: '+gift);
            $('#noticeModal').modal('show');
                    roll_check = true;
                }
                var item = $(".list_item")[i];
                var pre = $(".list_item")[i-1];
                
                if(i == 0){
                    pre = $(".list_item")[items-1];
                }
                $(pre).css('background-color','');
                $(pre).css('box-shadow','');
                $(item).css('background-color','greenyellow');
                $(item).css('box-shadow','0 0 20px 1px hsla(0,0%,100%,.8)');
                i++;
            },100);
        }
    });
</script>    
<!--     <script type="text/javascript">
        $(document).ready(function(){
            $('#noticeModal').modal('show')
        });
    </script> -->
			<!-- END: PAGE CONTENT -->

	</div>
<br>
<br>
<?php
require("TMQ/end.php");
?>