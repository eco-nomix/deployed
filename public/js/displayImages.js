



    var myVar;
    var ctr = 0;

$(document).ready(function() {
    function myFunction() {
        myVar = setInterval(changeImage, 3000);
    }
});

$(document).ready(function(){
    function changeImage() {
        ctr = ctr+1;
        if (ctr>4) {
            ctr=1;
        }
        //var imageno = Math.floor(Math.random() * (4))+1;
        var imageno = ctr;
        var imagesrc = 'img' + imageno;
        var newimageno = Math.floor(Math.random() * (36))+1;
        var imagepath = "../images/fchamgang " + newimageno + ".jpeg";
        console.log(imagesrc + "  " + imagepath);
       document.getElementById("demo").innerHTML = imagesrc+"  "+imagepath;
       document.getElementById(imagesrc).src = imagepath;
    }



