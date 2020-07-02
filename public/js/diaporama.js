//le diaporama
class Diaporama {
    constructor(conteneurDiaporama, imageArray, texteDiapo) {
        this.conteneurDiaporama = conteneurDiaporama;
        this.imageArray = imageArray;

        this.slideInterval = "";

        this.i = this.imageArray.length;
    }

    nextImage() {
        console.log('nextimage', this.slideInterval)
        if (this.i < this.imageArray.length) {
            ++this.i;
        } else {
            this.i = 1;
        }
        this.conteneurDiaporama.innerHTML = "<img src=" + this.imageArray[this.i - 1] + ".jpg>";
    }

    playImage() {
        this.slideInterval = setInterval(this.nextImage.bind(this), 4000);
        console.log('this.slideInterval = ', this.slideInterval)
    }

}
//Fin de la classe diapo

//Debut Diapo
var images = ['public/images/image6', 'public/images/image7', 'public/images/image4'];

let monDiaporama = new Diaporama( // objet diapo
    document.getElementById("conteneur"),
    images
);

monDiaporama.playImage();
//Fin Diapo