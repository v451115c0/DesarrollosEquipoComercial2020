$("#kintai, #kinya, #sponsorsr, #consolidado, #avances, #kinya2").val(0);
function getRreport(periodo, id, link, periodo2){
    if(link == 'periodolinkkinya'){
        $("#" + link).attr('href', '/getReportReconocimientos?periodo=' + periodo + '&periodo2=' + periodo2 + '&reporte=' + id);
    }
    else{
        $("#" + link).attr('href', '/getReportReconocimientos?periodo=' + periodo + '&reporte=' + id);
    }
}