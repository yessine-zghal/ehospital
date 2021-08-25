<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Health Center">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>E-Hospital</title>
    <link rel="stylesheet" href="css/welcome.css" media="screen">
    <link rel="stylesheet" href="css/welcome1.css" media="screen">
    <script class="u-script" type="text/javascript" src="js/jquery-1.9.1.min.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/welcome.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.23.8, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Anton:400">
<style>
     .registerbuttom {
       top:11%;
       left:55%;
       width:100px;
       height:40px;
       position: absolute;
       z-index: 2;
       background: orange; 
       }
       </style>

    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": ""
        }
    </script>
    <meta name="theme-color" content="#036d4c">
    <meta property="og:title" content="E-Hospital">
    <meta property="og:type" content="website">
</head>

<body class="u-body u-overlap">
    <header class="u-clearfix u-header u-header" id="sec-5942">
        <div class="u-clearfix u-sheet u-sheet-1">
            <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
                <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
                    <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
                        <svg>
                            <use xlink:href="#menu-hamburger"></use>
                        </svg>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <defs>
                                <symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;">
                                    <rect y="1" width="16" height="2"></rect>
                                    <rect y="7" width="16" height="2"></rect>
                                    <rect y="13" width="16" height="2"></rect>
                                </symbol>
                            </defs>
                        </svg>
                    </a>
                </div>
                <div class="u-nav-container">
                    <ul class="u-nav u-unstyled u-nav-1">
                        <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Page-10.html" style="padding: 10px 20px;">Page 10</a>
                        </li>
                    </ul>
                </div>
                <div class="u-nav-container-collapse">
                    <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                        <div class="u-sidenav-overflow">
                            <div class="u-menu-close"></div>
                            <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                                
                            </ul>
                        </div>
                    </div>
                    <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
                </div>
            </nav>
            <img class="u-image u-image-circle u-preserve-proportions u-image-1" src="assets/img/logo.png" alt="" data-image-width="240" data-image-height="240">
         @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            <a href="{{ url('/home') }}" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-1-light-1 u-radius-50 u-btn-1">Home</a>
            @else
            <a href="{{ route('login') }}"class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-1-light-1 u-radius-50 u-btn-2">login</a>
            @if (Route::has('register'))
            
            <a href="{{ route('register') }}"class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-1-light-1 u-radius-50 u-btn-3  " >Register</a>
            @endif
            
            @endauth
         
        </div>
        @endif
    </header>
    <section class="u-clearfix u-image u-section-1" id="carousel_2037">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-clearfix u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-align-center u-container-style u-image u-layout-cell u-left-cell u-size-31 u-image-1">
                            <div class="u-container-layout u-valign-bottom u-container-layout-1"></div>
                        </div>
                        <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-29 u-layout-cell-2">
                            <div class="u-container-layout u-container-layout-2">
                                <h1 class="u-custom-font u-text u-text-custom-color-1 u-text-1">E-Hospital</h1>
                                <h3 class="u-text u-text-body-alt-color u-text-2">Connect with complete care</h3>
                                <p class="u-text u-text-body-alt-color u-text-3">we provide a network of more than 5,000 doctors and providers at primary care and specialty clinics across the state.<br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-a295">
        <div class="u-clearfix u-sheet u-sheet-1">
            <p class="u-small-text u-text u-text-variant u-text-1">Copyright&nbsp;2021&nbsp;E-Hospital</p>
        </div>
    </footer>
    
</body>

</html>