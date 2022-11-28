const buttonApplication = document.querySelector('.application__button');

buttonApplication.addEventListener('click', async () => {
    try {
        const clientApplications = await $http('/core/functions.php', 'client_applications');
        console.log(clientApplications);
        let applicationList = document.querySelector(".application__list");
        applicationList.innerHTML = "";
        let inWork = '';
        for (let i = 0; i < clientApplications.length; i++) {
            let applicationItemWrapper = document.createElement("div");
            let applicationItem = document.createElement("p");
            applicationItem.innerHTML = "ID заявки: " + clientApplications[i].IDApplication;
            applicationItemWrapper.appendChild(applicationItem);
            applicationItem = document.createElement("p");
            applicationItem.innerHTML = "ID клиента: " + clientApplications[i].Client;
            applicationItemWrapper.appendChild(applicationItem);
            applicationItem = document.createElement("p");
            applicationItem.innerHTML = "Описание заявки: " + clientApplications[i].Description;
            applicationItemWrapper.appendChild(applicationItem);
            applicationItem = document.createElement("p");
            if (clientApplications[i].inWork == 1) inWork = 'Да'
            else inWork = 'Нет';
            applicationItem.innerHTML = "Принято в исполнение? " + inWork;
            applicationItemWrapper.appendChild(applicationItem);

            applicationList.appendChild(applicationItemWrapper);
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
        let tasksList = document.querySelector(".tasks__list");
        tasksList.innerHTML = "";
        for (let i = 0; i < providerTasks.length; i++) {
            let taskItemWrapper = document.createElement("div");
            let taskItem = document.createElement("p");
            taskItem.innerHTML = "ID тикета: " + providerTasks[i].TaskID;
            taskItemWrapper.appendChild(taskItem);
            taskItem = document.createElement("p");
            taskItem.innerHTML = "Описание тикета: " + providerTasks[i].Description;
            taskItemWrapper.appendChild(taskItem);
            taskItem = document.createElement("p");
            taskItem.innerHTML = "ID заявки: " + providerTasks[i].Application;
            taskItemWrapper.appendChild(taskItem);

            tasksList.appendChild(taskItemWrapper);
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
        let clientsList = document.querySelector(".clients__list");
        clientsList.innerHTML = "";
        for (let i = 0; i < clients.length; i++) {
            let clientItemWrapper = document.createElement("div");
            let clientItem = document.createElement("p");
            clientItem.innerHTML = "ID клиента: " + clients[i].clientID;
            clientItemWrapper.appendChild(clientItem);
            clientItem = document.createElement("p");
            clientItem.innerHTML = "Имя и фамилия клиента: " + clients[i].ClientName +' '+ clients[i].SecondName;
            clientItemWrapper.appendChild(clientItem);
            clientItem = document.createElement("p");
            clientItem.innerHTML = "Телефон клиента: " + clients[i].PhoneNumber;
            clientItemWrapper.appendChild(clientItem);
            clientItem = document.createElement("p");
            clientItem.innerHTML = "Адрес клиента: " + clients[i].Address;
            clientItemWrapper.appendChild(clientItem);
            clientItem = document.createElement("p");
            clientItem.innerHTML = "ID тарифа клиента: " + clients[i].Tariff;
            clientItemWrapper.appendChild(clientItem);

            clientsList.appendChild(clientItemWrapper);
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
        let workersList = document.querySelector(".workers__list");
        workersList.innerHTML = "";
        for (let i = 0; i < workers.length; i++) {
            let workerItemWrapper = document.createElement("div");
            let workerItem = document.createElement("p");
            workerItem.innerHTML = "ID работника: " + workers[i].StuffID;
            workerItemWrapper.appendChild(workerItem);
            workerItem = document.createElement("p");
            workerItem.innerHTML = "Имя и фамилия клиента: " + workers[i].StuffName +' '+ workers[i].SecondName;
            workerItemWrapper.appendChild(workerItem);
            workerItem = document.createElement("p");
            workerItem.innerHTML = "Телефон работника: " + workers[i].PhoneNumber;
            workerItemWrapper.appendChild(workerItem);
            workerItem = document.createElement("p");
            workerItem.innerHTML = "ID должности: " + workers[i].WorkingPosition;
            workerItemWrapper.appendChild(workerItem);
            
            workersList.appendChild(workerItemWrapper);
        }

    } catch (error) {
        console.log(error)
    }
})