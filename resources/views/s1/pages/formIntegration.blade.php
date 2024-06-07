@extends('layouts.s1')

@section('title', "Интеграция формы")

@section('content')

    <div class="container m-4 ">

        <h2 class="text-center mb-3">Интеграция формы для регистрации лида на любой ленд 🥷🏿</h2>
        <figure>
            <blockquote class="blockquote">
                <p>«Все проходит и это пройдет» - вечные слова на кольце Соломона </p>
            </blockquote>
            <figcaption class="blockquote-footer">
                <cite title="Source Title">«Ничто не проходит бесследно»...</cite>
            </figcaption>
        </figure>

        <dl class="row">
            <dt class="col-sm-3">ШАГ 1.</dt>
            <dd class="col-sm-9">
                Скачайте архив  <a href="{{route('download', 'arhiv_form')}}">TУT</a> и распакуйте архив в проект
            </dd>

            <dt class="col-sm-3">ШАГ 2.</dt>
            <dd class="col-sm-9">
                между тегами <code> &lt;head&gt; &lt;/head&gt; </code> вставьте
                <blockquote class="blockquote p-2 s-blockquote">
                    <code>
                        &lt;link rel="stylesheet" href="./css/form.css" /&gt;
                        <br>
                        &lt;link rel="stylesheet" href="./css/intlTelInput.min.css" /&gt;
                    </code>
                </blockquote>
            </dd>

            <dt class="col-sm-3">ШАГ 3.</dt>
            <dd class="col-sm-9">
                перед тегом <code> &lt;/body&gt </code> вставьте
                <blockquote class="blockquote p-2 s-blockquote">
                    <code>
                        &lt;script src="{{url()->route('index')}}/storage/js/reg-one-step.min.js"&gt;&lt;/script&gt; //Latin
                        &lt;script src="{{url()->route('index')}}/storage/js/reg-one-step-ru.min.js"&gt;&lt;/script&gt; //Cyrillic
                        <br>

                        &lt;script&gt; <br>
                        &nbsp;&nbsp;var srcUtils = "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js";<br><br>

                        &nbsp;&nbsp;document.addEventListener('DOMContentLoaded', function () {<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;var formContainer = document.querySelectorAll('.form-container');<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (formContainer.length > 0) {<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (let i = 0; i < formContainer.length; i++) {<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;settingRegisterForm(formContainer[i],<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;defaultCountry: 'pl', //можно указать страну по умолчанию<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;defaultLang: 'en', //можно указать перевод формы по умолчанию<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;setPass: true, // вкл / выкл поле для генерации пароля <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;setInput: setInput, // callback функция для установки доп.полей формы<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;setConfirm: {'active': true, 'text': 'I confirm that i will accept a call from a company representative'},<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;setConfirmInvest: {'active': true, 'text': 'Minimum investment $250'}<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;});<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>
                        &nbsp;&nbsp;});<br><br>
                        &nbsp;&nbsp;//пример <br>
                        &nbsp;&nbsp;function setInput(form){<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;const utm_placement = document.createElement('input');<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;utm_placement.setAttribute('type', 'hidden');<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;utm_placement.setAttribute('name', 'utm_placement');<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;utm_placement.setAttribute('value', "{utm_placement}");<br><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;form.appendChild(utm_placement);<br>
                        &nbsp;&nbsp;}<br>

                        &lt;/script&gt;

                    </code>
                </blockquote>
            </dd>

            <dt class="col-sm-3">ШАГ 4.</dt>
            <dd class="col-sm-9">
                В любое место лендинга вставьте данный блок что бы отобразилась форма<br>
                <blockquote class="blockquote p-2 s-blockquote">
                    <code>
                        &lt;div class="promo-form-wrapper form-container" data-action="send.php"&gt; &lt;/div&gt;
                    </code>
                </blockquote>
            </dd>

            <dt class="col-sm-3">ШАГ 5.</dt>
            <dd class="col-sm-9"><span class="fw-bold"><u>Подставьте корректные данные АФФА в send.php,</u></span> а также подправьте стили формы в файле form.css если это требуется</dd>

            <dt class="col-sm-3 text-truncate">ШАГ 6.</dt>
            <dd class="col-sm-9">Протестируйте форму на отправку данных и регистрации лида</dd>

            <dt class="col-sm-3">ШАГ 7.</dt>
            <dd class="col-sm-9">
                Наслаждайтесь <strong>чужой пиздатой работой </strong> специалиста 🏆
            </dd>
        </dl>
    </div>

@endsection

<style>
    .s-blockquote{
        font-size: 16px !important;
        border: 1px solid #9aa0a3;
        background-color: #e7e5e5;
        border-radius: 5px;
    }
</style>
