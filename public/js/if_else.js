/*// ignore these lines for now
// just know that the variable 'color' will end up with a random value from the colors array*/
var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
var color = colors[Math.floor(Math.random()*colors.length)];

var favorite = 'yellow'; 
/*// todo, change this to your favorite color from the list

// todo: Create a block of if/else statements to check for every color except indigo and violet.
// todo: When a color is encountered log a message that tells the color, and an object of that color.
//       Example: Blue is the color of the sky.

// todo: Have a final else that will catch indigo and violet.
*/

switch (color) {
	case 'red':
	console.log(color+" is my least favorite color");
	break;

	case 'orange':
	console.log(color + " reminds me of sorbet");
	break;

	case 'yellow':
	console.log(color + " is my favorite color");
	break;

	case 'green':
	console.log(color + "reminds me of greed and money");
	break;

	case 'blue':
	console.log(color + "is another stupid color");
	break;

	default:
	console.log("I do not know " + color);
}

/*// todo: In the else, log: I do not know anything by that color.

// todo: Using the ternary operator, conditionally log a statement that
//       says whether the random color matches your favorite color.*/

color=(color==favorite) ? console.log(color+" is my favorite color") : console.log("");