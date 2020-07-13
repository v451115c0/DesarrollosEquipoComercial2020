AOS.init();
var footer = '<span class="flaticon-danger-line" style="font-size: 20px;"></span> Recuerda que puedes obtener mas semanas de descuento.';
var estatus = $("#status").val();
if(estatus == 8){
    footer = '';
    alertaAvance("Has ganado el descuento en repuestos a apartir de ahora y hasta el dia 30 de Septiembre");
}
else if(estatus == 7){
    alertaAvance("Has ganado 7 semanas de descuento en repuestos, desde el 15 de Agosto hasta el dia 30 de Septiembre");
}
else if(estatus == 6){
    alertaAvance("Has ganado 6 semanas de descuento en repuestos, desde el 15 de Agosto hasta el dia 25 de Septiembre");
}
else if(estatus == 5){
    alertaAvance("Has ganado 5 semanas de descuento en repuestos, desde el 22 de Agosto hasta el dia 25 de Septiembre");
}
else if(estatus == 4){
    alertaAvance("Has ganado 4 semanas de descuento en repuestos, desde el 22 de Agosto hasta el dia 18 de Septiembre");
}
else if(estatus == 3){
    alertaAvance("Has ganado 3 semanas de descuento en repuestos, desde el 29 de Agosto hasta el dia 18 de Septiembre");
}
else if(estatus == 1){
    footer = '';
    alertaAvance("Has ganado el descuento en repuestos a apartir de ahora y hasta el dia 30 de Septiembre");
}

function alertaAvance(mensaje){
    var end = Date.now() + (15 * 1000);

    var interval = setInterval(function() {
        if (Date.now() > end) {
            return clearInterval(interval);
        }

        confetti({
            startVelocity: 30,
            spread: 360,
            ticks: 60,
            origin: {
                x: Math.random(),
                y: Math.random() - 0.2
            }
        });
    }, 200);

    var duration = 15 * 1000;
    var end = Date.now() + duration;

    function frame() {
        confetti({
        particleCount: 15,
        angle: 60,
        spread: 55,
        origin: { x: 0 }
        });
        
        confetti({
        particleCount: 15,
        angle: 120,
        spread: 55,
        origin: { x: 1 }
        });

        if (Date.now() < end) {
            requestAnimationFrame(frame);
        }
    }

    swal({
        title: '¡¡Felicitaciones!!',
        text: mensaje,
        imageUrl: '../fpro/img/convMayo/winner.png',
        imageWidth: 400,
        imageHeight: 220,
        imageAlt: 'Ganador',
        animation: false,
        padding: '2em',
        footer: footer,
    })
}