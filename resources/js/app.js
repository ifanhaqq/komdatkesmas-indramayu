import './bootstrap';

function sideBar () {
    const aside = document.getElementById('logo-sidebar');
    const btnShow = document.querySelector('[data-drawer-target="logo-sidebar"]');

    btnShow.addEventListener('click', () => {
        aside.classList.toggle('-translate-x-full');
    })
}

function closeButton () {
    const button = document.getElementById('close-button');
    const contaner = document.getElementById('alert-3');
    button.addEventListener('click', () => {
        contaner.style.display = "none";
    });
}


closeButton();
sideBar();


