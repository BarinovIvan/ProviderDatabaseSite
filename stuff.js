
const buttonApplication = document.querySelector('.application__button');

buttonApplication.addEventListener('click', async () => {
    try {
        const clientApplications = await $http('/core/functions.php',  'client_applications');
        console.log(clientApplications);

    } catch (error) {
        console.log('Ошибка в js запросе')
    }
})
