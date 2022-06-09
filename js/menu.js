'use strict'

const menuSize = '325px';

let open = false;
toggleMenu();

document.querySelector('#btncar').addEventListener('click', e => {
    open = !open;
    toggleMenu();
})

document.querySelector('#btnclose').addEventListener('click', e => {
    open = false;
    toggleMenu();
})

function toggleMenu() {
    if (open) {
        document.querySelector('#menu').style.display = 'block';
        document.querySelector('#menu').style.marginRight = 0;
        return;
    }

    document.querySelector('#menu').style.marginRight = `-${menuSize}`;
}