



    var myVar;
    var imagesrc = '';
    var imagepath = '';
    var ctr = 0;
    var pagevar = 5;

$(document).ready(function() {
    setInterval(function () {

        changeImage();
    },4000);

});
    function changeText() {


        document.getElementById("text1").innerHTML = text1[ctr2];
    }

    function changeImage() {
        text14 = "Latest Technology";
        text11 = "Reduce Pain";
        text12 = "Natural Ingredients";
        text13 = "Reduce Stress";
        text24 = "Polariztion and Micro-Encapsulation";
        text21 = "Chronic, arthritis and cancer treatment pain relief";
        text22 = "100% Vegan, no mineral oils, dypes, sulfates or propylene glycol"
        text23 = "Triggers the release of pleasure hormones that relax the mind";
        ctr = ctr+1;
        if (ctr>4) {
            ctr=1;
        }

        pagevar = pagevar+1;
        if (pagevar>36) {
            pagevar=1;
        }

        document.getElementById("text1").innerHTML = text1+ctr;
        document.getElementById("text2").innerHTML = text2+ctr;
        //var imageno = Math.floor(Math.random() * (4))+1;

        imagesrc = 'img' + ctr;

        imagepath = "../images/fchamgang " + pagevar + ".jpeg";

        document.getElementById(imagesrc).src = imagepath;
    }



