//image switch

let myImage = document.querySelector('img');

myImage.onclick = function() {
  let mySrc = myImage.getAttribute('src');
  if(mySrc === 'images/apple1.png') {
    myImage.setAttribute ('src','images/apple2.jpg');
  } else {
    myImage.setAttribute ('src','images/apple1.png');
  }
}

