<?php
/*
 * Creat de scriptul facut de Marius Trifu
 * La data de 04-09-2017 si ora 21:38:16
 * Pentru intrebari trifumarius01@gmail.com
 */

defined("autorizare") or die("Nu aveti autorizare");
?>
<style type="text/css">
    h4, h3{
        text-align: center;
        color: #092d56;
    }
    body{
        background: #4392f1;
    }
</style>
<main class = "mdl-layout__content" style="padding:15px">       
    <?php
    if (isset($_GET["message"])) {
        if (isset($_GET["status"]) && $_GET["status"] == "ok") {
            ?>
            <div class="alert alert-success">
                <a href="<?php getUrl("$page", "$view", true); ?>" class="close">&times;
                </a>
                <strong><i class="fa fa-check-circle"></i></strong> <?php echo htmlspecialchars($_GET["message"], ENT_QUOTES); ?>
            </div>
            <?php
        } else if (isset($_GET["status"]) && $_GET["status"] == "nok") {
            ?>
            <div class="alert alert-danger">
                <a href="<?php getUrl("$page", "$view", true); ?>" class="close">&times;
                </a>
                <strong><i class="fa fa-exclamation-circle"></i></strong> <?php echo htmlspecialchars($_GET["message"], ENT_QUOTES); ?>
            </div>
            <?php
        }
    }
    ?>



   



    <form action="<?php getUrl("formular", "post_submit", true); ?>" method="post" id="validate_formular">
        <div class="card">
        <h4 style="text-align:center;">
            <?php echo $limba == "en" ? "TEAM REGISTRATION" : "ÎNSCRIEREA ECHIPEI"; ?>	
        </h4>
        <div class = "mdl-grid" style="margin-top:-10px;"> 
            <div class="mdl-cell mdl-cell--2-col"></div>
            <div class="mdl-cell mdl-cell--8-col">
                <div style="width:100%; text-align: center" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label margin_elem_formular">
                    <label for="nume_echipa" class="mdl-textfield__label"><?php echo $limba == "en" ? "Team Name" : "Nume echipă"; ?><span class="obligatoriu">*</span></label>
                    <input style="color:black; font-size: 60px" type="text" name="nume_echipa" id="nume_echipa" class="mdl-textfield__input">
                    <div class="mdl-tooltip" data-mdl-for="nume_echipa" style="font-size:14px;"><?php echo $limba == "en" ? "Team Name (minimum 3 characters)" : "Numele echipei (minim 3 caractere)"; ?></div>
                </div>
            </div>
            <div class="mdl-cell mdl-cell--2-col"></div>
        </div>
        <div class = "mdl-grid" style="margin-top:-30px;"> 
            <div class="mdl-cell mdl-cell--4-col">
                <h4 style=""><?php echo $limba == "en" ? "TEAM CAPTAIN" : "CĂPITANUL ECHIPEI"; ?></h4>

                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label margin_elem_formular">
                    <label for="nume1" class="mdl-textfield__label"><?php echo $limba == "en" ? "Last Name" : "Nume"; ?><span class="obligatoriu">*</span></label>
                    <input type="text" name="nume1" id="nume1" class="mdl-textfield__input">
                    <div class="mdl-tooltip" data-mdl-for="nume1" style="font-size:14px;"><?php echo $limba == "en" ? "Last Name" : "Nume"; ?></div>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label margin_elem_formular">
                    <label for="prenume1" class="mdl-textfield__label"><?php echo $limba == "en" ? "First Name" : "Prenume"; ?><span class="obligatoriu">*</span></label>
                    <input type="text" name="prenume1" id="prenume1" class="mdl-textfield__input">
                    <div class="mdl-tooltip" data-mdl-for="prenume1" style="font-size:14px;"><?php echo $limba == "en" ? "First Name" : "Prenume"; ?></div>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label margin_elem_formular">
                    <label for="email1" class="mdl-textfield__label"><?php echo $limba == "en" ? "Email" : "Email"; ?><span class="obligatoriu">*</span></label>
                    <input type="email" name="email1" id="email1" class="mdl-textfield__input">
                    <div class="mdl-tooltip" data-mdl-for="email1" style="font-size:14px;"><?php echo $limba == "en" ? "Email" : "Email"; ?></div>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label margin_elem_formular">
                    <label for="telefon1" class="mdl-textfield__label"><?php echo $limba == "en" ? "Phone" : "Telefon"; ?><span class="obligatoriu">*</span></label>
                    <input type="tel" name="telefon1" id="telefon1" class="mdl-textfield__input">
                    <div class="mdl-tooltip" data-mdl-for="telefon1" style="font-size:14px;"><?php echo $limba == "en" ? "Phone" : "Telefon"; ?></div>
                </div>
            </div>
            <div class="mdl-cell mdl-cell--4-col">
                <h4 style=""><?php echo $limba == "en" ? "MEMBER" : "MEMBRU"; ?></h4>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label margin_elem_formular">
                    <label for="nume2" class="mdl-textfield__label"><?php echo $limba == "en" ? "Last Name" : "Nume"; ?><span class="obligatoriu">*</span></label>
                    <input type="text" name="nume2" id="nume2" class="mdl-textfield__input">
                    <div class="mdl-tooltip" data-mdl-for="nume2" style="font-size:14px;"><?php echo $limba == "en" ? "Last Name" : "Nume"; ?></div>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label margin_elem_formular">
                    <label for="prenume2" class="mdl-textfield__label"><?php echo $limba == "en" ? "First Name" : "Prenume"; ?><span class="obligatoriu">*</span></label>
                    <input type="text" name="prenume2" id="prenume2" class="mdl-textfield__input">
                    <div class="mdl-tooltip" data-mdl-for="prenume2" style="font-size:14px;"><?php echo $limba == "en" ? "First Name" : "Prenume"; ?></div>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label margin_elem_formular">
                    <label for="email2" class="mdl-textfield__label"><?php echo $limba == "en" ? "Email" : "Email"; ?><span class="obligatoriu">*</span></label>
                    <input type="email" name="email2" id="email2" class="mdl-textfield__input">
                    <div class="mdl-tooltip" data-mdl-for="email2" style="font-size:14px;"><?php echo $limba == "en" ? "Email" : "Email"; ?></div>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label margin_elem_formular">
                    <label for="telefon2" class="mdl-textfield__label"><?php echo $limba == "en" ? "Phone" : "Telefon"; ?><span class="obligatoriu">*</span></label>
                    <input type="tel" name="telefon2" id="telefon2" class="mdl-textfield__input">
                    <div class="mdl-tooltip" data-mdl-for="telefon2" style="font-size:14px;"><?php echo $limba == "en" ? "Phone" : "Telefon"; ?></div>
                </div>
            </div>
            <div class="mdl-cell mdl-cell--4-col">
                <h4 style=""><?php echo $limba == "en" ? "MEMBER" : "MEMBRU"; ?></h4>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label margin_elem_formular">
                    <label for="nume3" class="mdl-textfield__label"><?php echo $limba == "en" ? "Last Name" : "Nume"; ?><span class="obligatoriu">*</span></label>
                    <input type="text" name="nume3" id="nume3" class="mdl-textfield__input">
                    <div class="mdl-tooltip" data-mdl-for="nume3" style="font-size:14px;"><?php echo $limba == "en" ? "Last Name" : "Nume"; ?></div>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label margin_elem_formular">
                    <label for="prenume3" class="mdl-textfield__label"><?php echo $limba == "en" ? "First Name" : "Prenume"; ?><span class="obligatoriu">*</span></label>
                    <input type="text" name="prenume3" id="prenume3" class="mdl-textfield__input">
                    <div class="mdl-tooltip" data-mdl-for="prenume3" style="font-size:14px;"><?php echo $limba == "en" ? "First Name" : "Prenume"; ?></div>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label margin_elem_formular">
                    <label for="email3" class="mdl-textfield__label"><?php echo $limba == "en" ? "Email" : "Email"; ?><span class="obligatoriu">*</span></label>
                    <input type="email" name="email3" id="email3" class="mdl-textfield__input">
                    <div class="mdl-tooltip" data-mdl-for="email3" style="font-size:14px;"><?php echo $limba == "en" ? "Email" : "Email"; ?></div>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label margin_elem_formular">
                    <label for="telefon3" class="mdl-textfield__label"><?php echo $limba == "en" ? "Phone" : "Telefon"; ?><span class="obligatoriu">*</span></label>
                    <input type="tel" name="telefon3" id="telefon3" class="mdl-textfield__input">
                    <div class="mdl-tooltip" data-mdl-for="telefon3" style="font-size:14px;"><?php echo $limba == "en" ? "Phone" : "Telefon"; ?></div>
                </div>
                <br>
            </div>
        </div>
        </div>




        <div class="card" style="margin-top: 20px">
        <div class = "mdl-grid"> 
            <div class="mdl-cell mdl-cell--6-col">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label margin_elem_formular" style="width:100%;">
                    <label for="limbaje" class="mdl-textfield__label"><?php echo $limba == "en" ? "Programming languages" : "Limbaje de programare cunoscute"; ?></label>
                    <input type="text" name="limbaje" id="limbaje" class="mdl-textfield__input" placeholder="Ex: C,C++,PHP,Java...etc">
                    <div class="mdl-tooltip" data-mdl-for="limbaje" style="font-size:14px;"><?php echo $limba == "en" ? "What programming languages do you know?" : "Ce limbaje de programare cunoașteți?"; ?></div>
                </div>
            </div>
            <div class="mdl-cell mdl-cell--6-col">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label margin_elem_formular" style="width:100%;">
                    <label for="evenimente" class="mdl-textfield__label"><?php echo $limba == "en" ? "Other events you have attended (together or separately)" : "Alte evenimente la care ați participat (împreună sau separat)"; ?></label>
                    <input type="text" name="evenimente" id="evenimente" class="mdl-textfield__input" placeholder="<?php echo $limba == "en" ? "Details" : "Detalii"; ?>">
                    <div class="mdl-tooltip" data-mdl-for="evenimente" style="font-size:14px;"><?php echo $limba == "en" ? "Have you ever attended other hackathons or programming contests?" : "Ați mai participat la alte hackathoane sau concursuri de programare?"; ?></div>
                </div>
            </div>
            <div class="mdl-cell mdl-cell--6-col">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label margin_elem_formular" style="width:100%;">
                    <label for="cv" class="mdl-textfield__label"><?php echo $limba == "en" ? "Link CV" : "Link CV"; ?><span class="obligatoriu">*</span></label>
                    <input type="url" name="cv" id="cv" class="mdl-textfield__input" placeholder="<?php echo $limba == "en" ? "Link with the CVs of each member" : "Introduceți un link către CV-urile echipei"; ?>">
                    <div class="mdl-tooltip" data-mdl-for="cv" style="font-size:14px;"><?php echo $limba == "en" ? "Enter a valid link that contain the CVs of each member (ex: Google Drive)" : "Introduceți un link valid care să conțină CV-urile fiecărui membru al echipei (ex: Google Drive)"; ?></div>
                </div>
            </div>
            <div class="mdl-cell mdl-cell--6-col">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label margin_elem_formular" style="width:100%;">
                    <label for="comentariu" class="mdl-textfield__label"><?php echo $limba == "en" ? "Notifications" : "Observații"; ?></label>
                    <input type="text" name="comentariu" id="comentariu" class="mdl-textfield__input" placeholder="<?php echo $limba == "en" ? "Another questions?" : "Doriți să ne mai transmiteți ceva?"; ?>">
                    <div class="mdl-tooltip" data-mdl-for="comentariu" style="font-size:14px;"><?php echo $limba == "en" ? "Other problems or questions" : "Scrieți despre orice problemă sau nelămurire"; ?></div>
                </div>
            </div>
    
        </div>

        <button id="submit_formular" type="submit" class="btn btn-primary" style="width:200px;margin-bottom: 50px;align-self: center; font-size: 40px">Submit</button>
        </div>

        

    </form>









<div class="home-island">
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
     viewBox="0 0 371.2 240.5" enable-background="new 0 0 371.2 240.5" xml:space="preserve">
<g id="g10945" transform="translate(71.110839)">
    <path id="path10879" fill="#99C9EB" d="M-6.1,21c3.7-0.1,7.4,0.6,10.1,2.2l3.5,2l1.9,1.1l163,94.1l14.7-8.5l1.3-0.8c0,0,0,0,0,0
        c5.9-3.4,15.1-3.6,20.6-0.5l4.4,2.6l77.6,44.8l2.8,1.6l2.4,1.4c0,0,0,0,0,0c0.6,0.4,1.2,0.7,1.6,1.2l2.2-4v8.4l0,0
        c0,2.2-1.6,4.6-4.7,6.4l-2.6,1.5l-69.6,40.2h0l-3.2,1.8l-1.2,0.7c0,0,0,0,0,0c-5.9,3.4-15.1,3.7-20.6,0.5l-1.5-0.9l-3.5-2
        l-56.4-32.6l-90.1,52l-6.1,3.5c0,0,0,0,0,0c-5.9,3.4-15.1,3.7-20.6,0.5l-5.2-3l-57.9-33.4l-6.3-3.6c0,0,0,0,0,0
        c-2.7-1.6-4-3.7-3.8-5.8v0v-8.3l2.3,4c0.7-0.6,1.5-1.2,2.4-1.8l10.5-6.1v0L12,151.3l-36.6-21.1l-7-4v0c-2.5-1.4-3.8-3.3-3.8-5.3
        l0,0v-8.6l2.3,3.8c0.7-0.6,1.4-1.2,2.4-1.7l7.6-4.4v0l17.4-10L-62.7,67l-4.6-2.6c0,0,0,0,0,0c-2.4-1.4-3.7-3.2-3.8-5.1l0,0v-0.4
        c0-0.1,0-0.2,0-0.3v-7.8l2.2,3.6c0.7-0.7,1.5-1.3,2.5-1.9l4.7-2.7v0l40.4-23.3l4.8-2.8v0C-13.6,22-9.8,21.1-6.1,21L-6.1,21z"/>
    <path id="path10930" fill="#0B4B7F" d="M-61.7,49.8L-61.7,49.8l-4.7,2.7c-1,0.6-1.8,1.2-2.5,1.9l-2.2-3.6v7.8c0,0.1,0,0.2,0,0.3
        v0.4l0,0c0.2,1.9,1.4,3.7,3.8,5.1c0,0,0,0,0,0l4.6,2.6l56.9,32.8l-3.6,2.1c1.8,0.9,3,1.8,3.2,2.4C-5.1,107.9,4.5,89,4.5,89
        l-61.8-41.8L-61.7,49.8z M-30.7,114.3c-0.9,0.5-1.7,1.1-2.4,1.7l-2.3-3.8v8.6l0,0c0.1,2,1.3,3.9,3.8,5.3v0l7,4l32.3,18.7l4.3-6
        l-38.7-31L-30.7,114.3z M136.8,182.2l56.4,32.6l3.5,2l1.5,0.9c2.3,1.3,5.1,2,8.2,2.2v-8.4l-4.2-18.3l-65.4-19.4V182.2z
         M-48.6,186.3c-1,0.6-1.8,1.2-2.4,1.8l-2.3-4v8.3v0c-0.1,2.1,1.1,4.2,3.8,5.8c0,0,0,0,0,0l6.3,3.6l57.9,33.4l5.2,3
        c2.2,1.3,5.1,2,8.2,2.2V232l-66.2-51.8L-48.6,186.3z"/>
    <path id="path10712" fill="#FFF2E9" d="M-6.1,12.6c3.7-0.1,7.4,0.6,10.1,2.2l3.5,2l1.9,1.1l163,94.1l14.7-8.5l1.3-0.8c0,0,0,0,0,0
        c5.9-3.4,15.1-3.6,20.6-0.5l4.4,2.6l77.6,44.8l2.8,1.6l2.4,1.4c0,0,0,0,0,0c5.5,3.2,5.1,8.5-0.9,11.9l-2.6,1.5l-69.6,40.2h0
        L220,208l-1.2,0.7c0,0,0,0,0,0c-5.9,3.4-15.1,3.7-20.6,0.5l-1.5-0.9l-3.5-2l-56.4-32.6l-90.1,52l-6.1,3.5c0,0,0,0,0,0
        c-5.9,3.4-15.1,3.7-20.6,0.5l-5.2-3l0,0l-57.9-33.4l-6.3-3.6c0,0,0,0,0,0c-5.5-3.2-5.1-8.5,0.9-11.9l10.5-6.1v0L12,142.9
        l-36.6-21.1l-7-4v0c-5.5-3.2-5.1-8.5,0.9-11.9l7.6-4.4v0l17.4-10l-56.9-32.8l-4.6-2.6c0,0,0,0,0,0c-5.5-3.2-5.1-8.5,0.9-11.9
        l4.7-2.7v0l40.4-23.3l4.8-2.8c0,0,0,0,0,0C-13.6,13.6-9.8,12.7-6.1,12.6L-6.1,12.6z"/>
</g>
<g id="Layer_2">
    <a href="<?php getUrl("home","dashboard",true); ?>"><g>
        <polygon class="home-button" fill="#0B4B7F" points="328.1,177.3 126.1,60.7 126.1,1 328.1,117.6      "/>
        
            <text class="svg-button-text" transform="matrix(1.1628 0.6713 0 1 147.9263 57.6309)" fill="#FFFFFF" font-family="'Roboto-Regular'" font-size="48.5256">HOME</text>
    </g>
    </a>
</g>
<g id="path11241">
    <path fill="#FFB699" d="M131.3,108.9l29.7,17.1c1.7,1,1.7,2.6,0,3.6l-29.7,17.1c-1.7,1-4.5,1-6.2,0l-29.7-17.1
        c-1.7-1-1.7-2.6,0-3.6l29.7-17.1C126.8,108,129.6,107.9,131.3,108.9"/>
</g>
<path id="rect1911_2_" transform="translate(+10.5,+9.5)"  fill="#FFB699" d="M92,180.2l23.9,13.8c1.4,0.8,1.4,2.1,0,2.9L92,210.6c-1.4,0.8-3.6,0.8-5,0l-23.9-13.8
    c-1.4-0.8-1.4-2.1,0-2.9L87,180.2C88.3,179.4,90.6,179.4,92,180.2z"/>
<g class="hovering" id="g2734_1_">
    <path id="rect1802_1_" fill="#1577B3" d="M128.2,99.6c-1.1,0-2.3,0.3-3.2,0.8l-30.3,18.3c-0.3,0.2-0.5,0.4-0.7,0.6l-0.6-1.1v2.5
        l0,0c0,0.7,0.4,1.4,1.3,1.9l30.3,18.3c1.8,1.1,4.6,1.1,6.3,0l30.3-18.3c0.9-0.5,1.3-1.3,1.3-2l0,0v-2.4l-0.6,1.1
        c-0.2-0.2-0.4-0.4-0.7-0.6l-30.3-18.3C130.5,99.8,129.3,99.6,128.2,99.6L128.2,99.6z"/>
    <path id="rect1800_1_" fill="#38C4EA" d="M125,97.9l-30.3,18.3c-1.8,1.1-1.8,2.8,0,3.8l30.3,18.3c1.8,1.1,4.6,1.1,6.3,0l30.3-18.3
        c1.8-1.1,1.8-2.8,0-3.8l-30.3-18.3C129.6,96.8,126.7,96.8,125,97.9z"/>
    <path id="path1953_1_" fill="#1577B3" d="M115.9,109l-2.7,1.6l4.4,7.7l3.2-1.9l-3.3-4.8l8,2l3.2-1.9L115.9,109z M139.1,113.1
        l-23.4,7.7l2.1,1.3l23.4-7.7L139.1,113.1z M138.7,117.7l-3.2,1.9l3.4,4.9l-8.1-2.1l-3.2,1.9l12.8,2.7l2.7-1.6L138.7,117.7z"/>
    <path id="path1967_1_" fill="#162E55" d="M115.9,100.2l-2.7,1.6l4.4,7.7l3.2-1.9l-3.3-4.8l8,2l3.2-1.9L115.9,100.2z M139.1,104.3
        l-23.4,7.7l2.1,1.3l23.4-7.7L139.1,104.3z M138.7,108.9l-3.2,1.9l3.4,4.9l-8.1-2.1l-3.2,1.9l12.8,2.7l2.7-1.6L138.7,108.9z"/>
</g>
<path id="rect2053" fill="#FFB699" d="M62.5,38.5l53.2,30.7c1.7,1,1.7,2.6,0,3.5L85.5,90.2c-1.7,1-4.4,1-6.1,0L26.2,59.5
    c-1.7-1-1.7-2.6,0-3.5l30.1-17.4C58,37.5,60.8,37.5,62.5,38.5z"/>
<g id="g2711_1_" class="hovering">
    <path id="path1909_1_" fill="#1676B3" d="M100,181.8c0.9,0,1.8,0.2,2.5,0.6l23.9,13.8c0.2,0.1,0.4,0.3,0.6,0.4l0.5-0.8v1.9l0,0
        c0,0.5-0.3,1.1-1,1.5l-23.9,13.8c-1.4,0.8-3.6,0.8-5,0l-23.9-13.8c-0.7-0.4-1.1-1-1-1.5l0,0v-1.8l0.5,0.8c0.2-0.2,0.3-0.3,0.6-0.4
        l23.9-13.8C98.1,182,99.1,181.8,100,181.8L100,181.8z"/>
    <path id="rect1911_1_" fill="#37C4EB" d="M102.5,180.5l23.9,13.8c1.4,0.8,1.4,2.1,0,2.9L102.5,211c-1.4,0.8-3.6,0.8-5,0l-23.9-13.8
        c-1.4-0.8-1.4-2.1,0-2.9l23.9-13.8C98.8,179.7,101.1,179.7,102.5,180.5z"/>
    <path id="path2011_1_" fill="#1676B3" d="M92.7,191.2c1.4-0.1,3,0.2,4.8,0.7c1.8,0.5,3.6,1.3,5.4,2.4l0.3,0.2
        c1.8,1.1,3.2,2.1,4.1,3.1c0.9,1,1.4,2,1.3,2.8l1.8,0.5c0.3-0.6,0.4-1.4,0-2.3c-0.3-0.9-0.9-1.8-1.8-2.7c-0.9-0.9-2-1.7-3.3-2.5
        l-0.5-0.3c-1.4-0.8-2.8-1.5-4.4-2c-1.6-0.5-3.1-0.9-4.7-1.1c-1.6-0.2-2.9-0.2-4,0L92.7,191.2z M90.2,191c-0.4,0.6-0.4,1.4-0.1,2.3
        c0.3,0.9,0.9,1.8,1.8,2.7c0.9,0.9,2,1.8,3.3,2.5l0.4,0.2c1.4,0.8,2.8,1.4,4.4,2c1.6,0.5,3.2,0.9,4.8,1.1c1.6,0.2,2.9,0.2,4,0
        l-0.9-1c-1.4,0.1-3-0.2-4.7-0.7c-1.8-0.5-3.5-1.3-5.3-2.3l-0.5-0.3c-1.8-1-3.2-2.1-4.1-3.1c-0.9-1-1.4-2-1.3-2.8L90.2,191L90.2,191
        z M98.5,188.1c0.6-0.1,1.2-0.1,1.8,0c0.6,0.1,1.3,0.4,2.1,0.8l1.9,1.1c1.4,0.8,2.8,1.1,4.3,0.8c-0.4,0.9,0.1,1.7,1.5,2.5l1.9,1.1
        c1.4,0.8,1.8,1.6,1.4,2.2l1.9,0.6c1.3-1.4,0.8-2.8-1.4-4l-1.8-1c-1.3-0.7-1.4-1.4-0.5-1.9l-1.9-1.1c-0.9,0.5-2,0.4-3.2-0.2
        l-1.9-1.1c-1.1-0.6-2.2-1-3.4-1.2c-1.2-0.1-2.4,0-3.6,0.4L98.5,188.1z M84.8,194.3c-0.6,0.7-0.8,1.4-0.6,2.1c0.2,0.7,0.9,1.3,2,2
        l1.9,1.1c1.2,0.7,1.3,1.3,0.4,1.8l1.9,1.1c0.9-0.5,2-0.4,3.3,0.3l2,1.1c2.1,1.2,4.4,1.4,6.9,0.7l-1-1.1c-1.1,0.3-2.4,0-3.8-0.8
        l-1.9-1.1c-1.4-0.8-2.8-1.1-4.3-0.8c0.4-0.9-0.1-1.7-1.4-2.5l-1.9-1.1c-1.4-0.8-1.8-1.6-1.4-2.2L84.8,194.3L84.8,194.3z"/>
    <path id="path2025_1_" fill="#172E55" d="M92.7,182.7c1.4-0.1,3,0.2,4.8,0.7c1.8,0.5,3.6,1.3,5.4,2.4l0.3,0.2
        c1.8,1.1,3.2,2.1,4.1,3.1c0.9,1,1.4,2,1.3,2.8l1.8,0.5c0.3-0.6,0.4-1.4,0-2.3c-0.3-0.9-0.9-1.8-1.8-2.7c-0.9-0.9-2-1.7-3.3-2.5
        l-0.5-0.3c-1.4-0.8-2.8-1.5-4.4-2c-1.6-0.5-3.1-0.9-4.7-1.1c-1.6-0.2-2.9-0.2-4,0L92.7,182.7z M90.2,182.5
        c-0.4,0.6-0.4,1.4-0.1,2.3c0.3,0.9,0.9,1.8,1.8,2.7c0.9,0.9,2,1.8,3.3,2.5l0.4,0.2c1.4,0.8,2.8,1.4,4.4,2c1.6,0.5,3.2,0.9,4.8,1.1
        c1.6,0.2,2.9,0.2,4,0l-0.9-1c-1.4,0.1-3-0.2-4.7-0.7c-1.8-0.5-3.5-1.3-5.3-2.3l-0.5-0.3c-1.8-1-3.2-2.1-4.1-3.1
        c-0.9-1-1.4-2-1.3-2.8L90.2,182.5L90.2,182.5z M98.5,179.6c0.6-0.1,1.2-0.1,1.8,0c0.6,0.1,1.3,0.4,2.1,0.8l1.9,1.1
        c1.4,0.8,2.8,1.1,4.3,0.8c-0.4,0.9,0.1,1.7,1.5,2.5l1.9,1.1c1.4,0.8,1.8,1.6,1.4,2.2l1.9,0.6c1.3-1.4,0.8-2.8-1.4-4l-1.8-1
        c-1.3-0.7-1.4-1.4-0.5-1.9l-1.9-1.1c-0.9,0.5-2,0.4-3.2-0.2l-1.9-1.1c-1.1-0.6-2.2-1-3.4-1.2c-1.2-0.1-2.4,0-3.6,0.4L98.5,179.6z
         M84.8,185.9c-0.6,0.7-0.8,1.4-0.6,2.1c0.2,0.7,0.9,1.3,2,2l1.9,1.1c1.2,0.7,1.3,1.3,0.4,1.8l1.9,1.1c0.9-0.5,2-0.4,3.3,0.3l2,1.1
        c2.1,1.2,4.4,1.4,6.9,0.7l-1-1.1c-1.1,0.3-2.4,0-3.8-0.8l-1.9-1.1c-1.4-0.8-2.8-1.1-4.3-0.8c0.4-0.9-0.1-1.7-1.4-2.5l-1.9-1.1
        c-1.4-0.8-1.8-1.6-1.4-2.2L84.8,185.9L84.8,185.9z"/>
</g>
<g id="g3382_1_">
    <path id="rect2780_1_" fill="#37C4EB" d="M63.5,30.2L116.7,61c1.7,1,1.7,2.6,0,3.5L86.5,81.9c-1.7,1-4.4,1-6.1,0L27.2,51.2
        c-1.7-1-1.7-2.6,0-3.5l30.1-17.4C59,29.3,61.8,29.3,63.5,30.2z"/>
    <g id="g3360_1_">
        <g id="g3336_1_" transform="translate(-127.5,44.599341)">
            <path id="path3326_1_" fill="#DB1F27" d="M172.7,8l1.8,1l1.1,0.7l25.6,14.8l-0.5,3L172.3,11l0,0c-0.6-0.4-0.5-1.6,0.2-2.7
                C172.6,8.2,172.7,8.1,172.7,8L172.7,8L172.7,8z"/>
            <path id="path3328_1_" fill="#FFFFFF" d="M201.3,24.5v-7.2l24.9-15.1l2.5,2.7L228.4,9L201.3,24.5z"/>
            <path id="path3330_1_" fill="#DAE6F5" d="M172.7,8V1.3l28.6,16v7.2L172.7,8z"/>
            
                <linearGradient id="path3332_2_" gradientUnits="userSpaceOnUse" x1="303.8197" y1="134.9762" x2="279.1408" y2="157.6435" gradientTransform="matrix(-1 0 0 -1 505.5543 160.0374)">
                <stop  offset="0" style="stop-color:#DB1F27"/>
                <stop  offset="1" style="stop-color:#F05858"/>
            </linearGradient>
            <path id="path3332_1_" fill="url(#path3332_2_)" d="M224.3,1.4c3.6-2.1,6.6-0.8,6.6,2.8c0,3.6-3,8.3-6.6,10.4l-22,12.7
                c-1,0.6-1.8,0.3-1.9-0.7c0-1,0.8-2.3,1.8-2.9c0,0,0,0,0.1,0l22-12.7c1.6-1,2.9-3,2.9-4.6c0-1.6-1.3-2.2-2.9-1.2l-22,12.7
                c-1,0.6-1.8,0.3-1.9-0.7c0-1,0.8-2.3,1.8-2.9c0,0,0,0,0.1,0L224.3,1.4z"/>
            
                <linearGradient id="path3334_2_" gradientUnits="userSpaceOnUse" x1="298.3234" y1="170.7083" x2="311.0691" y2="149.889" gradientTransform="matrix(-1 0 0 -1 505.5543 160.0374)">
                <stop  offset="0" style="stop-color:#DB1F27"/>
                <stop  offset="1" style="stop-color:#F05858"/>
            </linearGradient>
            <path id="path3334_1_" fill="url(#path3334_2_)" d="M198.9-16.1c0.8,0,1.4,0.1,2,0.5l28.4,16.4l0,0c-1.2-0.7-3-0.5-4.9,0.6
                l-22,12.7c-1,0.6-1.8,1.9-1.9,2.9c0,0.5,0.2,0.8,0.4,1l0,0L172.5,1.6c-1.2-0.3-0.8-2.9,1.2-4l22-12.7
                C196.9-15.8,198-16.1,198.9-16.1L198.9-16.1z"/>
        </g>
        <g id="g3290_1_" transform="translate(0,22.29976)">
            <path id="path2745_1_" fill="#172E55" d="M45.2,17.1l1.8,1l1.1,0.7l25.6,14.8l-0.5,3L44.8,20.1l0,0c-0.6-0.4-0.5-1.6,0.2-2.7
                C45.1,17.2,45.2,17.2,45.2,17.1L45.2,17.1L45.2,17.1z"/>
            <path id="path2734_1_" fill="#FFFFFF" d="M73.8,33.6v-7.2l24.9-15.1l2.5,2.7l-0.3,4.1L73.8,33.6z"/>
            <path id="path2738_1_" fill="#DAE6F5" d="M45.2,17.1v-6.7l28.6,16v7.2L45.2,17.1z"/>
            
                <linearGradient id="path2711_2_" gradientUnits="userSpaceOnUse" x1="176.3197" y1="148.2122" x2="151.6408" y2="170.8795" gradientTransform="matrix(-1 0 0 -1 250.5543 182.3369)">
                <stop  offset="0" style="stop-color:#172E55"/>
                <stop  offset="1" style="stop-color:#37C4EB"/>
            </linearGradient>
            <path id="path2711_1_" fill="url(#path2711_2_)" d="M96.8,10.4c3.6-2.1,6.6-0.8,6.6,2.8c0,3.6-3,8.3-6.6,10.4l-22,12.7
                c-1,0.6-1.8,0.3-1.9-0.7c0-1,0.8-2.3,1.8-2.9c0,0,0,0,0.1,0l22-12.7c1.6-1,2.9-3,2.9-4.6c0-1.6-1.3-2.2-2.9-1.2l-22,12.7
                c-1,0.6-1.8,0.3-1.9-0.7c0-1,0.8-2.3,1.8-2.9c0,0,0,0,0.1,0L96.8,10.4z"/>
            
                <linearGradient id="path2718_2_" gradientUnits="userSpaceOnUse" x1="170.8234" y1="183.9443" x2="183.5691" y2="163.125" gradientTransform="matrix(-1 0 0 -1 250.5543 182.3369)">
                <stop  offset="0" style="stop-color:#172E55"/>
                <stop  offset="1" style="stop-color:#37C4EB"/>
            </linearGradient>
            <path id="path2718_1_" fill="url(#path2718_2_)" d="M71.4-7.1c0.8,0,1.4,0.1,2,0.5l28.4,16.4l0,0c-1.2-0.7-3-0.5-4.9,0.6
                l-22,12.7c-1,0.6-1.8,1.9-1.9,2.9c0,0.5,0.2,0.8,0.4,1l0,0L45,10.6c-1.2-0.3-0.8-2.9,1.2-4L68.2-6C69.4-6.7,70.5-7,71.4-7.1
                L71.4-7.1z"/>
        </g>
        <g id="g3324_1_" transform="translate(-127.5)">
            <path id="path3292_1_" fill="#DB1F27" d="M172.7,26.1l1.8,1l1.1,0.7l25.6,14.8l-0.5,3l-28.5-16.5l0,0c-0.6-0.4-0.5-1.6,0.2-2.7
                C172.6,26.3,172.7,26.2,172.7,26.1C172.7,26.1,172.7,26.1,172.7,26.1L172.7,26.1z"/>
            <path id="path3294_1_" fill="#FFFFFF" d="M201.3,42.6v-7.2l24.9-15.1l2.5,2.7l-0.3,4.1L201.3,42.6z"/>
            <path id="path3296_1_" fill="#DAE6F5" d="M172.7,26.1v-6.7l28.6,16v7.2L172.7,26.1z"/>
            
                <linearGradient id="path3298_2_" gradientUnits="userSpaceOnUse" x1="303.8197" y1="161.4483" x2="279.1408" y2="184.1156" gradientTransform="matrix(-1 0 0 -1 505.5543 204.6367)">
                <stop  offset="0" style="stop-color:#DB1F27"/>
                <stop  offset="1" style="stop-color:#F05858"/>
            </linearGradient>
            <path id="path3298_1_" fill="url(#path3298_2_)" d="M224.3,19.5c3.6-2.1,6.6-0.8,6.6,2.8c0,3.6-3,8.3-6.6,10.4l-22,12.7
                c-1,0.6-1.8,0.3-1.9-0.7c0-1,0.8-2.3,1.8-2.9c0,0,0,0,0.1,0l22-12.7c1.6-1,2.9-3,2.9-4.6c0-1.6-1.3-2.2-2.9-1.2l-22,12.7
                c-1,0.6-1.8,0.3-1.9-0.7c0-1,0.8-2.3,1.8-2.9c0,0,0,0,0.1,0L224.3,19.5z"/>
            
                <linearGradient id="path3300_2_" gradientUnits="userSpaceOnUse" x1="298.3234" y1="197.1804" x2="311.0691" y2="176.3611" gradientTransform="matrix(-1 0 0 -1 505.5543 204.6367)">
                <stop  offset="0" style="stop-color:#DB1F27"/>
                <stop  offset="1" style="stop-color:#F05858"/>
            </linearGradient>
            <path id="path3300_1_" fill="url(#path3300_2_)" d="M198.9,2c0.8,0,1.4,0.1,2,0.5l28.4,16.4l0,0c-1.2-0.7-3-0.5-4.9,0.6l-22,12.7
                c-1,0.6-1.8,1.9-1.9,2.9c0,0.5,0.2,0.8,0.4,1l0,0l-28.3-16.4c-1.2-0.3-0.8-2.9,1.2-4l22-12.7C196.9,2.4,198,2,198.9,2L198.9,2z"
                />
        </g>
    </g>
</g>
<g id="g2149_3_" transform="translate(-59.53803,-17.91208)">
    <path id="rect2142_3_" fill="#37C4EB" d="M337,154.8c-7.2,0-13,5.8-13,13v19c0,7.2,5.8,13,13,13c7.2,0,13-5.8,13-13v-19
        C350,160.6,344.2,154.8,337,154.8z"/>
    <path id="path2145_3_" fill="#172E55" stroke="#172E55" stroke-width="8" stroke-linecap="round" stroke-linejoin="round" d="
        M337,177.3v34.3"/>
</g>
</svg>
</div>

</div>

</main>
