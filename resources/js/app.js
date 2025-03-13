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

function dropDownButton () {
    const button = document.querySelector('[data-collapse-toggle="dropdown-example"]');
    const dropDown = document.getElementById('dropdown-example');

    button.addEventListener('click', () => {
        dropDown.classList.toggle('hidden');
    })
}

function dropDownButton2 () {
    const containerDropDown = document.getElementById('dropdown-example');
    const button = containerDropDown.querySelector('li button');
    const dropdown = containerDropDown.querySelector('li ul');

    button.addEventListener('click', () => {
        dropdown.classList.toggle('hidden');
    })
}

dropDownButton2();
dropDownButton();
closeButton();
sideBar();


