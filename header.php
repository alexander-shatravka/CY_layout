<?php
    $path = $_SERVER['REQUEST_URI'];
    $title = '';
    $description = '';

    switch ($path) {
        case "/":
            $title = 'Кредит онлайн на картку Україна, взяти гроші в позику онлайн на банківську карту visa через інтернет, грошовий мікрокредит Cashyou';
            $description = 'Шукаєте де оформити кредит онлайн на банківську карту? Онлайн позики через інтернет від Cashyou. Проста форма отримання кредиту.';
            break;
        case "/contacts":
            $title = 'Контакты Cashyou. Телефоны компании Cashyou';
            $description = 'Шукаєте де оформити кредит онлайн на банківську карту? Онлайн позики через інтернет від Cashyou. Проста форма отримання кредиту.';
            break;
        case "/about":
            $title = 'Компания Cashyou. Что такое Cashyou. Сервис Cashyou';
            $description = 'Что такое сервис Cashyou. Какая у сервиса филососфия и история. Вся необходимая финансовая информация для обращения или погашения кредита.';
            break;
        case "/blog":
            $title = 'Финансовые статьи и актуальные новости от Cashyou';
            $description = 'Громкие новости финансового мира и  акутальные известия о системе. Все последние изменения и события в Cashyou и финансовом мире.';
            break;
        case "/faq":
            $title = 'Как пользоваться системой Cashyou. Ответы на часто задаваемые вопросы';
            $description = 'Как взять кредит или вернуть деньги. Пользование бонусами и правила оформления пролонгации. Крупнейшая база знаний сервиса Cashyou.';
            break;
        case "/return":
            $title = 'Как вернуть кердит. Как вернуть кредит в Cashyou';
            $description = 'Вернуть деньги вы сможете любым удобным для вас способом. Через Ваш личный кабинет, бонусами или переводом на наши банковские реквизиты.';
            break;
        case "/getting":
            $title = 'Как получить кредит. Как взять кредит в Cashyou';
            $description = 'Получить кредит онлайн на карту с минимальным набором документов. Для получения денег вам потребуются только ваш телефон, паспрот и ИНН. Выдача в течение 5 минут';
            break;
        case "/confidentiality":
            $title = 'Кредит онлайн на картку Україна, взяти гроші в позику онлайн на банківську карту visa через інтернет, грошовий мікрокредит Cashyou';
            $description = 'Шукаєте де оформити кредит онлайн на банківську карту? Онлайн позики через інтернет від Cashyou. Проста форма отримання кредиту.';
            break;
        case "/creditrules":
            $title = 'Кредит онлайн на картку Україна, взяти гроші в позику онлайн на банківську карту visa через інтернет, грошовий мікрокредит Cashyou';
            $description = 'Шукаєте де оформити кредит онлайн на банківську карту? Онлайн позики через інтернет від Cashyou. Проста форма отримання кредиту.';
            break;
        case "/agreementpersonaldata":
            $title = 'Кредит онлайн на картку Україна, взяти гроші в позику онлайн на банківську карту visa через інтернет, грошовий мікрокредит Cashyou';
            $description = 'Шукаєте де оформити кредит онлайн на банківську карту? Онлайн позики через інтернет від Cashyou. Проста форма отримання кредиту.';
            break;
        case "/registrationcertificate":
            $title = 'Кредит онлайн на картку Україна, взяти гроші в позику онлайн на банківську карту visa через інтернет, грошовий мікрокредит Cashyou';
            $description = 'Шукаєте де оформити кредит онлайн на банківську карту? Онлайн позики через інтернет від Cashyou. Проста форма отримання кредиту.';
            break;
        case "/public":
            $title = 'Кредит онлайн на картку Україна, взяти гроші в позику онлайн на банківську карту visa через інтернет, грошовий мікрокредит Cashyou';
            $description = 'Шукаєте де оформити кредит онлайн на банківську карту? Онлайн позики через інтернет від Cashyou. Проста форма отримання кредиту.';
            break;
        case "/bonus-system-rools":
            $title = 'Бонусы Cashyou. Как пользоваться бонусами в Cashyou';
            $description = 'За бонусы в системе Cashyou вы можете увеличивать сумму взятого кредита или уменьшить проценты по следующему кредиту. Также за бонусы вы моежете гасить кредит.';
            break;
        default:
            $title = 'Кредит онлайн на картку Україна, взяти гроші в позику онлайн на банківську карту visa через інтернет, грошовий мікрокредит Cashyou';
            $description = 'Шукаєте де оформити кредит онлайн на банківську карту? Онлайн позики через інтернет від Cashyou. Проста форма отримання кредиту.';
            break;
    }

    function active($currect_page){
      $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
      $url = $url_array[1];
      if($currect_page == $url){
          echo 'active';
      }
    }
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" prefix="og: http://ogp.me/ns#">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
    <meta charset="utf-8">
    <title><?php echo $title?></title>
    <meta name="description"
          content="<?php echo $description?>">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="/images/apple-touch-icon-57x57.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/images/apple-touch-icon-114x114.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/images/apple-touch-icon-72x72.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/images/apple-touch-icon-144x144.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="/images/apple-touch-icon-60x60.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="/images/apple-touch-icon-120x120.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="/images/apple-touch-icon-76x76.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="/images/apple-touch-icon-152x152.png"/>
    <link rel="icon" type="image/png" href="/images/favicon-196x196.png" sizes="196x196"/>
    <link rel="icon" type="image/png" href="/images/favicon-96x96.png" sizes="96x96"/>
    <link rel="icon" type="image/png" href="/images/favicon-32x32.png" sizes="32x32"/>
    <link rel="icon" type="image/png" href="/images/favicon-16x16.png" sizes="16x16"/>
    <link rel="icon" type="image/png" href="/images/favicon-128.png" sizes="128x128"/>
    <link rel="manifest" href="/manifest.json">
    <meta name="application-name" content="&nbsp;"/>
    <meta name="msapplication-TileColor" content="#FFFFFF"/>
    <meta name="msapplication-TileImage" content="/images/mstile-144x144.png"/>
    <meta name="msapplication-square70x70logo" content="/images/mstile-70x70.png"/>
    <meta name="msapplication-square150x150logo" content="/images/mstile-150x150.png"/>
    <meta name="msapplication-wide310x150logo" content="/images/mstile-310x150.png"/>
    <meta name="msapplication-square310x310logo" content="/images/mstile-310x310.png"/>

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900&amp;amp;subset=cyrillic,cyrillic-ext"
          rel="stylesheet">

    <link href="assets/style.min.css" rel="stylesheet">
    <link href="/assets/style.min.css" rel="stylesheet">

    <script type="text/javascript">
        var creditConfig = {
            percent: 0.018,
            percentNormal: 0.018
        }
    </script>
    <script src="/assets/main.min.js"></script>

</head>
<body class="home">
<div id="wrapper">
    <header id="header">
        <div class="container">
            <div class="logo"><a href="/"><img src="/images/logo.png" alt="CASHYOU"></a></div>
            <a class="btn-profile profile-opener desktop-hidden" href="#"></a>
            <a class="button btn-white lightbox-opener desktop-hidden btn-login" href="http://test.cashyou.ua">Особистий
                кабінет </a>
            <div class="header-holder">
                <a class="header-opener" href="#"></a>
                <div class="header-slide">
                    <div class="frame">
                        <div class="header-frame">
                            <ul class="language-list">
                                <li class="active"><a href="/">Укр</a></li>
                                <li><a href="/ru/">Рус</a></li>
                            </ul>
                            <a class="button btn-white mobile-hidden" href="https://test.cashyou.ua/">Особистий
                                кабінет</a>
                        </div>
                        <nav>
                            <ul class="main-nav">
                                <li class="<?php active('getting')?>"><a href="/getting">Як отримати?</a></li>
                                <li class="<?php active('return')?>"><a href="/return">Як повернути?</a></li>
                                <li class="<?php active('faq')?>"><a href="/faq">FAQ</a></li>
                                <li class="<?php active('articles') || active('blog')?>"><a href="/blog">Блог</a></li>
                                <li class="<?php active('about')?>"><a href="/about">Про нас</a></li>
                                <li class="<?php active('contacts')?>"><a href="/contacts">Контакти</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="popup-holder">
            <div class="lightbox" id="enter-account"><a class="lightbox-close" href="#" data-fancybox-close><i
                            class="icon-close"></i></a>
                <div class="lightbox-block">
                    <span class="span-h">Особистий кабінет </span>

                    <form action="/login/" method="post">

                        <input type="text" id="username" name="_username" value=""
                               placeholder="Логін (Електронна пошта)"/>
                        <div class="password-block">
                            <input type="password" id="password" name="_password" placeholder="Пароль"><span
                                    class="show-password"><i class="icon-eye"></i></span>
                        </div>

                        <div class="form-row form-row-button-bottom">
                            <div class="check-holder">
                                <label for="remember">
                                    <input type="checkbox" id="remember" name="_remember_me"> Запам&#039;ятати
                                </label>
                            </div>
                            <a class="forgot-password lightbox-opener" href="#reset-password">Забули пароль?</a>
                        </div>

                        <input class="button" type="submit" value="Увійти">
                    </form>
                </div>
            </div>

            <div class="lightbox" id="reset-password"><a class="lightbox-close" href="#" data-fancybox-close><i
                            class="icon-close"></i></a>
                <div class="lightbox-block password-recovery">
                    <span class="span-h">Відновлення пароля</span>

                    <form name="forgot_password" method="post" action="/password-reset/" novalidate="novalidate"
                          class="recovery-form">

                        <div class="label-block">
                            <label for="forgot_password_email" class="required">
                                Email
                                <span class="req">*</span>
                            </label>
                        </div>
                        <input type="email" id="forgot_password_email" name="forgot_password[email]"
                               required="required"/>

                        <input class="button" type="submit" value="Лишити запит">
                        <input type="hidden" id="forgot_password__token" name="forgot_password[_token]"
                               value="j7vaMkP3DoLOxjcdP69wERNQuffiwNS5fI2fB8Zq_18"/></form>
                </div>
            </div>
        </div>

        <div class="popup-holder">

            <div class="lightbox" id="">
                <a class="lightbox-close" href="#" data-fancybox-close>
                    <i class="icon-close"></i>
                </a>
                <div class="lightbox-block">
                    <h2>Для отримання кредиту Ви маєте заповнити всі поля особистої інформації!</h2>
                    <a class="button" href="">Змінити</a>
                </div>
            </div>
        </div>

    </header>
