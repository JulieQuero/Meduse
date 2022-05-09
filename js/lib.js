// set up text to print, each item in array is new line

var aText = new Array(
    "Vous allez découvrir...un secret...",
    "Vos choix ont une importance capitale pour la suite de l'histoire...",
    "Ne choisissez pas par hasard...",
    "Réfléchissez bien avant d'agir...",
    "Qui est coupable ?",
    );
    var iSpeed = 85; // time delay of print out
    var iIndex = 0; // start printing array at this posision
    var iScrollAt = 20; // start scrolling up at this many lines
    var iTextPos = 0; // initialise text position
    var sContents = ''; // initialise contents variable
    var iRow; // initialise current row
    var aText =aText;
    var destination=destination;
    var iArrLength = aText[0].length; // the length of the text array 


    function typewriter()
    {
    
     sContents =  ' ';
     iRow = Math.max(0, iIndex-iScrollAt);
     var destination = document.getElementById("typedtext");
     
     while ( iRow < iIndex ) {
      sContents += aText[iRow++] + '<br />';
     }
     destination.innerHTML = sContents + aText[iIndex].substring(0, iTextPos);
     if ( iTextPos++ == iArrLength ) {
      iTextPos = 0;
      iIndex++;
      if ( iIndex != aText.length ) {
       iArrLength = aText[iIndex].length;
       setTimeout("typewriter()", 500);
      }
     } else {
      setTimeout("typewriter()", iSpeed);
     }
    }
    typewriter();