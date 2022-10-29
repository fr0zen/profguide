<template>
    <main class="section page_start" @click.right.prevent @keydown="keydown" @copy.prevent @cut.prevent @paste.prevent>
        <div id="free" class="section section__secondary ">
            <div class="content_wrapper">
                <h2>Что вам нужно знать до начала курса:</h2>
                <ul>
                    <li class="text-list">
                        Курс рассчитан на то, что вы его пройдете непрерывно от начала до конца. Но если вам необходимо отвлечься, то к курсу можно будет вернуться, если вы не будете чистить кэш и историю браузера, <b>на том же устройстве</b> с сохранением введенных данных - прогресс будет сохранен в ваших cookie файлах.
                    </li>
                    <li class="text-list">
                        Мы не храним вашии данные на сервере, кроме адреса электронной почты для отправки ваших результатов. Конфиденциальные данные не передаются третьим лицам. Email используется только для предоставления доступа к данному курсу и для получения вами результатов.
                    </li>
                    <li class="text-list">
                        И небольшой совет от создателей курса:) Речь идет о вашем будущем, поэтому сконцентрируйтесь и воспринимайте задания серьезно, не торопитесь, постарайтесь уделить им достаточно времени. Так вы получите максимум пользы!
                    </li>
                </ul>
                <router-link class="button"  to="/course/welcome">
                   <span class="button_text">
                       Правила приняты. Начать курс
                   </span>
                </router-link>
            </div>
        </div>
    </main>
</template>

<script>
    export default {

        methods: {
            keydown: function(e) {
                console.log(e)
            }
        },
    }
</script>

<style lang="scss">
</style>


