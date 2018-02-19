<?php
/* 
 * Creat de scriptul facut de Marius Trifu
 * La data de 04-09-2017 si ora 21:38:16
 * Pentru intrebari trifumarius01@gmail.com
 */

defined("autorizare") or die("Nu aveti autorizare");

?>

<div class="container container-pagec card" style="margin-top: 5%">
    <div class="row">
                <div class="col-md-12">
                        <h1 class="page-title">Editează profilul</h1>
                </div>
        </div>

        <div class="row">
            <?php if($user["categorie"]!="participant") {?>
                <div class="col-md-6">
                        <h2 class="page-title">Date personale</h2>
                        <form action="<?php getUrl("users", "post_edit_account", true); ?>" method="post" id="edit_account">
                                <input type="hidden" value="<?php echo isset($_GET["id"]) ? htmlspecialchars($_GET["id"], ENT_QUOTES) : htmlspecialchars($user["id"], ENT_QUOTES); ?>" id="id" name="id">
                                <div class="form-group">
                                        <label for="nume"><i class="fa fa-user-circle"></i> Nume</label>
                                        <input type="text" class="form-control input-lg" id="nume" name="nume" placeholder="Nume" value="<?php echo htmlspecialchars($user["nume"], ENT_QUOTES); ?>">
                                </div>
                                <div class="form-group">
                                        <label for="prenume"><i class="fa fa-user-circle"></i> Prenume</label>
                                        <input type="text" class="form-control input-lg" id="prenume" name="prenume" placeholder="Prenume" value="<?php echo htmlspecialchars($user["prenume"], ENT_QUOTES); ?>">
                                </div>
                                <div class="form-group">
                                        <label for="email"><i class="fa fa-envelope"></i> E-mail</label>
                                        <input type="text" class="form-control input-lg" id="email" name="email" placeholder="E-mail" value="<?php echo htmlspecialchars($user["email"], ENT_QUOTES); ?>">
                                </div>
                                <div class="form-group">
                                        <label for="tel"><i class="fa fa-phone"></i> Telefon</label>
                                        <input type="text" class="form-control input-lg" id="tel" name="tel" placeholder="Telefon" value="<?php echo htmlspecialchars($user["tel"], ENT_QUOTES); ?>">
                                </div>

                                <div class="row">
                                    <div class="col-xs-12 col-md-12 col-lg-12">
                                                <button type="submit" class="btn btn-primary"><i class="fa fa-send"></i>  Salvează</button>
                                        </div>
                                </div>
                        </form>
                </div>
            <?php } ?>
                <div class="col-md-6">
                        <h2 class="page-title">Schimbă parola</h2>
                        <form action="<?php getUrl("users", "post_edit_password", true); ?>" method="post" id="edit_password">
                                <input type="hidden" value="<?php echo isset($_GET["id"]) ? htmlspecialchars($_GET["id"], ENT_QUOTES) : htmlspecialchars($user["id"], ENT_QUOTES); ?>" id="id" name="id">
                                <div class="form-group">
                                        <label for="parola"><i class="fa fa-lock"></i> Introdu o parola nouaă</label>
                                        <input type="password" class="form-control input-lg" id="parola" name="parola" placeholder="Parola">
                                </div>
                                <div class="form-group">
                                        <label for="parola_noua"><i class="fa fa-lock"></i> Re-introdu parola nouă</label>
                                        <input type="password" class="form-control input-lg" id="parola_noua" name="parola_noua" placeholder="Re-introdu Parola">
                                </div>
                                <div class="form-group">
                                        <label for="parola_veche"><i class="fa fa-lock"></i> Introdu parola actuală</label>
                                        <input type="password" class="form-control input-lg" id="parola_veche" name="parola_veche" placeholder="Parola Actuală">
                                </div>


                                <div class="row">
                                        <div class="col-xs-12 col-md-12 col-lg-12" style="margin-top: 12px;">
                                                <button type="submit" class="btn btn-primary"><i class="fa fa-send"></i>  Schimbă parola</button>
                                        </div>
                                </div>
                        </form>
                </div>
        </div>

</div>




<div class="hide-on-mobile" style="margin-left:65%;width:30%">

<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
     viewBox="0 0 960 560" enable-background="new 0 0 960 560" xml:space="preserve">
<g>
    <g>
        <g>
            <path id="rect4882_5_" fill="#E11F27" d="M837,261.1L456.2,524.5v34.9c15,0,29.5-3.6,40.9-10.2l397-207.5
                c12-7.2,17.4-16.2,17.4-25.3l0,0v-33.7l-9,16.2c-2.4-1.8-4.8-4.2-8.4-6L837,261.1z"/>
            <g>
                <path id="path4918_2_" fill="#99C9EC" d="M504.4,83.6c-15,0-30.1,3.6-42.1,10.2L65.9,300.8c-3,1.8-5.4,3.6-7.8,5.4l-9.6-13.8
                    V323l0,0c-1.2,9.6,4.8,19.2,17.4,26.5l347.7,200.3c23.5,13.2,60.8,13.2,83.6,0l397-207.5c12-7.2,17.4-16.2,17.4-25.3l0,0v-33.7
                    l-9,16.2c-2.4-1.8-4.8-4.2-8.4-6L546.5,93.2C534.4,86.6,519.4,83.6,504.4,83.6z"/>
                <path id="rect4863_2_" fill="#FFF2E9" d="M546.5,58.3l347.7,200.3c22.9,13.2,22.9,34.9,0,48.1l-397,207.5
                    c-22.9,13.2-60.8,13.2-83.6,0L65.9,314c-22.9-13.2-22.9-34.9,0-48.1l397-207.5C485.7,45.1,523,45.1,546.5,58.3z"/>
            </g>
            <path id="rect4882_2_" fill="#0B4B7F" d="M499.5,511.9c-10.8,7.8-24.1,12-39.1,12.6v34.9c27.1-1.8,36.7-6.6,40.9-10.2
                l399.4-208.7c10.8-9,10.8-12,10.8-23.5v-5.4v-28.3l-0.6,3c4.8,2.4-21.7,23.5-22.9,24.1c-9.6,4.8-349.5,180.5-350.7,179.8
                l-37.3,21.1C500.2,511.9,500.2,511.9,499.5,511.9z"/>
        </g>
    </g>
</g>
<g id="Layer_2">
    <path id="rect1911_3_" fill="#FFB699" d="M342,164.8l-160,92.6c-9,5.4-9,13.8,0,19.2l160,92.6c9,5.4,24.1,5.4,33.7,0l160-92.6
        c9-5.4,9-13.8,0-19.2l-160-92.6C366.6,159.4,351.6,159.4,342,164.8z"/>
    <path fill="#FFB699" d="M749.8,291.1c0,32.5-30.7,50.5-68.6,40.9c-37.9-10.2-68.6-44.5-68.6-77.6s30.7-50.5,68.6-40.9
        C719.1,223.8,749.8,258,749.8,291.1z"/>
</g>
<g>
    <path fill="#37C4EB" d="M781.7,143.8c0,48.1-45.7,79.4-101.7,69.2c-55.9-10.2-101.7-57.7-101.7-105.9S624.1,27.7,680,37.9
        S781.7,95,781.7,143.8z"/>
    <path fill="#381B05" d="M761.8,149.2c0,39.1-36.7,63.8-81.8,55.9c-45.1-8.4-81.8-46.3-81.8-85.4s36.7-63.8,81.8-55.9
        S761.8,110.1,761.8,149.2z"/>
    <g>
        <path fill="#37C4EB" d="M680,212.3c-46.3-8.4-85.4-42.1-97.4-80.6C587.4,223.2,628.9,302,680,311c51.1,9,92.6-53.5,97.4-143.2
            C764.8,201.5,725.7,220.8,680,212.3z"/>
        <g>
            <path fill="#1676B3" d="M777.4,167.8c-39.6,52.8-76.4,43.8-76.4,43.8c0.3,0.9,0.6,1.8,0.9,2.7C737.8,214,766.9,196,777.4,167.8z"
                />
            <path fill="#1676B3" d="M777.4,167.8c-10.6,28.2-39.6,46.2-75.6,46.5c14.4,44.6-11.2,77.9-29.3,94.9c2.5,0.8,4.9,1.4,7.4,1.8
                C731.1,320,772.6,257.4,777.4,167.8z"/>
        </g>
    </g>
    <g>
        <path fill="#37C4EB" d="M761.2,214.1c-12.6-5.4-25.3-1.8-33.7,8.4c4.8-0.6,10.8,0,16.2,3c17.4,7.8,28.9,27.7,25.9,44.5
            c-3,16.8-19.2,24.1-36.1,16.2c-6-2.4-10.8-6.6-15-11.4c4.2,16.2,13.8,29.5,26.5,34.9c19.8,9,39.1-5.4,43.3-32.5
            C793.1,252,780.5,223.2,761.2,214.1z"/>
    </g>
    <g>
        <path fill="#1676B3" d="M598.2,119.7c0-32.8,25.8-55.4,60.7-57.2c0,0,0,0,0,0s-48.5-8.2-60.7,21.2s-8.7,66.7,36.1,101.1
            c0,0,0,0,0,0C612.5,168.1,598.2,144.1,598.2,119.7z"/>
        <path fill="#1676B3" d="M634.4,184.8c0.4,0.3,0.7,0.5,1.1,0.8C635.1,185.3,634.8,185.1,634.4,184.8z"/>
    </g>
</g>
<g id="g2711_1_" class="hovering" ">
    <path id="path1909_1_" fill="#1676B3" d="M369.3,130.4c-6,0-12,1.2-16.8,4.2l-160,92c-1.8,0.6-3,1.8-3.6,3l-3-5.4v12.6l0,0
        c0,3.6,2.4,7.2,7.2,9.6l160,92.6c9,5.4,24.1,5.4,33.7,0l160-92.6c4.8-3,7.2-6.6,7.2-10.2l0,0v-12l-3,5.4c-1.2-1.2-2.4-1.8-4.2-3
        l-160.6-92C381.3,131.6,375.3,130.4,369.3,130.4L369.3,130.4z"/>
    <path id="rect1911_1_" fill="#37C4EB" d="M352.5,122l-160,92c-9,5.4-9,13.8,0,19.2l160,92.6c9,5.4,24.1,5.4,33.7,0l160-92.6
        c9-5.4,9-13.8,0-19.2l-160-92C377.1,116.6,362.1,116.6,352.5,122z"/>
    <path id="path2011_1_" fill="#1676B3" d="M424.6,186.3c-7.2-1.2-16.2-1.2-27.1,0c-10.8,1.2-21.1,3.6-31.9,7.2
        c-10.2,3.6-20.5,7.8-29.5,13.2l-3,1.8c-9,5.4-16.2,10.8-22.3,16.8c-6,6-10.2,12-12,18c-2.4,6-1.8,10.8,0,15l12-3.6
        c-0.6-5.4,2.4-12,8.4-18.6c6.6-7.2,15.6-13.8,27.7-21.1l1.8-1.2c12-7.2,24.1-12.6,36.1-16.2c12-3.6,22.9-5.4,31.9-4.8L424.6,186.3z
         M434.9,191.8l-12,3.6c0.6,5.4-2.4,12-9,18.6c-6.6,7.2-15.6,13.8-27.7,21.1l-3,1.8c-12,6.6-23.5,12-35.5,15.6s-22.3,5.4-31.9,4.8
        l-6.6,7.2c7.2,1.2,16.2,1.2,27.1,0c10.8-1.2,21.7-3.6,31.9-7.2c10.8-3.6,20.5-7.8,29.5-13.2l3-1.8c9-5.4,16.2-10.8,22.3-16.8
        c6-6,10.2-12,12-18C437.3,201.4,437.3,196,434.9,191.8L434.9,191.8z M386.1,165.3c-8.4-2.4-16.2-3-24.1-2.4
        c-7.8,0.6-15.6,3.6-22.9,7.8l-12.6,7.2c-8.4,4.8-15,4.8-21.7,1.8l-12.6,7.2c6,3.6,4.8,7.8-3.6,12.6l-12,7.2
        c-14.4,8.4-18,17.4-9,27.1l12.6-4.2c-3-4.2,0-9,9-14.4l12.6-7.2c9-5.4,12.6-10.8,10.2-16.8c10.2,1.2,19.2-0.6,28.9-5.4l12.6-7.2
        c4.8-3,9.6-4.8,13.8-5.4c4.2-0.6,8.4-0.6,12,0L386.1,165.3z M471,214l-12.6,4.2c3,4.2,0,9.6-9.6,15l-12.6,7.2
        c-9,5.4-12.6,10.8-9.6,16.8c-10.2-1.8-19.2,0-28.9,5.4l-12.6,7.2c-9.6,5.4-18,7.2-25.9,5.4l-6.6,7.2c16.2,4.8,31.9,3,46.3-4.8
        L412,270c8.4-4.8,15.6-5.4,22.3-1.8l12.6-7.2c-6-3.6-5.4-7.8,3-12.6l13.2-7.2c7.2-4.2,12-8.4,13.2-13.2
        C477,223.6,475.2,218.8,471,214L471,214z"/>
    <path id="path2025_1_" fill="#172E55" d="M424.6,129.2c-7.2-1.2-16.2-1.2-27.1,0c-10.8,1.2-21.1,3.6-31.9,7.2
        c-10.2,3.6-20.5,7.8-29.5,13.2l-3,1.8c-9,5.4-16.2,10.8-22.3,16.8c-6,6-10.2,12-12,18c-2.4,6-1.8,10.8,0,15l12-3.6
        c-0.6-5.4,2.4-12,8.4-18.6c6.6-7.2,15.6-13.8,27.7-21.1l1.8-1.2c12-7.2,24.1-12.6,36.1-16.2c12-3.6,22.9-5.4,31.9-4.8L424.6,129.2z
         M434.9,135.2l-12,3.6c0.6,5.4-2.4,12-9,18.6c-6.6,7.2-15.6,13.8-27.7,21.1l-3,1.8c-12,6.6-23.5,12-35.5,15.6s-22.3,5.4-31.9,4.8
        l-6.6,7.2c7.2,1.2,16.2,1.2,27.1,0s21.7-3.6,31.9-7.2c10.8-3.6,20.5-7.8,29.5-13.2l3-1.8c9-5.4,16.2-10.8,22.3-16.8
        c6-6,10.2-12,12-18C437.3,144.2,437.3,139.4,434.9,135.2L434.9,135.2z M386.1,108.1c-8.4-2.4-16.2-3-24.1-2.4s-15.6,3.6-22.9,7.8
        l-13.2,7.2c-8.4,4.8-15,4.8-21.7,1.8l-12.6,7.2c6,3.6,4.8,7.8-3.6,12.6l-12,7.2c-14.4,8.4-18,17.4-9,27.1l12.6-4.2
        c-3-4.2,0-9,9-14.4l12.6-7.2c9-5.4,12.6-10.8,10.2-16.8c10.2,1.2,19.2-0.6,28.9-5.4l12.6-7.2c4.8-3,9.6-4.8,13.8-5.4
        c4.2-0.6,8.4-0.6,12,0L386.1,108.1z M471,157.5l-12.6,4.2c3,4.2,0,9.6-9.6,15l-12.6,7.2c-9,5.4-12.6,10.8-9.6,16.8
        c-10.2-1.8-19.2,0-28.9,5.4l-12.6,7.2c-9.6,5.4-18,7.2-25.9,5.4l-6.6,7.2c16.2,4.8,31.9,3,46.3-4.8l13.2-7.8
        c8.4-4.8,15.6-5.4,22.3-1.8l12.6-7.2c-6-3.6-5.4-7.8,3-12.6l13.2-7.2c7.2-4.2,12-8.4,13.2-13.2C477,167.1,475.2,162.3,471,157.5
        L471,157.5z"/>
</g>
</svg>



</div>


