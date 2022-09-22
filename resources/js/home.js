console.log('This is HOME')

/* Proper way to individualy load image */
import theImageSrc from '@/images/trinary-dark-theme.gif'

function Add_img() {
    var theImage = document.createElement('img');
    theImage.src = theImageSrc;
    document.getElementById('test').appendChild(theImage);
}
Add_img();