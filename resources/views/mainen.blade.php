@extends('layout')

@section('meta')
       <title>Career guidance for teenagers online: virtual career guidance, free tests</title>
       <meta name="description" content="Career guidance for teenagers online: virtual career guidance, free tests"/>
       <meta name="keywords" content="career guidance, online, for teenagers"/>
       <meta property="og:title" content="Career guidance for teenagers online: virtual career guidance, free tests" />
       <meta property="vk:image" content="https://profguide.org/images/share.png" />
       <meta property="og:image" content="https://profguide.org/images/share.png" />
       <meta property="og:url" content="https://profguide.org/">
       <meta property="og:type" content="website">
       <meta property="og:description" content="Career guidance for teenagers online: virtual career guidance, free tests">
@endsection

@section('content')
    <main class="section main edited">
        <section class=" section__primary first">
            <div class="content_wrapper">

                <h2>
                    Online Career Guidance Course
                </h2>

                <h3>
                    A virtual career counselor within the course will help you choose the direction of your career
                </h3>

                <a class="button button_start">
                   <span class="button_text">
                       Start
                   </span>
                </a>
            </div>
        </section>

        <section class="second">
            <div class="content_wrapper">
                <div class="bubble bubble_4">
                    <p class="bubble__text bubble_4_text"><span class="icon icon_star"></span>
                        The course is based on 20 years of consulting experience of an expert in career guidance Anna Isaenko
                    </p>
                </div>

                <div class="bubble  bubble_2 bubble_inverted">
                    <p class="bubble__text bubble_2_text"><span class="icon icon_head"></span>
                        Dialogue (instead of tests) - you communicate with a virtual specialist, answering her questions
                    </p>
                </div>

                <div class="bubble bubble_5">
                    <p class="bubble__text bubble_5_text"><span class="icon icon_museum"></span>
                        She also gives information on how to choose an educational institution and become a professional in the chosen field
                    </p>
                </div>

                <div class="bubble  bubble_1 bubble_inverted">
                    <p class="bubble__text bubble_1_text"><span class="icon icon_book"></span>
                        You receive individual results that are unique and only yours
                    </p>
                </div>

                <div class="bubble bubble_3">
                    <p id="start" class="bubble__text bubble_3_text">
                        Hi! 😃<br>
                        I will help you choose a profession
                    </p>
                </div>


            </div>
        </section>
        <div id="proforientation" class="third">
            <div class="content_wrapper">
                <h2>
                    Take Career Guidance
                </h2>
                <div class="flex" >
                    <div class="text-block" id="prof">

                        <p class="list-head">To start you will need:</p>
                        <ul class="checkbox-block">
                            <li>
                                <p>
                                    <input class="styled-checkbox" id="check1" type="checkbox" checked onclick="return false;">
                                    <label for="check1" class="checkbox">1 hour free time ⏳</label>
                                </p>
                            </li>
                            <li><p>
                                    <input class="styled-checkbox" id="check2" type="checkbox" checked onclick="return false;">
                                    <label for="check2" class="checkbox">A quiet place where no one will disturb</label>
                                </p>
                            </li>
                            <li><p>
                                    <input class="styled-checkbox" id="check3" type="checkbox" checked onclick="return false;">
                                    <label for="check3" class="checkbox">Computer 💻 or smartphone 📱</label>
                                </p>
                            </li>
                            <li><p>
                                    <input class="styled-checkbox" id="check4" type="checkbox" checked onclick="return false;">
                                    <label for="check4" class="checkbox">Good mood and desire to determine who you want to become!</label>
                                </p>
                            </li>
                            <li><p>
                                    <input class="styled-checkbox" id="check5" type="checkbox" checked onclick="return false;">
                                    <label for="check5" class="checkbox">Pay a small fee. This will help you maintain the course and motivate you to reach the end 💪</label>
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
                    <span>As a result you</span> 😎
                </h2>

                <ul class="flex">
                    <li>
                        <p style="margin-bottom: 10px">🔥</p>
                        <p>
                            Decide on your profession
                        </p>
                    </li>
                    <li>
                        <p style="margin-bottom: 10px">🔥</p>
                        <p>
                            Learn how to choose an educational institution or courses
                        </p>
                    </li>
                    <li>
                        <p style="margin-bottom: 10px">🔥</p>
                        <p>
                            Make an action plan
                        </p>
                    </li>
                </ul>

                {{--<h3 class="subheader">
                    Стоимость до {!! $data['datelast'] !!} включительно <strike>{!! $data['price'] !!}</strike> {!! $data['wsb_total'] !!} {!! $data['wsb_currency_id'] !!}
                </h3>---}}
                <div class="plans">
                    <div class="plan-3">
                        <h3 class="subheader">
                           <span class="gray">FREE</span>
                        </h3>
                        <p class="subtitle">Take your first 2 steps<br> to the career choice</p>
                        <form action="{{ Request::url()  }}/course-demo" method="get" id="plan3" class="payment payment-plan3">
                            <a class="button" href="{{ Request::url()  }}/course-demo" id="plan3">
                                <span class="button_text">
                                    Try
                                </span>
                            </a>
                        </form>
                    </div>
                    <div class="plan-1">
                        <h3 class="subheader">
                            @if ($data['wsb_currency_id'] === "USD") <span class="gray">7.99 USD</span>&nbsp;&nbsp;<span class="crossed">13 USD</span>@endif
                        </h3>
                        <p class="subtitle">Access to the course<br> will come by email</p>
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

                            <input type="submit" id="payment-{!! $data['loc'] !!}-plan1" value="Buy" class="button">
                        </form>
                    </div>
                    <div class="plan-2">
                        <h3 class="subheader">
                            @if ($data['wsb_currency_id'] === "USD") <span class="gray">12.49 USD</span>&nbsp;&nbsp;<span class="crossed">19.99 USD</span>@endif
                        </h3>
                        <p class="subtitle">Access to the course<br><br>
                            Online consultation with a <a href="https://www.instagram.com/profivaleriya/" style="color: #333333; text-decoration: none;">career guidance specialist</a><br class="only-desktop">
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

                            <input type="submit" id="payment-{!! $data['loc'] !!}-plan2" value="Buy" class="button">
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section id="free" class="fifth">
            <div class="content_wrapper">
                <h2>
                    <span>Free tests</span> 🆓
                </h2>

                <h3>
                    Before taking the course, we recommend you some tests. They will take approximately 40 minutes to complete. At the end, take screenshots of the results for yourself - they will still be useful to you!
                </h3>

                <div class="text-block">
                    <ul>
                        <li>✅ <a href="https://openpsychometrics.org/tests/RIASEC/" target="_blank">Holland test</a></li>
                        <li>✅ <a href="https://www.16personalities.com/free-personality-test" target="_blank">16personalities</a></li>
                    </ul>

                    <div class="bubble bubble_6 bubble_inverted">
                        <p class="bubble__text bubble_6_text">
                           Tests do not play a decisive role in the career guidance process, but they will not be superfluous either 😎
                        </p>
                    </div>
                </div>

            </div>
        </section>

        <section class="sixth">
            <div class="content_wrapper">
                <h2>
                    <span>Feedbacks 😃 </span>
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
                       Start Career Guidance
                   </span>
                </a>

            </div>
        </section>
    </main>
@endsection
