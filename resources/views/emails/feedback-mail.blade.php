@component('mail::message')


    # PROFGUIDE

    Впечатления:
    {{ $details['impression'] }}

    Что можно улучшить:
    {{ $details['critic'] }}

    Оценка:
    {{ $details['advice'] }}


@endcomponent

