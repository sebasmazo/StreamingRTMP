
navigator.mediaDevices.getUserMedia({ audio: true, video: true }).then((stream) => { //Pide permiso al usuario para acceder al hardware
    console.log(stream) //Indica por consola el inicio del stream

    let video = document.getElementById('video') //Regresa una referencia para el video

    video.srcObject = stream //Streaming
    video.onloadedmetadata = (ev => video.play()) //Inicia la transmisión del video cuando las condiciones se hayan especificado
    

}).catch((err)=>console.log(err)) // Control de errores
