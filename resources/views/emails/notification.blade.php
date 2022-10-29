@component('mail::message')

# PROFGUIDE

Привет!

Рады, что ты решил пройти наш курс по профориентации. Переходи по ссылке и приступай: [{!! $details['link'] !!}]({!! $details['link'] !!})

Ссылка активна в течение 14 дней до {{ $details['date'] }}


### PROFGUIDE

[profguide.org](https://profguide.org)


@endcomponent
