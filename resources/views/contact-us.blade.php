@extends('layout')

@section('meta')
    <title>Свяжитесь с нами - Profguide</title>
    <meta name="description" content="Не стесняйтесь, пожалуйста, и присылайте нам свои письма с вопросами, пожеланиями или комментариями. Мы рады и читаем каждое сообщение"/>
    <meta property="og:title" content="Свяжитесь с нами" />
    <meta property="vk:image" content="https://profguide.org/images/share.png" />
    <meta property="og:image" content="https://profguide.org/images/share.png" />
    <meta property="og:url" content="https://profguide.org/contact-us">
    <meta property="og:type" content="website">
    <meta property="og:description" content="Не стесняйтесь, пожалуйста, и присылайте нам свои письма с вопросами, пожеланиями или комментариями. Мы рады и читаем каждое сообщение"/>
@endsection

@section('content')

     <main class="section page_contacts">
        <div class="content_wrapper">
            <h2>
                Свяжитесь с нами
            </h2>
            <div class="text-block">
                <p class="text">
                    Не стесняйтесь, пожалуйста, и присылайте нам свои письма с вопросами, пожеланиями или комментариями. Мы рады и читаем каждое сообщение. В данный момент мы можем отвечать на сообщения на русском, белорусском и английском языке.
                </p>
                <p class="text">
                    <br>
                    <a class="text" href="mailto:teenjob.by@gmail.com">teenjob.by@gmail.com</a>
                </p>
            </div>
            <div class="social">
                <a class="social-icon tg-icon" target="_blank" href="https://t.me/teenjob_by"></a>
                <a class="social-icon in-icon" target="_blank" href="https://www.instagram.com/teenjob.by/?hl=ru"></a>
                <a class="social-icon vk-icon" target="_blank" href="https://vk.com/teenjob_by"></a>
                <a class="social-icon fb-icon" target="_blank" href="https://www.facebook.com/teenjob.by/"></a>
            </div>
        </div>
    </main>
@endsection
