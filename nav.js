const burger = document.getElementById('burger');
const main = document.getElementById('main');
const menu = document.getElementById('menu');
const menuDeroulant = document.getElementsByClassName('sous-menu')

burger.addEventListener('click', function(){
    main.classList.toggle('opaque');
    menu.classList.toggle('d-none');
    menu.classList.toggle('d-flex');
})


function deroulant (_sousMenu) {

let etatDeroulant = menuDeroulant.style.display;

if(etatDeroulant==none)
Element.style.display = 'block';

else 
Element.style.display= 'none';
}
