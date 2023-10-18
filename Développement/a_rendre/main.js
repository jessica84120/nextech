// Afficher OK dans la console.
console.log("OK");

"use strict"
console.log(3 == 3 ) ; //true (egalité simple)
console.log(3 != 3 ) ; //false (non égalité)
console.log(3 < 3 ) ; // false
console.log(3 <= 3 ) ; //true
//egalité stricte
console.log(3 == "3" ) ; // true js converti le nb en cdc
//js donne priorité aux cdc si on compare une cdc avec autre chose
console.log(3 === 3 ) ; // false (égalité stricte) pas de conversion auto
// ici un number n'est pas converti