@extends('layout')

@section('meta')
       <title>Профориентация подростков онлайн: виртуальный профориентолог, бесплатные тесты</title>
       <meta name="description" content="Профориентация подростков онлайн: виртуальный профориентолог, бесплатные тесты"/>
       <meta name="keywords" content="профориентация, онлайн, для подростков"/>
       <meta property="og:title" content="Профориентация подростков онлайн: виртуальный профориентолог, бесплатные тесты" />
       <meta property="vk:image" content="https://profguide.org/images/share.png" />
       <meta property="og:image" content="https://profguide.org/images/share.png" />
       <meta property="og:url" content="https://profguide.org/">
       <meta property="og:type" content="website">
       <meta property="og:description" content="Профориентация подростков онлайн: виртуальный профориентолог, бесплатные тесты">
@endsection

@section('content')
    <main class="section main edited">
        <section class=" section__primary first">
            <div class="content_wrapper">

                <h2>
                    Профориентационный онлайн-курс
                </h2>

                <h3>
                    Виртуальный профориентолог внутри курса поможет тебе выбрать направление деятельности
                </h3>

                <a class="button button_start">
                   <span class="button_text">
                       Начать
                   </span>
                </a>
            </div>
        </section>

        <section class="second">
            <div class="content_wrapper">
                <div class="bubble bubble_4">
                    <p class="bubble__text bubble_4_text"><span class="icon icon_star"></span>
                        В основе курса лежит 20-летний опыт консультаций эксперта-профориентолога Анны Исаенко
                    </p>
                </div>

                <div class="bubble  bubble_2 bubble_inverted">
                    <p class="bubble__text bubble_2_text"><span class="icon icon_head"></span>
                        Диалог (вместо тестов) - ты общаешься с виртуальным специалистом, отвечая на его вопросы
                    </p>
                </div>

                <div class="bubble bubble_5">
                    <p class="bubble__text bubble_5_text"><span class="icon icon_museum"></span>
                        Даем информацию о том, как выбрать учебное заведение и стать профессионалом в выбранной сфере
                    </p>
                </div>

                <div class="bubble  bubble_1 bubble_inverted">
                    <p class="bubble__text bubble_1_text"><span class="icon icon_book"></span>
                        Высылаем тебе индивидуальные результаты, которые неповторимы и только твои
                    </p>
                </div>

                <div class="bubble bubble_3">
                    <p id="start" class="bubble__text bubble_3_text">
                        Привет! 😃<br>
                        Я помогу тебе выбрать профессию
                    </p>
                </div>


            </div>
        </section>
        <div id="proforientation" class="third">
            <div class="content_wrapper">
                <h2>
                    Пройти профориентацию
                </h2>
                <div class="flex" >
                    <div class="text-block" id="prof">

                        <p class="list-head">Для старта тебе понадобится:</p>
                        <ul class="checkbox-block">
                            <li>
                                <p>
                                    <input class="styled-checkbox" id="check1" type="checkbox" checked onclick="return false;">
                                    <label for="check1" class="checkbox">1,5 часа свободного времени ⏳</label>
                                </p>
                            </li>
                            <li><p>
                                    <input class="styled-checkbox" id="check2" type="checkbox" checked onclick="return false;">
                                    <label for="check2" class="checkbox">Спокойное место, где никто не будет мешать</label>
                                </p>
                            </li>
                            <li><p>
                                    <input class="styled-checkbox" id="check3" type="checkbox" checked onclick="return false;">
                                    <label for="check3" class="checkbox">Компьютер 💻 или смартфон 📱</label>
                                </p>
                            </li>
                            <li><p>
                                    <input class="styled-checkbox" id="check4" type="checkbox" checked onclick="return false;">
                                    <label for="check4" class="checkbox">Хорошее настроение и желание определить свое направление деятельности!</label>
                                </p>
                            </li>
                            <li><p>
                                    <input class="styled-checkbox" id="check5" type="checkbox" checked onclick="return false;">
                                    <label for="check5" class="checkbox">Оплатить небольшой взнос 😊 — это позволит поддерживать курс и мотивирует тебя дойти до конца 💪</label>
                                </p>
                            </li>
                        </ul>

                    </div>
                    <div class="road">
                        <img src="/images/main-road.png">
                    </div>
                </div>

            </div>
        </div>

        <section id="course" class="fourth">
            <div class="content_wrapper">
                <h2>
                    <span>В итоге ты</span> 😎
                </h2>

                <ul class="flex">
                    <li>
                        <p style="margin-bottom: 10px">🔥</p>
                        <p>
                            Определишься со своим направлением деятельности
                        </p>
                    </li>
                    <li>
                        <p style="margin-bottom: 10px">🔥</p>
                        <p>
                            Узнаешь как выбрать учебное заведение или курсы
                        </p>
                    </li>
                    <li>
                        <p style="margin-bottom: 10px">🔥</p>
                        <p>
                            Составишь план действий
                        </p>
                    </li>
                </ul>

                {{--<h3 class="subheader">
                    Стоимость до {!! $data['datelast'] !!} включительно <strike>{!! $data['price'] !!}</strike> {!! $data['wsb_total'] !!} {!! $data['wsb_currency_id'] !!}
                </h3>---}}
                <div class="plans">
                    <div class="plan-3">
                        <h3 class="subheader">
                           <span class="gray">БЕСПЛАТНО</span>
                        </h3>
                        <p class="subtitle">Сделай свои первые 2 шага<br> к выбору профессии</p>
                        <form action="{{ Request::url()  }}/course-demo" method="get" id="plan3" class="payment payment-plan3">
                            <a class="button" href="{{ Request::url()  }}/course-demo" id="plan3">
                                <span class="button_text">
                                    Попробовать
                                </span>
                            </a>
                        </form>
                    </div>
                    <div class="plan-1">
                        <h3 class="subheader">
                            @if ($data['wsb_currency_id'] === "BYN") <span class="gray">19 BYN</span>&nbsp;&nbsp;<span class="crossed">35 BYN</span>@endif
                        </h3>
                        <p class="subtitle">Доступ к курсу<br> (придет
                            на email)</p>
                        <form action="/payment/check" method="post" id="plan1" class="payment payment-{!! $data['loc'] !!}-plan1">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <input type="hidden" name="form" value="plan1">
                            <input type="hidden" name="scart" value="{!! $data['scart'] !!}">
                            <input type="hidden" name="wsb_version"  value="{!! $data['wsb_version'] !!}">
                            <input type="hidden" name="wsb_language_id" value="{!! $data['wsb_language_id'] !!}">
                            <input type="hidden" name="wsb_storeid" value="{!! $data['wsb_storeid'] !!}">
                            <input type="hidden" name="wsb_store" value="{!! $data['wsb_store'] !!}">
                            <input type="hidden" name="wsb_order_num" class="order" value="">
                            <input type="hidden" name="wsb_test" value="{!! $data['wsb_test'] !!}">
                            <input type="hidden" name="wsb_currency_id" value="{!! $data['wsb_currency_id'] !!}">
                            <input type="hidden" name="wsb_seed" class="seed" value="">
                            <input type="hidden" name="wsb_return_url" value="{!! $data['wsb_return_url'] !!}">
                            <input type="hidden" name="wsb_cancel_return_url" value="{!! $data['wsb_cancel_return_url'] !!}">
                            <input type="hidden" name="wsb_notify_url" value="{!! $data['wsb_notify_url'] !!}">
                            <input type="hidden" name="wsb_invoice_item_name[0]" value="{!! $data['wsb_invoice_item_name'] !!}">
                            <input type="hidden" name="wsb_invoice_item_quantity[0]" value="{!! $data['wsb_invoice_item_quantity'] !!}">
                            <input type="hidden" name="wsb_invoice_item_price[0]" value="{!! $data['wsb_invoice_item_price'] !!}">
                            <input type="hidden" name="wsb_total" value="{!! $data['wsb_total'] !!}">
                            <input type="hidden" name="wsb_signature" class="signature" value="">
                            <input type="hidden" name="wsb_signature_open" class="signatureOpen" value="">

                            <input type="submit" id="payment-{!! $data['loc'] !!}-plan1" value="Купить" class="button">
                        </form>
                    </div>
                    <div class="plan-2">
                        <h3 class="subheader">
                            @if ($data['wsb_currency_id'] === "BYN") <span class="gray">29 BYN</span>&nbsp;&nbsp;<span class="crossed">49 BYN</span>@endif
                        </h3>
                        <p class="subtitle">Доступ к курсу<br><br>
                            Онлайн консультация с <a href="https://www.instagram.com/profivaleriya/" style="color: #333333; text-decoration: none;">профориентологом</a><br class="only-desktop">
                            (30 минут)</p>
                        <form action="/payment/check" method="post" id="plan2" class="payment payment-{!! $data['loc'] !!}-plan2">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <input type="hidden" name="form" value="plan2">
                            <input type="hidden" name="scart" value="{!! $data['scart'] !!}">
                            <input type="hidden" name="wsb_version"  value="{!! $data['wsb_version'] !!}">
                            <input type="hidden" name="wsb_language_id" value="{!! $data['wsb_language_id'] !!}">
                            <input type="hidden" name="wsb_storeid" value="{!! $data['wsb_storeid'] !!}">
                            <input type="hidden" name="wsb_store" value="{!! $data['wsb_store'] !!}">
                            <input type="hidden" name="wsb_order_num" class="order" value="">
                            <input type="hidden" name="wsb_test" value="{!! $data['wsb_test'] !!}">
                            <input type="hidden" name="wsb_currency_id" value="{!! $data['wsb_currency_id'] !!}">
                            <input type="hidden" name="wsb_seed" class="seed" value="">
                            <input type="hidden" name="wsb_return_url" value="{!! $data['wsb_return_url'] !!}">
                            <input type="hidden" name="wsb_cancel_return_url" value="{!! $data['wsb_cancel_return_url'] !!}">
                            <input type="hidden" name="wsb_notify_url" value="{!! $data['wsb_notify_url'] !!}">
                            <input type="hidden" name="wsb_invoice_item_name[0]" value="{!! $data['wsb_invoice_item_name'] !!}">
                            <input type="hidden" name="wsb_invoice_item_quantity[0]" value="{!! $data['wsb_invoice_item_quantity'] !!}">
                            <input type="hidden" name="wsb_invoice_item_price[0]" value="{!! $data['wsb_invoice_item_price2'] !!}">
                            <input type="hidden" name="wsb_total" value="{!! $data['wsb_total2'] !!}">
                            <input type="hidden" name="wsb_signature" class="signature" value="">
                            <input type="hidden" name="wsb_signature_open" class="signatureOpen" value="">

                            <input type="submit" id="payment-{!! $data['loc'] !!}-plan2" value="Купить" class="button">
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section id="free" class="fifth">
            <div class="content_wrapper">
                <h2>
                    <span>Бесплатный список тестов</span> 🆓
                </h2>

                <h3>
                    Перед прохождением курса, рекомендуем тебе ряд тестов. Их прохождение займет примерно 40 минут. По окончании сделай для себя скриншоты результатов - они тебе еще пригодятся!
                </h3>

                <div class="text-block">
                    <ul>
                        <li>✅ <a href="https://psytests.org/profession/hollandA-run.html" target="_blank">Тест Голланда</a></li>
                        <li>✅ <a href="https://testometrika.com/personality-and-temper/the-formula-of-temperament-a-belov/" target="_blank">Формула темперамента Белова</a></li>
                        <li>✅ <a href="https://www.16personalities.com/ru/test-lichnosti" target="_blank">16personalities</a></li>
                        <li>✅ <a href="https://psytests.org/profession/mapG-run.html" target="_blank">Карта интересов Голомштока</a></li>
                    </ul>

                    <div class="bubble bubble_6 bubble_inverted">
                        <p class="bubble__text bubble_6_text">
                            Тесты не играют решающую роль в процессе профориентации, но и лишними не будут 😎
                        </p>
                    </div>
                </div>

            </div>
        </section>

        <section class="sixth">
            <div class="content_wrapper">
                <h2>
                    <span>Отзывы 😃 </span>
                </h2>

                <div class="images-reviews">
                    <div class="block-1">
                        <img class="review" src="/images/review-1.jpg" alt="review">
                        <img  class="review" src="/images/review-3.png" alt="review">
                        <img  class="review" src="/images/review-4.png" alt="review">
                    </div>
                    <div class="block-2">
                        <img  class="review" src="/images/review-2.jpg" alt="review">
                    </div>
                </div>

                <a class="button" href="#proforientation">
                   <span class="button_text">
                       Начать профориентацию
                   </span>
                </a>

            </div>
        </section>
    </main>
@endsection
