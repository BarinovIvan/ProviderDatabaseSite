<?php require_once './layout/header.php'; ?>
            <div>
                <div class="greeting">
                    <div class="greeting__text">
                        <h2>Что-то не так?</h2>
                        <p class="text">Оставьте заявку и мы рассмотрим ваше обращение как можно скорее!</p>
                    </div>
                    <img src="./assets/images/greeting/greetingImage.png" alt="greeting banner">
                </div>
            </div>
        </div>
    </section>
    <section class="contact-us">
        <div class="container">
            <div>
                <p class="subtitle" id="contact">Обратная связь</p>
                <h1>Свяжитесь с нами!</h1>
                <form id="contactform" name="contact" method="post" action="#">

                    <div class="row">
                        <label>Ваш идентификатор<span class="req">*</span></label>
                        <input type="text" class="identificator" tabindex="1" placeholder="Ваш ID"
                               required>
                    </div>
                    <div class="row">
                        <label>Описание заявки<span class="req">*</span></label>
                        <textarea class="description" tabindex="2" placeholder="Описание заявки" required></textarea>
                    </div>
                    <button class="submitbtn button"> Отправить заявку </button>
                </form>
            </div>
        </div>
    </section>
    <script src="bin/clients.js"></script>
  <?php require_once './layout/footer.php'; ?>