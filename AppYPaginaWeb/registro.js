var getData = function (){
    try {
        var name = document.getElementById("nombre").value;
        var apellido = document.getElementById("apellidos").value;
        var correo = document.getElementById("correos").value;
        var contraseña = document.getElementById("contraseñas").value;
        console.log(name+" "+apellido+" "+correo+" "+contraseña);
        localStorage.nombreusuario = name;
        
        if(name == "" || apellido == "" || correo == "" || contraseña == ""){
        alert("Por favor ingrese los datos pedidos");
        }
        else{
        alert("Registro realizado correctamente")
        window.location.href="streaming.html";
        }
    } catch (error) {
        console.error("Error en registro.js");
        throw error;
    }
   
}
var enviar = function(){
try {
    alert("Mensaje enviado");
    window.close();
    window.location.href="index.html";
} catch (error) {
    throw error;
}
}

