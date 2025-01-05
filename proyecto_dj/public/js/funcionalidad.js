window.onload = function () {
    var body = document.getElementById("body");
    let botonFondo = document.getElementById("cambiarFondo");
    let botonTamanio = document.getElementById("cambiarTamanio");
    let p =document.getElementsByTagName("p");
    let li =document.getElementsByTagName("li");
    let titulos = document.querySelectorAll("h1, h2, h3");
    var main = document.getElementById("main");

function recorrerPosicion (posiciones){
    for (let i = 0; i < posiciones.length; i++) {
        if(posiciones[i].getAttribute('class') == ""){
            posiciones[i].setAttribute('class', 'fuente_grande');
        }else if(p[i].getAttribute('class')== 'fuente_grande'){
            posiciones[i].setAttribute('class', 'fuente_mas_grande');
        }else{
            posiciones[i].setAttribute('class', '');
        }
    }
}


    botonFondo.addEventListener("click", function (event) {
        if(body.getAttribute('class')=="fondo_negro"){
            body.setAttribute("class", "fondo_blanco");
            main.setAttribute("class", "parrafo-negro");
        } else{
            body.setAttribute("class", "fondo_negro");
            main.setAttribute("class", "parrafo-blanco");
        }

    });

    botonTamanio.addEventListener("click", function (event) {
        recorrerPosicion(p);
        recorrerPosicion(li);
        recorrerPosicion(titulos);
    });

    }


