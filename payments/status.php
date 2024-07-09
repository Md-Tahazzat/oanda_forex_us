<?php
/**
 * Template Name: Status Page
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="csrf-token" content="f1n1pZqIX1ZXnwr0zMG5tEXefhBBn1OyaBGq2O2f">
    <meta name="keywords" content="OANDAFOREX US">
    <meta name="description" content="OANDAFOREX US">
    <link rel="canonical" href="user/dashboard"/>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/0m5kV6zDVpQKqDnfa8ZA.png" type="image/x-icon"/>

    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/0m5kV6zDVpQKqDnfa8ZA.png" type="image/x-icon"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/fontawesome.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/nice-select.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/datatables.min.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/notify.css"/>     
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/global/css/custom.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/magnific-popup.css"/>
            <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/aos.css"/>
            <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/styles.css">

    <style>
.site-head-tag {
	margin: 0;
  	padding: 0;
}
    </style>

    <title>OANDAFOREX US -  Deposit Now
</title>


</head>
<body class="dark-theme">
<script>
    var notify = {
        timeout: "5000",
    }
</script>
<!--Full Layout-->
    
    <style>
        .panel-layout {
        background: url(https://www.bram.us/wordpress/wp-content/uploads/2020/02/connected-vertices.gif) repeat;
     
        position: relative;
    }
    
    .panel-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
         background-color: rgb(29 94 94 / 15%);
        backdrop-filter: blur(2px);
        display:none;
    }


    .status-container{
        width:100vw;
        height:100vh;
        display:flex;
        flex-direction:column;
        align-items:center;
        justify-content:center;
        z-index: 99999999;
        background-color:#000000a9;
        color:white;
    }
    .status-container h1,
    .status-container h2{
        color:white;
    }
    </style>



<div class="panel-layout"> <div class="panel-overlay"></div>
    <!--Header-->
    <div class="panel-header">
        <div class="logo">
            <a href="https://oandaforexus.com/">
                <img class="logo-unfold" src="<?php echo get_template_directory_uri(); ?>/images/yXmpbj5PdX0qQkFfmYLo.png" alt="Logo"/>
                <img class="logo-fold" src="<?php echo get_template_directory_uri(); ?>/images/yXmpbj5PdX0qQkFfmYLo.png" alt="Logo"/>
            </a>
        </div>
    <div class="nav-wrap">
        <div class="nav-left">

            <button class="sidebar-toggle">
              <img src="https://cdn-icons-png.flaticon.com/512/11775/11775880.png" style="max-height:20px" />
            </button>
        </div>
        <div class="nav-right">
            <div class="single-nav-right">
                <!--<a href="https://www.capitalfx.pro" class="user-home-menu">-->
                <!--    <i class="anticon anticon-home"></i>-->
                <!-- </a> -->
                <div class="single-right">
                    <div class="color-switcher">
                        <i icon-name="moon" class="dark-icon" data-mode="dark"></i>
                        <i icon-name="sun" class="light-icon" data-mode="light"></i>
                    </div>
                </div>
                <!--<div class="single-right">-->
                <!--    <select name="language" id="" class="site-nice-select"-->
                <!--            onchange="window.location.href=this.options[this.selectedIndex].value;">-->
                <!--        -->
                <!--            <option-->
                <!--                value="https://www.capitalfx.pro/language-update?name=en" selected>English</option>-->
                <!--        -->
                <!--            <option-->
                <!--                value="https://www.capitalfx.pro/language-update?name=es" >Spanish</option>-->
                <!--        -->
                <!--            <option-->
                <!--                value="https://www.capitalfx.pro/language-update?name=fr" >France</option>-->
                <!--        -->
                <!--    </select>-->
                <!--</div>-->
                <div class="single-right">
                    <button
                        type="button"
                        class="item"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                    >
                    <i class="fa-solid fa-user"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a href="user/settings" class="dropdown-item" type="button"><i class="fa-solid fa-gear"></i>Settings</a>
                        </li>
                        <li>
                            <a href="user/change-password" class="dropdown-item" type="button">
                                <i class="fa-solid fa-lock"></i>Change Password
                            </a>
                        </li>
                        <li>
                            <a href="user/support-ticket/index" class="dropdown-item" type="button">
                                <i class="fa-solid fa-ticket"></i>Support Tickets
                            </a>
                        </li>
                        <li class="logout">
                            <form method="POST" action="logout" id="logout-form">
                                <input type="hidden" name="_token" value="f1n1pZqIX1ZXnwr0zMG5tEXefhBBn1OyaBGq2O2f">                                <a href="https://www.capitalfx.pro/logout" class="dropdown-item"
                                   onclick="event.preventDefault(); localStorage.clear();  $('#logout-form').submit();"><i class="fa-solid fa-right-from-bracket"></i>Logout</a>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
    <!--/Header-->

    <div class="col-xl-12 status-container">
        <h1 class="text-center">Status message</h1>
    <?php
    // Check for success message
    $url = get_permalink();
    $error_value = get_query_var('error');
    // echo $url;
    // echo $error_value;
    // $parts = explode('?', $url);
    // $params (isset($parts[1]))?$parts[1] : '';

    // Check for error message
    // if (isset($params)) {
    //     echo "<h2>$params</h2>";
    // }
    ?>
</div>


<script>
        (function ($) {
            "use strict";
            var table = $('#dataTable').DataTable({
                processing: false,
                serverSide: true,
                ajax: "https://www.capitalfx.pro/user/transaction-history",
                columns: [
                    {data: 'payin_hash', name: 'payin_hash'},
                    {data: 'pay_address', name: 'pay_address'},
                    {data: 'actually_paid', name: 'actually_paid'},               
                ]
            });
        })(jQuery);
    </script>

    <script>
        function copyRef() {
            /* Get the text field */
            var copyApi = document.getElementById("refLink");
            /* Select the text field */
            copyApi.select();
            copyApi.setSelectionRange(0, 999999999); /* For mobile devices */
            /* Copy the text inside the text field */
            document.execCommand('copy');
            $('#copy').text($('#copied').val())

        }

        var qr;
        qr = new QRious({
            element: document.getElementById('qr-code'),
            size: 200,
            value: '0x8bf580542acc35dc08135d264d943bed727a18'
        });

    </script>


                    <!--Page Content-->
                </div>
            </div>
        </div>
    </div>


    <!-- Automatic Popup -->
    
    <!-- /Automatic Popup End -->
</div>
<!--/Full Layout-->

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-migrate.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/frontend/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/frontend/js/scrollUp.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/frontend/js/owl.carousel.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/waypoints.min.js"></script>
<script src="https://assets/frontend/js/jquery.counterup-min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/frontend/js/jquery.nice-select.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/frontend/js/lucide.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/frontend/js/magnific-popup.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/frontend/js/aos.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/datatables.min.js" type="text/javascript" charset="utf8"></script>
<script src="https://www.capitalfx.pro/assets/frontend/js/main.js?var=5"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/frontend/js/cookie.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom-script.js"></script>
<script src="https://www.capitalfx.pro/assets/global/js/custom.js?var=5"></script>
    <script>
        (function ($) {
            'use strict';
            // AOS initialization
            AOS.init();
        })(jQuery);
    </script>


    <script>
        (function ($) {
            'use strict';
            // To top
            $.scrollUp({
                scrollText: '<i class="fas fa-caret-up"></i>',
                easingType: 'linear',
                scrollSpeed: 500,
                animation: 'fade'
            });
        })(jQuery);
    </script>

<script type="text/javascript" src="https://www.capitalfx.pro/assets/vendor/mckenziearts/laravel-notify/js/notify.js"></script>    <script>

        var globalData;
        var currency = "USD"
        $("#gatewaySelect").on('change',function (e) {
            "use strict"
            e.preventDefault();

            $('.manual-row').empty();

            var code = $(this).val()

            var url = 'https://www.capitalfx.pro/user/deposit/gateway/:code';
            url = url.replace(':code', code);
            $.get(url, function (data) {


                globalData = data;

                $('.charge').text('Charge ' + data.charge + ' ' + (data.charge_type === 'percentage' ? ' % ' : currency))
                $('.min-max').text('Minimum ' + data.minimum_deposit + ' ' + currency + ' and ' + 'Maximum ' + data.maximum_deposit + ' ' + currency)

                $('#logo').html(`<img class="payment-method" src='${document.location.origin + '/assets/' + data.logo}'>`);

                var amount = $('#amount').val()

                if (Number(amount) > 0) {

                    $('.amount').text((Number(amount)))

                    var charge = data.charge_type === 'percentage' ? calPercentage(amount, data.charge) : data.charge
                    $('.charge2').text(charge + ' ' + currency)

                    $('.total').text((Number(amount) + Number(charge)) + ' ' + currency)
                }


                if (data.credentials !== undefined) {
                    $('.manual-row').append(data.credentials)
                    imagePreview()
                }


            });

            $('#amount').on('keyup',function (e) {
                "use strict"

                var amount = $(this).val()
                $('.amount').text((Number(amount)))

                $('.currency').text(currency)

                var charge = globalData.charge_type === 'percentage' ? calPercentage(amount, globalData.charge) : globalData.charge
                $('.charge2').text(charge + ' ' + currency)

                $('.total').text((Number(amount) + Number(charge)) + ' ' + currency)
            })


        });
    </script>
    <script>
        // Color Switcher
        $(".color-switcher").on('click', function () {
            "use strict"
            $("body").toggleClass("dark-theme");
            var url = 'https://www.capitalfx.pro/theme-mode';
            $.get(url)
        });
    </script>







</body>
</html>