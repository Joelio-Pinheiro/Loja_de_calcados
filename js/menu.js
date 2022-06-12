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


let aberto = false;
function iniciaModal(modalid){
    const modal = document.getElementById(modalid);
    modal.classList.add('mostrar');
    aberto= !aberto;
    modal.addEventListener('click', (e) =>{
        if(e.target.id == modalid || e.target.id == 'btnfechar'){
            modal.classList.remove('mostrar');;
        }
    });
    if(aberto == true){
        document.addEventListener('scroll', function(){
            if(window.pageYOffset > 100){
                modal.classList.remove('mostrar');}
                aberto = false;
        });
    }
}
const perfil = document.querySelector('#perfil');
    perfil.addEventListener('click', () => { iniciaModal('modal-perfil');});
