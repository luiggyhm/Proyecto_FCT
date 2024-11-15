window.onload = function () {
    var body = document.getElementById("body");
    let botonFondo = document.getElementById("cambiarFondo");
    let botonTamanio = document.getElementById("cambiarTamanio");
    let p =document.getElementsByTagName("p");
    var main = document.getElementById("main");


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
        for (let i = 0; i < p.length; i++) {
            if(p[i].getAttribute('class') == ""){
                p[i].setAttribute('class', 'fuente_grande');
            }else if(p[i].getAttribute('class')== 'fuente_grande'){
                p[i].setAttribute('class', 'fuente_mas_grande');
            }else{
                p[i].setAttribute('class', '');
            }
            
        }
    });

    }


