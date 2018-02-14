<!DOCTYPE html>
<html>
	<head>
		<title>HWD</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Archivo+Black|Berkshire+Swash|Pacifico|Poiret+One|Shadows+Into+Light" rel="stylesheet">
	</head>
	<body>
	<div id="wrapper">
		<div id="header">
			<span class="manifest">
				1. The primary objective is the end user. Forget about money - it corrupts everything and despite what they say money doesn't care about innovation. Right. 
				2. Make it personal. You should care. Leverage your own interests. What do you gain? Punch yourself hard in the face if you just said money.
				3. Ignore cost of development. Favor making the right long term decisions. We can't keep wasting our time making up for short term profit thinking.
				4. Explore, philosophize, rationalize. Peek into the dark corners. Be philosophical. And then come up with an explanation. In that order.
				5. Be uncompromisingly ambitious. Think even bigger. Swim with the sharks. Drown a little each day. We need new ideas.
				6. Build it three times. Something new will arise in the process, if nothing else you will get a pretty good idea about the cost of your own bad habits.
				7. Forget about fitting in. It is a waste of time and energy. Sheep fit in. Are you a sheep? I didn't think so.
				8. Meditate. Or smoke weed. Lower your brain frequency to lessen resistance. Let go for a while to get a better grip.
				9. Get lost in details. Take it all the way to the extreme. Out there on the edge there is a new idea waiting to be discovered.
				10. Restructure, refine, reimplement. Learn from new experiences. Deal with your past mistakes. Understanding will sink in.
				11. Gain experience through insane experiments. Waste your time building something completely useless just for fun. You will learn something you didn't expect.
				12. Never listen to guys/girls in suits. No comment needed.
				13. Share everything. Sharing is selfish caring. You give, you get. It really is that simple. (But it doesn't work if you only share shit)
				14. Feel free to curse. Be passionate. Consider it a spice. Just don't overdo it. And remember to be polite now and then.
				15. Do it anyway. So someone said you shouldn't do it? What the hell do they know. It is likely they are just scared. Don't be scared.
				16. Bring patience and expect hard work. Only with endurance will you prevail. Don't pretend everything is a piece of cake, but eat it as if it was.
				17. Make yourself proud. Because in the end you are the one staring back from the mirror. If something makes you embarrassed, you should stop doing it right now.
			</span>	
		</div>
		<div id="main">
			<div class="container">
				<h1 id="txt1">Holistic</h1>
				<h1 id="txt2">Web</h1>
				<h1 id="txt3">Development</h1>
			</div>	
		</div>
		<div id="footer">
			<span class="manifest">
				1. The primary objective is the end user. Forget about money - it corrupts everything and despite what they say money doesn't care about innovation. Right. 
				2. Make it personal. You should care. Leverage your own interests. What do you gain? Punch yourself hard in the face if you just said money.
				3. Ignore cost of development. Favor making the right long term decisions. We can't keep wasting our time making up for short term profit thinking.
				4. Explore, philosophize, rationalize. Peek into the dark corners. Be philosophical. And then come up with an explanation. In that order.
				5. Be uncompromisingly ambitious. Think even bigger. Swim with the sharks. Drown a little each day. We need new ideas.
				6. Build it three times. Something new will arise in the process, if nothing else you will get a pretty good idea about the cost of your own bad habits.
				7. Forget about fitting in. It is a waste of time and energy. Sheep fit in. Are you a sheep? I didn't think so.
				8. Meditate. Or smoke weed. Lower your brain frequency to lessen resistance. Let go for a while to get a better grip.
				9. Get lost in details. Take it all the way to the extreme. Out there on the edge there is a new idea waiting to be discovered.
				10. Restructure, refine, reimplement. Learn from new experiences. Deal with your past mistakes. Understanding will sink in.
				11. Gain experience through insane experiments. Waste your time building something completely useless just for fun. You will learn something you didn't expect.
				12. Never listen to guys/girls in suits. No comment needed.
				13. Share everything. Sharing is selfish caring. You give, you get. It really is that simple. (But it doesn't work if you only share shit)
				14. Feel free to curse. Be passionate. Consider it a spice. Just don't overdo it. And remember to be polite now and then.
				15. Do it anyway. So someone said you shouldn't do it? What the hell do they know. It is likely they are just scared. Don't be scared.
				16. Bring patience and expect hard work. Only with endurance will you prevail. Don't pretend everything is a piece of cake, but eat it as if it was.
				17. Make yourself proud. Because in the end you are the one staring back from the mirror. If something makes you embarrassed, you should stop doing it right now.
			</span>	
		</div>
	</div>
	</body>
</html>

<style>
	html{
		min-height:100%;/* make sure it is at least as tall as the viewport */
	}
	body{
		height:100%; /* force the BODY element to match the height of the HTML element */
		margin: 0px; /*remove standard 8px margin of body*/
	}
	h1 {
		display: inline-block;
		vertical-align: middle;
		font-size: 6vw; /* use 'vw' measure to change font-size according to browser-window size*/
	}
	.manifest {
		font-family: 'Poiret One', cursive;
		font-size: 1.2em;
	}
	.container {
		position: absolute;
		top: 50%;
		left: 50%;
		margin-right: -50%; /* to compensate for taking up half the space with 'left: 50%' */
		transform: translate(-50%, -50%); /* moving the element up and left by half it own width */
		animation-name: fadeUp;
		animation-duration: 4s;
	}
	#wrapper{
		position:absolute;
		top:0;
		bottom:0;
		left:0;
		right:0;
		overflow:hidden;
	}
	#header {
		height: 200px;
		background: #48AAA8;
		overflow:hidden;
	}
	#main {
		height: calc(100% - (200px + 200px)); /* makes it fill out remaining space between header and footer */
		background: #EF6D4F;
		position: relative;
	}
	#footer {
		bottom: 0px;
		height: 200px;
		background: #f8c755;
	}
	#txt1{
		color: black;
		font-family: 'Abril Fatface', cursive;
		text-align: right;
	}
	#txt1:hover{
		animation-name: fontChange;
		animation-duration: 1s;
		animation-iteration-count: 40;
		animation-timing-function: linear;
	}
	#txt2 {
		color: white;
		font-family: 'Pacifico', cursive;
		text-align: center;
	}
	#txt2:hover {
		animation-name: fontChange2;
		animation-duration: 1.8s;
		animation-iteration-count: 40;
		animation-timing-function: linear;
	}
	#txt3 {
		color: black;
		font-family: 'Archivo Black', sans-serif;
		text-align: left;
	}
	#txt3:hover {
		animation-name: fontChange;
		animation-duration: 1s;
		animation-iteration-count: 40;
		animation-timing-function: linear;
	}

	/* animation */
	@keyframes fadeUp {
		0% {opacity: 0;}
		100% {opacity: 1;}
	}
	@keyframes animate2 {
		0% {color: black;}
		100% {color: black;}
	}

	@keyframes fontChange {
		0% {font-family: 'Abril Fatface', cursive;}
		25% {font-family: 'Berkshire Swash', cursive;}
		50% {font-family: 'Poiret One', cursive;}
		75% {font-family: 'Pacifico', cursive;}
	}
	@keyframes fontChange2 {
		0% {font-family: 'Shadows Into Light', cursive;}
		25% {font-family: 'Pacifico', cursive;}
		50% {font-family: 'Archivo Black', sans-serif;}
		75% {font-family: 'Poiret One', cursive;}
	}
</style>