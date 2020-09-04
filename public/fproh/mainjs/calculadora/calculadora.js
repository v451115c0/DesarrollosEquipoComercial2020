var targetNode1;
var targetNode2;
var targetNode3;
var targetpzsNode1;
var targetpzsNode2;
var targetpzsNode3;
var nombreJugadorCero;
var isoMoney = {'LAT': "$", 'COL': '$', 'CRI': '₡', 'PAN': '$', 'ECU': 'USD', 'PER': 'S/', 'SLV': '$', 'GTM': 'Q', 'CHL': '$'}
var pais = $("#paisPadre").val();
var paisesLargos = { 'LAT': 'México', 'COL': 'Colombia', 'CRI': 'Costa Rica', 'PAN': 'Panamá', 'ECU': 'Ecuador', 'PER': 'Perú', 'SLV': 'El Salvador', 'GTM': 'Guatemala', 'CHL': 'Chile' };
var porcentajes = { 'Cliente': '0', 'Influencer': '15', 'DIR': '0', 'EXE': '10', 'PLA': '6', 'ORO': '6', 'PLO': '6', 'DIA': '6', 'DRL': '6' };
$("#todosProductos").show();
$("#productosInfluencia").hide();

function initCalc(){
    $("#paisPadre").val('LAT');
    loadCatProd('kenko_light');
    setIsoMoney();
    $("#rangoPadre").val($("#userRank").val().trim());
    $("#iconPadre").attr('src', '../fproh/img/calculadora/' + $("#userRank").val().trim() + '.png');
    $("#paisPadre").val($("#UserPais").val().trim());
    $("#iconPadrePais").attr('src', '../fproh/img/calculadora/' + $("#UserPais").val().trim() + '.png');
    $("#iconNodo1Pais").attr('src', '../fproh/img/calculadora/' + $("#UserPais").val().trim() + '.png');
    $("#iconNodo2Pais").attr('src', '../fproh/img/calculadora/' + $("#UserPais").val().trim() + '.png');
    $("#iconNodo3Pais").attr('src', '../fproh/img/calculadora/' + $("#UserPais").val().trim() + '.png');
    $("#iconNodo4Pais").attr('src', '../fproh/img/calculadora/' + $("#UserPais").val().trim() + '.png');
    $("#iconNodo5Pais").attr('src', '../fproh/img/calculadora/' + $("#UserPais").val().trim() + '.png');
    $("#iconNodo6Pais").attr('src', '../fproh/img/calculadora/' + $("#UserPais").val().trim() + '.png');

    $("#nodo1").trigger('reset');
    $("#nodo2").trigger('reset');
    $("#nodo3").trigger('reset');
    $("#nodo4").trigger('reset');
    $("#nodo5").trigger('reset');
    $("#nodo6").trigger('reset');

    changeIcon($("#iconNodo1"), 'DIR', null);
    changeIcon($("#iconNodo2"), 'DIR', null);
    changeIcon($("#iconNodo3"), 'DIR', null);
    changeIcon($("#iconNodo4"), 'DIR', null);
    changeIcon($("#iconNodo5"), 'DIR', null);
    changeIcon($("#iconNodo6"), 'DIR', null);
}

function getNameUserCero(){
    swal.mixin({
        allowEscapeKey: false,
        allowOutsideClick: false,
        input: 'text',
        confirmButtonText: 'Continuar',
        showCancelButton: false,
        padding: '2em',
    }).queue([
        {
            title: 'Bienvenido',
            text: 'Ingrese un nombre para el jugador'
        },
    ]).then(function(result) {
        if (result.value) {
            if(result.value != ''){
                nombreJugadorCero = result.value;
                $("#nombreUser").text(nombreJugadorCero);
            }
            else{
                swal({
                    title: 'Error',
                    text: "Por favor, es necesario agregar un Nombre!",
                    type: 'error',
                    padding: '2em'
                }).then(function(){
                    getNameUserCero();
                });
            }
        }
    })
    $(".swal2-input").addClass('form-control-rounded')
}

function changeIcon(element, option, form, porcentlabel){
    element.attr('src', '../fproh/img/calculadora/' + option + '.png');

    if(option == 'Cliente'){
        if(form != null){
            form.trigger('reset');
            form.hide();
            if(form.attr('id') == 'nodo2'){
                $(".btnAddNodo1").hide();
                $(".hrNode1").hide();

                $("#prodNode2_2").hide();
                $("#pzsProdNode2_2").parent().addClass('hiden');
                $("#prodNode2_3").hide();
                $("#pzsProdNode2_3").parent().addClass('hiden');
                $("#linea1indicador").text(".");
                $("#influencerNodo1").parent().hide();
            }
            else if(form.attr('id') == 'nodo4'){
                $(".btnAddNodo2").hide();
                $(".hrNode2").hide();

                $("#prodNode4_2").hide();
                $("#pzsProdNode4_2").parent().addClass('hiden');
                $("#prodNode4_3").hide();
                $("#pzsProdNode4_3").parent().addClass('hiden');
                $("#linea2indicador").text(".");
                $("#influencerNodo3").parent().hide();
            }
            else if(form.attr('id') == 'nodo6'){
                $(".btnAddNodo3").hide();
                $(".hrNode3").hide();

                $("#prodNode6_2").hide();
                $("#pzsProdNode6_2").parent().addClass('hiden');
                $("#prodNode6_3").hide();
                $("#pzsProdNode6_3").parent().addClass('hiden');
                $("#linea3indicador").text(".");
                $("#influencerNodo5").parent().hide();
            }
        }
    }
    else if(option != 'Cliente'){
        if(form != null){
            if(form.attr('id') == 'nodo2'){
                $(".btnAddNodo1").show();
                $(".hrNode1").show();
                $("#linea1indicador").text("Línea 1");
                $("#influencerNodo1").parent().show();
            }
            else if(form.attr('id') == 'nodo4'){
                $(".btnAddNodo2").show();
                $(".hrNode2").show();
                $("#linea2indicador").text("Línea 2");
                $("#influencerNodo3").parent().show();
            }
            else if(form.attr('id') == 'nodo6'){
                $(".btnAddNodo3").show();
                $(".hrNode3").show();
                $("#linea3indicador").text("Línea 3");
                $("#influencerNodo5").parent().show();
            }
        }
    }

    if(option == 'Influencer'){
        if(form != null){
            if(form.attr('id') == 'nodo2'){
                $("#influencerNodo1").click();
            }
            else if(form.attr('id') == 'nodo4'){
                $("#influencerNodo3").click();
            }
            else if(form.attr('id') == 'nodo6'){
                $("#influencerNodo5").click();
            }
        }
        var nodoLinea = element.attr('id');
        if(nodoLinea == 'iconNodo2'){
            $("#influencerNodo2").click();
        }
        else if(nodoLinea == 'iconNodo4'){
            $("#influencerNodo4").click();
        }
        else if(nodoLinea == 'iconNodo6'){
            $("#influencerNodo6").click();
        }
    }

    if($("#rangoPadre").val() == 'DIR' && $("#rangoNodo1").val() == 'DIR' || $("#rangoPadre").val() == 'DIR' && $("#rangoNodo1").val() == 'Influencer'){
        $("span[id=porcentBonoGPNodo1]").text(porcentajes[option]);
        $("span[id=porcentBonoGPNodo2]").text(porcentajes[option]);
        console.group('Nodo 1 y 2 al 0%');
    }
    if($("#rangoPadre").val() == 'DIR' && $("#rangoNodo3").val() == 'DIR' || $("#rangoPadre").val() == 'DIR' && $("#rangoNodo3").val() == 'Influencer'){
        $("span[id=porcentBonoGPNodo3]").text(porcentajes[option]);
        $("span[id=porcentBonoGPNodo4]").text(porcentajes[option]);
        console.group('Nodo 3 y 4 al 0%');
    }
    if($("#rangoPadre").val() == 'DIR' && $("#rangoNodo5").val() == 'DIR' || $("#rangoPadre").val() == 'DIR' && $("#rangoNodo5").val() == 'Influencer'){
        $("span[id=porcentBonoGPNodo5]").text(porcentajes[option]);
        $("span[id=porcentBonoGPNodo6]").text(porcentajes[option]);
        console.group('Nodo 5 y 6 al 0%');
    }

    if($("#rangoPadre").val() == 'EXE' && $("#rangoNodo1").val() == 'DIR' || $("#rangoPadre").val() == 'DIR' && $("#rangoNodo1").val() == 'Influencer'){
        $("span[id=porcentBonoGPNodo1]").text('5');
        $("span[id=porcentBonoGPNodo2]").text('5');
    }
    if($("#rangoPadre").val() == 'EXE' && $("#rangoNodo3").val() == 'DIR' || $("#rangoPadre").val() == 'DIR' && $("#rangoNodo3").val() == 'Influencer'){
        $("span[id=porcentBonoGPNodo3]").text('5');
        $("span[id=porcentBonoGPNodo4]").text('5');
    }
    if($("#rangoPadre").val() == 'EXE' && $("#rangoNodo5").val() == 'DIR' || $("#rangoPadre").val() == 'DIR' && $("#rangoNodo5").val() == 'Influencer'){
        $("span[id=porcentBonoGPNodo5]").text('5');
        $("span[id=porcentBonoGPNodo6]").text('5');
    }

    if($("#rangoPadre").val() == 'EXE' && $("#rangoNodo1").val() == 'EXE'){
        $("span[id=porcentBonoGPNodo1]").text('0');
        $("span[id=porcentBonoGPNodo2]").text('0');
    }
    if($("#rangoPadre").val() == 'EXE' && $("#rangoNodo3").val() == 'EXE'){
        $("span[id=porcentBonoGPNodo3]").text('0');
        $("span[id=porcentBonoGPNodo4]").text('0');
    }
    if($("#rangoPadre").val() == 'EXE' && $("#rangoNodo5").val() == 'EXE'){
        $("span[id=porcentBonoGPNodo5]").text('0');
        $("span[id=porcentBonoGPNodo6]").text('0');
    }

    if($("#rangoPadre").val() == 'EXE' && $("#rangoNodo1").val() == 'PLA'){
        $("span[id=porcentBonoGPNodo1]").text('0');
        $("span[id=porcentBonoGPNodo2]").text('0');
    }
    if($("#rangoPadre").val() == 'EXE' && $("#rangoNodo3").val() == 'PLA'){
        $("span[id=porcentBonoGPNodo3]").text('0');
        $("span[id=porcentBonoGPNodo4]").text('0');
    }
    if($("#rangoPadre").val() == 'EXE' && $("#rangoNodo5").val() == 'PLA'){
        $("span[id=porcentBonoGPNodo5]").text('0');
        $("span[id=porcentBonoGPNodo6]").text('0');
    }

    if($("#rangoPadre").val() != 'DIR' && $("#rangoPadre").val() != 'EXE' && $("#rangoNodo1").val() == 'DIR' || $("#rangoPadre").val() != 'DIR' && $("#rangoPadre").val() != 'EXE' && $("#rangoNodo1").val() == 'Influencer'){
        $("span[id=porcentBonoGPNodo1]").text('15');
        $("span[id=porcentBonoGPNodo2]").text('15');
    }
    if($("#rangoPadre").val() != 'DIR' && $("#rangoPadre").val() != 'EXE' && $("#rangoNodo3").val() == 'DIR' || $("#rangoPadre").val() != 'DIR' && $("#rangoPadre").val() != 'EXE' && $("#rangoNodo3").val() == 'Influencer'){
        $("span[id=porcentBonoGPNodo3]").text('15');
        $("span[id=porcentBonoGPNodo4]").text('15');
    }
    if($("#rangoPadre").val() != 'DIR' && $("#rangoPadre").val() != 'EXE' && $("#rangoNodo5").val() == 'DIR' || $("#rangoPadre").val() != 'DIR' && $("#rangoPadre").val() != 'EXE' && $("#rangoNodo5").val() == 'Influencer'){
        $("span[id=porcentBonoGPNodo5]").text('15');
        $("span[id=porcentBonoGPNodo6]").text('15');
    }

    if($("#rangoPadre").val() != 'DIR' && $("#rangoPadre").val() != 'EXE' && $("#rangoNodo1").val() == 'EXE'){
        $("span[id=porcentBonoGPNodo1]").text('10');
        $("span[id=porcentBonoGPNodo2]").text('10');
    }
    if($("#rangoPadre").val() != 'DIR' && $("#rangoPadre").val() != 'EXE' && $("#rangoNodo3").val() == 'EXE'){
        $("span[id=porcentBonoGPNodo3]").text('10');
        $("span[id=porcentBonoGPNodo4]").text('10');
    }
    if($("#rangoPadre").val() != 'DIR' && $("#rangoPadre").val() != 'EXE' && $("#rangoNodo5").val() == 'EXE'){
        $("span[id=porcentBonoGPNodo5]").text('10');
        $("span[id=porcentBonoGPNodo6]").text('10');
    }

    if($("#rangoPadre").val() != 'DIR' && $("#rangoPadre").val() != 'EXE' && $("#rangoNodo1").val() != 'DIR' && $("#rangoNodo1").val() != 'EXE' && $("#rangoNodo1").val() != 'Influencer'){
        $("span[id=porcentBonoGPNodo1]").text('0');
        $("span[id=porcentBonoGPNodo2]").text('0');
    }
    if($("#rangoPadre").val() != 'DIR' && $("#rangoPadre").val() != 'EXE' && $("#rangoNodo3").val() != 'DIR' && $("#rangoNodo3").val() != 'EXE' && $("#rangoNodo3").val() != 'Influencer'){
        $("span[id=porcentBonoGPNodo3]").text('0');
        $("span[id=porcentBonoGPNodo4]").text('0');
    }
    if($("#rangoPadre").val() != 'DIR' && $("#rangoPadre").val() != 'EXE' && $("#rangoNodo5").val() != 'DIR' && $("#rangoNodo5").val() != 'EXE' && $("#rangoNodo5").val() != 'Influencer'){
        $("span[id=porcentBonoGPNodo5]").text('0');
        $("span[id=porcentBonoGPNodo6]").text('0');
    }
}

function changeIconPais(element, option, banderaNodo1, nombrePaisNodo1, banderaNodo2, nombrePaisNodo2, banderaNodo3, nombrePaisNodo3, banderaNodo4, nombrePaisNodo4, banderaNodo5, nombrePaisNodo5, banderaNodo6, nombrePaisNodo6){
    element.attr('src', '../fproh/img/calculadora/' + option + '.png');
    nombrePaisNodo1.text(paisesLargos[option])
    banderaNodo1.attr('src', '../fproh/img/calculadora/' + option + '.png');
    nombrePaisNodo2.text(paisesLargos[option])
    banderaNodo2.attr('src', '../fproh/img/calculadora/' + option + '.png');
    nombrePaisNodo3.text(paisesLargos[option])
    banderaNodo3.attr('src', '../fproh/img/calculadora/' + option + '.png');
    nombrePaisNodo4.text(paisesLargos[option])
    banderaNodo4.attr('src', '../fproh/img/calculadora/' + option + '.png');
    nombrePaisNodo5.text(paisesLargos[option])
    banderaNodo5.attr('src', '../fproh/img/calculadora/' + option + '.png');
    nombrePaisNodo6.text(paisesLargos[option])
    banderaNodo6.attr('src', '../fproh/img/calculadora/' + option + '.png');
}

function getProducts(element){
    var familyProduct = $(element).attr('data-product');
    loadCatProd(familyProduct);
}

function slectProd(product){
    if(targetNode1.val() == ""){
        targetNode1.val(product);
    }
    else if(targetNode2.val() == ""){
        targetNode2.val(product);
        targetNode2.removeClass('hiden')
        targetpzsNode2.parent().removeClass('hiden');
    }
    else if(targetNode3.val() == ""){
        targetNode3.val(product);
        targetNode3.removeClass('hiden')
        targetpzsNode3.parent().removeClass('hiden');
    }
}

function delProd(ipuntProducto, inputPZ){
    ipuntProducto.val('');
    ipuntProducto.addClass('hiden');
    inputPZ.val('0');
    inputPZ.parent().addClass('hiden');
}

function getNodeRef(input1, input2, input3, inputPzs1, inputPzs2, inputPzs3, checkBoxInfluencer){
    targetNode1 = $(input1);
    targetNode2 = $(input2);
    targetNode3 = $(input3);

    targetpzsNode1 = $(inputPzs1);
    targetpzsNode2 = $(inputPzs2);
    targetpzsNode3 = $(inputPzs3);

    if(document.getElementById(checkBoxInfluencer).checked){
        $("#todosProductos").hide();
        $("#productosInfluencia").show();
        var prod1 = $(input1).val().split('|');
        prod1 = prod1[0];
        if(prod1 == 5023 || prod1 == 5024 || prod1 == 5025 || prod1 == 5026 || prod1 == 5027 || prod1 == 5028){
            $("#todosProductos").show();
            $("#productosInfluencia").hide();
        }  
    }
    else{
        $("#todosProductos").show();
        $("#productosInfluencia").hide();
        var prod1 = $(input1).val().split('|');
        prod1 = prod1[0];
        if(prod1 != 5023 || prod1 != 5024 || prod1 != 5025 || prod1 != 5026 || prod1 != 5027 || prod1 != 5028){
            $("#todosProductos").show();
            $("#productosInfluencia").hide();
        } 
    }
}

function loadCatProd(product){
    var pais = $("#paisPadre").val();
    $('#catProd').DataTable( {
        "ordering": false,
        "info": false,
        "select": true,
        "destroy": true,
        "dom": '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-12"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5 mb-md-0 mb-5"i><"col-md-7"p>>> >',
        "ajax": "/calcGetProducts?familyProd=" + product + '&pais=' + pais,
        "columns": [
            {
                "data": null,
                "className": "center",
                "defaultContent": '<a href="javascript:void(0)" onclick="slectProd(this.parentNode.parentNode.id)">' + 
                    '<button class="btn btn-success btn-rounded" data-dismiss="modal"><i class="flaticon-single-circle-tick" style="color: #fff"></i> Seleccionar</button>' + 
                '</a>'
            },
            { "data": 'itemCode', "className": 'text-center hiden' },
            { "data": 'itemName', "className": 'text-center' },
            { 
                "data": null, 
                "className": 'text-right',
                "render": function(data, type, row){
                    return isoMoney[pais];
                }
            },
            {
                "data": 'MontoSug',
                "className": 'text-center',
                "render": function(data, type, row){
                    return formatMoney(row.MontoSug, 2);
                }
            },
        ],
        "rowId": function(a) {
            return a.itemCode.trim() + '|' + a.itemName.trim();
        },
        "language": {
            "paginate": {
              "previous": "<i class='flaticon-arrow-left-1'></i>",
              "next": "<i class='flaticon-arrow-right'></i>"
            },
            "search": "" ,
            "searchPlaceholder": "Buscar por nombre o por código...",
            "info": "Showing page _PAGE_ of _PAGES_",
            "loadingRecords": 'Cargando Productos Nikken <i class="flaticon-spinner-5 spin"></i>',
            'sEmptyTable': 'No hay productos de este enterno "' + product + '" en tu país...'
        }
    });

    $('.dataTables_filter input[type="search"]').css(
        {'width':'100%','display':'inline-block', 'text-align': 'center', 'border': '3px solid #00aa97'}
    );
    $('.dataTables_filter label').css(
        {'width':'100%'}
    );
    $('.dataTable').css(
        {'border-radius':'25px'}
    );
}

function loadCatProdInfluencia(){
    var pais = $("#paisPadre").val();
    $('#catProdInfluencia').DataTable( {
        "ordering": false,
        "info": false,
        "select": true,
        "destroy": true,
        "dom": '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-12"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5 mb-md-0 mb-5"i><"col-md-7"p>>> >',
        "ajax": "/calcGetProductsInfluencia?pais=" + pais,
        "columns": [
            {
                "data": null,
                "className": "center",
                "defaultContent": '<a href="javascript:void(0)" onclick="slectProd(this.parentNode.parentNode.id)">' + 
                    '<button class="btn btn-success btn-rounded" data-dismiss="modal"><i class="flaticon-single-circle-tick" style="color: #fff"></i> Seleccionar</button>' + 
                '</a>'
            },
            { "data": 'itemCode', "className": 'text-center hiden' },
            { "data": 'itemName', "className": 'text-center' },
            { 
                "data": null, 
                "className": 'text-right',
                "render": function(data, type, row){
                    return isoMoney[pais];
                }
            },
            {
                "data": 'MontoSug',
                "className": 'text-center',
                "render": function(data, type, row){
                    return formatMoney(row.MontoSug, 2);
                }
            },
        ],
        "rowId": function(a) {
            return a.itemCode.trim() + '|' + a.itemName.trim();
        },
        "language": {
            "paginate": {
              "previous": "<i class='flaticon-arrow-left-1'></i>",
              "next": "<i class='flaticon-arrow-right'></i>"
            },
            "search": "" ,
            "searchPlaceholder": "Buscar por nombre o por código...",
            "info": "Showing page _PAGE_ of _PAGES_",
            "loadingRecords": 'Cargando Productos Nikken <i class="flaticon-spinner-5 spin"></i>',
            'sEmptyTable': 'No hay productos de este enterno "Kits de Influencia" en tu país...'
        }
    });

    $('.dataTables_filter input[type="search"]').css(
        {'width':'100%','display':'inline-block', 'text-align': 'center', 'border': '3px solid #00aa97'}
    );
    $('.dataTables_filter label').css(
        {'width':'100%'}
    );
    $('.dataTable').css(
        {'border-radius':'25px'}
    );
}

loadCatProdInfluencia();

function getBonos(){
    /*== datos del Padre ==*/
    var rangoPadre = $("#rangoPadre").val();
    var paisPadre = $("#paisPadre").val();

    /*== datos del nodo 1 ==*/
    var rangoNodo1 = $("#rangoNodo1").val();
    var paisNodo1 = $("#paisNodo1").val();
    var influencerNodo1 = 0;
    $('#influencerNodo1').is(':checked') ? influencerNodo1 = 1 : null;
    var productoNodo1_1 = $("#prodNode1_1").val();
    var productoNodo1_2 = $("#prodNode1_2").val();
    var productoNodo1_3 = $("#prodNode1_3").val();
    var piezasNodo1_1 = $("#pzsProdNode1_1").val();
    if(piezasNodo1_1 == '' || piezasNodo1_1 <= 0){
        piezasNodo1_1 = 1;
        $("#pzsProdNode1_1").val(1)   
    }
    var piezasNodo1_2 = $("#pzsProdNode1_2").val();
    if(piezasNodo1_2 == '' || piezasNodo1_2 <= 0){
        piezasNodo1_2 = 1;
        $("#pzsProdNode1_2").val(1)   
    }
    var piezasNodo1_3 = $("#pzsProdNode1_3").val();
    if(piezasNodo1_3 == '' || piezasNodo1_3 <= 0){
        piezasNodo1_3 = 1;
        $("#pzsProdNode1_3").val(1)   
    }
    if(rangoNodo1 == 'Cliente'){
        influencerNodo1 = 2;
    }
    if(rangoNodo1 == 'Cliente'){
        //paisNodo1 = paisPadre;
        rangoNodo1 = rangoPadre;
    }

    /*== datos del nodo 2 ==*/
    var rangoNodo2 = $("#rangoNodo2").val();
    var paisNodo2 = $("#paisNodo2").val();
    var influencerNodo2 = 0;
    $('#influencerNodo2').is(':checked') ? influencerNodo2 = 1 : null;
    var productoNodo2_1 = $("#prodNode2_1").val();
    var productoNodo2_2 = $("#prodNode2_2").val();
    var productoNodo2_3 = $("#prodNode2_3").val();
    var piezasNodo2_1 = $("#pzsProdNode2_1").val();
    if(piezasNodo2_1 == '' || piezasNodo2_1 <= 0){
        piezasNodo2_1 = 1;
        $("#pzsProdNode2_1").val(1)   
    }
    var piezasNodo2_2 = $("#pzsProdNode2_2").val();
    if(piezasNodo2_2 == '' || piezasNodo2_2 <= 0){
        piezasNodo2_2 = 1;
        $("#pzsProdNode2_2").val(1)   
    }
    var piezasNodo2_3 = $("#pzsProdNode2_3").val();
    if(piezasNodo2_3 == '' || piezasNodo2_3 <= 0){
        piezasNodo2_3 = 1;
        $("#pzsProdNode2_3").val(1)   
    }
    if(rangoNodo2 == 'Cliente'){
        influencerNodo2 = 2;
    }
    if(rangoNodo2 == 'Cliente'){
        //paisNodo2 = paisPadre;
        rangoNodo2 = rangoPadre;
    }
    
    /*-------------------------------------------------------------------------------*/
    /*== datos del nodo 3 ==*/
    var rangoNodo3 = $("#rangoNodo3").val();
    var paisNodo3 = $("#paisNodo3").val();
    var influencerNodo3 = 0;
    $('#influencerNodo3').is(':checked') ? influencerNodo3 = 1 : null;
    var productoNodo3_1 = $("#prodNode3_1").val();
    var productoNodo3_2 = $("#prodNode3_2").val();
    var productoNodo3_3 = $("#prodNode3_3").val();
    var piezasNodo3_1 = $("#pzsProdNode3_1").val();
    if(piezasNodo3_1 == '' || piezasNodo3_1 <= 0){
        piezasNodo3_1 = 1;
        $("#pzsProdNode3_1").val(1);
    }
    var piezasNodo3_2 = $("#pzsProdNode3_2").val();
    if(piezasNodo3_2 == '' || piezasNodo3_2 <= 0){
        piezasNodo3_2 = 1;
        $("#pzsProdNode3_2").val(1);
    }
    var piezasNodo3_3 = $("#pzsProdNode3_3").val();
    if(piezasNodo3_3 == '' || piezasNodo3_3 <= 0){
        piezasNodo3_3 = 1;
        $("#pzsProdNode3_3").val(1);
    }
    if(rangoNodo3 == 'Cliente'){
        influencerNodo3 = 2;
    }
    if(rangoNodo3 == 'Cliente'){
        //paisNodo3 = paisPadre;
        rangoNodo3 = rangoPadre;
    }

    /*== datos del nodo 4 ==*/
    var rangoNodo4 = $("#rangoNodo4").val();
    var paisNodo4 = $("#paisNodo4").val();
    var influencerNodo4 = 0;
    $('#influencerNodo4').is(':checked') ? influencerNodo4 = 1 : null;
    var productoNodo4_1 = $("#prodNode4_1").val();
    var productoNodo4_2 = $("#prodNode4_2").val();
    var productoNodo4_3 = $("#prodNode4_3").val();
    var piezasNodo4_1 = $("#pzsProdNode4_1").val();
    if(piezasNodo4_1 == '' || piezasNodo4_1 <= 0){
        piezasNodo4_1 = 1;
        $("#pzsProdNode4_1").val(1);
    }
    var piezasNodo4_2 = $("#pzsProdNode4_2").val();
    if(piezasNodo4_2 == '' || piezasNodo4_2 <= 0){
        piezasNodo4_2 = 1;
        $("#pzsProdNode4_2").val(1);
    }
    var piezasNodo4_3 = $("#pzsProdNode4_3").val();
    if(piezasNodo4_3 == '' || piezasNodo4_3 <= 0){
        piezasNodo4_3 = 1;
        $("#pzsProdNode4_3").val(1);
    }
    if(rangoNodo4 == 'Cliente'){
        influencerNodo4 = 2;
    }
    if(rangoNodo4 == 'Cliente'){
        //paisNodo4 = paisPadre;
        rangoNodo4 = rangoPadre;
    }

    /*-------------------------------------------------------------------------------*/
    /*== datos del nodo 5 ==*/
    var rangoNodo5 = $("#rangoNodo5").val();
    var paisNodo5 = $("#paisNodo5").val();
    var influencerNodo5 = 0;
    $('#influencerNodo5').is(':checked') ? influencerNodo5 = 1 : null;
    var productoNodo5_1 = $("#prodNode5_1").val();
    var productoNodo5_2 = $("#prodNode5_2").val();
    var productoNodo5_3 = $("#prodNode5_3").val();
    var piezasNodo5_1 = $("#pzsProdNode5_1").val();
    if(piezasNodo5_1 == '' || piezasNodo5_1 <= 0){
        piezasNodo5_1 = 1;
        $("#pzsProdNode5_1").val(1)   
    }
    var piezasNodo5_2 = $("#pzsProdNode5_2").val();
    if(piezasNodo5_2 == '' || piezasNodo5_2 <= 0){
        piezasNodo5_2 = 1;
        $("#pzsProdNode5_2").val(1)   
    }
    var piezasNodo5_3 = $("#pzsProdNode5_3").val();
    if(piezasNodo5_3 == '' || piezasNodo5_3 <= 0){
        piezasNodo5_3 = 1;
        $("#pzsProdNode5_3").val(1)   
    }
    if(rangoNodo5 == 'Cliente'){
        influencerNodo5 = 2;
    }
    if(rangoNodo5 == 'Cliente'){
        //paisNodo5 = paisPadre;
        rangoNodo5 = rangoPadre;
    }

    /*== datos del nodo 6 ==*/
    var rangoNodo6 = $("#rangoNodo6").val();
    var paisNodo6 = $("#paisNodo6").val();
    var influencerNodo6 = 0;
    $('#influencerNodo6').is(':checked') ? influencerNodo6 = 1 : null;
    var productoNodo6_1 = $("#prodNode6_1").val();
    var productoNodo6_2 = $("#prodNode6_2").val();
    var productoNodo6_3 = $("#prodNode6_3").val();
    var piezasNodo6_1 = $("#pzsProdNode6_1").val();
    if(piezasNodo6_1 == '' || piezasNodo6_1 <= 0){
        piezasNodo6_1 = 1;
        $("#pzsProdNode6_1").val(1)
    }
    var piezasNodo6_2 = $("#pzsProdNode6_2").val();
    if(piezasNodo6_2 == '' || piezasNodo6_2 <= 0){
        piezasNodo6_2 = 1;
        $("#pzsProdNode6_2").val(1)
    }
    var piezasNodo6_3 = $("#pzsProdNode6_3").val();
    if(piezasNodo6_3 == '' || piezasNodo6_3 <= 0){
        piezasNodo6_3 = 1;
        $("#pzsProdNode6_3").val(1)
    }
    if(rangoNodo6 == 'Cliente'){
        influencerNodo6 = 2;
    }
    if(rangoNodo6 == 'Cliente'){
        //paisNodo6 = paisPadre;
        rangoNodo6 = rangoPadre;
    }

    var data = {
        /*== nodo 1 ==*/
        rangoNodo1: rangoNodo1,
        paisNodo1: paisNodo1,
        influencerNodo1: influencerNodo1,
        productoNodo1_1: productoNodo1_1,
        productoNodo1_2: productoNodo1_2,
        productoNodo1_3: productoNodo1_3,
        piezasNodo1_1: piezasNodo1_1,
        piezasNodo1_2: piezasNodo1_2,
        piezasNodo1_3: piezasNodo1_3,

        /*== nodo 2 ==*/
        rangoNodo2: rangoNodo2,
        paisNodo2: paisNodo2,
        influencerNodo2: influencerNodo2,
        productoNodo2_1: productoNodo2_1,
        productoNodo2_2: productoNodo2_2,
        productoNodo2_3: productoNodo2_3,
        piezasNodo2_1: piezasNodo2_1,
        piezasNodo2_2: piezasNodo2_2,
        piezasNodo2_3: piezasNodo2_3,

        /*== nodo 3 ==*/
        rangoNodo3: rangoNodo3,
        paisNodo3: paisNodo3,
        influencerNodo3: influencerNodo3,
        productoNodo3_1: productoNodo3_1,
        productoNodo3_2: productoNodo3_2,
        productoNodo3_3: productoNodo3_3,
        piezasNodo3_1: piezasNodo3_1,
        piezasNodo3_2: piezasNodo3_2,
        piezasNodo3_3: piezasNodo3_3,

        /*== nodo 4 ==*/
        rangoNodo4: rangoNodo4,
        paisNodo4: paisNodo4,
        influencerNodo4: influencerNodo4,
        productoNodo4_1: productoNodo4_1,
        productoNodo4_2: productoNodo4_2,
        productoNodo4_3: productoNodo4_3,
        piezasNodo4_1: piezasNodo4_1,
        piezasNodo4_2: piezasNodo4_2,
        piezasNodo4_3: piezasNodo4_3,

        /*== nodo 5 ==*/
        rangoNodo5: rangoNodo5,
        paisNodo5: paisNodo5,
        influencerNodo5: influencerNodo5,
        productoNodo5_1: productoNodo5_1,
        productoNodo5_2: productoNodo5_2,
        productoNodo5_3: productoNodo5_3,
        piezasNodo5_1: piezasNodo5_1,
        piezasNodo5_2: piezasNodo5_2,
        piezasNodo5_3: piezasNodo5_3,

        /*== nodo 6 ==*/
        rangoNodo6: rangoNodo6,
        paisNodo6: paisNodo6,
        influencerNodo6: influencerNodo6,
        productoNodo6_1: productoNodo6_1,
        productoNodo6_2: productoNodo6_2,
        productoNodo6_3: productoNodo6_3,
        piezasNodo6_1: piezasNodo6_1,
        piezasNodo6_2: piezasNodo6_2,
        piezasNodo6_3: piezasNodo6_3,

        /*== GRAL ==*/
        rangPadre: rangoPadre,
        paisPadre: paisPadre,
    }

    $.ajax({
        type: 'get',
        url: '/calcGetBonos',
        data: data,
        success: function(result){
            /*== Mostrar bonos del Padre ==*/
            $("#bonoInfluenciaPlata").text(formatMoney(result[0]['TotalAmount'], 2));
            $("#bonoRetailPlata").text(formatMoney(result[0]['Ganancias_SugeridoRetail'], 2));
            $("#bonoReembolsoPlata").text(formatMoney(result[0]['Ganancias_ReembolsoPersonal'], 2));
            $("#bonoGrupoPlata").text(formatMoney(result[0]['Bonificacion_GP_Adicional'], 2));
            $("#bonoLiderPlata").text(formatMoney(result[0]['Bonificacion_Liderazgo'], 2));
            $("#bonoTotalPlata").text(formatMoney(result[0]['Total_Bonificacion'], 2));

            /*== Mostrar bonos del Nodo 1 ==*/
            $("#bonoInfluenciaNodo1").text(formatMoney(result[1]['TotalAmount'], 2));
            $("#bonoRetailNodo1").text(formatMoney(result[1]['Ganancias_SugeridoRetail'], 2));
            $("#bonoReembolsoNodo1").text(formatMoney(result[1]['Ganancias_ReembolsoPersonal'], 2));
            $("#bonoPorGrupoNodo1").text(formatMoney(result[1]['Bonificacion_GP_Adicional'], 2));
            $("#bonoLiderNodo1").text(formatMoney(result[1]['Bonificacion_Liderazgo'], 2));
            $("#bonoTotalNodo1").text(formatMoney(result[1]['Total_Bonificacion'], 2));

            $("#bonoInfluenciaNodo1Modal").text(formatMoney(result[1]['TotalAmount'], 2));
            $("#bonoRetailNodo1Modal").text(formatMoney(result[1]['Ganancias_SugeridoRetail'], 2));
            $("#bonoReembolsoNodo1Modal").text(formatMoney(result[1]['Ganancias_ReembolsoPersonal'], 2));
            $("#bonoPorGrupoNodo1Modal").text(formatMoney(result[1]['Bonificacion_GP_Adicional'], 2));
            $("#bonoLiderNodo1Modal").text(formatMoney(result[1]['Bonificacion_Liderazgo'], 2));
            $("#bonoTotalNodo1Modal").text(formatMoney(result[1]['Total_Bonificacion'], 2));

            /*== Mostrar bonos del Nodo 2 ==*/
            $("#bonoInfluenciaNodo2").text(formatMoney(result[2]['TotalAmount'], 2));
            $("#bonoRetailNodo2").text(formatMoney(result[2]['Ganancias_SugeridoRetail'], 2));
            $("#bonoReembolsoNodo2").text(formatMoney(result[2]['Ganancias_ReembolsoPersonal'], 2));
            $("#bonoPorGrupoNodo2").text(formatMoney(result[2]['Bonificacion_GP_Adicional'], 2));
            $("#bonoLiderNodo2").text(formatMoney(result[2]['Bonificacion_Liderazgo'], 2));
            $("#bonoTotalNodo2").text(formatMoney(result[2]['Total_Bonificacion'], 2));

            $("#bonoInfluenciaNodo2Modal").text(formatMoney(result[2]['TotalAmount'], 2));
            $("#bonoRetailNodo2Modal").text(formatMoney(result[2]['Ganancias_SugeridoRetail'], 2));
            $("#bonoReembolsoNodo2Modal").text(formatMoney(result[2]['Ganancias_ReembolsoPersonal'], 2));
            $("#bonoPorGrupoNodo2Modal").text(formatMoney(result[2]['Bonificacion_GP_Adicional'], 2));
            $("#bonoLiderNodo2modal").text(formatMoney(result[2]['Bonificacion_Liderazgo'], 2));
            $("#bonoTotalNodo2Modal").text(formatMoney(result[2]['Total_Bonificacion'], 2));

            /*== Mostrar bonos del Nodo 3 ==*/
            $("#bonoInfluenciaNodo3").text(formatMoney(result[3]['TotalAmount'], 2));
            $("#bonoRetailNodo3").text(formatMoney(result[3]['Ganancias_SugeridoRetail'], 2));
            $("#bonoReembolsoNodo3").text(formatMoney(result[3]['Ganancias_ReembolsoPersonal'], 2));
            $("#bonoPorGrupoNodo3").text(formatMoney(result[3]['Bonificacion_GP_Adicional'], 2));
            $("#bonoLiderNodo3").text(formatMoney(result[3]['Bonificacion_Liderazgo'], 2));
            $("#bonoTotalNodo3").text(formatMoney(result[3]['Total_Bonificacion'], 2));

            $("#bonoInfluenciaNodo3Modal").text(formatMoney(result[3]['TotalAmount'], 2));
            $("#bonoRetailNodo3Modal").text(formatMoney(result[3]['Ganancias_SugeridoRetail'], 2));
            $("#bonoReembolsoNodo3Modal").text(formatMoney(result[3]['Ganancias_ReembolsoPersonal'], 2));
            $("#bonoPorGrupoNodo3Modal").text(formatMoney(result[3]['Bonificacion_GP_Adicional'], 2));
            $("#bonoLiderNodo3Modal").text(formatMoney(result[3]['Bonificacion_Liderazgo'], 2));
            $("#bonoTotalNodo3Modal").text(formatMoney(result[3]['Total_Bonificacion'], 2));

            /*== Mostrar bonos del Nodo 4 ==*/
            $("#bonoInfluenciaNodo4").text(formatMoney(result[4]['TotalAmount'], 2));
            $("#bonoRetailNodo4").text(formatMoney(result[4]['Ganancias_SugeridoRetail'], 2));
            $("#bonoReembolsoNodo4").text(formatMoney(result[4]['Ganancias_ReembolsoPersonal'], 2));
            $("#bonoPorGrupoNodo4").text(formatMoney(result[4]['Bonificacion_GP_Adicional'], 2));
            $("#bonoLiderNodo4").text(formatMoney(result[4]['Bonificacion_Liderazgo'], 2));
            $("#bonoTotalNodo4").text(formatMoney(result[4]['Total_Bonificacion'], 2));

            $("#bonoInfluenciaNodo4Modal").text(formatMoney(result[4]['TotalAmount'], 2));
            $("#bonoRetailNodo4Modal").text(formatMoney(result[4]['Ganancias_SugeridoRetail'], 2));
            $("#bonoReembolsoNodo4Modal").text(formatMoney(result[4]['Ganancias_ReembolsoPersonal'], 2));
            $("#bonoPorGrupoNodo4Modal").text(formatMoney(result[4]['Bonificacion_GP_Adicional'], 2));
            $("#bonoLiderNodo4Modal").text(formatMoney(result[4]['Bonificacion_Liderazgo'], 2));
            $("#bonoTotalNodo4Modal").text(formatMoney(result[4]['Total_Bonificacion'], 2));

            /*== Mostrar bonos del Nodo 5 ==*/
            $("#bonoInfluenciaNodo5").text(formatMoney(result[5]['TotalAmount'], 2));
            $("#bonoRetailNodo5").text(formatMoney(result[5]['Ganancias_SugeridoRetail'], 2));
            $("#bonoReembolsoNodo5").text(formatMoney(result[5]['Ganancias_ReembolsoPersonal'], 2));
            $("#bonoPorGrupoNodo5").text(formatMoney(result[5]['Bonificacion_GP_Adicional'], 2));
            $("#bonoLiderNodo5").text(formatMoney(result[5]['Bonificacion_Liderazgo'], 2));
            $("#bonoTotalNodo5").text(formatMoney(result[5]['Total_Bonificacion'], 2));

            $("#bonoInfluenciaNodo5Modal").text(formatMoney(result[5]['TotalAmount'], 2));
            $("#bonoRetailNodo5Modal").text(formatMoney(result[5]['Ganancias_SugeridoRetail'], 2));
            $("#bonoReembolsoNodo5Modal").text(formatMoney(result[5]['Ganancias_ReembolsoPersonal'], 2));
            $("#bonoPorGrupoNodo5Modal").text(formatMoney(result[5]['Bonificacion_GP_Adicional'], 2));
            $("#bonoLiderNodo5Modal").text(formatMoney(result[5]['Bonificacion_Liderazgo'], 2));
            $("#bonoTotalNodo5Modal").text(formatMoney(result[5]['Total_Bonificacion'], 2));

            /*== Mostrar bonos del Nodo 6 ==*/
            $("#bonoInfluenciaNodo6").text(formatMoney(result[6]['TotalAmount'], 2));
            $("#bonoRetailNodo6").text(formatMoney(result[6]['Ganancias_SugeridoRetail'], 2));
            $("#bonoReembolsoNodo6").text(formatMoney(result[6]['Ganancias_ReembolsoPersonal'], 2));
            $("#bonoPorGrupoNodo6").text(formatMoney(result[6]['Bonificacion_GP_Adicional'], 2));
            $("#bonoLiderNodo6").text(formatMoney(result[6]['Bonificacion_Liderazgo'], 2));
            $("#bonoTotalNodo6").text(formatMoney(result[6]['Total_Bonificacion'], 2));

            $("#bonoInfluenciaNodo6Modal").text(formatMoney(result[6]['TotalAmount'], 2));
            $("#bonoRetailNodo6Modal").text(formatMoney(result[6]['Ganancias_SugeridoRetail'], 2));
            $("#bonoReembolsoNodo6Modal").text(formatMoney(result[6]['Ganancias_ReembolsoPersonal'], 2));
            $("#bonoPorGrupoNodo6Modal").text(formatMoney(result[6]['Bonificacion_GP_Adicional'], 2));
            $("#bonoLiderNodo6Modal").text(formatMoney(result[6]['Bonificacion_Liderazgo'], 2));
            $("#bonoTotalNodo6Modal").text(formatMoney(result[6]['Total_Bonificacion'], 2));
        }
    }).fail(function(){
        swal({
            type: 'error',
            title: 'Oops...',
            text: 'No hemos pdido obtener los bonos, intenta nuevamente',
            padding: '2em',
            timer: 3000
        })
    });
}

function formatMoney(amount, decimalCount, decimal = ".", thousands = ",") {
    try {
        decimalCount = Math.abs(decimalCount);
        decimalCount = isNaN(decimalCount) ? 0 : decimalCount;
        const negativeSign = amount < 0 ? "-" : "";
        let i = parseInt(amount = Math.abs(Number(amount) || 0).toFixed(decimalCount)).toString();
        let j = (i.length > 3) ? i.length % 3 : 0;
        return negativeSign + (j ? i.substr(0, j) + thousands : '') + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thousands) + (decimalCount ? decimal + Math.abs(amount - i).toFixed(decimalCount).slice(2) : "");
    }
    catch (e) {
        console.log(e)
    }
};

function setIsoMoney(){
    var pais = $("#paisPadre").val();
    $("span[id=moneda]").text(isoMoney[pais]);
}

$('#pzsProdNode1_1, #pzsProdNode1_2, #pzsProdNode1_3, #pzsProdNode2_1, #pzsProdNode2_2, #pzsProdNode2_3, #pzsProdNode3_1, #pzsProdNode3_2, #pzsProdNode3_3').keypress(validateNumber);
$('#pzsProdNode4_1, #pzsProdNode4_2, #pzsProdNode4_3, #pzsProdNode5_1, #pzsProdNode5_2, #pzsProdNode5_3, #pzsProdNode6_1, #pzsProdNode6_2, #pzsProdNode6_3').keypress(validateNumber);
$("#nodo2").hide();
$("#nodo4").hide();
$("#nodo6").hide();

function validateNumber(event) {
    var key = window.event ? event.keyCode : event.which;
    if (event.keyCode === 8 || event.keyCode === 46) {
        return true;
    } 
    else if (key < 48 || key > 57) {
        return false;
    }
    else {
        return true;
    }
};

function setNodoInfluencer(cb, slctRango, btnAddProd, iputProd, pzsProd, icon){
    if(cb.checked){
        slctRango.val('Influencer');
        slctRango.attr('disabled', 'true');
        iputProd.val('5026|KIT WATERFALL+OPTIMIZER');
        pzsProd.val(1);
        changeIcon(icon, slctRango.val(), null);
    }
    else{
        slctRango.removeAttr('disabled', 'false');
        slctRango.val('DIR');
        iputProd.val('');
        pzsProd.val('');
        changeIcon(icon, slctRango.val(), null);
    }
}

function getNameToModal(inputName, target, slctRango, rangoSpan){
    var rangosNum = {'DIR': 'DIRECTO', 'EXE': 'EJECUTIVO', 'PLA': 'PLATA', 'ORO': 'ORO', 'PLO': 'PLATINO', 'DIA': 'DIAMANTE', 'DRL': 'DIAMANTE REAL', 'Influencer': 'INFLUENCER', 'Cliente': 'CLIENTE'};
    target.text(inputName.val());
    rangoSpan.text(rangosNum[slctRango.val()]);
}

function showPlayer(jugador){
    jugador.show(2000);
}

function hidePlayer(jugador, icon){
    id = jugador.attr('id');
    jugador.trigger('reset');
    jugador.hide(2000);
    changeIcon(icon, 'DIR', null);

    if(id == 'nodo2'){
        $("#prodNode2_2").hide();
        $("#pzsProdNode2_2").parent().addClass('hiden');
        $("#prodNode2_3").hide();
        $("#pzsProdNode2_3").parent().addClass('hiden');
    }
    else if(id == 'nodo4'){
        $("#prodNode4_2").hide();
        $("#pzsProdNode4_2").parent().addClass('hiden');
        $("#prodNode4_3").hide();
        $("#pzsProdNode4_3").parent().addClass('hiden');
    }
    else if(id == 'nodo6'){
        $("#prodNode6_2").hide();
        $("#pzsProdNode6_2").parent().addClass('hiden');
        $("#prodNode6_3").hide();
        $("#pzsProdNode6_3").parent().addClass('hiden');
    }
}

function getPDF(){
    /*== datos del Padre ==*/
    var rangoPadre = $("#rangoPadre").val();
    var paisPadre = $("#paisPadre").val();
    var nombrePadre = $("#nombreUser").text();

    /*== datos del nodo 1 ==*/
    var nombreNodo1 = $("#nombreNodo1").val().trim();
    var rangoNodo1 = $("#rangoNodo1").val();
    var paisNodo1 = $("#paisNodo1").val();
    var influencerNodo1 = 0;
    $('#influencerNodo1').is(':checked') ? influencerNodo1 = 1 : null;
    var productoNodo1_1 = $("#prodNode1_1").val();
    var productoNodo1_2 = $("#prodNode1_2").val();
    var productoNodo1_3 = $("#prodNode1_3").val();
    var piezasNodo1_1 = $("#pzsProdNode1_1").val();
    productoNodo1_1 == '' ? productoNodo1_1 = '-|-' : null;
    productoNodo1_2 == '' ? productoNodo1_2 = '-|-' : null;
    productoNodo1_3 == '' ? productoNodo1_3 = '-|-' : null;
    if(piezasNodo1_1 == '' || piezasNodo1_1 <= 0){
        piezasNodo1_1 = 1;
        $("#pzsProdNode1_1").val(1)   
    }
    var piezasNodo1_2 = $("#pzsProdNode1_2").val();
    if(piezasNodo1_2 == '' || piezasNodo1_2 <= 0){
        piezasNodo1_2 = 1;
        $("#pzsProdNode1_2").val(1)   
    }
    var piezasNodo1_3 = $("#pzsProdNode1_3").val();
    if(piezasNodo1_3 == '' || piezasNodo1_3 <= 0){
        piezasNodo1_3 = 1;
        $("#pzsProdNode1_3").val(1)   
    }
    if(rangoNodo1 == 'Cliente'){
        influencerNodo1 = 2;
    }
    if(rangoNodo1 == 'Cliente'){
        //paisNodo1 = paisPadre;
        rangoNodo1 = rangoPadre;
    }
    var bonoInfluenciaNodo1 = $("#bonoInfluenciaNodo1").text();
    var bonoRetailNodo1 = $("#bonoRetailNodo1").text();
    var bonoReembolsoNodo1 = $("#bonoReembolsoNodo1").text();
    var bonoPorGrupoNodo1 = $("#bonoPorGrupoNodo1").text();
    var bonoLiderNodo1 = $("#bonoLiderNodo1").text();
    var bonoTotalNodo1 = $("#bonoTotalNodo1").text();

    nombreNodo1 == "" && productoNodo1_1 == '-|-' && productoNodo1_2 == '-|-' && productoNodo1_3 == '-|-' ? nombreNodo1 = 'NO' : null;

    /*== datos del nodo 2 ==*/
    var nombreNodo2 = $("#nombreNodo2").val().trim();
    var rangoNodo2 = $("#rangoNodo2").val();
    var paisNodo2 = $("#paisNodo2").val();
    var influencerNodo2 = 0;
    $('#influencerNodo2').is(':checked') ? influencerNodo2 = 1 : null;
    var productoNodo2_1 = $("#prodNode2_1").val();
    var productoNodo2_2 = $("#prodNode2_2").val();
    var productoNodo2_3 = $("#prodNode2_3").val();
    productoNodo2_1 == '' ? productoNodo2_1 = '-|-' : null;
    productoNodo2_2 == '' ? productoNodo2_2 = '-|-' : null;
    productoNodo2_3 == '' ? productoNodo2_3 = '-|-' : null;
    var piezasNodo2_1 = $("#pzsProdNode2_1").val();
    if(piezasNodo2_1 == '' || piezasNodo2_1 <= 0){
        piezasNodo2_1 = 1;
        $("#pzsProdNode2_1").val(1)   
    }
    var piezasNodo2_2 = $("#pzsProdNode2_2").val();
    if(piezasNodo2_2 == '' || piezasNodo2_2 <= 0){
        piezasNodo2_2 = 1;
        $("#pzsProdNode2_2").val(1)   
    }
    var piezasNodo2_3 = $("#pzsProdNode2_3").val();
    if(piezasNodo2_3 == '' || piezasNodo2_3 <= 0){
        piezasNodo2_3 = 1;
        $("#pzsProdNode2_3").val(1)   
    }
    if(rangoNodo2 == 'Cliente'){
        influencerNodo2 = 2;
    }
    if(rangoNodo2 == 'Cliente'){
        //paisNodo2 = paisPadre;
        rangoNodo2 = rangoPadre;
    }
    var bonoInfluenciaNodo2 = $("#bonoInfluenciaNodo2").text();
    var bonoRetailNodo2 = $("#bonoRetailNodo2").text();
    var bonoReembolsoNodo2 = $("#bonoReembolsoNodo2").text();
    var bonoPorGrupoNodo2 = $("#bonoPorGrupoNodo2").text();
    var bonoLiderNodo2 = $("#bonoLiderNodo2").text();
    var bonoTotalNodo2 = $("#bonoTotalNodo2").text();
    nombreNodo2 == "" && productoNodo2_1 == '-|-' && productoNodo2_2 == '-|-' && productoNodo2_3 == '-|-' ? nombreNodo2 = 'NO' : null;
    
    /*-------------------------------------------------------------------------------*/
    /*== datos del nodo 3 ==*/
    var nombreNodo3 = $("#nombreNodo3").val().trim();
    var rangoNodo3 = $("#rangoNodo3").val();
    var paisNodo3 = $("#paisNodo3").val();
    var influencerNodo3 = 0;
    $('#influencerNodo3').is(':checked') ? influencerNodo3 = 1 : null;
    var productoNodo3_1 = $("#prodNode3_1").val();
    var productoNodo3_2 = $("#prodNode3_2").val();
    var productoNodo3_3 = $("#prodNode3_3").val();
    productoNodo3_1 == '' ? productoNodo3_1 = '-|-' : null;
    productoNodo3_2 == '' ? productoNodo3_2 = '-|-' : null;
    productoNodo3_3 == '' ? productoNodo3_3 = '-|-' : null;
    var piezasNodo3_1 = $("#pzsProdNode3_1").val();
    if(piezasNodo3_1 == '' || piezasNodo3_1 <= 0){
        piezasNodo3_1 = 1;
        $("#pzsProdNode3_1").val(1);
    }
    var piezasNodo3_2 = $("#pzsProdNode3_2").val();
    if(piezasNodo3_2 == '' || piezasNodo3_2 <= 0){
        piezasNodo3_2 = 1;
        $("#pzsProdNode3_2").val(1);
    }
    var piezasNodo3_3 = $("#pzsProdNode3_3").val();
    if(piezasNodo3_3 == '' || piezasNodo3_3 <= 0){
        piezasNodo3_3 = 1;
        $("#pzsProdNode3_3").val(1);
    }
    if(rangoNodo3 == 'Cliente'){
        influencerNodo3 = 2;
    }
    if(rangoNodo3 == 'Cliente'){
        //paisNodo3 = paisPadre;
        rangoNodo3 = rangoPadre;
    }
    var bonoInfluenciaNodo3 = $("#bonoInfluenciaNodo3").text();
    var bonoRetailNodo3 = $("#bonoRetailNodo3").text();
    var bonoReembolsoNodo3 = $("#bonoReembolsoNodo3").text();
    var bonoPorGrupoNodo3 = $("#bonoPorGrupoNodo3").text();
    var bonoLiderNodo3 = $("#bonoLiderNodo3").text();
    var bonoTotalNodo3 = $("#bonoTotalNodo3").text();
    nombreNodo3 == "" && productoNodo3_1 == '-|-' && productoNodo3_2 == '-|-' && productoNodo3_3 == '-|-' ? nombreNodo3 = 'NO' : null;

    /*== datos del nodo 4 ==*/
    var nombreNodo4 = $("#nombreNodo4").val().trim();
    var rangoNodo4 = $("#rangoNodo4").val();
    var paisNodo4 = $("#paisNodo4").val();
    var influencerNodo4 = 0;
    $('#influencerNodo4').is(':checked') ? influencerNodo4 = 1 : null;
    var productoNodo4_1 = $("#prodNode4_1").val();
    var productoNodo4_2 = $("#prodNode4_2").val();
    var productoNodo4_3 = $("#prodNode4_3").val();
    productoNodo4_1 == '' ? productoNodo4_1 = '-|-' : null;
    productoNodo4_2 == '' ? productoNodo4_2 = '-|-' : null;
    productoNodo4_3 == '' ? productoNodo4_3 = '-|-' : null;
    var piezasNodo4_1 = $("#pzsProdNode4_1").val();
    if(piezasNodo4_1 == '' || piezasNodo4_1 <= 0){
        piezasNodo4_1 = 1;
        $("#pzsProdNode4_1").val(1);
    }
    var piezasNodo4_2 = $("#pzsProdNode4_2").val();
    if(piezasNodo4_2 == '' || piezasNodo4_2 <= 0){
        piezasNodo4_2 = 1;
        $("#pzsProdNode4_2").val(1);
    }
    var piezasNodo4_3 = $("#pzsProdNode4_3").val();
    if(piezasNodo4_3 == '' || piezasNodo4_3 <= 0){
        piezasNodo4_3 = 1;
        $("#pzsProdNode4_3").val(1);
    }
    if(rangoNodo4 == 'Cliente'){
        influencerNodo4 = 2;
    }
    if(rangoNodo4 == 'Cliente'){
        //paisNodo4 = paisPadre;
        rangoNodo4 = rangoPadre;
    }
    var bonoInfluenciaNodo4 = $("#bonoInfluenciaNodo4").text();
    var bonoRetailNodo4 = $("#bonoRetailNodo4").text();
    var bonoReembolsoNodo4 = $("#bonoReembolsoNodo4").text();
    var bonoPorGrupoNodo4 = $("#bonoPorGrupoNodo4").text();
    var bonoLiderNodo4 = $("#bonoLiderNodo4").text();
    var bonoTotalNodo4 = $("#bonoTotalNodo4").text();
    nombreNodo4 == "" && productoNodo4_1 == '-|-' && productoNodo4_2 == '-|-' && productoNodo4_3 == '-|-' ? nombreNodo4 = 'NO' : null;

    /*-------------------------------------------------------------------------------*/
    /*== datos del nodo 5 ==*/
    var nombreNodo5 = $("#nombreNodo5").val().trim();
    var rangoNodo5 = $("#rangoNodo5").val();
    var paisNodo5 = $("#paisNodo5").val();
    var influencerNodo5 = 0;
    $('#influencerNodo5').is(':checked') ? influencerNodo5 = 1 : null;
    var productoNodo5_1 = $("#prodNode5_1").val();
    var productoNodo5_2 = $("#prodNode5_2").val();
    var productoNodo5_3 = $("#prodNode5_3").val();
    productoNodo5_1 == '' ? productoNodo5_1 = '-|-' : null;
    productoNodo5_2 == '' ? productoNodo5_2 = '-|-' : null;
    productoNodo5_3 == '' ? productoNodo5_3 = '-|-' : null;
    var piezasNodo5_1 = $("#pzsProdNode5_1").val();
    if(piezasNodo5_1 == '' || piezasNodo5_1 <= 0){
        piezasNodo5_1 = 1;
        $("#pzsProdNode5_1").val(1)   
    }
    var piezasNodo5_2 = $("#pzsProdNode5_2").val();
    if(piezasNodo5_2 == '' || piezasNodo5_2 <= 0){
        piezasNodo5_2 = 1;
        $("#pzsProdNode5_2").val(1)   
    }
    var piezasNodo5_3 = $("#pzsProdNode5_3").val();
    if(piezasNodo5_3 == '' || piezasNodo5_3 <= 0){
        piezasNodo5_3 = 1;
        $("#pzsProdNode5_3").val(1)   
    }
    if(rangoNodo5 == 'Cliente'){
        influencerNodo5 = 2;
    }
    if(rangoNodo5 == 'Cliente'){
        //paisNodo5 = paisPadre;
        rangoNodo5 = rangoPadre;
    }
    var bonoInfluenciaNodo5 = $("#bonoInfluenciaNodo5").text();
    var bonoRetailNodo5 = $("#bonoRetailNodo5").text();
    var bonoReembolsoNodo5 = $("#bonoReembolsoNodo5").text();
    var bonoPorGrupoNodo5 = $("#bonoPorGrupoNodo5").text();
    var bonoLiderNodo5 = $("#bonoLiderNodo5").text();
    var bonoTotalNodo5 = $("#bonoTotalNodo5").text();
    nombreNodo5 == "" && productoNodo5_1 == '-|-' && productoNodo5_2 == '-|-' && productoNodo5_3 == '-|-' ? nombreNodo5 = 'NO' : null;

    /*== datos del nodo 6 ==*/
    var nombreNodo6 = $("#nombreNodo6").val().trim();
    var rangoNodo6 = $("#rangoNodo6").val();
    var paisNodo6 = $("#paisNodo6").val();
    var influencerNodo6 = 0;
    $('#influencerNodo6').is(':checked') ? influencerNodo6 = 1 : null;
    var productoNodo6_1 = $("#prodNode6_1").val();
    var productoNodo6_2 = $("#prodNode6_2").val();
    var productoNodo6_3 = $("#prodNode6_3").val();
    productoNodo6_1 == '' ? productoNodo6_1 = '-|-' : null;
    productoNodo6_2 == '' ? productoNodo6_2 = '-|-' : null;
    productoNodo6_3 == '' ? productoNodo6_3 = '-|-' : null;
    var piezasNodo6_1 = $("#pzsProdNode6_1").val();
    if(piezasNodo6_1 == '' || piezasNodo6_1 <= 0){
        piezasNodo6_1 = 1;
        $("#pzsProdNode6_1").val(1)
    }
    var piezasNodo6_2 = $("#pzsProdNode6_2").val();
    if(piezasNodo6_2 == '' || piezasNodo6_2 <= 0){
        piezasNodo6_2 = 1;
        $("#pzsProdNode6_2").val(1)
    }
    var piezasNodo6_3 = $("#pzsProdNode6_3").val();
    if(piezasNodo6_3 == '' || piezasNodo6_3 <= 0){
        piezasNodo6_3 = 1;
        $("#pzsProdNode6_3").val(1)
    }
    if(rangoNodo6 == 'Cliente'){
        influencerNodo6 = 2;
    }
    if(rangoNodo6 == 'Cliente'){
        //paisNodo6 = paisPadre;
        rangoNodo6 = rangoPadre;
    }
    var bonoInfluenciaNodo6 = $("#bonoInfluenciaNodo6").text();
    var bonoRetailNodo6 = $("#bonoRetailNodo6").text();
    var bonoReembolsoNodo6 = $("#bonoReembolsoNodo6").text();
    var bonoPorGrupoNodo6 = $("#bonoPorGrupoNodo6").text();
    var bonoLiderNodo6 = $("#bonoLiderNodo6").text();
    var bonoTotalNodo6 = $("#bonoTotalNodo6").text();
    nombreNodo6 == "" && productoNodo6_1 == '-|-' && productoNodo6_2 == '-|-' && productoNodo6_3 == '-|-' ? nombreNodo6 = 'NO' : null;

    var bonoInfluenciaPlata = $("#bonoInfluenciaPlata").text();
    var bonoRetailPlata = $("#bonoRetailPlata").text();
    var bonoReembolsoPlata = $("#bonoReembolsoPlata").text();
    var bonoGrupoPlata = $("#bonoGrupoPlata").text();
    var bonoLiderPlata = $("#bonoLiderPlata").text();
    var bonoTotalPlata = $("#bonoTotalPlata").text();
    
    var nodo0 = rangoPadre + '|' + paisPadre + '|' + nombrePadre.trim() + '|' + bonoInfluenciaPlata + '|' + bonoRetailPlata + '|' + bonoReembolsoPlata + '|' + bonoGrupoPlata + '|' + bonoLiderPlata + '|' + bonoTotalPlata;
    var nodo1 = nombreNodo1 + '|' + rangoNodo1 + '|' + paisNodo1 + '|' + influencerNodo1 + '|' + productoNodo1_1 + '|' + productoNodo1_2 + '|' + productoNodo1_3 + '|' + piezasNodo1_1 + '|' + piezasNodo1_2 + '|' + piezasNodo1_3 + '|' + bonoInfluenciaNodo1 + '|' + bonoRetailNodo1 + '|' + bonoReembolsoNodo1 + '|' + bonoPorGrupoNodo1 + '|' + bonoLiderNodo1 + '|' + bonoTotalNodo1;
    var nodo2 = nombreNodo2 + '|' + rangoNodo2 + '|' + paisNodo2 + '|' + influencerNodo2 + '|' + productoNodo2_1 + '|' + productoNodo2_2 + '|' + productoNodo2_3 + '|' + piezasNodo2_1 + '|' + piezasNodo2_2 + '|' + piezasNodo2_3 + '|' + bonoInfluenciaNodo2 + '|' + bonoRetailNodo2 + '|' + bonoReembolsoNodo2 + '|' + bonoPorGrupoNodo2 + '|' + bonoLiderNodo2 + '|' + bonoTotalNodo2;
    var nodo3 = nombreNodo3 + '|' + rangoNodo3 + '|' + paisNodo3 + '|' + influencerNodo3 + '|' + productoNodo3_1 + '|' + productoNodo3_2 + '|' + productoNodo3_3 + '|' + piezasNodo3_1 + '|' + piezasNodo3_2 + '|' + piezasNodo3_3 + '|' + bonoInfluenciaNodo3 + '|' + bonoRetailNodo3 + '|' + bonoReembolsoNodo3 + '|' + bonoPorGrupoNodo3 + '|' + bonoLiderNodo3 + '|' + bonoTotalNodo3;
    var nodo4 = nombreNodo4 + '|' + rangoNodo4 + '|' + paisNodo4 + '|' + influencerNodo4 + '|' + productoNodo4_1 + '|' + productoNodo4_2 + '|' + productoNodo4_3 + '|' + piezasNodo4_1 + '|' + piezasNodo4_2 + '|' + piezasNodo4_3 + '|' + bonoInfluenciaNodo4 + '|' + bonoRetailNodo4 + '|' + bonoReembolsoNodo4 + '|' + bonoPorGrupoNodo4 + '|' + bonoLiderNodo4 + '|' + bonoTotalNodo4;
    var nodo5 = nombreNodo5 + '|' + rangoNodo5 + '|' + paisNodo5 + '|' + influencerNodo5 + '|' + productoNodo5_1 + '|' + productoNodo5_2 + '|' + productoNodo5_3 + '|' + piezasNodo5_1 + '|' + piezasNodo5_2 + '|' + piezasNodo5_3 + '|' + bonoInfluenciaNodo5 + '|' + bonoRetailNodo5 + '|' + bonoReembolsoNodo5 + '|' + bonoPorGrupoNodo5 + '|' + bonoLiderNodo5 + '|' + bonoTotalNodo5;
    var nodo6 = nombreNodo6 + '|' + rangoNodo6 + '|' + paisNodo6 + '|' + influencerNodo6 + '|' + productoNodo6_1 + '|' + productoNodo6_2 + '|' + productoNodo6_3 + '|' + piezasNodo6_1 + '|' + piezasNodo6_2 + '|' + piezasNodo6_3 + '|' + bonoInfluenciaNodo6 + '|' + bonoRetailNodo6 + '|' + bonoReembolsoNodo6 + '|' + bonoPorGrupoNodo6 + '|' + bonoLiderNodo6 + '|' + bonoTotalNodo6;
    var moneda = isoMoney[paisPadre];
    window.open("/calcGetPDF?nodo0=" + nodo0 + '&nodo1=' + nodo1 + '&nodo2=' + nodo2 + '&nodo3=' + nodo3 + '&nodo4=' + nodo4 + '&nodo5=' + nodo5 + '&nodo6=' + nodo6 + '&moneda=' + moneda, "width=500,height=300,scrollbars=NO")
}

function getRequisitos(rango){
    var rangosLetras = {'DIR': 'DIRECTO', 'EXE': 'EJECUTIVO', 'PLA': 'PLATA', 'ORO': 'ORO', 'PLO': 'PLATINO', 'DIA': 'DIAMANTE', 'DRL': 'DIAMANTE REAL'};
    var rangoOrigen = $('#rangoPadre').val();
    $('#requisitosRango').text(rangosLetras[rangoOrigen]);
    $("#reqRangoDIR").hide();
    $("#reqRangoEXE").hide();
    $("#reqRangoPLA").hide();
    $("#reqRangoORO").hide();
    $("#reqRangoPLO").hide();
    $("#reqRangoDIA").hide();
    $("#reqRangoDRL").hide();

    $("#reqRango" + rango).show();
}