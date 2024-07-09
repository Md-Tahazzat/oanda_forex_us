<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="f1n1pZqIX1ZXnwr0zMG5tEXefhBBn1OyaBGq2O2f">
    <meta name="keywords" content="OANDAFOREX US">
    <meta name="description" content="OANDAFOREX US">
    <link rel="canonical" href="user/dashboard" />
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/0m5kV6zDVpQKqDnfa8ZA.png" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>



    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/0m5kV6zDVpQKqDnfa8ZA.png" type="image/x-icon" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/nice-select.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/datatables.min.css" />
    <link rel="stylesheet" type="text/css" href="/assets/css/notify.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/custom.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/magnific-popup.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/aos.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/styles.css">
    <style>
        .site-head-tag {
            margin: 0;
            padding: 0;
        }
    </style>

    <title>OANDAFOREX US - Dashboard
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
        }
    </style>



    <div class="panel-layout">
        <div class="panel-overlay"></div>
        <!--Header-->
        <div class="panel-header">
            <div class="logo">
                <a href="https://oandaforexus.com/">
                    <img class="logo-unfold" src="<?php echo get_template_directory_uri(); ?>/images/yXmpbj5PdX0qQkFfmYLo.png" alt="Logo" />
                    <img class="logo-fold" src="<?php echo get_template_directory_uri(); ?>/images/yXmpbj5PdX0qQkFfmYLo.png" alt="Logo" />
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
                        <!--</a>-->
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
                            <button type="button" class="item" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-user"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a href="user/settings" class="dropdown-item" type="button"><i
                                            class="fa-solid fa-gear"></i>Settings</a>
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
                                        <input type="hidden" name="_token"
                                            value="f1n1pZqIX1ZXnwr0zMG5tEXefhBBn1OyaBGq2O2f"> <a
                                            href="https://www.capitalfx.pro/logout" class="dropdown-item"
                                            onclick="event.preventDefault(); localStorage.clear();  $('#logout-form').submit();"><i
                                                class="fa-solid fa-right-from-bracket"></i>Logout</a>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/Header-->

        <!--Side Nav-->
        <style>
            .side-wallet-box.default-wallet .user-balance-card {
                background: linear-gradient(169deg, rgba(0, 17, 32, 1) 0%, rgba(32, 103, 101, 1) 100%);
            }

            .dark-theme {
                background: linear-gradient(169deg, rgba(0, 17, 32, 1) 0%, rgba(32, 103, 101, 1) 100%);
            }

            .dark-theme .panel-layout .side-nav {

                background: url(https://trotons.com/wp-content/uploads/2022/08/RPA-And-AI.jpg);

            }

            .dark-theme .panel-layout .side-wallet-box {
                background: linear-gradient(169deg, rgba(0, 17, 32, 1) 0%, rgba(32, 103, 101, 1) 100%);
            }

            .dark-theme .panel-layout .panel-header .nav-wrap {
                background: linear-gradient(90deg, rgb(32 103 101 100) 0%, rgb(9 11 57) 100%);
            }

            .user-home-menu {
                background: #975e99;
            }

            .dark-theme .panel-layout .site-card {
                background: linear-gradient(90deg, rgb(32 103 101 100) 0%, rgb(9 11 57) 100%);
                border: 1px solid rgba(83, 90, 148, 0.3);
            }

            .dark-theme .panel-layout .panel-header .logo {
                background: linear-gradient(90deg, rgb(32 103 101 100) 0%, rgb(9 11 57) 100%);
            }

            .referral-link .referral-link-form button {
                background: #535a94;
                border-color: #535a94;
            }

            .site-card .site-card-header .card-header-links .card-header-link {
                background: #535a94;
            }

            .referral-link .referral-link-form button:hover {
                background: #535a94;
                border-color: #535a94;
            }

            .grad-btn {
                background: #535a94;
                border-color: #535a94;
            }

            .dark-theme .site-datatable .data-table {
                background: linear-gradient(159deg, rgb(32 103 101 100) 0%, rgb(9 11 57) 100%);
            }
        </style>
        <div class="side-nav">
            <!--<div class="side-wallet-box default-wallet mb-0">-->
            <!--<div class="user-balance-card" >-->
            <!-- <div class="wallet-info" >  -->
        <!--          <a class="navbar-brand" href="https://www.capitalfx.pro"><img style="max-height:150px" src="https://www.capitalfx.pro/assets/global/images/yXmpbj5PdX0qQkFfmYLo.png" alt=""/></a>-->
            <!--    </div> -->
            <!--    <div class="wallet-info">-->
            <!--        <div class="wallet-id"><i icon-name="user"></i>Hello,</div>-->
            <!--        <div class="balance">MANIKfx</div>-->
            <!--    </div>-->

            <!--    <div class="wallet-info">-->
            <!--        <div class="wallet-id"><i icon-name="wallet"></i>Deposit Wallet</div>-->
            <!--        <div class="balance">$0.00000</div>-->
            <!--    </div>-->
            <!--    <div class="wallet-info">-->
            <!--        <div class="wallet-id"><i icon-name="landmark"></i>Withdraw Wallet</div>-->
            <!--        <div class="balance">$3.92500</div>-->
            <!--    </div>-->
            <!--</div>-->
            <!--<div class="actions">-->
            <!--    <a href="user/deposit" class="user-sidebar-btn"><i-->
            <!--            class="anticon anticon-file-add"></i>Deposit</a>-->
            <!--     <a href="user/schemas" class="user-sidebar-btn red-btn"><i-->
            <!--            class="anticon anticon-export"></i>Invest Now</a> -->
            <!--</div>-->
            <!--</div>-->
            <div class="side-nav-inside">
                <ul class="side-nav-menu">
                    <li class="side-nav-item active">
                        <a href="dashboard.html"><i class="fa-solid fa-bars"></i><span>Dashboard</span></a>
                    </li>

                    <li class="side-nav-item ">
                        <a href="deposit.html"><i class="fa-solid fa-money-bill-transfer"></i><span>Balance
                                Topup</span></a>
                    </li>

                    <li class="side-nav-item ">
                        <a href="schemas.html"><i class="fa-solid fa-cube"></i><span>Master Package</span></a>
                    </li>

                    <li class="side-nav-item ">
                        <a href="invest-logs.html"><i class="fa-solid fa-yin-yang"></i><span>Deposit Report</span></a>
                    </li>
                    <li class="side-nav-item side-nav-dropdown ">
                        <a href="javascript:void(0);" class="dropdown-link"><i
                                class="fa-solid fa-file-invoice-dollar"></i><span>Income Report</span>
                            <span class="right-arrow"><i icon-name="chevron-down"></i></span></a>
                        <ul class="dropdown-items">

                            <li class="side-nav-item ">
                                <a href="roi-report.html"><i class="fa-solid fa-money-bill"></i><span>ROI Return
                                        Report</span></a>
                            </li>

                            <li class="side-nav-item ">
                                <a href="upline-generation.html"><i class="fa-solid fa-money-bill"></i><span>Generation
                                        Income Report</span></a>
                            </li>

                            <li class="side-nav-item ">
                                <a href="referral-bonus.html"><i class="fa-solid fa-money-bill"></i><span>Sponsor
                                        Commission Report</span></a>
                            </li>

                            <li class="side-nav-item ">
                                <a href="rank-income.html"><i class="fa-solid fa-money-bill"></i><span>Rank Income
                                        Report</span></a>
                            </li>

                            <!-- <li class="side-nav-item ">
                            <a href="user/global-weekly-income"><i class="anticon anticon-setting"></i><span>Global Weekly Income  Report</span></a>
                        </li> -->

                            <!-- <li class="side-nav-item ">
                            <a href="user/rank-income"><i class="anticon anticon-setting"></i><span>Global Pool Income  Report</span></a>
                        </li> -->
                        </ul>
                    </li>


                    <!--
            <li class="side-nav-item   ">
                <a href="user/deposit"><i
                        class="anticon anticon-file-add"></i><span>Add Money</span></a>
            </li>
            <li class="side-nav-item ">
                <a href="user/deposit/log"><i
                        class="anticon anticon-folder-add"></i><span>Add Money Log</span></a>
            </li> -->

                    <!--<li class="side-nav-item ">-->
                    <!--     <a href="user/wallet-exchange"><i-->
                    <!--             class="anticon anticon-transaction"></i><span>Wallet Exchange</span></a>-->
                    <!-- </li>-->

                    <!-- <li class="side-nav-item ">-->
                    <!--     <a href="user/wallet-exchange-log"><i-->
                    <!--             class="anticon anticon-transaction"></i><span>Wallet Exchange log</span></a>-->
                    <!-- </li>-->

                    <!-- <li class="side-nav-item   ">
                <a href="user/send-money"><i
                        class="anticon anticon-export"></i><span>Send Money</span></a>
            </li>
            <li class="side-nav-item ">
                <a href="user/send-money/log"><i
                        class="anticon anticon-cloud"></i><span>Send Money Log</span></a>
            </li> -->

                    <li class="side-nav-item   ">
                        <a href="withdraw.html"><i class="fa-solid fa-rotate"></i><span>Withdraw</span></a>
                    </li>
                    <li class="side-nav-item ">
                        <a href="log.html"><i class="fa-solid fa-circle-half-stroke"></i><span>Withdraw Log</span></a>
                    </li>

                    <li class="side-nav-item ">
                        <a href="ranking-badge.html"><i class="fa-solid fa-id-badge"></i><span>Ranking Badge</span></a>
                    </li>

                    <li class="side-nav-item ">
                        <a href="referral-team.html"><i class="fa-solid fa-tower-cell"></i><span>Community
                                Tree</span></a>
                    </li>
                    <!--<li class="side-nav-item ">-->
                    <!--        <a href="user/team/MANIKfx"><i-->
                    <!--                class="anticon anticon-usergroup-add"></i><span>Team</span></a>-->
                    <!--</li>-->
                    <!-- <li class="side-nav-item ">
                    <a href="user/placement-tree2/MANIKfx"><i
                            class="anticon anticon-usergroup-add"></i><span>Team Tree</span></a>
            </li> -->
                    <!-- <li class="side-nav-item ">
                    <a href="user/referral"><i
                            class="anticon anticon-usergroup-add"></i><span>Referral</span></a>
                </li> -->

                    <!--<li class="side-nav-item ">-->
                    <!--    <a href="user/transactions"><i-->
                    <!--            class="anticon anticon-inbox"></i><span>All Transactions</span></a>-->
                    <!--</li>-->



                    <li class="side-nav-item ">
                        <a href="settings.html"><i class="fa-solid fa-gear"></i><span>Settings</span></a>
                    </li>

                    <!--<li class="side-nav-item ">-->
                    <!--    <a href="user/support-ticket/index"-->
                    <!--    ><i class="anticon anticon-tool"></i><span>Support Tickets</span></a-->
                    <!--    >-->
                    <!--</li>-->

                    <!-- <li class="side-nav-item ">
                <a href="user/certificates"
                ><i class="anticon anticon-tool"></i><span>Certificates</span></a
                >
            </li> -->

                    <li class="side-nav-item">
                        <!-- Authentication -->
                        <form method="POST" action="https://www.capitalfx.pro/logout">
                            <input type="hidden" name="_token" value="f1n1pZqIX1ZXnwr0zMG5tEXefhBBn1OyaBGq2O2f"> <button
                                type="submit" class="site-btn grad-btn w-100">
                                <i class="fa-solid fa-right-from-bracket"></i></i><span>Logout</span>
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
        <!--/Side Nav-->

        <div class="page-container">
            <div class="main-content">
                <div class="section-gap">
                    <div class="container-fluid">
                        <!--Page Content-->
                        <div div class="col-xl-9 col-lg-9 col-md-8 col-sm-12 col-12">
                            <div class="">
                                <div class="site-card-body">
                                    <div class="referral-link">
                                        <div class="referral-link-form">
                                            <button type="submit" onclick="copyRef()">
                                                <i class="anticon anticon-copy"></i>
                                                <span id="copy">Copy Url</span>
                                                <input id="copied" hidden value="Successfully Copied">
                                            </button>
                                            <!-- 3 -->
                                        </div>
                                    </div>
                                </div>

                                <div class="site-card-body"
                                    style="background-color: linear-gradient(90deg, rgb(77 9 105) 0%, rgb(9 11 57) 100%);">
                                    <marquee onmousehover="stop" direction="left">
                                        <!--Payment Gateway Impact: Binance USDT Loading Leads to Service Disruption. Resolution in Progress. -->
                                        Reminder: Dear Users please activate your account by June 15th to keep your
                                        bonus. Don't miss out!
                                    </marquee>
                                </div>





                                <div class="site-card-body row">
                                    <span style="color: #975E99; font-weight:900;">Hi, Welcomeback!</span>
                                    <span style="color: #3975B9; font-weight:900;">Manik Mia </span>
                                    <span style="color: #927453; font-weight:900;">MANIKfx, ( Unique ID: CQDBUBCHWU
                                        )</span>
                                    <div div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                        Deposit Balance <br>
                                        <span style="color: white; font-weight:900;">$0.00000</span>
                                    </div>
                                    <div div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6"
                                        style="border-left: 1px solid white;">
                                        Profit Balance <br>
                                        <span style="color: white; font-weight:900;">$3.92500</span>
                                    </div>
                                </div>


                                <br>
                            </div>
                        </div>


                        <style>
                            .user-cards .single {

                                border: 2px solid rgb(255 255 255 / 50%);
                            }

                            .user-cards .single::before {
                                background: rgb(255 255 255 / 50%);
                            }

                            .referral-link .referral-link-form button {
                                color: #ffffff;
                                border: 2px solid;
                                border-color: rgb(255 255 255 / 50%);
                            }

                            .referral-link .referral-link-form button:hover {
                                background: linear-gradient(90deg, rgb(28 92 92) 0%, rgba(2, 4, 39, 1) 100%);
                                border-color: rgb(255 255 255 / 50%);
                            }



                            .neon-border {
                                position: absolute;
                                top: -2px;
                                left: -2px;
                                right: -2px;
                                bottom: -2px;
                                border-radius: 12px;
                                border: 2px solid transparent;
                                animation: neon-glow 1s infinite alternate linear;
                            }



                            @keyframes neon-glow {
                                0% {
                                    border-color: #ff00ff;
                                    transform: translate(-2px, -2px);
                                }

                                100% {
                                    border-color: #00ffff;
                                    transform: translate(2px, 2px);
                                }
                            }
                        </style>
                        <div class="row user-cards">

                            <!-- <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="single">
            <div class="icon"><i class="anticon anticon-file-add"></i></div>
            <div class="content">
                <h4><b>$</b><span class="count">101</span></h4>
                <p>Total Deposit</p>
            </div>
        </div>
    </div> -->

                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">

                                <div class="single neon-border">
                                    <div class="icon"><i class="fa-solid fa-sack-dollar"></i></div>
                                    <div class="content">
                                        <h4><b>$</b><span class="count">
                                                5
                                            </span>
                                        </h4>
                                        <p>Welcome Bonus </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 ">
                                <div class="single neon-border">
                                    <div class="icon"><i class="fa-solid fa-sack-dollar"></i></div>
                                    <div class="content">
                                        <h4><b>$</b><span class="count">0</span>
                                        </h4>
                                        <p>Sponsor Income</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="single neon-border">
                                    <div class="icon"><i class="fa-solid fa-sack-dollar"></i></div>
                                    <div class="content">
                                        <h4><b>$</b><span class="count">30.93</span></h4>
                                        <p>ROI Income</p>
                                    </div>
                                </div>
                            </div>


                            <!-- <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="single">
            <div class="icon"><i class="anticon anticon-account-book"></i></div>
            <div class="content">
                <h4><b>$</b><span class="count">0</span></h4>
                <p>Deposit Income</p>
            </div>
        </div>
    </div> -->


                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="single neon-border">
                                    <div class="icon"><i class="fa-solid fa-sack-dollar"></i></div>
                                    <div class="content">
                                        <h4><b>$</b><span class="count">0</span></h4>
                                        <p>Generation Income</p>
                                    </div>
                                </div>
                            </div>


                            <!-- <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="single">
            <div class="icon"><i class="anticon anticon-radar-chart"></i></div>
            <div class="content">
                <h4 class="count">0.00</h4>
                <p>Global Weekly Income</p>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="single">
            <div class="icon"><i class="anticon anticon-radar-chart"></i></div>
            <div class="content">
                <h4 class="count">0.00</h4>
                <p>Global Pool Income</p>
            </div>
        </div>
    </div>
-->

                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="single neon-border">
                                    <div class="icon"><i class="fa-solid fa-sack-dollar"></i></div>
                                    <div class="content">
                                        <h4 class="">
                                            0 </h4>
                                        <p>Rank</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="single neon-border">
                                    <div class="icon"><i class="fa-solid fa-sack-dollar"></i></div>
                                    <div class="content">
                                        <h4 class="">
                                            0 </h4>
                                        <p>Reward</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="single neon-border">
                                    <div class="icon"><i class="fa-solid fa-sack-dollar"></i></div>
                                    <div class="content">
                                        <h4 class=""> 0</h4>
                                        <p>Rank Income</p>
                                    </div>
                                </div>
                            </div>



                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="single neon-border">
                                    <div class="icon"><i class="fa-solid fa-sack-dollar"></i></div>
                                    <div class="content">
                                        <h4><b>$</b><span class="count">50</span></h4>
                                        <p>Total Deposit</p>
                                    </div>
                                </div>
                            </div>


                            <!-- <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="single">
            <div class="icon"><i class="anticon anticon-arrow-right"></i></div>
            <div class="content">
                <h4><b>$</b><span class="count">0</span></h4>
                <p>Total Transfer </p>
            </div>
        </div>
    </div> -->
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="single neon-border">
                                    <div class="icon"><i class="fa-solid fa-sack-dollar"></i></div>
                                    <div class="content">
                                        <h4><b>$</b><span class="count">27</span></h4>
                                        <p>Withdraw</p>
                                    </div>
                                </div>
                            </div>



                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="single neon-border">
                                    <div class="icon"><i class="fa-solid fa-sack-dollar"></i></div>
                                    <div class="content">
                                        <h4 class="count">3</h4>
                                        <p>Total Sponsors</p>
                                    </div>
                                </div>
                            </div>


                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="single neon-border">
                                    <div class="icon"><i class="anticon anticon-calender"></i></div>
                                    <div class="content">
                                        <p><b>Sign Up Date</b></p>
                                        <p>14/03/2024</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="single neon-border">
                                    <div class="icon"><i class="fa-solid fa-sack-dollar"></i></div>
                                    <div class="content">
                                        <h4><span class="count">101</span></h4>
                                        <p>All Transactions</p>
                                    </div>
                                </div>
                            </div>

                            <!--
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="single">
            <div class="icon"><i class="anticon anticon-radar-chart"></i></div>
            <div class="content">
                <p><b>Team Volume</b></p>
                <p>A Team : <span class="count"> 0 </span></p>
                <p>B Team : <span class="count"> 0 </span></p>
                <p>C Team : <span class="count"> 0 </span></p>
            </div>
        </div>
    </div>
     -->



                            <!--  <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">-->
                            <!--    <div class="single">-->
                            <!--        <div class="icon"><i class="anticon anticon-question"></i></div>-->
                            <!--        <div class="content">-->
                            <!--            <h4 class="count">0</h4>-->
                            <!--            <p>Total Ticket</p>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->
                            <!--  <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">-->
                            <!--    <div class="single">-->
                            <!--        <div class="icon"><i class="anticon anticon-question"></i></div>-->
                            <!--        <div class="content">-->
                            <!--            <h4 class="count">0</h4>-->
                            <!--            <p>Total Ticket</p>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->


                            <p > Copyright ©OANDAFOREX US 2024. All rights reserved.</p>


                        </div>


                        <!--<div class="row">
    <div class="col-xl-12">
        <div class="site-card">
            <div class="site-card-header">
                <h3 class="title">Recent Transactions</h3>
            </div>
            <div class="site-card-body table-responsive">
                <div class="site-datatable">
                    <table class="display data-table">
                        <thead>
                        <tr>
                            <th>Description</th>
                            <th>Transactions ID</th>
                            <th>Type</th>
                            <th>Amount</th>
                            <th>Fee</th>
                            <th>Status</th>
                            <th>Gateway</th>
                        </tr>
                        </thead>
                        <tbody>
                                                    <tr>
                                <td>
                                    <div class="table-description">
                                        <div class="icon">
                                            <i icon-name="backpack
                                         ">
                                            </i>
                                        </div>


                                        <div class="description">
                                            <strong>Master Package Plan Interest                                             </strong>
                                            <div class="date">Jun 25 2024 12:50</div>
                                        </div>
                                    </div>
                                </td>
                                <td><strong>TRXPYXSVTVW0O</strong></td>
                                <td>
                                    <div
                                        class="site-badge primary-bg">Interest</div>
                                </td>

                                <td><strong
                                        class="green-color">+0.375 USD</strong>
                                </td>
                                <td><strong>0 USD</strong></td>
                                <td>


                                                                            <div class="site-badge success">Success</div>
                                                                    </td>
                                <td><strong>System</strong></td>
                            </tr>
                                                    <tr>
                                <td>
                                    <div class="table-description">
                                        <div class="icon">
                                            <i icon-name="backpack
                                         ">
                                            </i>
                                        </div>


                                        <div class="description">
                                            <strong>Master Package Plan Interest                                             </strong>
                                            <div class="date">Jun 24 2024 12:45</div>
                                        </div>
                                    </div>
                                </td>
                                <td><strong>TRX5W0F2XQ6PU</strong></td>
                                <td>
                                    <div
                                        class="site-badge primary-bg">Interest</div>
                                </td>

                                <td><strong
                                        class="green-color">+0.375 USD</strong>
                                </td>
                                <td><strong>0 USD</strong></td>
                                <td>


                                                                            <div class="site-badge success">Success</div>
                                                                    </td>
                                <td><strong>System</strong></td>
                            </tr>
                                                    <tr>
                                <td>
                                    <div class="table-description">
                                        <div class="icon">
                                            <i icon-name="backpack
                                         ">
                                            </i>
                                        </div>


                                        <div class="description">
                                            <strong>Master Package Plan Interest                                             </strong>
                                            <div class="date">Jun 21 2024 01:00</div>
                                        </div>
                                    </div>
                                </td>
                                <td><strong>TRXXK09I4ZIY5</strong></td>
                                <td>
                                    <div
                                        class="site-badge primary-bg">Interest</div>
                                </td>

                                <td><strong
                                        class="green-color">+0.25 USD</strong>
                                </td>
                                <td><strong>0 USD</strong></td>
                                <td>


                                                                            <div class="site-badge success">Success</div>
                                                                    </td>
                                <td><strong>System</strong></td>
                            </tr>
                                                    <tr>
                                <td>
                                    <div class="table-description">
                                        <div class="icon">
                                            <i icon-name="backpack
                                         ">
                                            </i>
                                        </div>


                                        <div class="description">
                                            <strong>Master Package Plan Interest                                             </strong>
                                            <div class="date">Jun 20 2024 12:55</div>
                                        </div>
                                    </div>
                                </td>
                                <td><strong>TRXBK2YWYN2IK</strong></td>
                                <td>
                                    <div
                                        class="site-badge primary-bg">Interest</div>
                                </td>

                                <td><strong
                                        class="green-color">+0.25 USD</strong>
                                </td>
                                <td><strong>0 USD</strong></td>
                                <td>


                                                                            <div class="site-badge success">Success</div>
                                                                    </td>
                                <td><strong>System</strong></td>
                            </tr>
                                                    <tr>
                                <td>
                                    <div class="table-description">
                                        <div class="icon">
                                            <i icon-name="backpack
                                         ">
                                            </i>
                                        </div>


                                        <div class="description">
                                            <strong>Master Package Plan Interest                                             </strong>
                                            <div class="date">Jun 19 2024 12:55</div>
                                        </div>
                                    </div>
                                </td>
                                <td><strong>TRXCS3G1STZHB</strong></td>
                                <td>
                                    <div
                                        class="site-badge primary-bg">Interest</div>
                                </td>

                                <td><strong
                                        class="green-color">+0.25 USD</strong>
                                </td>
                                <td><strong>0 USD</strong></td>
                                <td>


                                                                            <div class="site-badge success">Success</div>
                                                                    </td>
                                <td><strong>System</strong></td>
                            </tr>
                        

                                                </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
-->

                        <input type="text" style="opacity: 0; position: absolute;" value="#" id="refLink" />

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

    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/notify.js"></script>
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