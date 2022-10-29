@extends('layout')

@section('meta')
    <title>Профориентация онлайн - Profguide</title>
    <meta name="description" content="Онлайн-курс для подростков от 14 до 17 лет. Курс в интерактивном режиме воспроизводит консультацию с профориентологом, и в итоге ты получаешь свой неповторимый ответ на вопрос кем хочешь быть именно ты"/>
    <meta name="keywords" content="профориентация, онлайн, для подростков"/>
    <meta property="og:title" content="Профориентация онлайн - Profguide" />
    <meta property="vk:image" content="https://profguide.org/images/share.png" />
    <meta property="og:image" content="https://profguide.org/images/share.png" />
    <meta property="og:url" content="https://profguide.org/pass-course">
    <meta property="og:type" content="website">
    <meta property="og:description" content="Онлайн-курс для подростков от 14 до 17 лет. Курс в интерактивном режиме воспроизводит консультацию с профориентологом, и в итоге ты получаешь свой неповторимый ответ на вопрос кем хочешь быть именно ты"/>

@endsection

@section('content')
    <main class="section page_start-course">
        <div id="free" class="section section__primary">
            <div class="content_wrapper">
                <h2>
                    Бесплатный список тестов
                </h2>

                <h3>
                    Перед началом курса рекомендуем тебе пройти ряд бесплатных тестов. После прохождения сделай скриншоты результатов для себя. В самом конце курса мы к ним обратимся, чтобы сопоставить с тем, что у тебя получилось
                </h3>

                <div class="text-block text_first">
                    <ul>
                        <li>1. <a href="https://psytests.org/profession/hollandA-run.html" target="_blank">Тест Голланда</a></li>
                        <li>2. <a href="https://testometrika.com/personality-and-temper/the-formula-of-temperament-a-belov/" target="_blank">Формула темперамента Белова</a></li>
                        <li>3. <a href="https://www.16personalities.com/ru/test-lichnosti" target="_blank">16personalities</a></li>
                        <li>4. <a href="https://psytests.org/profession/mapG-run.html" target="_blank">Карта интересов Голомштока</a></li>
                    </ul>
                </div>

                <div class="scene_first">
                    <div class="mountains">
                    </div>
                </div>
            </div>
        </div>
        <div id="course" class="section section__secondary">
            <div class="content_wrapper">
                <h2>
                    Пройти профориентацию
                </h2>

                <div class="text-block text_second">
                    <p>

                    </p>
                    <p class="list-head"><b>Тебе понадобится:</b></p>
                    <ul class="checkbox-block">
                        <li><p>
                                <input class="styled-checkbox" id="check1" type="checkbox">
                                <label for="check1" class="checkbox">1,5 часа свободного времени</label>
                            </p>
                        </li>
                        <li><p>
                                <input class="styled-checkbox" id="check2" type="checkbox">
                                <label for="check2" class="checkbox">Спокойное место, где никто не будет мешать</label>
                            </p>
                        </li>
                        <li><p>
                                <input class="styled-checkbox" id="check3" type="checkbox">
                                <label for="check3" class="checkbox">Компьютер или смартфон</label>
                            </p>
                        </li>
                        <li><p>
                                <input class="styled-checkbox" id="check4" type="checkbox">
                                <label for="check4" class="checkbox">Хорошее настроение и желание определить свое направление деятельности!</label>
                            </p>
                        </li>
                        <li><p>
                                <input class="styled-checkbox" id="check5" type="checkbox">
                                <label for="check5" class="checkbox">Оплатить небольшой взнос — это позволит поддерживать проект и мотивирует тебя пройти весь курс до конца</label>
                            </p>
                        </li>
                    </ul>
                </div>

                <div class="scene_second">
                    <div class="mountains mountains-c">
                    </div>
                    <div class="cup">
                    </div>
                    <div class="ball">
                    </div>
                    <div class="book">
                    </div>
                    <div class="bag">
                    </div>
                </div>
            </div>
        </div>
        <div id="our-course" class="section section__primary section_third">
            <div class="content_wrapper">
                <h2>
                    Преимущества курса:
                </h2>

                <div class="text-block text_third">
                    <ul class="checkbox-block">
                        <li>
                            Составлен на основе многолетнего опыта психолога-профориентолога, эксперта в профориентации подростков Анны Исаенко
                        </li>
                        <li>
                            Основан на диалоге - ты проходишь консультацию, отвечая на вопросы виртуального профориентолога и получая от него полезную обратную связь
                        </li>
                        <li>
                            Позволяет осознать ответственность за свой выбор и продвинуться в нем, поэтапно определяя, что нужно именно тебе
                        </li>
                        <li>
                            Дает важные  советы о том, как выбрать учебное заведение и стать профессионалом в выбранной сфере
                        </li>
                        <li>
                            Высылает тебе на email индивидуальные результаты, которые неповторимы и только твои
                        </li>
                    </ul>
                </div>
                <div class="boy">
                </div>
                <div class="clearfix"></div>
                <h3 class="subheader">
                    Стоимость до 31.12.2021 включительно <strike>30</strike> 10 BYN
                </h3>
                <form action="/payment/check" method="post" class="payment">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input type="hidden" name="scart" value="{!! $data['scart'] !!}">
                    <input type="hidden" name="wsb_version"  value="{!! $data['wsb_version'] !!}">
                    <input type="hidden" name="wsb_language_id" value="{!! $data['wsb_language_id'] !!}">
                    <input type="hidden" name="wsb_storeid" value="{!! $data['wsb_storeid'] !!}">
                    <input type="hidden" name="wsb_store" value="{!! $data['wsb_store'] !!}">
                    <input type="hidden" name="wsb_order_num" id="order" value="">
                    <input type="hidden" name="wsb_test" value="{!! $data['wsb_test'] !!}">
                    <input type="hidden" name="wsb_currency_id" value="{!! $data['wsb_currency_id'] !!}">
                    <input type="hidden" name="wsb_seed" value="{!! $data['wsb_seed'] !!}">
                    <input type="hidden" name="wsb_return_url" value="{!! $data['wsb_return_url'] !!}">
                    <input type="hidden" name="wsb_cancel_return_url" value="{!! $data['wsb_cancel_return_url'] !!}">
                    <input type="hidden" name="wsb_notify_url" value="{!! $data['wsb_notify_url'] !!}">
                    <input type="hidden" name="wsb_invoice_item_name[0]" value="{!! $data['wsb_invoice_item_name'] !!}">
                    <input type="hidden" name="wsb_invoice_item_quantity[0]" value="{!! $data['wsb_invoice_item_quantity'] !!}">
                    <input type="hidden" name="wsb_invoice_item_price[0]" value="{!! $data['wsb_invoice_item_price'] !!}">
                    <input type="hidden" name="wsb_total" value="{!! $data['wsb_total'] !!}">
                    <input type="hidden" name="wsb_signature" id="signature" value="">
                    <input type="hidden" name="wsb_signature_open" id="signatureOpen" value="">
                    <input type="email" class="textbox" name="wsb_email" placeholder="Email для получения доступа" required>
                    <input type="submit" value="Приобрести" class="button">
                </form>

                <!--<h3 class="subheader">
                    Или сначала попробуйте формат
                </h3>-->
                <a class="button" href="/course-demo/">
                   <span class="button_text">
                       Демо-версия
                   </span>
                </a>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="section section__secondary section_four">
            <div class="content_wrapper">
                <h2>
                    Делитесь с друзьями
                </h2>
                <div class="girl desktop-v">
                </div>
                <div class="text-block text_four">
                    Данный курс сделан почти бесплатным специально, чтобы его мог позволить себе каждый, кто столкнулся с проблемой выбора профессии и не может определиться.
                    <br>
                    <br>
                    Он сделан качественно на основе многолетнего опыта профессиональной профориентационной работы с подростками. Но профориентологов мало, а ребят много, тем более услуги психолога стоят дорого. Поэтому и был создан этот курс, чтобы сделать качественную профориентацию доступной каждому. Курс имитирует живую консультацию и помогает вам разобраться в себе. Проходите сами, делитесь своими впечатлениями и рассказывайте друзьям!
                </div>
                <div class="clearfix"></div>

                <p class="social-title">Поделиться:</p>
                <div class="social-share">
                    <a class="social-icon tg-icon" target="_blank" href="tg://msg_url?url=https://profguide.org&amp;text=Крутой курс по профориентации — мне очень понравился, советую тоже пройти: profguide.teenjob.by"></a>
                    <a class="social-icon vk-icon" target="_blank" href="https://vk.com/share.php?url=https://profguide.org"></a>
                    <a class="social-icon fb-icon" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://profguide.org"></a>
                </div>
            </div>
        </div>
    </main>

@endsection
