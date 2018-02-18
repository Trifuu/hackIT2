/* 
 * Creata de Marius Trifu
 * Pentru intrebari trifumarius01@gmail.com  * 
 */

$(document).ready(function () {



    var n=[];
    n.push($(".view_numar1").offset().top+$(".view_numar1").height()-50);
    n.push($(".view_numar2").offset().top+$(".view_numar2").height()-50);
    n.push($(".view_numar3").offset().top+$(".view_numar3").height()-50);
    n.push($(".view_numar4").offset().top+$(".view_numar4").height()-50);
    console.log(n[0]);
    console.log(n[3]);
    var numere=[true,true,true,true];
    $(window).scroll(function (event) {
        var scroll = $(window).scrollTop();
        if(numere[0] && (scroll+screen.height)>n[0]){
            numere[0]=false;
            var participanti = 0;
            function increment(max) {
                if (participanti == max) {
                    // stop when it hits 300
                    window.clearInterval(id);
                    return;
                }
                participanti++;
                $("#participanti").text(participanti);
            }
            var id = window.setInterval(function(){increment(60);}, 50);
        }
        if(numere[1] && (scroll+screen.height)>n[1]){
            numere[1]=false;
            var ore = 0;
            function increment2(max) {
                if (ore == max) {
                    // stop when it hits 300
                    window.clearInterval(id2);
                    return;
                }
                ore++;
                $("#ore").text(ore);
            }
            var id2 = window.setInterval(function(){increment2(24);}, 125);
        }
        if(numere[2] && (scroll+screen.height)>n[2]){
            numere[2]=false;
            var echipe = 0;
            function increment3(max) {
                if (echipe == max) {
                    // stop when it hits 300
                    window.clearInterval(id2);
                    return;
                }
                echipe++;
                $("#echipe").text(echipe);
            }
            var id2 = window.setInterval(function(){increment3(20);}, 150);
        }
        if(numere[3] && (scroll+screen.height)>n[3]){
            numere[3]=false;
            var premii = 0;
            function increment4(max) {
                if (premii == max) {
                    // stop when it hits 300
                    window.clearInterval(id2);
                    return; 
                }
                premii++;
                $("#castigatori").text(premii);
            }
            var id2 = window.setInterval(function(){increment4(3);}, 1000);
        }
    });
    if (screen.width < 570) {
        $("#data").css({"margin-top": "20px", "height": "70px"});
        $("#uipath div").css({"margin-top": "40px"});
        $("#uipath img").css({"margin-bottom": "0px"});
        $("#locatia").css({"margin-top": "30px", "height": "100px"});
    }
    if (screen.width < 330) {
        $("#logo_lsac_about").css({"width": (screen.width-30)+"px", "height": (screen.width-30)+"px"});
    }
    if (screen.width < 430) {
        $("#img1").css({"width": (screen.width-30)+"px"});
    }
    if (screen.width < 380) {
        $("#img2").css({"width": (screen.width-30)+"px"});
    }
    if (screen.width < 375) {
        $("#img3").css({"width": (screen.width-30)+"px"});
    }
    if (screen.width < 385) {
        $(".organizatori_casute").css({"width": (screen.width-30)+"px"});
    }

});