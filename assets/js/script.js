var image = document.getElementById("house-image");
var position = 0;
var images = ["assets/images/Luna-Lovegood.png", "assets/images/Harry-Potter.png", "assets/images/Cedric-Diggory.png", "assets/images/Draco-Malfoy.png"]

function nextImage() {
    if (++position >= images.length){
        position = 0;
    }
    image.src = images[position];
}
setInterval(nextImage, 4000);