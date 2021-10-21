// Cambiar imagen
let producto = document.getElementById("producto");
let seleccionImagen = "url(../assets/IMG/ejemplo.jpg)";

function imagenUnoHover(){
    producto.style.backgroundImage = "url(../assets/IMG/ejemploUno.jpg)";
}
function imagenDosHover(){
    producto.style.backgroundImage = "url(../assets/IMG/ejemploDos.jpg)";
}
function imagenTresHover(){
    producto.style.backgroundImage = "url(../assets/IMG/ejemploTres.jpg)";
}
function imagenCuatroHover(){
    producto.style.backgroundImage = "url(../assets/IMG/ejemploCuatro.jpg)";
}
function imagenCincoHover(){
    producto.style.backgroundImage = "url(../assets/IMG/ejemploCinco.jpg)";
}
// Retonar al salir del hover

function retornarImagen(){
    producto.style.backgroundImage = seleccionImagen;
}

// Elegir una imagen
function elegirImagenUno(){
    seleccionImagen = "url(../assets/IMG/ejemploUno.jpg)";
    producto.style.backgroundImage = seleccionImagen;
}
function elegirImagenDos(){
    seleccionImagen = "url(../assets/IMG/ejemploDos.jpg)"
    producto.style.backgroundImage = seleccionImagen;
}
function elegirImagenTres(){
    seleccionImagen = "url(../assets/IMG/ejemploTres.jpg)"
    producto.style.backgroundImage = seleccionImagen;
}
function elegirImagenCuatro(){
    seleccionImagen = "url(../assets/IMG/ejemploCuatro.jpg)"
    producto.style.backgroundImage = seleccionImagen;
}
function elegirImagenCinco(){
    seleccionImagen = "url(../assets/IMG/ejemploCinco.jpg)"
    producto.style.backgroundImage = seleccionImagen;
}