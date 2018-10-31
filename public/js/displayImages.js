



    var myVar;

    function myFunction() {
        myVar = setInterval(changeImage, 3000);
    }

    function changeImage() {

        var imageno = Math.floor(Math.random() * (4))+1;
        var imagesrc = 'img' + imageno;
        var newimageno = Math.floor(Math.random() * (36))+1;
        var imagepath = "../images/fchamgang " + newimageno + ".jpeg";
        console.log(imagesrc + "  " + imagepath);
       document.getElementById("demo").innerHTML = imagesrc+"  "+imagepath;
       document.getElementById(imagesrc).src = imagepath;
    }



