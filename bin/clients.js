const applicationButton = document.querySelector('.submitbtn');
let insertedApplication = [];

applicationButton.addEventListener('click', async function () {
    insertedApplication.splice(0);
    let temp = document.querySelector('.identificator').value;
    insertedApplication.push(temp);
    temp = document.querySelector('.description').value;
    insertedApplication.push(temp);
    let date = new Date();
    let month = date.getMonth() + 1;
    temp = date.getFullYear() + '-' + month +  '-' + date.getDate();
    insertedApplication.push(temp);
    document.querySelector('.identificator').value = "";
    document.querySelector('.description').value = "";

    insertedApplication = insertedApplication.join(';');
    console.log(insertedApplication);

    const clientApplications = await $httpForInsert('/core/functions.php', 'client_applications', insertedApplication);
    console.log(clientApplications);
})
