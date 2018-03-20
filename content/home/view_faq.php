<?php

/*
 * Creata de Marius Trifu
 * Pentru intrebari trifumarius01@gmail.com  * 
 */



defined("autorizare") or die("Nu aveti autorizare");


$js[] = "app/home/faq.js";

$title_app_title = "FAQ";

$ro=["Pot să mă înscriu la HackITall dacă nu am mai participat niciodată la un hackathon?",
    "Cu siguranță. Încurajăm toți studenții să se înscrie și să trăiască pentru prima oară această experiență!",
    "Trebuie să plătesc vreo taxă de înscriere?",
    "Înregistrarea este gratuită!",
    "Care este structura unei echipe?",
    "O echipă este formată din 3 membri, toți studenți la o facultate de profil tehnic.",
    "Cum sunt selectate echipele?",
    "Echipele participante vor fi alese de către sponsorul nostru principal, Avira.",
    "Cine este juriul hackathon-ului?",
    "Juriul va fi constituit din membri competenți, angajați în cadrul companiei Avira.",
    "Va trebui să folosesc doar anumite limbaje de programare?",
    "Nu există restricții în ceea ce privește limbajele de programare folosite în cadrul concursului.",
    "Trebuie să vin cu laptop-ul meu?",
    "Da, fiecare membru al echipei trebuie să vină cu propriul calculator sau laptop.",
    "Ne este asigurată mâncarea pe durata concursului?",
    "Da, mâncarea și băutura sunt asigurate de echipa de organizare.",
    "Avem conexiune la internet?",
    "Da, conexiunea la Internet este asigurată de noi!",
    "Cât durează competiția?",
    "Competiția durează 24 de ore de coding, urmate de o scurtă prezentare a aplicației realizate de fiecare echipă, perioada de jurizare și premiere - aproximativ 26 de ore.",
    "Ce se întâmplă cu proiectul realizat de echipa mea după competiție?",
    "Proiectul aparține în totalitate echipei."];
$en=["Can i register to HackITall, even if this would be my first hackathon?",
    'Of course, we encourage you to register, because "You learn by doing."',
    "Do I have to pay a registration fee to participate?",
    "No registration fee is required.",
    "What is the structure of a team?",
    "A team consists of 3 students enrolled to a faculty of technic profile in Bucharest",
    "How are teams selected?",
    "The participating teams are selected by the sponsor of the event: Avira.",
    "Who is the jury?",
    "The jury consists of employees of Avira - the main sponsor of the event.",
    "Do we have to use certain programming languages?",
    "There are no programming language restrictions.",
    "Do I have to come up with my own laptop/ computer?",
    "Yes, every team member comes with his own laptop or computer.",
    "Do I have to buy food on my own during the hackathon?",
    "Meals and drinks are provided by the organizing team.",
    "Will we have internet connection?",
    "Yes, the internet connection is provided by us!",
    "How long does the competition last?",
    "The competition is represented by 24 hours of coding, after which each team presents its application and the jury decides the winning teams.",
    "What happens with my project after the competition?",
    "The project belongs entirely to the team and it is up to you how you use it further."];
if($limba=="en"){
    $mesaj=$en;
}else{
    $mesaj=$ro;
}

$content = _ROOT_CONTENT . $page . "/tmpl_faq.php";