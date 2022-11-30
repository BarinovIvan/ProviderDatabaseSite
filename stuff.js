const buttonApplication = document.querySelector('.application__button');
const resultsList = document.querySelector(".results__list");
const resultsTitle = document.querySelector('.results__title');

buttonApplication.addEventListener('click', async () => {
    try {
        const clientApplications = await $http('/core/functions.php', 'client_applications');
        console.log(clientApplications);
        resultsList.innerHTML = "";
        let inWork = '';
        for (let i = 0; i < clientApplications.length; i++) {
            let applicationItemWrapper = document.createElement("div");
            let applicationItem = document.createElement("p");
            applicationItem.innerHTML = "ID заявки: " + clientApplications[i].IDApplication;
            applicationItemWrapper.appendChild(applicationItem);
            applicationItem = document.createElement("p");
            applicationItem.innerHTML = "| ID клиента: " + clientApplications[i].Client;
            applicationItemWrapper.appendChild(applicationItem);
            applicationItem = document.createElement("p");
            applicationItem.innerHTML = "| Описание заявки: " + clientApplications[i].Description;
            applicationItemWrapper.appendChild(applicationItem);
            applicationItem.innerHTML = "| Дата создания заявки: " + clientApplications[i].CreationDate;
            applicationItemWrapper.appendChild(applicationItem);
            applicationItem = document.createElement("p");
            if (clientApplications[i].inWork == 1) {
                let inWork = 'Да'
            } else {
                let inWork = 'Нет';
            }
            applicationItem.innerHTML = "| Принято в исполнение? " + inWork;
            applicationItemWrapper.appendChild(applicationItem);

            resultsList.appendChild(applicationItemWrapper);
            resultsTitle.textContent = 'Заявки клиентов';
        }

    } catch (error) {
        console.log(error)
    }
})

const buttonTasks = document.querySelector('.tasks__button');

buttonTasks.addEventListener('click', async () => {
    try {
        const providerTasks = await $http('/core/functions.php', 'tasks');
        console.log(providerTasks);
        resultsList.innerHTML = "";
        for (let i = 0; i < providerTasks.length; i++) {
            let taskItemWrapper = document.createElement("div");
            let taskItem = document.createElement("p");
            taskItem.innerHTML = "ID тикета: " + providerTasks[i].TaskID;
            taskItemWrapper.appendChild(taskItem);
            taskItem = document.createElement("p");
            taskItem.innerHTML = "| Описание тикета: " + providerTasks[i].Description;
            taskItemWrapper.appendChild(taskItem);
            taskItem = document.createElement("p");
            taskItem.innerHTML = "| ID заявки: " + providerTasks[i].Application;
            taskItemWrapper.appendChild(taskItem);

            resultsList.appendChild(taskItemWrapper);
            resultsTitle.textContent = 'Тикеты от провайдера';
        }
    } catch (error) {
        console.log(error)
    }
})

const buttonClients = document.querySelector('.clients__button');

buttonClients.addEventListener('click', async () => {
    try {
        const clients = await $http('/core/functions.php', 'clients');
        console.log(clients);
        resultsList.innerHTML = "";
        for (let i = 0; i < clients.length; i++) {
            let clientItemWrapper = document.createElement("div");
            let clientItem = document.createElement("p");
            clientItem.innerHTML = "ID клиента: " + clients[i].clientID;
            clientItemWrapper.appendChild(clientItem);
            clientItem = document.createElement("p");
            clientItem.innerHTML = "| Имя и фамилия: " + clients[i].ClientName +' '+ clients[i].SecondName;
            clientItemWrapper.appendChild(clientItem);
            clientItem = document.createElement("p");
            clientItem.innerHTML = "| Телефон: " + clients[i].PhoneNumber;
            clientItemWrapper.appendChild(clientItem);
            clientItem = document.createElement("p");
            clientItem.innerHTML = "| Адрес: " + clients[i].Address;
            clientItemWrapper.appendChild(clientItem);
            clientItem = document.createElement("p");
            clientItem.innerHTML = "| ID тарифа: " + clients[i].Tariff;
            clientItemWrapper.appendChild(clientItem);

            resultsList.appendChild(clientItemWrapper);
            resultsTitle.textContent = 'Список клиентов';
        }

    } catch (error) {
        console.log(error)
    }
})

const buttonWorkers = document.querySelector('.workers__button');

buttonWorkers.addEventListener('click', async () => {
    try {
        const workers = await $http('/core/functions.php', 'stuff');
        console.log(workers);
        resultsList.innerHTML = "";
        for (let i = 0; i < workers.length; i++) {
            let workerItemWrapper = document.createElement("div");
            let workerItem = document.createElement("p");
            workerItem.innerHTML = "ID работника: " + workers[i].StuffID;
            workerItemWrapper.appendChild(workerItem);
            workerItem = document.createElement("p");
            workerItem.innerHTML = "| Имя и фамилия сотрудника: " + workers[i].StuffName +' '+ workers[i].SecondName;
            workerItemWrapper.appendChild(workerItem);
            workerItem = document.createElement("p");
            workerItem.innerHTML = "| Телефон работника: " + workers[i].PhoneNumber;
            workerItemWrapper.appendChild(workerItem);
            workerItem = document.createElement("p");
            workerItem.innerHTML = "| ID должности: " + workers[i].WorkingPosition;
            workerItemWrapper.appendChild(workerItem);

            resultsList.appendChild(workerItemWrapper);
            resultsTitle.textContent = 'Список работников';
        }

    } catch (error) {
        console.log(error)
    }
})

const btns = document.querySelectorAll('.btn');

for (let i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
        if (document.getElementsByClassName("active")){
            let current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
        }
        this.className += " active";
    });
}

