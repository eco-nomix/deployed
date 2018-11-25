



    var myVar;
    var imagesrc = '';
    var imagepath = '';
    var ctr = 0;
    var pagevar = 5;

$(document).ready(function() {
    setInterval(function () {
        console.log('it works' + new Date());
        changeImage();
    },2000);
});


    function changeImage() {
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



