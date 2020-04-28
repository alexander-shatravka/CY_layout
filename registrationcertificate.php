<?php include 'header.php' ?>

<main>
    <div class="container">
        <div class="terms-hodler">
            <ul class="breadcrumbs">
                <li>
                    <a href="/confidentiality">
                        Конфіденційність
                    </a>
                </li>
                <li>
                    <a href="/creditrules">
                        Умови договору
                    </a>
                </li>
                <li>
                    <a href="/agreementpersonaldata">
                        Згода на обробку даних
                    </a>
                </li>
                <li>
                    <a class="active" href="/registrationcertificate">
                        Cертифікати
                    </a>
                </li>
                <li>
                    <a href="/public">
                        Публічна інформація
                    </a>
                </li>
            </ul>
            <div class="heading">
                <h1>Наші сертифікати</h1>
            </div>
            <div class="static-content">
                <div class="block">
                    <h2>свiдоцтво про реєстрацію фінансової установи</h2>
                    <img src="/images/certificate.jpg" alt="certificate" class="certificate-img">
                </div>
            </div>
        </div>
        <div class="chat-holder">
            <div class="callback-block"><a class="callback-opener" href="#"><span><i class="icon-phone"></i></span></a>
                <div class="callback-popup"><a class="callback-close" href="#"><i class="icon-close"></i></a>
                    <div id="callback-thank-message"><span>Дякуємо, наш менеджер зв&#039;яжеться з Вами у найближчий час!</span>
                    </div>
                    <form id="callback-form">
                        <label>Залиште телефон і ми передзвонимо у робочий час <b>(будні 09.00-18.00; вихідні
                                09.00-15.00)</b></label>
                        <input name="callback-phone" id="callback-phone" type="tel" required="required"
                               data-rule-phonevalidate="1" data-rule-phoneverified="1" placeholder="+38 (___) ___-__-__"
                               data-mask="+38 (099) 999-99-99" minlength="19" maxlength="19" autocomplete="off">
                        <a class='button' id='btn-callback'>Передзвоніть</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'footer.php' ?>
