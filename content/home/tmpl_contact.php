<?php
/*
 * Creata de Marius Trifu
 * Pentru intrebari trifumarius01@gmail.com  * 
 */


defined("autorizare") or die("Nu aveti autorizare");
?>
<div class="container-fluid row" style="margin-top: 60px; margin-bottom: 20px; text-align: center;">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-bottom: 40px;">
        <h1>CONTACT</h1>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <div id="casuta_contact_persoana" class="card" style="display:inline-block;height: 155px;padding: 15px">
            <img src="<?php echo _SITE_CSS . "img/Iliescu_Andrei.jpg"; ?>" style="width: 100px;height: 100px;float: left;">
            <div style="text-align:left;margin-left: 0px;float: right">
                <p style="margin-bottom:0px;margin-top:15px;font-size: 25px;">Iliescu Mihai</p>
                <p style="margin-bottom:0px;margin-top:10px;font-size: 15px;">Project Manager</p>
                <p id="email_about" style="margin-bottom:0px;margin-top:5px;font-size: 12px;">mihai.iliescu@lsacbucuresti.ro</p>
                <p style="margin-bottom:0px;margin-top:0px;font-size: 12px;">+40 734 109 445</p>
            </div>
        </div>

    </div>
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8" style="margin: 0 auto">
        <div class="card" style="width: 100%">
            <div id="email_contact" style="text-align: left;"><i class="fa fa-envelope-o fa-2x"></i> <span style="font-size: 30px;"> contact @ lsacbucuresti.ro</span></div>
            <form action="javascript:void(0);" id="contact_form">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%;">
                    <label for="nume" class="mdl-textfield__label" style="color:#37C4EC;"><?php echo $limba == "en" ? "Name" : "Nume"; ?><span class="obligatoriu">*</span></label>
                    <input style="color:black" type="text" name="nume" id="nume" class="mdl-textfield__input" >
                    <div class="mdl-tooltip" data-mdl-for="nume" style="font-size:14px;"><?php echo $limba == "en" ? "Complet name" : "Numele complet"; ?></div>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%;">
                    <label for="email" class="mdl-textfield__label" style="color:#37C4EC;"><?php echo $limba == "en" ? "Email" : "Email"; ?><span class="obligatoriu">*</span></label>
                    <input style="color:black" type="email" name="email" id="email" class="mdl-textfield__input" >
                    <div class="mdl-tooltip" data-mdl-for="email" style="font-size:14px;"><?php echo $limba == "en" ? "Your Email adress" : "Email-ul dumneavoastra"; ?></div>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%;">
                    <label for="comentariu" class="mdl-textfield__label" style="color:#37C4EC;"><?php echo $limba == "en" ? "Mesaj" : "Mesaj"; ?><span class="obligatoriu">*</span></label>
                    <textarea class="mdl-textfield__input" name="comentariu" id="comentariu" rows="3"></textarea>
                    <div class="mdl-tooltip" data-mdl-for="comentariu" style="font-size:14px;"><?php echo $limba == "en" ? "Enter your questions" : "Scrieti intrebarile"; ?></div>
                </div>
                <button id="submit_contact" style="background: #00b4e5" type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored"><?php echo $limba == "en" ? "Send" : "Trimite"; ?></button>
            </form>
        </div>
    </div>

    <div style="margin-left:1%;width: 25%" class="hide-on-mobile">
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

