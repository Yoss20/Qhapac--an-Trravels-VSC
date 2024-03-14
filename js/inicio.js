(function(){
    const listElements = document.querySelectorAll('.menu__item--show');
    const list = document.querySelector('.menu__links');
    const menu = document.querySelector('.menu__hamburguer');

    const addClick = ()=>{
        listElements.forEach(element =>{
            element.addEventListener('click', ()=>{

                
                let subMenu = element.children[1];
                let height = 0;
                element.classList.toggle('menu__item--active');


                if(subMenu.clientHeight === 0){
                    height = subMenu.scrollHeight;
                }

                subMenu.style.height = `${height}px`;

            });
        });
    }

    const deleteStyleHeight = ()=>{
        listElements.forEach(element=>{

            if(element.children[1].getAttribute('style')){
                element.children[1].removeAttribute('style');
                element.classList.remove('menu__item--active');
            }

        });
    }


    window.addEventListener('resize', ()=>{
        if(window.innerWidth > 800){
            deleteStyleHeight();
            if(list.classList.contains('menu__links--show'))
                list.classList.remove('menu__links--show');

        }else{
            addClick();
        }
    });

    if(window.innerWidth <= 800){
        addClick();
    }

    menu.addEventListener('click', ()=> list.classList.toggle('menu__links--show'));



})();


const menuContainer = document.querySelector(".menu_cont");
const menuDesplegable = document.querySelector(".menu__nesting");

window.addEventListener("scroll", function () {

  if (window.scrollY >= 60) {
    // Cambiar el color de fondo cuando se hace scroll hacia abajo
    menuContainer.style.backgroundColor = "rgba(0, 0, 0, 0.9)"; // Cambia el color a negro o al color deseado
    menuContainer.style.border = "2px solid #fff";
    menuContainer.style.top = "0";
    menuDesplegable.style.backgroundColor = "rgba(0, 0, 0, 0.9)";
    menuDesplegable.style.border = "2px solid #fff";
  } else {
    // Restaurar el color de fondo cuando la página está en la parte superior
    menuContainer.style.backgroundColor = "rgba(0, 0, 0, 0.2)"; // Cambia el fondo a transparente
    menuContainer.style.border = "0";
    menuContainer.style.top = "60px";
    menuDesplegable.style.backgroundColor = "rgba(0, 0, 0, 0.2)";
    menuDesplegable.style.border = "0";
  }

});





