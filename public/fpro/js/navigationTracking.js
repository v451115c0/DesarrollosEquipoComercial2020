function navigationTracking(associateid, plataforma, accion){
    (associateid == '') ? associateid = encryptData(9845903): associateid = encryptData(associateid);
    (plataforma == '') ? plataforma = encryptData('Indefinido'): plataforma = encryptData(plataforma);
    (accion == '') ? accion = encryptData('Indefinido'): accion = encryptData(accion);
    var data = {
        associateid: associateid,
        plataforma: plataforma,
        accion: accion,
    };
    $.ajax({
        type: "get",
        url: "/navigationTracking",
        data: data,
        success: function(response){
            console.log('acción guardada');
        }
    });
}

function encryptData(data){
    var encoded = "";
    str = btoa(data);
    str = btoa(str);
    for (i=0; i<str.length;i++) {
        var a = str.charCodeAt(i);
        var b = a ^ 10;
        encoded = encoded+String.fromCharCode(b);
    }
    encoded = btoa(encoded);
    return encoded;
}