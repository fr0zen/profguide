<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('seo_meta')
    @yield('meta')
    <link rel="icon" type="image/png" href="/images/favicon.png">
    <!-- Fonts -->


    <!-- Styles -->

    <link href="/css/static/staticapp.css" rel="stylesheet">
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5JD2HBN');</script>



</head>
<!--<body class="page disableEvent">-->
<body class="page">
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5JD2HBN" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- Google Tag Manager (noscript) -->

<!-- End Google Tag Manager (noscript) -->
<div class="wrapper">
    <header class="header">
        <div class="header_wrapper">
            <a class="logo" href="/">
                <div class="logo_icon"></div>
                <h1 class="logo_text">PROFGUIDE</h1>
            </a>

            <div class="header-nav">
                <ul>
                    <li><a href="/#proforientation">Пройти профориентацию</a></li>
                    <li><a href="/#free">Бесплатный список тестов</a></li>
                    <li><a href="/contact-us">Связаться</a></li>
                </ul>
            </div>

            <div class="hamburger-menu">
                <div class="bar"></div>
            </div>

            <div class="mobile-nav hide">
                <ul>
                    <li><a href="/#proforientation">Пройти профориентацию</a></li>
                    <li><a href="/#free">Бесплатный список тестов</a></li>
                    <li><a href="/contact-us">Связаться</a></li>
                </ul>
            </div>
        </div>
    </header>
    @yield('content')
    <footer class="footer">
        <div class="footer_wrapper">

            <nav class="menu">
                <ul>
                    <li><a href="/#course">Пройти профориентацию</a></li>
                    <li><a href="/conditions">Договор публичной оферты</a></li>
                    <li><a href="/contact-us">Контакты</a></li>
                </ul>
            </nav>

            <div class="copyright">
                <div class="year">© 2022</div>
                <a class="freepik" href="http://www.freepik.com/">designed by freepik</a>
            </div>

            <div class="payment_systems">
                <p class="payment_text">
                    <br>Индивидуальный предприниматель
                    <br>Омелюсик Валерия Сергеевна
                    <br>Адрес: Республика Беларусь, 220059 г. Минск,
                    <br>ул. П. Панченко, д. 26, кв. 108
                    <br>УНП: 193415413
                    <br>Банковские реквизиты:
                    <br>р/c: BY10ALFA30132679300010270000
                    <br>ЗАО «Альфа-Банк»
                    <br>Республика Беларусь, 220013, г. Минск, ул. Сурганова, 43-47
                    <br>BIC: ALFABY2X
                    <br>Режим работы: Пн-Пт 19:00-21:00; Сб-Вс 10:00-19:00
                    <br>Тел. +375 44 5184726
                    <br>email: teenjob.by@gmail.com
                </p>
                <img src="/images/payment.png" class="payment_logos"></img>
            </div>
        </div>
    </footer>
</div>

</body>

<script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
<!--<script src="/js/app.js"></script>-->
<script>
    (function () {
        $('.hamburger-menu').on('click', function() {

            $('.bar').toggleClass('animate');
            var mobileNav = $('.mobile-nav');
            mobileNav.toggleClass('hide show');
            $('html, body').css('overflow', 'hidden');
        })
        $('.mobile-nav').on('click', function() {

            $('.bar').toggleClass('animate');
            var mobileNav = $('.mobile-nav');
            mobileNav.toggleClass('hide show');
            $('html, body').css('overflow', 'auto');
        })
    })();


        $(document).ready(function() {
            $(".disableEvent").on("contextmenu",function(){
                return false;
            });
            $('.disableEvent').bind('cut copy paste', function (e) {
                e.preventDefault();
            });
        });

</script>

<script>
    $(document).ready(function() {
        $('form').submit(function(e) {

            e.preventDefault();
            var form = $(e.target);
            console.log(e.target);
            console.log(form);
            $.ajax({
                url: form.attr('action'),
                type: 'post',
                data: form.serialize(),
                success: function(data) {


                    if (data)
                    {
                        $("#" + data.info.form).attr('action', 'https://payment.webpay.by');

                        $("#" + data.info.form + " .order").val(data.info.order_num_id);
                        $("#" + data.info.form + " .signatureOpen").val(data.info.wsb_signature_open);
                        $("#" + data.info.form + " .signature").val(data.info.wsb_signature);
                        $("#" + data.info.form + " .seed").val(data.info.wsb_seed);
                        this.data = $("#" + data.info.form).serialize();
                        $("#" + data.info.form).unbind('submit').submit();
                    }
                    else
                    {
                        console.log("order not created");
                    }
                },
                error: function() {
                    console.log("ajax call error");
                }
            });
        });
    });

    var el = document.getElementById("start");
    var btn = document.querySelector('.button_start');
    var btnmenu = document.querySelector('.button_menu_start');

    function handleButtonClick() {
        el.scrollIntoView({block: "start", behavior: "smooth"});
    }
    function handleButton2Click() {
        el.scrollIntoView({block: "start", behavior: "smooth"});
    }

    btn.addEventListener('click', handleButtonClick);
    btnmenu.addEventListener('click', handleButton2Click);
</script>



<!-- Yandex.Metrika counter -->


<!-- /Yandex.Metrika counter -->
@yield('scripts')
</html>
