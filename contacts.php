<?php include 'header.php'?>

<main>
    <div class="container contacts">
        <div class="heading">
            <h1><b>Контакти</b></h1>
        </div>
        <div class="form-columns contacts-form">
            <div class="column">
                <section class="contacts-block">
                    <h2>Телефони:</h2>
                    <div class="contacts-holder">
                        <div class="contacts-column">
                            <div class="info-row">
                                <div class="image">
                                    <i class="icon-phone2"></i>
                                </div>
                                <div class="content">
                                    <b> <a href="tel:+380443642300">+38 (044) 364 23 00</a></b>
                                </div>
                            </div>
                            <div class="info-row">
                                <div class="image">
                                    <i class="icon-phone2"></i>
                                </div>
                                <div class="content">
                                    <b> <a href="tel:0800212300 ">(0800) 21 23 00</a></b>
                                </div>
                            </div>
                            <div class="info-row">
                                <div class="image">
                                    <i class="icon-phone2"></i>
                                </div>
                                <div class="content">
                                    <b> <a href="tel:+380670112300">+38 (067) 011 23 00</a></b>
                                </div>
                            </div>
                            <div class="info-row">
                                <div class="image">
                                    <i class="icon-phone2"></i>
                                </div>
                                <div class="content">
                                    <b> <a href="tel:+380952882300">+38 (095) 288 23 00</a></b>
                                </div>
                            </div>
                            <div class="info-row">
                                <div class="image">
                                    <i class="icon-phone2"></i>
                                </div>
                                <div class="content">
                                    <b> <a href="tel:+380931702300">+38 (093) 170 23 00</a></b>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="contacts-holder">
                    <section class="contacts-block">
                        <h2>Електронна пошта:</h2>
                        <div class="contacts-holder">
                            <div class="contacts-column modified">
                                <div class="info-row services">
                                    <div class="image">
                                        <i class="icon-services"></i>
                                    </div>
                                    <div class="content">
                                        <b> <a href="mailto:info@cashyou.ua">info@cashyou.ua</a></b>
                                        <span>Технічний відділ</span>
                                    </div>
                                </div>
                                <div class="info-row handshake">
                                    <div class="image">
                                        <i class="icon-handshake"></i>
                                    </div>
                                    <div class="content">
                                        <b> <a href="mailto:marketing@cashyou.ua">marketing@cashyou.ua</a></b>
                                        <span>Співробітництво</span>
                                    </div>
                                </div>
                                <div class="info-row finance">
                                    <div class="image">
                                        <i class="icon-finance"></i>
                                    </div>
                                    <div class="content">
                                        <b> <a href="mailto:&#102;&#105;&#110;&#064;&#099;&#097;&#115;&#104;&#121;&#111;&#117;&#046;&#117;&#097;">&#102;&#105;&#110;&#064;&#099;&#097;&#115;&#104;&#121;&#111;&#117;&#046;&#117;&#097;</a></b>
                                        <span>Фінансовий відділ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="contacts-block">
                        <h2>Графік роботи:</h2>
                        <p>У будні з 9:00 до 18:00</p>
                        <p>Вихідні з 9:00 до 15:00</p>
                    </section>
                    <section class="contacts-block">
                        <h2>Соціальні мережі:</h2>
                        <ul class="social-networks modified">
                            <li class="facebook">
                                <a href="https://www.facebook.com/Cashyou-371352639870774/"> <i class="icon-facebook"></i><span class="info">Facebook</span></a>
                            </li>
                            <li class="instagram">
                                <a href="https://www.instagram.com/cashyou_official/"> <i class="icon-instagram"></i><span class="info">Instagram</span></a>
                            </li>
                            <li class="twitter">
                                <a href="https://twitter.com/CashYou_Ukraine"> <i class="icon-twitter"></i><span class="info">Twitter</span></a>
                            </li>
                        </ul>
                    </section>
                </div>
            </div>
            <div class="column">
                <h2>Форма зворотнього зв&#039;язку:</h2>
                <form name="form" method="post" action="/contact-form-submission" novalidate="novalidate">

                    <div class="form-row"><div class="label-block">
                            <label for="form_name" class="required">
                                Ім&#039;я
                                <span class="req">*</span>
                            </label>
                        </div><input type="text" id="form_name" name="form[name]" required="required" /></div>
                    <div class="form-row"><div class="label-block">
                            <label for="form_phone" class="required">
                                Телефон
                                <span class="req">*</span>
                            </label>
                        </div><input type="tel" id="form_phone" name="form[phone]" required="required" placeholder="+38 (___) ___-__-__" data-mask="+38 (099) 999-99-99" /></div>
                    <div class="form-row"><div class="label-block">
                            <label for="form_message" class="required">
                                Повідомлення
                                <span class="req">*</span>
                            </label>
                        </div><textarea id="form_message" name="form[message]" required="required"></textarea></div>

                    <div class="button-block">
                        <button class="button" type="submit">відправити</button>
                    </div>


                    <input type="hidden" id="form__token" name="form[_token]" value="C6gXXA-hYiSmsZNXaRX9BmMPUNRbB_0Rr3HiZGye4Yg" /></form>
            </div>
        </div>
    </div>
</main>

<?php include 'footer.php'?>
