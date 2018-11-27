



    var myVar;
    var imagesrc = '';
    var imagepath = '';
    var ctr = 0;
    var pagevar = 5;

$(document).ready(function() {
    setInterval(function () {

        changeImage();
    },2000);
    setInterval(function () {

        changeText();
    },4000);
});
    function changeText() {
        text1[1] = "Latest Technology";
        text1[2] = "Reduce Pain";
        text1[3] = "Natural Ingredients";
        text1[4] = "Reduce Stress";
        ctr2 = ctr2+1;
        if (ctr2>4) {
            ctr2=1;
        }
     
        document.getElementById("text1").innerHTML = text1[ctr2];
    }

    function changeImage() {
        text1[1] = "Latest Technology";
        text1[2] = "Reduce Pain";
        text1[3] = "Natural Ingredients";
        text1[4] = "Reduce Stress";

        ctr = ctr+1;
        if (ctr>4) {
            ctr=1;
        }

        pagevar = pagevar+1;
        if (pagevar>36) {
            pagevar=1;
        }


        //var imageno = Math.floor(Math.random() * (4))+1;

        imagesrc = 'img' + ctr;

        imagepath = "../images/fchamgang " + pagevar + ".jpeg";

        document.getElementById(imagesrc).src = imagepath;
    }



