<?php require_once 'header.php'; ?>
    </div>
    </section>
    <section class="control-panel">
        <div class="container">
            <h1 class="control-panel__title">Действия</h1>
            <button class="btn application__button">Показать заявки клиентов</button>
            <button class="btn tasks__button">Показать тикеты</button>
            <button class="btn clients__button">Показать список клиентов</button>
            <button class="btn workers__button">Показать список сотрудников</button>
        </div>
        <div class="results">
            <div class="container">
                <h1 class="results__title">Окно просмотора</h1>
                <div class="results__list"></div>
            </div>
        </div>
    </section>
    <section class="insert-panel">
        <div class="container">
            <h1 class="insert-panel__title">Действия</h1>
            <button class="btn insert-panel__client-button active">Добавить клиента</button>
            <button class="btn insert-panel__tasks-button">Добавить тикет</button>
            <button class="btn clients__button">!!!!!!!!!!!!</button>
            <button class="btn workers__button">!!!!!!!!!!!!</button>
        </div>
        <div class="insert">
            <div class="container">
                <div class="client-insert-form">
                    <p class="subtitle" id="contact">Таблица clients</p>
                    <h1>Добавить клиента</h1>
                    <form onsubmit="return false" id="client-insert-form" method="post" action="#">
                        <div class="row">
                            <label for="name">Имя клиента<span class="req">*</span></label>
                            <input type="text" class="client__name" tabindex="1" placeholder="Иван"
                                   required>
                        </div>
                        <div class="row">
                            <label for="name">Фамилия клиента</label>
                            <input type="text" class="client__surname" tabindex="1" placeholder="Иванов">
                        </div>
                        <div class="row">
                            <label for="name">Адрес клиента<span class="req">*</span></label>
                            <input type="text" class="client__adress" tabindex="1" placeholder="Пряничное шоссе д.6"
                                   required>
                        </div>
                        <div class="row">
                            <label for="name">Номер клиента<span class="req">*</span></label>
                            <input type="text" class="client__number" tabindex="1" placeholder="+79095457689"
                                   required>
                        </div>
                        <div class="row">
                            <label for="message">ID Тарифа клиента</label>
                            <textarea class="client__tariff" tabindex="2" placeholder="Народный"></textarea>
                        </div>
                        <button class="client-insert-btn button">Добавить клиента</button>
                    </form>
                </div>
                <div class="tasks-insert-form">
                    <p class="subtitle" id="contact">Таблица tasks</p>
                    <h1>Добавить тикет</h1>
                    <form onsubmit="return false" id="tasks-insert-form" method="post" action="#">
                        <div class="row">
                            <label for="name">ID заявки<span class="req">*</span></label>
                            <input type="text" class="tasks__application" tabindex="1" placeholder="ID заявки" required>
                        </div>
                        <div class="row">
                            <label for="name">Описание<span class="req">*</span></label>
                            <input type="text" class="tasks__description" tabindex="1" placeholder="Описание"
                                   required>
                        </div>
                        <button class="tasks-insert-btn button">Добавить тикет</button>
                    </form>
            </div>
    </section>
    <script src="stuff.js"></script>
<?php require_once 'footer.php'; ?>