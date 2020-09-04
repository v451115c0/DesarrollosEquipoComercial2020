var labelType, useGradients, nativeTextSupport, animate;

(function() {
    var ua = navigator.userAgent,
        iStuff = ua.match(/iPhone/i) || ua.match(/iPad/i),
        typeOfCanvas = typeof HTMLCanvasElement,
        nativeCanvasSupport = (typeOfCanvas == 'object' || typeOfCanvas == 'function'),
        textSupport = nativeCanvasSupport && (typeof document.createElement('canvas').getContext('2d').fillText == 'function');
    //I'm setting this based on the fact that ExCanvas provides text support for IE
    //and that as of today iPhone/iPad current text support is lame
    labelType = (!nativeCanvasSupport || (textSupport && !iStuff))? 'Native' : 'HTML';
    nativeTextSupport = labelType == 'Native';
    useGradients = nativeCanvasSupport;
    animate = !(iStuff || !nativeCanvasSupport);
})();

var Log = {
    elem: false,
    write: function(text){
        if (!this.elem) 
        this.elem = document.getElementById('log');
        this.elem.innerHTML = text;
        this.elem.style.left = (500 - this.elem.offsetWidth / 2) + 'px';
    }
};

function init(json){
    //init RGraph
    var rgraph = new $jit.RGraph({
        //Where to append the visualization
        injectInto: 'infovis',
        //Optional: create a background canvas that plots
        //concentric circles.
        background: {
            CanvasStyles: {
            strokeStyle: '#f2f2f2'
            }
        },
        
        //Add navigation capabilities:
        //zooming by scrolling and panning.
        Navigation: {
            enable: true,
            panning: true,
            zooming: 150
        },
        //Set Node and Edge styles.
        Node: {
            color: '#009b3b'
        },
      
        Edge: {
            color: '#C17878',
            lineWidth:0.5
        },

        onBeforeCompute: function(node){
            Log.write("centrando:  " + node.name + "...");
            //Add the relation list in the right column.
            //This list is taken from the data property of each JSON node.
            $jit.id('inner-details').innerHTML = node.data.relation;
        },
      
        //Add the name of the node in the correponding label
        //and a click handler to move the graph.
        //This method is called once, on label creation.
        onCreateLabel: function(domElement, node){
            domElement.innerHTML = node.name;
            domElement.onclick = function(){
                rgraph.onClick(node.id, {
                    onComplete: function() {
                        Log.write("");
                    }
                });
            };
        },
        //Change some label dom properties.
        //This method is called each time a label is plotted.
        onPlaceLabel: function(domElement, node){
            var style = domElement.style;
            style.display = '';
            style.cursor = 'pointer';

            if (node._depth <= 1) {
                style.fontSize = "0.8em";
                style.color = "#000";
            
            } else if(node._depth == 2){
                style.fontSize = "0.7em";
                style.color = "#000";
            
            } else {
                style.display = 'none';
            }

            var left = parseInt(style.left);
            var w = domElement.offsetWidth;
            style.left = (left - w / 2) + 'px';
        }
    });
    
    //load JSON data
    rgraph.loadJSON(json);
    //trigger small animation
    rgraph.graph.eachNode(function(n) {
        var pos = n.getPos();
        pos.setc(-200, -200);
    });
    rgraph.compute('end');
    rgraph.fx.animate({
        modes:['polar'],
        duration: 2000
    });
    $jit.id('inner-details').innerHTML = rgraph.graph.getNode(rgraph.root).data.relation;
}

function formatMoney(amount, decimalCount, decimal = ".", thousands = ",") {
    try {
        if(amount == '.00'){
            amount = 0;
        }
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

function getRank(rango){
    switch(rango.trim()){
        case "DIR":
            rango = "DIRECTO";
            break;
        case "EXE":
            rango = "EJECUTIVO";
            break;
        case "PLA":
            rango = "PLATA";
            break;
        case "ORO":
            rango = "ORO";
            break;
        case "PLO":
            rango = "PLATINO";
            break;
        case "DIA":
            rango = "DIAMANTE";
            break;
        case "DRL":
            rango = "DIAMANTE REAL";
            break;
        case "SLV":
            rango = "PLATA";
            break;
    }
    return rango;
}

var initRadialGen = false;
function getDataGenPers(profundidad, lineas){
    $("#infovis").empty();
    if(profundidad == null){
        profundidad = $("#profRadial").val();
    }
    if(lineas == null){
        lineas = $("#numLineasRadial").val();
    }
    if(!initRadialGen){
        var associateid = $("#sap_code").val();
        var abiname = $("#nomLog").val();
        var data = {associateid: associateid}

        $.ajax({
            type: "get",
            url: "/getDataGenPers",
            data: data,
            beforeSend: function(){
                $('#title').text("Cargando...");
            },
            success: function(Response) {
                $('#title').text("");
                var json = {
                    id: Response['nivel0'][0]['associateid'],
                    name: Response['nivel0'][0]['associatename'].trim(),
                    children: [],
                    data: {
                        relation: Response['nivel0'][0]['associateid'] + " - " + Response['nivel0'][0]['associatename'].trim() + "<br>" +
                        "Rango: " + getRank(Response['nivel0'][0]['PinRank']) + " <br>" +
                        "VP=" + formatMoney(Response['nivel0'][0]['PV']) + " | VGP=" +  formatMoney(Response['nivel0'][0]['GV']) + " | VO=" +  formatMoney(Response['nivel0'][0]['OV']) + " | VO-LDP=" +  formatMoney(Response['nivel0'][0]['QOVOPL']) + " <br>" +
                        `<i class="small material-icons" style="color: #808080;">local_shipping</i> &nbsp; <i class="small material-icons" style="color: #008000;">shopping_cart</i> &nbsp; <i class="small material-icons" style="color: #008000;">add_shopping_cart</i> &nbsp; <i class="small material-icons" style="color: #008000;">account_balance</i> &nbsp;`
                    }
                };

                var nuevo_nodo = function() {};
                nuevo_nodo.prototype = json;
                nuevo_nodo.prototype.n = function(){console.log('extendido1');};
                var extender = new nuevo_nodo;
                
                var lineasFin = 0;
                if(lineas == 'todos'){
                    lineasFin = Response['nivel1'].length;
                }
                else{
                    lineasFin = lineas;
                }
                console.log(profundidad);
                console.log(lineasFin);


                for(var a = 0; a < lineasFin; a++){
                    var hijoslvl2 = []; // a
					var hijoslvl3 = []; // b
					var hijoslvl4 = []; // c
					var hijoslvl5 = []; // d
					var hijoslvl6 = []; // e
					var hijoslvl7 = []; // f
					var hijoslvl8 = []; // g
					var hijoslvl9 = []; // h
					var hijoslvl10 = []; // i
					var hijoslvl11 = []; // j
					var hijoslvl12 = []; // k
					var hijoslvl13 = []; // l
					var hijoslvl14 = []; // m
					var hijoslvl15 = []; // n
					var hijoslvl16 = []; // o
					var hijoslvl17 = []; // p
					var hijoslvl18 = []; // q
					var hijoslvl19 = []; // r
					var hijoslvl20 = []; // s
                    
                    if(Response['nivel2'].length > 0){
                        var lineasFin = 0;
                        if(lineas == 'todos'){
                            lineasFin = Response['nivel2'].length;
                        }
                        else{
                            lineasFin = lineas;
                        }

                        for (let b = 0; b < lineasFin; b++) {
                            hijoslvl3 = [];

                            if(Response['nivel3'].length > 0){
                                var lineasFin = 0;
                                if(lineas == 'todos'){
                                    lineasFin = Response['nivel3'].length;
                                }
                                else{
                                    lineasFin = lineas;
                                }

                                for(let c = 0; c < lineasFin; c++){
                                    hijoslvl4 = [];

                                    if(Response['nivel4'].length > 0){
                                        var lineasFin = 0;
                                        if(lineas == 'todos'){
                                            lineasFin = Response['nivel4'].length;
                                        }
                                        else{
                                            lineasFin = lineas;
                                        }

                                        for(let d = 0; d < lineasFin; d++){
                                            hijoslvl5 = [];

                                            if(Response['nivel5'].length > 0){
                                                var lineasFin = 0;
                                                if(lineas == 'todos'){
                                                    lineasFin = Response['nivel5'].length;
                                                }
                                                else{
                                                    lineasFin = lineas;
                                                }
                                                
                                                for(let e = 0; e < lineasFin; e++){
                                                    hijoslvl6 = [];

                                                    if(Response['nivel5'][e]['Sponsor_id'] == Response['nivel4'][d]['associateid']){
                                                        hijoslvl5.push(
                                                            {
                                                                id: Response['nivel5'][e]['associateid'],
                                                                name: Response['nivel5'][e]['associatename'].trim(),
                                                                children: hijoslvl6,
                                                                data: {
                                                                    relation: Response['nivel5'][e]['associateid'] + " - " + Response['nivel5'][e]['associatename'] + " <br>" + 
                                                                    "Rango: " +  getRank(Response['nivel5'][e]['PinRank']) + "<br>" +
                                                                    "VP=" +  formatMoney(Response['nivel5'][e]['PV']) + " | VGP=" + formatMoney(Response['nivel5'][e]['GV']) + " | VO=" + formatMoney(Response['nivel5'][e]['OV']) + " | VO-LDP=" + formatMoney(Response['nivel5'][e]['QOVOPL']) + " <br>" +
                                                                    `<i class="small material-icons" style="color: #808080;">local_shipping</i> &nbsp; <i class="small material-icons" style="color: #008000;">shopping_cart</i> &nbsp; <i class="small material-icons" style="color: #008000;">add_shopping_cart</i> &nbsp; <i class="small material-icons" style="color: #008000;">account_balance</i> &nbsp;`
                                                                }
                                                            }
                                                        )
                                                    }
                                                }
                                            }
                                        
                                            if(Response['nivel4'][d]['Sponsor_id'] == Response['nivel3'][c]['associateid']){
                                                hijoslvl4.push(
                                                    {
                                                        id: Response['nivel4'][d]['associateid'],
                                                        name: Response['nivel4'][d]['associatename'].trim(),
                                                        children: hijoslvl5,
                                                        data: {
                                                            relation: Response['nivel4'][d]['associateid'] + " - " + Response['nivel4'][d]['associatename'] + " <br>" + 
                                                            "Rango: " +  getRank(Response['nivel4'][d]['PinRank']) + "<br>" +
                                                            "VP=" +  formatMoney(Response['nivel4'][d]['PV']) + " | VGP=" + formatMoney(Response['nivel4'][d]['GV']) + " | VO=" + formatMoney(Response['nivel4'][d]['OV']) + " | VO-LDP=" + formatMoney(Response['nivel4'][d]['QOVOPL']) + " <br>" +
                                                            `<i class="small material-icons" style="color: #808080;">local_shipping</i> &nbsp; <i class="small material-icons" style="color: #008000;">shopping_cart</i> &nbsp; <i class="small material-icons" style="color: #008000;">add_shopping_cart</i> &nbsp; <i class="small material-icons" style="color: #008000;">account_balance</i> &nbsp;`
                                                        }
                                                    }
                                                )
                                            }
                                        }
                                    }
                                    
                                    if(Response['nivel3'][c]['Sponsor_id'] == Response['nivel2'][b]['associateid']){
                                        hijoslvl3.push(
                                            {
                                                id: Response['nivel3'][c]['associateid'],
                                                name: Response['nivel3'][c]['associatename'].trim(),
                                                children: hijoslvl4,
                                                data: {
                                                    relation: Response['nivel3'][c]['associateid'] + " - " + Response['nivel3'][c]['associatename'] + " <br>" + 
                                                    "Rango: " +  getRank(Response['nivel3'][c]['PinRank']) + "<br>" +
                                                    "VP=" +  formatMoney(Response['nivel3'][c]['PV']) + " | VGP=" + formatMoney(Response['nivel3'][c]['GV']) + " | VO=" + formatMoney(Response['nivel3'][c]['OV']) + " | VO-LDP=" + formatMoney(Response['nivel3'][c]['QOVOPL']) + " <br>" +
                                                    `<i class="small material-icons" style="color: #808080;">local_shipping</i> &nbsp; <i class="small material-icons" style="color: #008000;">shopping_cart</i> &nbsp; <i class="small material-icons" style="color: #008000;">add_shopping_cart</i> &nbsp; <i class="small material-icons" style="color: #008000;">account_balance</i> &nbsp;`
                                                }
                                            }
                                        )
                                    }
                                }
                            }

                            if(Response['nivel2'][b]['Sponsor_id'] == Response['nivel1'][a]['associateid']){
                                hijoslvl2.push(
                                    {
                                        id: Response['nivel2'][b]['associateid'],
                                        name: Response['nivel2'][b]['associatename'].trim(),
                                        children: hijoslvl3,
                                        data: {
                                            relation: Response['nivel2'][b]['associateid'] + " - " + Response['nivel2'][b]['associatename'] + " <br>" + 
                                            "Rango: " + getRank(Response['nivel2'][b]['PinRank']) + "<br>" +
                                            "VP=" + formatMoney(Response['nivel2'][b]['PV']) + " | VGP=" + formatMoney(Response['nivel2'][b]['GV']) + " | VO=" + formatMoney(Response['nivel2'][b]['OV']) + " | VO-LDP=" + formatMoney(Response['nivel2'][b]['QOVOPL']) + " <br>" +
                                            `<i class="small material-icons" style="color: #808080;">local_shipping</i> &nbsp; <i class="small material-icons" style="color: #008000;">shopping_cart</i> &nbsp; <i class="small material-icons" style="color: #008000;">add_shopping_cart</i> &nbsp; <i class="small material-icons" style="color: #008000;">account_balance</i> &nbsp;`
                                        }
                                    }
                                )
                            }
                        }
                    }

                    if(Response['nivel1'][a]['Level'] == 1){
                        extender.children.push({
                            id: Response['nivel1'][a]['associateid'],
                            name: Response['nivel1'][a]['associatename'].trim(),
                            children: hijoslvl2,
                            data: {
                                relation: Response['nivel1'][a]['associateid'] + " - " + Response['nivel1'][a]['associatename'] + " <br>" + 
                                "Rango: " + getRank(Response['nivel1'][a]['PinRank']) + "<br>" +
                                "VP=" + formatMoney(Response['nivel1'][a]['PV']) + " | VGP=" + formatMoney(Response['nivel1'][a]['GV']) + " | VO=" + formatMoney(Response['nivel1'][a]['OV']) + " | VO-LDP=" + formatMoney(Response['nivel1'][a]['QOVOPL']) + " <br>" +
                                `<i class="small material-icons" style="color: #808080;">local_shipping</i> &nbsp; <i class="small material-icons" style="color: #008000;">shopping_cart</i> &nbsp; <i class="small material-icons" style="color: #008000;">add_shopping_cart</i> &nbsp; <i class="small material-icons" style="color: #008000;">account_balance</i> &nbsp;`
                            }
                        });
                    }
				}
                
                init(json);
            }
        });

        initRadialGen = true;
    }
}