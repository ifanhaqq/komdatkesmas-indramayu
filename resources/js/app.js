import "./bootstrap";

import "flowbite";
import { Datepicker } from "flowbite-datepicker";

// header.blade.php

const profileButton = document.getElementById("profile-button");
const dropdownProfileBox = document.getElementById("dropdown-profile-box");

console.info(profileButton);
console.info(dropdownProfileBox);

profileButton.addEventListener("click", (e) => {
    dropdownProfileBox.classList.toggle("hidden");
});

function sideBar() {
    const aside = document.getElementById("logo-sidebar");
    const btnShow = document.querySelector(
        '[data-drawer-target="logo-sidebar"]'
    );

    btnShow.addEventListener("click", () => {
        aside.classList.toggle("-translate-x-full");
    });
}

function closeButton() {
    const button = document.getElementById("close-button");
    const contaner = document.getElementById("alert-3");
    button.addEventListener("click", () => {
        contaner.style.display = "none";
    });
}

function dropDownButton() {
    const button = document.querySelector(
        '[data-collapse-toggle="dropdown-example"]'
    );
    const dropDown = document.getElementById("dropdown-example");

    button.addEventListener("click", () => {
        dropDown.classList.toggle("hidden");
    });
}

function dropDownButton2() {
    const containerDropDown = document.getElementById("dropdown-example");
    const button = containerDropDown.querySelector("li button");
    const dropdown = containerDropDown.querySelector("li ul");

    button.addEventListener("click", () => {
        dropdown.classList.toggle("hidden");
    });
}

function screeningDropDown() {
    const button = document.getElementById("screening-button");
    const showMenu = button.nextElementSibling;

    button.addEventListener("click", () => {
        showMenu.classList.toggle("hidden");
    });
}

function datePickerCustome() {
    const datepickerEl = document.getElementById("datepicker-year");
    const datepickerMonth = document.getElementById("datepicker-month");

    if (datepickerEl) {
        new Datepicker(datepickerEl, {
            autohide: true,
            format: "yyyy",
            pickLevel: 2,
            startView: 2,
        });
    }

    if (datepickerMonth) {
        new Datepicker(datepickerMonth, {
            autohide: true,
            format: "MM",
            pickLevel: 1,
            startView: 1,
        });
    }
}

datePickerCustome();
screeningDropDown();
dropDownButton2();
dropDownButton();
closeButton();
sideBar();

