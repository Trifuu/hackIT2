<?php
/*
 * Creat de scriptul facut de Marius Trifu
 * La data de 04-09-2017 si ora 21:38:16
 * Pentru intrebari trifumarius01@gmail.com
 */

defined("autorizare") or die("Nu aveti autorizare");
?>

<style type="text/css">
    h4{
        margin-top: 20px;
    }
    td{
        color: black !important;
    }
</style>

<div class="container-fluid standard-container container-page row" style="top:0px;height:100%;">

    <div style="margin-top: 30px;text-align: center;z-index: 10;">
        <?php if (isset($_SESSION["error"])) { ?>
            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <i class="fa fa-exclamation-triangle"></i> <?php echo htmlspecialchars($_SESSION["error"], ENT_QUOTES); ?>
            </div>
            <?php
            $_SESSION["error"] = null;
            unset($_SESSION["error"]);
            ?>
        <?php } ?>
        <h2><?php echo $echipa["echipa"]; ?></h2>
        <h5>

            Status:
            <?php echo traducere_stare($echipa["stare_echipa"])=="Acceptat"? "Acceptat":"Respins"; ?>
        </h5>


        <div style="text-align: left;" class="row">

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                <div class="card"  style="font-size: 18px">
                    Ai la dispoziție exact 72 de ore pentru a duce la bun sfârșit proba de selecție, propusă de Avira!
                    Acceseaza documentul de mai jos pentru a vedea toate informațiile 
                    necesare pentru a rezolva task-urile propuse și încarcă rezultatul 
                    final până la deadline.
                    <br/>
                    <b>START: 12 martie, ora 10:00 AM</b><br/>
                    <b>DEADLINE: 15 martie, ora 10:00 AM</b><br/><br/>
<!--                    <a <?php // echo $time>1520841600? 'target="_blank" href="/Preselectie-Hackaton.pdf" class="btn btn-success"':'class="btn btn-success disabled"' ?>   style="width:104px;">Problema</a>
                    <form action="<?php // getUrl("detalii", "upload", true); ?>" method="post" enctype="multipart/form-data">
                        Select fisierul/arhiva:
                        <input type="file" name="fileToUpload" id="fileToUpload">
                        <input type="submit" value="Upload" name="submit">
                    </form>
                    <p>
                        În cazul în care nu ai reușit să faci Upload, trimite proiectul 
                        la adresa hack@lsacbucuresti.ro menționând numele echipei din 
                        care faci parte.
                    </p>-->
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 ">
                <div class="card"  style="font-size: 20px">
                    În urma problemei rezolvate și a CV-urilor, există posibilitatea să ne vedem în 
                    weekend-ul 24-25 martie. Astfel, dorim să știm câteva lucruri despre tine și 
                    echipa ta.
                </div>
            </div>

            <div  class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
                <div class="card" style="margin-left: 5%;margin-right:5%;">
                    <h4 style="">Mărime tricouri:</h4>
                    <?php if ($detalii_echipa == null) { ?>
                        <div style="margin-left: 30px;">
                            &bull; Membru 1<span style="font-size: 20px; margin-top: 10px">
                                <input type="radio" checked="" name="membru1" value="S">S
                                <input type="radio" name="membru1" value="M">M
                                <input type="radio" name="membru1" value="L">L
                                <input type="radio" name="membru1" value="XL">XL
                            </span><br>
                            &bull; Membru 2<span style="font-size: 20px; margin-top: 10px">
                                <input type="radio" checked="" name="membru2" value="S">S
                                <input type="radio" name="membru2" value="M">M
                                <input type="radio" name="membru2" value="L">L
                                <input type="radio" name="membru2" value="XL">XL
                            </span><br>
                            &bull; Membru 3<span style="font-size: 20px; margin-top: 10px">
                                <input type="radio" checked="" name="membru3" value="S">S
                                <input type="radio" name="membru3" value="M">M
                                <input type="radio" name="membru3" value="L">L
                                <input type="radio" name="membru3" value="XL">XL
                            </span>
                        </div>
                        <h4>Există preferințe legate de mâncare?</h4>
                        <table style="margin-left: 30px;">
                            <tbody>
                                <tr style="margin-top: 10px">
                                    <td>&bull; Vegetarieni</td>
                                    <td><input id="vegetarieni" type="text" style="max-width:35px;"></td>
                                </tr>
                                <tr style="margin-top: 10px">
                                    <td>&bull; Vegani</td>
                                    <td><input id="vegani" type="text" style="max-width:35px;"></td>
                                </tr>
                                <tr style="margin-top: 10px">
                                    <td>&bull; Nu există preferințe</td>
                                    <td><input id="preferinte" type="text" style="max-width:35px;"></td>
                                </tr>
                                <tr style="margin-top: 10px">
                                    <td>&bull; Alte observații</td>
                                    <td><input id="observatii" type="text" style="max-width:200px;"></td>
                                </tr>
                            </tbody>
                        </table>
                        <h4>Cu ce echipamente veți veni?</h4>
                        <div style="margin-left: 30px;">
                            <table>
                                <tbody>
                                    <tr style="margin-top: 10px">
                                        <td>&bull; Membru 1 &nbsp;&nbsp;</td>
                                        <td>&nbsp;<input id="laptop1" type="checkbox">Laptop</td>
                                        <td>&nbsp;<input id="unitate1" type="checkbox">Unitate PC</td>
                                        <td>&nbsp;<input id="monitor1" type="checkbox">Monitor</td>
                                    </tr>
                                    <tr style="margin-top: 10px">
                                        <td>&bull; Membru 2 &nbsp;&nbsp;</td>
                                        <td>&nbsp;<input id="laptop2" type="checkbox">Laptop</td>
                                        <td>&nbsp;<input id="unitate2" type="checkbox">Unitate PC</td>
                                        <td>&nbsp;<input id="monitor2" type="checkbox">Monitor</td>
                                    </tr>
                                    <tr style="margin-top: 10px">
                                        <td>&bull; Membru 3 &nbsp;&nbsp;</td>
                                        <td>&nbsp;<input id="laptop3" type="checkbox">Laptop</td>
                                        <td>&nbsp;<input id="unitate3" type="checkbox">Unitate PC</td>
                                        <td>&nbsp;<input id="monitor3" type="checkbox">Monitor</td>
                                    </tr>
                                    <tr style="margin-top: 10px">
                                        <td>&bull; Alte echipamente</td>
                                        <td colspan="3">
                                            <input id="echipamente" type="text">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <h4>Doriți să ne mai transmiteți ceva?</h4>
                        <div style="max-width: 428px;">
                            <input id="mesaj" type="text" style="width:100%;">
                        </div>
                    <?php } else { ?>
                        <div style="margin-left: 30px;">
                            &bull; Membru 1<span style="font-size: 20px;">
                                <input type="radio" <?php echo $detalii_echipa["tricou1"] == "S" ? 'checked=""' : ""; ?> name="membru1" value="S">S
                                <input type="radio" <?php echo $detalii_echipa["tricou1"] == "M" ? 'checked=""' : ""; ?> name="membru1" value="M">M
                                <input type="radio" <?php echo $detalii_echipa["tricou1"] == "L" ? 'checked=""' : ""; ?> name="membru1" value="L">L
                                <input type="radio" <?php echo $detalii_echipa["tricou1"] == "XL" ? 'checked=""' : ""; ?> name="membru1" value="XL">XL
                            </span><br>
                            &bull; Membru 2<span style="font-size: 20px;">
                                <input type="radio" <?php echo $detalii_echipa["tricou2"] == "S" ? 'checked=""' : ""; ?> checked="" name="membru2" value="S">S
                                <input type="radio" <?php echo $detalii_echipa["tricou2"] == "M" ? 'checked=""' : ""; ?> name="membru2" value="M">M
                                <input type="radio" <?php echo $detalii_echipa["tricou2"] == "L" ? 'checked=""' : ""; ?> name="membru2" value="L">L
                                <input type="radio" <?php echo $detalii_echipa["tricou2"] == "XL" ? 'checked=""' : ""; ?> name="membru2" value="XL">XL
                            </span><br>
                            &bull; Membru 3<span style="font-size: 20px;">
                                <input type="radio" <?php echo $detalii_echipa["tricou3"] == "S" ? 'checked=""' : ""; ?> checked="" name="membru3" value="S">S
                                <input type="radio" <?php echo $detalii_echipa["tricou3"] == "M" ? 'checked=""' : ""; ?> name="membru3" value="M">M
                                <input type="radio" <?php echo $detalii_echipa["tricou3"] == "L" ? 'checked=""' : ""; ?> name="membru3" value="L">L
                                <input type="radio" <?php echo $detalii_echipa["tricou3"] == "XL" ? 'checked=""' : ""; ?> name="membru3" value="XL">XL
                            </span>
                        </div>
                        <h4>Există preferințe legate de mâncare?</h4>
                        <table style="margin-left: 30px;">
                            <tbody>
                                <tr>
                                    <td>&bull; Vegetarieni</td>
                                    <td><input value="<?php echo $detalii_echipa["vegetarieni"]; ?>" id="vegetarieni" type="text" style="max-width:35px;"></td>
                                </tr>
                                <tr>
                                    <td>&bull; Vegani</td>
                                    <td><input value="<?php echo $detalii_echipa["vegani"]; ?>" id="vegani" type="text" style="max-width:35px;"></td>
                                </tr>
                                <tr>
                                    <td>&bull; Nu există preferințe</td>
                                    <td><input value="<?php echo $detalii_echipa["preferinte"]; ?>" id="preferinte" type="text" style="max-width:35px;"></td>
                                </tr>
                                <tr>
                                    <td>&bull; Alte observații</td>
                                    <td><input value="<?php echo $detalii_echipa["observatii"]; ?>" id="observatii" type="text" style="max-width:200px;"></td>
                                </tr>
                            </tbody>
                        </table>
                        <h4>Cu ce echipamente veți veni?</h4>
                        <div >
                            <table>
                                <tbody>
                                    <tr>
                                        <td>&bull; Membru 1 &nbsp;&nbsp;</td>
                                        <td style="margin-left: 10px;">&nbsp;<input <?php echo $detalii_echipa["laptop"] > 0 ? 'checked=""' : ""; ?> id="laptop1" type="checkbox">Laptop</td>
                                        <td style="margin-left: 10px;">&nbsp;<input <?php echo $detalii_echipa["unitate"] > 0 ? 'checked=""' : ""; ?> id="unitate1" type="checkbox">Unitate PC</td>
                                        <td style="margin-left: 10px;">&nbsp;<input <?php echo $detalii_echipa["monitor"] > 0 ? 'checked=""' : ""; ?> id="monitor1" type="checkbox">Monitor</td>
                                    </tr>
                                    <tr>
                                        <td>&bull; Membru 2 &nbsp;&nbsp;</td>
                                        <td style="margin-left: 10px;">&nbsp;<input <?php echo $detalii_echipa["laptop"] > 1 ? 'checked=""' : ""; ?> id="laptop2" type="checkbox">Laptop</td>
                                        <td style="margin-left: 10px;">&nbsp;<input <?php echo $detalii_echipa["unitate"] > 1 ? 'checked=""' : ""; ?> id="unitate2" type="checkbox">Unitate PC</td>
                                        <td style="margin-left: 10px;">&nbsp;<input <?php echo $detalii_echipa["monitor"] > 1 ? 'checked=""' : ""; ?> id="monitor2" type="checkbox">Monitor</td>
                                    </tr>
                                    <tr>
                                        <td style="margin-left: 10px;">&bull; Membru 3 &nbsp;&nbsp;</td>
                                        <td style="margin-left: 10px;">&nbsp;<input <?php echo $detalii_echipa["laptop"] > 2 ? 'checked=""' : ""; ?> id="laptop3" type="checkbox">Laptop</td>
                                        <td style="margin-left: 10px;">&nbsp;<input <?php echo $detalii_echipa["unitate"] > 2 ? 'checked=""' : ""; ?> id="unitate3" type="checkbox">Unitate PC</td>
                                        <td style="margin-left: 10px;">&nbsp;<input <?php echo $detalii_echipa["monitor"] > 2 ? 'checked=""' : ""; ?> id="monitor3" type="checkbox">Monitor</td>
                                    </tr>
                                    <tr>
                                        <td>&bull; Alte echipamente</td>
                                        <td colspan="3">
                                            <input value="<?php echo $detalii_echipa["echipamente"]; ?>" id="echipamente" type="text">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <h4>Doriți să ne mai transmiteți ceva?</h4>
                        <div style="max-width: 428px; margin-bottom: 30px">
                            <input value="<?php echo $detalii_echipa["mesaj"]; ?>" id="mesaj" type="text" style="width:100%;">
                        </div>


                    <?php } ?>

                    <div>
                        <button id="detalii_submit" type="submit" class="btn btn-primary" style="margin-left: 80%;">Submit</button>
                    </div>
                </div> </div>



        </div>
    </div>






    <div class="hide-on-mobile" style="margin-top:-23%;margin-left:60%;width: 33%; z-index: 5!important">
      <!--<img src="<?php echo _SITE_CSS . "img/New/ISLAND1.png"; ?>" style="float:left;margin-top:-200px;margin-left:10px;height: 300px" class="hide-on-mobile">-->

        <svg  version="1.1" baseProfile="basic" id="Layer_1"
              xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 416.1 255.4"
              xml:space="preserve">
        <g id="g10945" transform="translate(71.110839)">
        <path id="path10879" fill="#98CBF4" d="M272.1,9.5c-4.2-0.1-8.3,0.7-11.4,2.5l-3.9,2.2l-2.2,1.3L72,120.9l-16.4-9.5l-1.5-0.9
              c0,0,0,0,0,0c-6.7-3.8-17-4.1-23.1-0.6l-5,2.9l-87,50.2l-3.1,1.8l-2.7,1.5c0,0,0,0,0,0c-0.7,0.4-1.3,0.8-1.8,1.3l-2.5-4.5v9.5l0,0
              c0,2.5,1.8,5.1,5.3,7.1l3,1.7l78,45h0l3.6,2.1l1.3,0.8c0,0,0,0,0,0c6.7,3.8,17,4.1,23.1,0.6l1.7-1l3.9-2.3l63.2-36.5l101,58.3
              l6.8,3.9c0,0,0,0,0,0c6.7,3.8,17,4.1,23.1,0.6l5.8-3.3l64.9-37.5l7-4.1c0,0,0,0,0,0c3-1.8,4.5-4.1,4.3-6.5v0v-9.3l-2.6,4.5
              c-0.8-0.7-1.7-1.4-2.7-2l-11.8-6.8v0l-56.1-32.4l41-23.7l7.9-4.5v0c2.8-1.6,4.2-3.8,4.3-6l0,0v-9.7l-2.6,4.2
              c-0.7-0.7-1.6-1.4-2.7-2l-8.5-4.9v0l-19.5-11.2l63.7-36.8l5.1-3c0,0,0,0,0,0c2.7-1.6,4.1-3.6,4.3-5.7l0,0v-0.5c0-0.1,0-0.3,0-0.4
              v-8.7l-2.5,4c-0.8-0.7-1.7-1.4-2.8-2.1l-5.2-3v0l-45.3-26.1l-5.3-3.1v0C280.5,10.6,276.3,9.6,272.1,9.5L272.1,9.5z"/>
        <path id="path10930" fill="#0A4A7F" d="M329.6,38.9l-69.3,46.8c0,0,10.7,21.1,12,17.1c0.2-0.7,1.6-1.6,3.6-2.7l-4-2.3l63.7-36.8
              l5.1-3c0,0,0,0,0,0c2.7-1.6,4.1-3.6,4.3-5.7l0,0v-0.5c0-0.1,0-0.3,0-0.4v-8.7l-2.5,4c-0.8-0.7-1.7-1.4-2.8-2.1l-5.2-3v0L329.6,38.9
              z M295.2,111.4l-43.4,34.7l4.8,6.7l36.2-20.9l7.9-4.5v0c2.8-1.6,4.2-3.8,4.3-6l0,0v-9.7l-2.6,4.2c-0.7-0.7-1.6-1.4-2.7-2
              L295.2,111.4z M112,180.7l-73.4,21.7L34,222.9v9.4c3.4-0.2,6.6-1,9.2-2.4l1.7-1l3.9-2.3l63.2-36.5V180.7z M308,187.9l-74.2,58v9.4
              c3.4-0.2,6.6-1,9.1-2.4l5.8-3.3l64.9-37.5l7-4.1c0,0,0,0,0,0c3-1.8,4.5-4.1,4.3-6.5v0v-9.3l-2.6,4.5c-0.8-0.7-1.7-1.4-2.7-2
              L308,187.9z"/>
        <path id="path10712" fill="#FFF3E9" d="M272.1,0c-4.2-0.1-8.3,0.7-11.4,2.5l-3.9,2.2L254.7,6L72,111.5L55.6,102l-1.5-0.9
              c0,0,0,0,0,0c-6.7-3.8-17-4.1-23.1-0.6l-5,2.9l-87,50.2l-3.1,1.8l-2.7,1.5c0,0,0,0,0,0c-6.1,3.5-5.7,9.5,1,13.3l3,1.7l78,45h0
              l3.6,2.1l1.3,0.8c0,0,0,0,0,0c6.7,3.8,17,4.1,23.1,0.6l1.7-1l3.9-2.3l63.2-36.5L213,239l6.8,3.9c0,0,0,0,0,0
              c6.7,3.8,17,4.1,23.1,0.6l5.8-3.3l0,0l64.9-37.5l7-4.1c0,0,0,0,0,0c6.1-3.5,5.7-9.5-1-13.3l-11.8-6.8v0l-56.1-32.4l41-23.7l7.9-4.5
              v0c6.1-3.5,5.7-9.5-1-13.3l-8.5-4.9v0l-19.5-11.2l63.7-36.8l5.1-3c0,0,0,0,0,0c6.1-3.5,5.7-9.5-1-13.3l-5.2-3v0L289.2,6.1l-5.3-3.1
              c0,0,0,0,0,0C280.5,1.1,276.3,0.1,272.1,0L272.1,0z"/>
        </g>
        <g id="Layer_2">
        <path id="rect1800_2_" fill="#FFB699" d="M258.9,44.7l-60.2,34.8c-3.5,2-3.5,5.3,0,7.3l60.2,34.8c3.5,2,9.1,2,12.6,0l60.2-34.8
              c3.5-2,3.5-5.3,0-7.3l-60.2-34.8C268.1,42.7,262.4,42.7,258.9,44.7z"/>
        <path id="rect1882_2_" fill="#FFB699" d="M267.9,163.1l-39.9,23c-2.3,1.3-2.3,3.5,0,4.8l39.9,23c2.3,1.3,6.1,1.3,8.4,0l39.9-23
              c2.3-1.3,2.3-3.5,0-4.8l-39.9-23C273.9,161.8,270.2,161.8,267.9,163.1z"/>
        </g>
        <g id="g2734_1_" class="hovering">
        <path id="rect1802_1_" fill="#1676B3" d="M265.2,27.5c-2.3,0-4.6,0.5-6.3,1.5l-60.2,34.8c-0.6,0.3-1,0.7-1.4,1.1l-1.2-2.1v4.7l0,0
              c0,1.3,0.9,2.7,2.6,3.7l60.2,34.8c3.5,2,9.1,2,12.6,0L331.8,71c1.8-1,2.7-2.4,2.6-3.8l0,0v-4.5l-1.1,2.1c-0.4-0.4-0.9-0.8-1.5-1.1
              L271.5,29C269.8,28,267.5,27.5,265.2,27.5L265.2,27.5z"/>
        <path id="rect1800_1_" fill="#37C4EB" d="M258.9,24.2L198.7,59c-3.5,2-3.5,5.3,0,7.3l60.2,34.8c3.5,2,9.1,2,12.6,0l60.2-34.8
              c3.5-2,3.5-5.3,0-7.3l-60.2-34.8C268.1,22.2,262.4,22.2,258.9,24.2z"/>
        <path id="path1953_1_" fill="#1676B3" d="M240.9,45.5l-5.4,3.1l8.7,14.6l6.4-3.7l-6.7-9.1l15.9,3.8l6.4-3.7L240.9,45.5z M287,53.2
              l-46.5,14.7l4.2,2.4l46.5-14.7L287,53.2z M286.1,62l-6.3,3.7l6.8,9.3L270.5,71l-6.3,3.7l25.5,5.1l5.3-3.1L286.1,62z"/>
        <path id="path1967_1_" fill="#172E55" d="M240.9,28.7l-5.4,3.1l8.7,14.6l6.4-3.7l-6.7-9.1l15.9,3.8l6.4-3.7L240.9,28.7z M287,36.4
              l-46.5,14.7l4.2,2.4l46.5-14.7L287,36.4z M286.1,45.2l-6.3,3.7l6.8,9.3l-16.1-3.9l-6.3,3.7l25.5,5.1l5.3-3.1L286.1,45.2z"/>
        </g>
        <g id="g2746_1_" class="hovering">
        <path id="path1880_1_" fill="#1676B3" d="M270.9,147.4c-1.5,0-3,0.3-4.2,1l-39.9,23c-0.4,0.2-0.7,0.5-0.9,0.7l-0.8-1.4v3.1l0,0
              c0,0.9,0.6,1.8,1.7,2.4l39.9,23c2.3,1.3,6,1.3,8.4,0l39.9-23c1.2-0.7,1.8-1.6,1.7-2.5l0,0v-3l-0.8,1.4c-0.3-0.3-0.6-0.5-1-0.7
              l-39.9-23C273.9,147.8,272.4,147.4,270.9,147.4L270.9,147.4z"/>
        <path id="rect1882_1_" fill="#37C4EB" d="M266.7,145.3l-39.9,23c-2.3,1.3-2.3,3.5,0,4.8l39.9,23c2.3,1.3,6.1,1.3,8.4,0l39.9-23
              c2.3-1.3,2.3-3.5,0-4.8l-39.9-23C272.7,143.9,269,143.9,266.7,145.3z"/>
        <path id="path1976_1_" fill="#1676B3" d="M292.7,177c-1.3-1.3-4-1.9-6.1-1.4c-1.4,0.4-2.2,1.3-2,2.3l-8.6,1
              c-0.7-0.6-1.7-1.1-2.9-1.4l-0.6-4.6c0.4,0,0.7-0.1,1-0.2c2.1-0.6,2.7-2.1,1.4-3.4c-1.3-1.3-4-1.9-6.1-1.4l0,0
              c-0.8,0.2-1.3,0.5-1.7,1l-7.5-1.4c-0.1-0.4-0.3-0.9-0.7-1.2c-0.3-0.3-0.7-0.5-1.1-0.8l6.5-8c1.1,0.2,2.2,0.2,3.1-0.1
              c2.1-0.6,2.7-2.1,1.4-3.4l0,0c-1.3-1.3-4-1.9-6.1-1.4c-2.1,0.6-2.7,2.1-1.4,3.4c0.3,0.3,0.6,0.5,1.1,0.8l-6.5,8
              c-1.1-0.2-2.2-0.2-3.1,0.1c-2.1,0.6-2.7,2.1-1.4,3.4c1.3,1.3,4,1.9,6.1,1.4l0,0c0.8-0.2,1.3-0.5,1.7-1l7.5,1.4
              c0.1,0.4,0.3,0.9,0.7,1.2c0.7,0.7,1.8,1.2,3,1.4l0.6,4.6c-0.4,0-0.7,0.1-1,0.2c-2.1,0.6-2.7,2.1-1.4,3.4c1.3,1.3,4,1.9,6.1,1.4
              c1.4-0.4,2.2-1.3,2-2.3l8.6-1c1.3,1.3,4,1.8,6,1.3C293.4,179.8,294,178.3,292.7,177L292.7,177z"/>
        <path id="path1995_1_" fill="#172E55" d="M292.7,165.3c-1.3-1.3-4-1.9-6.1-1.4c-1.4,0.4-2.2,1.3-2,2.3l-8.6,1
              c-0.7-0.6-1.7-1.1-2.9-1.4l-0.6-4.6c0.4,0,0.7-0.1,1-0.2c2.1-0.6,2.7-2.1,1.4-3.4c-1.3-1.3-4-1.9-6.1-1.4l0,0
              c-0.8,0.2-1.3,0.5-1.7,1l-7.5-1.4c-0.1-0.4-0.3-0.9-0.7-1.2c-0.3-0.3-0.7-0.5-1.1-0.8l6.5-8c1.1,0.2,2.2,0.2,3.1-0.1
              c2.1-0.6,2.7-2.1,1.4-3.4l0,0c-1.3-1.3-4-1.9-6.1-1.4c-2.1,0.6-2.7,2.1-1.4,3.4c0.3,0.3,0.6,0.5,1.1,0.8l-6.5,8
              c-1.1-0.2-2.2-0.2-3.1,0.1c-2.1,0.6-2.7,2.1-1.4,3.4c1.3,1.3,4,1.9,6.1,1.4l0,0c0.8-0.2,1.3-0.5,1.7-1l7.5,1.4
              c0.1,0.4,0.3,0.9,0.7,1.2c0.7,0.7,1.8,1.2,3,1.4l0.6,4.6c-0.4,0-0.7,0.1-1,0.2c-2.1,0.6-2.7,2.1-1.4,3.4c1.3,1.3,4,1.9,6.1,1.4
              c1.4-0.4,2.2-1.3,2-2.3l8.6-1c1.3,1.3,4,1.8,6,1.3C293.4,168.1,294,166.6,292.7,165.3L292.7,165.3z"/>
        </g>
        <g id="g2149_2_" transform="translate(-59.53803,-17.91208)">
        <path id="rect2142_2_" fill="#37C4EB" d="M149.1,94.1c11.4,0,20.6,9.2,20.6,20.6v30.1c0,11.4-9.2,20.6-20.6,20.6
              c-11.4,0-20.6-9.2-20.6-20.6v-30.1C128.5,103.3,137.7,94.1,149.1,94.1z"/>
        <path id="path2145_2_" fill="#172E55" stroke="#172E55" stroke-width="8" stroke-linecap="round" stroke-linejoin="round" d="
              M149.1,129.7V184"/>
        </g>
        </svg>

    </div>
</div>


<script>var id_echipa =<?php echo $echipa["id"]; ?>;</script>