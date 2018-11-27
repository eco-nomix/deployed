



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
        text1[4] = "Latest Technology";
        text1[1] = "Reduce Pain";
        text1[2] = "Natural Ingredients";
        text1[3] = "Reduce Stress";
        text2[4] = "Polariztion and Micro-Encapsulation";
        text2[1] = "Chronic, arthritis and cancer treatment pain relief";
        text2[2] = "100% Vegan, no mineral oils, dypes, sulfates or propylene glycol"
        text2[3] = "Triggers the release of pleasure hormones that relax the mind";
        ctr = ctr+1;
        if (ctr>4) {
            ctr=1;
        }

        pagevar = pagevar+1;
        if (pagevar>36) {
            pagevar=1;
        }

        $("#text1").text(text1[ctr]);
        $("#text2").text(text2[ctr]);
      

        //var imageno = Math.floor(Math.random() * (4))+1;

        imagesrc = 'img' + ctr;

        imagepath = "../images/fchamgang " + pagevar + ".jpeg";

        document.getElementById(imagesrc).src = imagepath;
    }



