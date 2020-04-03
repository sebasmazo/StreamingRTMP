navigator.mediaDevices.getUserMedia({ audio: true, video: true }).then((stream) => {
    console.log(stream)

    let video = document.getElementById('video')

    video.srcObject = stream
    video.onloadedmetadata = (ev => video.play())
    

}).catch((err)=>console.log(err))
