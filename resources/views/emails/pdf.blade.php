<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>PROFGUIDE</title>
    <style>body { font-family: "FreeSerif" }
        .inline {
            display: flex;
            align-items: center;
        }
        h1 {
            display: block;
            padding: 0;
            margin: 0;
            margin-left: 25px;
            margin-bottom: 0px;
            margin-top: 10px;
            font-weight: bold;
            float: left;
        }

        h3 {
            font-weight: bold;
            font-size: 28px;
            line-height: 38px;
            margin-top: 60px;
            margin-bottom: 40px;
        }

        h2 {
            margin-top: 70px;
            margin-bottom: 40px;
        }
        .margin {
            margin-top: 40px;
        }
        p {
            font-style: normal;
            font-weight: normal;
            font-size: 20px;
            line-height: 27px;
            color: #333333;
        }
        img {
            display: block;
            float: left;
        }
        .subtext {
            font-style: normal;
            font-weight: normal;
            font-size: 28px;
            line-height: 38px;
            text-align: center;
            color: #333333;

        }
    </style>
</head>
<body style="font-family: 'FreeSerif', sans-serif;">
<div class="inline">
    <img src="data:image/png;base64,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">
    <h1 style="font-weight: bold; font-size: 36px; line-height: 36px; padding-top: 7px;">PROFGUIDE</h1>
</div>
<div class="clear" style="clear:both;"></div>

<h2 style="text-align: center; font-weight: bold; font-size: 42px; line-height: 57px; padding-top: 40px;">Поздравляю тебя с прохождением курса!</h2>
<p style="text-align: center;" class="subtext">Здесь собраны все твои ответы воедино. Пересмотри их еще раз и проанализируй, сверь также со своим результатами тестов. Если уже понятно, кем бы тебе хотелось стать, но не совсем понятно куда идти учиться, что есть на рынке - поищи. Просто загугли. Чем больше информации у тебя будет, тем яснее путь к цели.
</p>
<h3 style="text-align: center;">Точка А</h3>
<p>
    Возраст: {{ $details['age'] }}
</p>
<p>
    Страна: {{ $details['country'] }}
</p>
<p>
    Город: {{ $details['city'] }}
</p>
<p>
    Хобби, знания, умения: {{ $details['skills'] }}
</p>
@isset($details['stepANotes'])
<p>
    Заметки: {{ $details['stepANotes'] }}
</p>
@endisset
<h3 style="text-align: center;">Точка B</h3>
<p>
    Через 10 лет я:
</p>
<p>
    {{ $details['futurePlace'] }}
</p>
<p>
    {{ $details['futurePlaceDescription'] }}
</p>
<p>
    {{ $details['currentPlace'] }}
</p>
<p>
    {{ $details['upTime'] }}
</p>
<p>
    {{ $details['morningDeals'] }}
</p>
<p>
    {{ $details['afterMorningDeals'] }}
</p>
<p>
    Утром я: {{ $details['workplace'] }}
</p>

@if(($details['remoteType'] === 'department') || ($details['workplaceorigin'] === 'outside'))
      <h3 style="text-align: center;">Идеальный рабочий формат</h3>
@else
    <b></b>
@endif

@if($details['workplaceorigin'] === 'outside')
<p>
    {{ $details['building'] }}
</p>
@endif
@if($details['workplaceorigin'] === 'outside')
    <p>
        Я бы хотел(а) работать:
    </p>
    <p>
        {{ $details['size'] }}
    </p>
@endif
@if($details['workplaceorigin'] === 'outside')
    <p>
        Мне больше всего подходит роль:
    </p>
    <p>
        {{ $details['role'] }}
    </p>
@endif


@isset($details['stepCompanyNotes'])
    <p>Заметки: {{ $details['stepCompanyNotes'] }}</p>
@endisset

@isset($details['departments'])
    <p>Мне больше всего подошла бы работа в:</p>
    @forelse ($details['departments'] as $department)
        <p>{{ $department }}</p>
    @empty
        <b></b>
    @endforelse
@endisset

@isset($details['stepDepartmentsNotes'])
    <p>Заметки: {{ $details['stepDepartmentsNotes'] }}</p>
@endisset
<h3 style="text-align: center;">Ты дикий или домашний котик?</h3>
<p>
    {{ $details['cat'] }}
</p>

<h3 style="text-align: center;">Что тебе нравиться делать больше всего?</h3>
<p>
    {{ $details['interestsDesc'] }}
</p>
<p>
    {{ $details['activitiesDesc'] }}
</p>

@isset($details['talents'])
    <p>Вид одаренности:</p>
    @forelse($details['talents'] as $talent)
        <p>{{ $talent }}</p>
    @empty
        <b></b>
    @endforelse
@endisset

<p>{{ $details['steptalentsTalentsDescription'] }}</p>
<h3 style="text-align: center;">Итоги</h3>
<p>
    {{ $details['future'] }}
</p>

<p>Мои цели на ближайшее время:</p>
<p>
    {{ $details['steps'] }}
</p>

<p class="margin">
    <i>Желаем тебе успехов и только вперед!</i>
</p>

<p>
    <i>А если вдруг у тебя все еще остались вопросы или сомнения после пройденного курса, мы рекомендуем обратиться к <a href="https://www.instagram.com/annaisayenko/" target="_blank">Анне Исаенко</a> - профориентологу с 20+ летним опытом профориентации подростков. Скажите, что вы от проекта <a href="https://t.me/teenjob_by" target="_blank">teenjob</a> и она сделает вам скидку на консультацию в 20%.</i>
</p>
</body>
</html>


