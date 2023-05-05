// const cards = document.querySelectorAll('.col-1');
// const notificationBox = document.querySelector('.notification-box');

// cards.forEach(card => {
//     card.addEventListener('click', () => {
//         if (confirm('Do you want to buy this coffee?')) {
//             notificationBox.classList.remove('hidden');
//             setTimeout(() => {
//                 notificationBox.classList.add('hidden');
//             }, 3000);
//         }
//     }); 
// });

const cards = document.querySelectorAll('.col-1'); // get all card elements
const confirmationBox = document.querySelector('.notification-box');
const successBox = document.querySelector('.notification-box-success');
const btnYes = document.querySelector('.btn-yes');
const btnNo = document.querySelector('.btn-no');

cards.forEach(card => { // add click event listener to each card
    card.addEventListener('click', () => {
        confirmationBox.classList.remove('hidden'); // show confirmation box
    });
});

btnYes.addEventListener('click', () => { // add click event listener to button yes
    confirmationBox.classList.add('hidden'); // hide confirmation box
    successBox.classList.remove('hidden'); // show success box
    setTimeout(() => {
        successBox.classList.add('hidden'); // hide success box after 3 seconds
    }, 3000);
});

btnNo.addEventListener('click', () => { // add click event listener to button no
    confirmationBox.classList.add('hidden'); // hide confirmation box
});
