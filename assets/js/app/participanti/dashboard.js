/* 
 * Creat de scriptul facut de Marius Trifu
 * La data de 04-09-2017 si ora 21:38:16
 * Pentru intrebari trifumarius01@gmail.com
 */

$(document).ready(function () {
    $("#participanti_table").DataTable();

    $("#participanti_table").on("click", ".accepta", function () {
        var a = $(this);
        $.ajax({
            type: "POST",
            url: _SITE_BASE + "includes/ajax/post_stare_participant.php",
            data: {id: $(this).attr("data-id"),
                stare: 1},
            success: function (event) {
                a.parent().parent().children().eq(0).text("Acceptat");
                a.parent().parent().children().eq(0).css("background-color", "green");
                a.parent().parent().children().eq(0).prop("title", event);
            },
            error: function (xhr, status, error) {
                //alert(status);
            },
        });
    });
    var edit = 0;
    $("#participanti_table").on("click", ".edit_link", function () {
        var a = $(this);
        var id = a.attr("data-id");
        if (edit == 0) {
            a.parent().append("<input type='text'>");
            $(".link_cv").hide();
            edit = 1;
        } else {
            var text = a.parent().children('input').val();
            a.parent().children('input').remove();
            $(".link_cv").show();
            if (text.length > 0) {
                $.ajax({
                    type: "POST",
                    url: _SITE_BASE + "includes/ajax/post_edit_link_participant.php",
                    data: {
                        id: id,
                        link_nou: text},
                    success: function (event) {
                        window.location.reload(false);
                    },
                    error: function (xhr, status, error) {
                        //alert(status);
                    },
                });
            }
            edit = 0;
        }
    });
    $("#participanti_table").on("click", ".sterge", function () {
        var a = $(this);
        $.ajax({
            type: "POST",
            url: _SITE_BASE + "includes/ajax/post_delete_participant.php",
            data: {id: $(this).attr("data-id")},
            success: function (event) {
                window.location.reload(false);
            },
            error: function (xhr, status, error) {
                //alert(status);
            },
        });
    });
    $("#participanti_table").on("click", ".respinge", function () {
        var a = $(this);
        $.ajax({
            type: "POST",
            url: _SITE_BASE + "includes/ajax/post_stare_participant.php",
            data: {id: $(this).attr("data-id"),
                stare: 2},
            success: function (event) {
                a.parent().parent().children().eq(0).text("Respins");
                a.parent().parent().children().eq(0).css("background-color", "red");
                a.parent().parent().children().eq(0).prop("title", event);
            },
            error: function (xhr, status, error) {
                //alert(status);
            },
        });
    });

    $("#participanti_table").on("click", ".hold", function () {
        var a = $(this);
        $.ajax({
            type: "POST",
            url: _SITE_BASE + "includes/ajax/post_stare_participant.php",
            data: {id: $(this).attr("data-id"),
                stare: 0},
            success: function (event) {
                a.parent().parent().children().eq(0).text("In asteptare");
                a.parent().parent().children().eq(0).css("background-color", "yellow");
                a.parent().parent().children().eq(0).prop("title", event);
            },
            error: function (xhr, status, error) {
                //alert(status);
            },
        });
    });
    var detalii = [];

    $("#participanti_table").on("click", ".deschide", function () {
        var id = $(this).attr("data-id");
        if (detalii.includes(id)) {
            $(".append" + id).remove();
            detalii.pop(id);
        } else {
            detalii.push(id);
            var participant;
            var elem_tr = $(this).parent().parent();
            for (var i = 0; i < participanti.length; i++) {
                if (participanti[i]["id"] == id) {
                    participant = participanti[i];
                    break;
                }
            }
            $(".append" + id).remove();
            elem_tr.after("<tr class='append" + id + "'>\n\
                            <td>Numar</td>\n\
                            <td>Nume</td>\n\
                            <td>Prenume</td>\n\
                            <td>Email</td>\n\
                            <td>Telefon</td>\n\
                            <td>Detalii echipa</td>\n\
                        </tr>\n\
                        <tr class='append" + id + "'>\n\
                            <td>1</td>\n\
                            <td>" + participant["nume1"] + "</td>\n\
                            <td>" + participant["prenume1"] + "</td>\n\
                            <td>" + participant["email1"] + "</td>\n\
                            <td>" + participant["telefon1"] + "</td>\n\
                            <td class='buton_apend1'><button data-id='" + i + "' title='Comentariul scris la completarea formularului.' type='button' class='btn btn-info btn-sm' data-toggle='modal' data-target='#modal_comentariu'>Comentariu</button></td>\n\
                        </tr>\n\
                        <tr class='append" + id + "'>\n\
                            <td>2</td>\n\
                            <td style='word-wrap: break-word;'>" + participant["nume2"] + "</td>\n\
                            <td>" + participant["prenume2"] + "</td>\n\
                            <td>" + participant["email2"] + "</td>\n\
                            <td>" + participant["telefon2"] + "</td>\n\
                            <td class='buton_apend2'><button data-id='" + i + "' title='Limbajele cunoscute de echipa.' type='button' class='btn btn-info btn-sm' data-toggle='modal' data-target='#modal_limbaje'>Limbaje</button></td>\n\
                        </tr>\n\
                        <tr class='append" + id + "'>\n\
                            <td>3</td>\n\
                            <td style='word-wrap: break-word;'>" + participant["nume3"] + "</td>\n\
                            <td>" + participant["prenume3"] + "</td>\n\
                            <td>" + participant["email3"] + "</td>\n\
                            <td>" + participant["telefon3"] + "</td>\n\
                            <td class='buton_apend3'><button data-id='" + i + "' title='Evenimentele la care a mai participat echipa.' type='button' class='btn btn-info btn-sm' data-toggle='modal' data-target='#modal_evenimente'>Evenimente</button></td>\n\
                        </tr>");
        }
    });
    $('#modal_comentariu').on('show.bs.modal', function (e) {
        var id = $(e.relatedTarget).data('id');
        document.getElementById("continut_comentariu").innerHTML = participanti[id]["comentariu"];
    });
    $('#modal_limbaje').on('show.bs.modal', function (e) {
        var id = $(e.relatedTarget).data('id');
        document.getElementById("continut_limbaje").innerHTML = participanti[id]["limbaje"];
    });
    $('#modal_evenimente').on('show.bs.modal', function (e) {
        var id = $(e.relatedTarget).data('id');
        document.getElementById("continut_evenimente").innerHTML = participanti[id]["evenimente"];
    });
    console.log(participanti);
    function convertToCSV(object) {
        var str = 'Echipa,'+
        'Nume capitan,Telefon  capitan,Email  capitan,'+
        'Nume membru2,Telefon  membru2,Email  membru2,'+
        'Nume  membru3,Telefon  membru3,Email  membru3,'+
        'Comentariu,Link CV,Limbaje,Evenimente,Data inscriere\r\n';
        for (var i = 0; i < object.length; i++) {
            str += object[i].echipa.replace(/[,;]/g , " ") + ",";
            str += object[i].nume1.replace(/[,;]/g , " ") + " ";
            str += object[i].prenume1.replace(/[,;]/g , " ") + ",";
            str += object[i].telefon1.replace(/[,;]/g , " ") + ",";
            str += object[i].email1.replace(/[,;]/g , " ") + ",";
            str += object[i].nume2.replace(/[,;]/g , " ") + " ";
            str += object[i].prenume2.replace(/[,;]/g , " ") + ",";
            str += object[i].telefon2.replace(/[,;]/g , " ") + ",";
            str += object[i].email2.replace(/[,;]/g , " ") + ",";
            str += object[i].nume3.replace(/[,;]/g , " ") + " ";
            str += object[i].prenume3.replace(/[,;]/g , " ") + ",";
            str += object[i].telefon3.replace(/[,;]/g , " ") + ",";
            str += object[i].email3.replace(/[,;]/g , " ") + ",";
            str += typeof object[i]["comentariu"] === 'undefined'? ",":object[i].comentariu.replace(/[,;]/g , " ") + ",";
            str += typeof object[i]["link_cv"] === 'undefined'? ",":object[i].link_cv.replace(/[,;]/g , " ") + ",";
            str += typeof object[i]["limbaje"] === 'undefined'? ",":object[i].limbaje.replace(/[,;]/g , " ") + ",";
            str += typeof object[i]["evenimente"] === 'undefined'? ",":object[i].evenimente.replace(/[,;]/g , " ") + ",";
            str += typeof object[i]["data_inscriere"] === 'undefined'? "\r\n":object[i].data_inscriere.replace(/[,;]/g , " ") + "\r\n";
        }
        return str;
    }
    
    function exportCSVFile(items, fileTitle) {

        var csv = convertToCSV(items);

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

    
    $("#participanti_table_length").after(
            '<button id="download_csv" type="submit" style="cursor: pointer;">Download</button>');
    $("#download_csv").on("click", function () {
        var fileTitle = 'HackItAll participanti';
        exportCSVFile(participanti, fileTitle);
    });
});
