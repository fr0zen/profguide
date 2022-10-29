@extends('layout')

@section('meta')
       <title>Онлайн-курс по профориентации - Profguide</title>
       <meta name="description" content="Профориентация для тебя. Определись с направлением деятельности, составь карту своей желанной жизни и начни движение на свою вершину"/>
       <meta name="keywords" content="профориентация, онлайн, для подростков"/>
       <meta property="og:title" content="Онлайн-курс по профориентации для подростков - Profguide" />
       <meta property="vk:image" content="https://profguide.org/images/share.png" />
       <meta property="og:image" content="https://profguide.org/images/share.png" />
       <meta property="og:url" content="https://profguide.org/">
       <meta property="og:title" content="Онлайн-курс по профориентации">
       <meta property="og:type" content="website">
       <meta property="og:description" content="Профориентация для тебя. Определись с направлением деятельности, составь карту своей желанной жизни и начни движение на свою вершину">


@endsection
@section('scripts')
<script>
    $(document).ready(function() {
        $('form').submit(function(e) {

            e.preventDefault();

            $.ajax({
                url: $('form').attr('action'),
                type: 'post',
                data: $('form').serialize(),
                success: function(data) {


                    if (data)
                    {
                        $('form').attr('action', 'https://payment.webpay.by');
                        $('form').unbind('submit').submit();
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
</script>
@endsection

@section('content')
    <main class="section section__primary edited payment">
        <div class="content_wrapper">
            <h2>
                Страница оплаты
            </h2>
            <h3>
                Ссылка на курс будет выслана на email введенный в поле ниже
            </h3>


        </div>
    </main>
@endsection
