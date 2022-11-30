<?php require_once 'header.php'; ?>
            <div>
                <div class="greeting">
                    <div class="greeting__text">
                        <h2>Что-то не так?</h2>
                        <p class="text">Оставьте заявку и мы рассмотрим ваше обращение как можно скорее!</p>
                        <button>Оставить заявку</button>
                    </div>
                    <img src="./assets/images/greeting/greetingImage.png" alt="greeting banner">
                </div>
            </div>
        </div>
    </section>
    <section class="contact-us">
        <div class="container">
            <div>
                <p class="subtitle">Обратная связь</p>
                <h1>Свяжитесь с нами!</h1>
                <form id="contactform" name="contact" method="post" action="#">

                    <div class="row">
                        <label for="name">Ваш идентификатор <span class="req">*</span></label>
                        <input type="text" class="identificator" tabindex="1" placeholder="Ваш ID"
                               required>
                    </div>
                    <div class="row">
                        <label for="message">Описание заявки</label>
                        <textarea class="description" tabindex="2" placeholder="Описание заявки" required></textarea>
                    </div>
                    <button class="submitbtn button"> Отправить заявку </button>
                </form>
            </div>
        </div>
    </section>
    <script src="clients.js"></script>
  <?php require_once 'footer.php'; ?>