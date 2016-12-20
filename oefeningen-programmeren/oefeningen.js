// Verschillende soorten variabelen
var aantalStudenten = 5;
var aantalDocenten = 0;
var bankSaldo = 19.21;
var aanwezig = true;
var character = "t";
var string = "Dit is een verzameling van characters";
var studentenNummers = [1,2,3,4,5];
var studentenNamen = ["Jonas", "Kevin", "HyeJin", "Shqiponje", "Tessa"];

// Bewerkingen
var langeString = string + character;
var mensenIn304 = aantalStudenten + aantalDocenten;
console.log(string + character);

// Control Flow
if ((aantalStudenten == 5 && aantalDocenten == 1) || (aanwezig)) {
  console.log("Joepie er is zes man aanwezig!");
} else if( aantalStudenten == 4 ) {
  console.log("Joepie er is vier man aanwezig!");
} else {
  console.log("Er is een ander aantal studenten aanwezig.");
}

// Switch
var dag = "feestdag";

switch (dag) {
  case "maandag":
    console.log("Vandaag is het maandag!");
    break;
  case "dinsdag":
    console.log("Vandaag is het dinsdag!");
    break;
  case "woensdag":
    console.log("Vandaag is het woensdag!");
    break;
  case "donderdag":
    console.log("Vandaag is het donderdag!");
    break;
  case "vrijdag":
    console.log("Vandaag is het vrijdag!");
    break;
  default:
    console.log("Vandaag is het weekend");
}

// for (var i = 0; i < studentenNamen.length; i++) {
//   console.log("Student "+ (i+1) + " is " + studentenNamen[i]);
// }


// Veralgemeende functie met een abstracte beschrijving
function somOp(beschrijving, verzameling) {
  for (var i = 0; i < verzameling.length; i++) {
    console.log(beschrijving + " " + (i+1) + " is " + verzameling[i]);
  }
}

somOp("Student", studentenNamen);

var projectNamen = ["Bakker Website", "Dj logo", "Poster design"];
somOp("Project", projectNamen);

function changeContent() {
  var element = document.querySelector("#item");
  element.innerHTML = "<p>Some other content</p>"
}

$( document ).ready(function() {
    el = $("#item");
    //el.addClass("active");
    console.log(el);
});
