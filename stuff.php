<?php require_once './layout/header.php'; ?>
    </div>
    </section>
    <section class="control-panel">
        <div class="container">
            <h1 class="control-panel__title">Просмотр таблиц</h1>
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
            <h1 class="insert-panel__title">Поля ввода данных</h1>
            <button class="btn insert-panel__client-button active">Добавить клиента</button>
            <button class="btn insert-panel__tasks-button">Добавить тикет</button>
            <button class="btn insert-panel__ip-button">Присвоить клиенту IP</button>
            <button class="btn insert-panel__stuff-button">Добавить работника</button>
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
                <div class="ip-insert-form">
                    <p class="subtitle" id="contact">Таблица client_ip</p>
                    <h1>Присвоить клиенту IP-адрес</h1>
                    <form onsubmit="return false" method="post" action="#">
                        <div class="row">
                            <label for="name">ID клиента<span class="req">*</span></label>
                            <input type="text" class="ip__client-id" tabindex="1" placeholder="ID клиента" required>
                        </div>
                        <div class="row">
                            <label for="name">IP адрес<span class="req">*</span></label>
                            <input type="text" class="ip__adress" tabindex="1" placeholder="Новый IP адресс клиента"
                                   required>
                        </div>
                        <button class="ip-insert-btn button">Добавить тикет</button>
                    </form>
                </div>
                <div class="stuff-insert-form">
                    <p class="subtitle" id="contact">Таблица stuff</p>
                    <h1>Добавить работника</h1>
                    <form onsubmit="return false" method="post" action="#">
                        <div class="row">
                            <label for="name">Имя работника<span class="req">*</span></label>
                            <input type="text" class="stuff__name" tabindex="1" placeholder="Имя работника" required>
                        </div>
                        <div class="row">
                            <label for="name">Фамилия работника<span class="req">*</span></label>
                            <input type="text" class="stuff__SecondName" tabindex="1" placeholder="Фамилия работника"
                                   required>
                        </div>
                        <div class="row">
                            <label for="name">ID должности<span class="req">*</span></label>
                            <input type="text" class="stuff__working-position" tabindex="1" placeholder="ID должности"
                                   required>
                        </div>
                        <div class="row">
                            <label for="name">Номер телефона<span class="req">*</span></label>
                            <input type="text" class="stuff__phone-number" tabindex="1" placeholder="+79993334444"
                                   required>
                        </div>
                        <button class="stuff-insert-btn button">Добавить работника</button>
                    </form>
                </div>
    </section>
    <section class="delete-panel">
        <div class="container">
            <h1 class="delete-panel__title">Удаление данных</h1>
            <button class="btn delete-panel__client-button">Удалить клиента</button>
            <button class="btn delete-panel__tasks-button">Удалить тикет</button>
            <button class="btn delete-panel__ip-button">Удалить IP клиента</button>
            <button class="btn delete-panel__stuff-button">Удалить работника</button>
        </div>
        <div class="delete">
            <div class="container">
                <div class="client-delete-form" style="display: none">
                    <p class="subtitle" id="contact">Таблица clients</p>
                    <h1>Удалить клиента</h1>
                    <form onsubmit="return false" id="client-delete-form" method="post" action="#">
                        <div class="row">
                            <label for="name">ID клиента<span class="req">*</span></label>
                            <input type="text" class="client__id" tabindex="1" placeholder="ID клиента"
                                   required>
                        </div>
                        <button class="client-delete-btn button">Удалить клиента</button>
                    </form>
                </div>
                <div class="tasks-delete-form">
                    <p class="subtitle" id="contact">Таблица tasks</p>
                    <h1>Удалить тикет</h1>
                    <form onsubmit="return false" id="tasks-delete-form" method="post" action="#">
                        <div class="row">
                            <label for="name">ID тикета<span class="req">*</span></label>
                            <input type="text" class="tasks__id" tabindex="1" placeholder="ID тикета" required>
                        </div>
                        <button class="tasks-delete-btn button">Удалить тикет</button>
                    </form>
                </div>
                <div class="ip-delete-form">
                    <p class="subtitle" id="contact">Таблица client_ip</p>
                    <h1>Удалить IP-адрес</h1>
                    <form onsubmit="return false" method="post" action="#">
                        <div class="row">
                            <label for="name">ID IP-адреса<span class="req">*</span></label>
                            <input type="text" class="ip__delete-client-id" tabindex="1" placeholder="ID IP-адреса"
                                   required>
                        </div>
                        <button class="ip-delete-btn button">Удалить IP-адрес</button>
                    </form>
                </div>
                <div class="stuff-delete-form">
                    <p class="subtitle" id="contact">Таблица stuff</p>
                    <h1>Удалить работника</h1>
                    <form onsubmit="return false" method="post" action="#">
                        <div class="row">
                            <label for="name">ID работника<span class="req">*</span></label>
                            <input type="text" class="stuff__name" tabindex="1" placeholder="ID работника" required>
                        </div>
                        <button class="stuff-delete-btn button">Удалить работника</button>
                    </form>
                </div>
    </section>
    <section class="update-panel">
        <div class="container">
            <div class="task-update-form">
                <p class="subtitle" id="contact">Таблица tasks</p>
                <h1>Обновить данные тикета</h1>
                <form onsubmit="return false" method="post" action="#">
                    <div class="row">
                        <label for="name">ID тикета<span class="req">*</span></label>
                        <input type="text" class="task__new-id" tabindex="1" placeholder="ID тикета" required>
                    </div>
                        <h2>Что обновить?</h2>
                    <div class="row">
                        <label for="name">Описание тикета<span class="req">*</span></label>
<!--                        <input type="checkbox" class="task__new-name-checkbox" tabindex="1">-->
<!--                        <br>-->
                        <input type="text" class="task__new-description" tabindex="1" placeholder="Новое описание">
                    </div>
                    <button class="task-update-btn button">Обновить данные</button>
                </form>
            </div>
        </div>
    </section>
    <script src="bin/stuff.js"></script>
<?php require_once './layout/footer.php'; ?>