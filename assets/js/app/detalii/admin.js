/* 
 * Creata de Marius Trifu
 * Pentru intrebari trifumarius01@gmail.com  * 
 */

$(document).ready(function () {
    $("#lista_select").on("change", function () {
        var id = this.value;
        if (typeof detalii_echipe[id]["tricou1"] === 'undefined') {
            $("#membru1").text("");
            $("#membru2").text("");
            $("#membru3").text("");
            $("#vegetarieni").val("");
            $("#vegani").val("");
            $("#preferinte").val("");
            $("#observatii").val("");
            $("#laptop").val("");
            $("#unitate").val("");
            $("#monitor").val("");
            $("#echipamente").val("");
            $("#mesaj").val("");
        } else {
            $("#membru1").text(detalii_echipe[id]["tricou1"]);
            $("#membru2").text(detalii_echipe[id]["tricou2"]);
            $("#membru3").text(detalii_echipe[id]["tricou3"]);
            $("#vegetarieni").val(detalii_echipe[id]["vegetarieni"]);
            $("#vegani").val(detalii_echipe[id]["vegani"]);
            $("#preferinte").val(detalii_echipe[id]["preferinte"]);
            $("#observatii").val(detalii_echipe[id]["observatii"]);
            $("#laptop").val(detalii_echipe[id]["laptop"]);
            $("#unitate").val(detalii_echipe[id]["unitate"]);
            $("#monitor").val(detalii_echipe[id]["monitor"]);
            $("#echipamente").val(detalii_echipe[id]["echipamente"]);
            $("#mesaj").val(detalii_echipe[id]["mesaj"]);
        }
    });
    function convertToCSV(object,echipe) {
        var str = 'Echipa,'+
        'Tricou capitan,Tricou membru2,Tricou membru3,'+
        'Vegani,Vegetarieni,Fara preferinte,'+
        'Laptop,Monitor,Unitate,'+
        'Mesaj,Observatii\r\n';
        for (var i = 0; i < object.length; i++) {
            str += echipe[i].echipa + ",";
            str += typeof object[i]["tricou1"] === 'undefined'? ",":object[i].tricou1.replace(/[,;]/g , " ") + ",";
            str += typeof object[i]["tricou2"] === 'undefined'? ",":object[i].tricou2.replace(/[,;]/g , " ") + ",";
            str += typeof object[i]["tricou3"] === 'undefined'? ",":object[i].tricou3.replace(/[,;]/g , " ") + ",";
            str += typeof object[i]["vegani"] === 'undefined'? ",":object[i].vegani.replace(/[,;]/g , " ") + ",";
            str += typeof object[i]["vegetarieni"] === 'undefined'? ",":object[i].vegetarieni.replace(/[,;]/g , " ") + ",";
            str += typeof object[i]["preferinte"] === 'undefined'? ",":object[i].preferinte.replace(/[,;]/g , " ") + ",";
            str += typeof object[i]["laptop"] === 'undefined'? ",":object[i].laptop.replace(/[,;]/g , " ") + ",";
            str += typeof object[i]["monitor"] === 'undefined'? ",":object[i].monitor.replace(/[,;]/g , " ") + ",";
            str += typeof object[i]["unitate"] === 'undefined'? ",":object[i].unitate.replace(/[,;]/g , " ") + ",";
            str += typeof object[i]["mesaj"] === 'undefined'? ",":object[i].mesaj.replace(/[,;]/g , " ") + ",";
            str += typeof object[i]["observatii"] === 'undefined'? "\r\n":object[i].observatii.replace(/[,;]/g , " ") + "\r\n";
        }
        return str;
    }
    
    function exportCSVFile(items,echipe, fileTitle) {

        var csv = convertToCSV(items,echipe);

        var exportedFilenmae = fileTitle + '.csv' || 'export.csv';

        var blob = new Blob([csv], {type: 'text/csv;charset=utf-8;'});
        if (navigator.msSaveBlob) { // IE 10+
            navigator.msSaveBlob(blob, exportedFilenmae);
        } else {
            var link = document.createElement("a");
            if (link.download !== undefined) { // feature detection
                // Browsers that support HTML5 download attribute
                var url = URL.createObjectURL(blob);
                link.setAttribute("href", url);
                link.setAttribute("download", exportedFilenmae);
                link.style.visibility = 'hidden';
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
            }
        }
    }

    $("#download_csv").on("click", function () {
        var fileTitle = 'HackItAll Detalii';
        exportCSVFile(detalii_echipe,echipe, fileTitle);
    });
});
