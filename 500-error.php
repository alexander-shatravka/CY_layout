<?php include 'header.php'?>

<main>
    <div class="container">
        <div class="not-found">
            <section class="holder">
                <div class="block">
                    <h1 class="title">500</h1>
                </div>

                <div class="block center">
                    <img src="/images/man-notfound.png" alt="500" class="image">
                </div>

                <div class="block">
                    <h2 class="subtitle">Упс! Помилочка&#8230;</h2>

                    <span class="info">Трапилася помилка! Будь-ласка зв'яжіться з менеджером або спробуйте
								пизнише</span>
                </div>
            </section>
            <ul class="button-block">
                <li>
                    <a href="/" class="button">Перейти на головну сторінку</a>
                </li>
                <li>
                    <a href="/profile/" class="button">Перейти до особистого кабинета</a>
                </li>
            </ul>
        </div>
        <div class="chat-holder">
            <div class="callback-block"><a class="callback-opener" href="#"><span><i
                            class="icon-phone"></i></span></a>
                <div class="callback-popup"><a class="callback-close" href="#"><i class="icon-close"></i></a>
                    <div id="callback-thank-message"><span>Дякуємо, наш менеджер зв&#039;яжеться з Вами у
									найближчий час!</span></div>
                    <form id="callback-form">
                        <label>Залиште телефон і ми передзвонимо у робочий час <b>(будні 09.00-18.00; вихідні
                                09.00-15.00)</b></label>
                        <input name="callback-phone" id="callback-phone" type="tel" required="required"
                               data-rule-phonevalidate="1" data-rule-phoneverified="1"
                               placeholder="+38 (___) ___-__-__" data-mask="+38 (099) 999-99-99" minlength="19"
                               maxlength="19" autocomplete="off">
                        <a class='button' id='btn-callback'>Передзвоніть</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'footer.php'?>
