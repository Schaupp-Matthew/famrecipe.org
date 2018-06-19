<!DOCTYPE html>
<!--
Page for Salmon River Final
-->
<html lang="en-us">
    <head>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/salmon/modules/head.php';?>
<script type="text/javascript">
function book() {
	var alert = "We are unable to process your request right now. Sorry and have a good day.";
	window.alert(alert);
}
</script>
    </head>
    <body>
        <div>
            <header>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/salmon/modules/header.php';?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/salmon/modules/navigation.php';?>
            </header>
            <main>
			<h1>Adventures</h1>
                <content>
					<h2>White Water Rafting Adventures</h2>
					<h4>The River of No Return!</h4>
						<iframe width="560" height="315" src="https://www.youtube.com/embed/Wi_qRFFNo_s" frameborder="0" allowfullscreen></iframe>
						<p>Join us for a day on the river full of excitement, laughs, and fun! You can enjoy
						this adventure by yourself or with a group. The day will start with important pre-trip
						safety training and instructions followed by an amazing guided trip down the beautiful Salmon River! 
						<a href="guideone.php">Your world class guide will be Bob!</a>
						On your journey you will travel approximately 10 miles while confronting some of the most exciting 
						class of rapids in Idaho. All of the rapids leading to the end of your journey help prepare you for 
						the final challenge--a six foot waterfall into a wide, calm swimming area where you can swim, relax, and 
						picnic the rest of the day! Why wait! Go ahead and book now!</p>
						<p>Price:</p>
						<p>Group of 6-8 people: $300 for 6 hours</p>
						<p>Individual price: $50 per person for 6 hours</p>
						<button type="button" onClick="book()">Book Now!</button>
				</content>
				<content>
					<h2>River Fishing Adventures</h2>
					<h4>Steelhead Trout and Sockeye Salmon!</h4>
						<iframe width="560" height="315" src="https://www.youtube.com/embed/P24soE3zUZs" frameborder="0" allowfullscreen></iframe>
						<p>Join our professional angler for a day on the river where you will have the chance to catch some of the 
						most beautiful and tasty fresh water fish in the area. You don't want to miss the thrill of your rod bent in half 
						as you reel in a monster steelhead or sockeye! We have the gear, and we know where the fish are and what they are biting!
						<a href="guidetwo.php">Your world class guide will be Hailey!</a>
						Why wait! Go ahead and book now!</p>
						<p>Price:</p>
						<p>Group of 6-8 people: $200 for 6 hours</p>
						<p>Individual price: $35 per person for 6 hours</p>
						<button type="button" onClick="book()">Book Now!</button>
				</content>
				<content>
					<h2>Stand Up Paddle Boarding Adventures</h2>
					<h4>Surfs Up!</h4>
						<iframe width="560" height="315" src="https://www.youtube.com/embed/VFA_nhTn1bk" frameborder="0" allowfullscreen></iframe>
						<p>We have stand up paddle board trips for both beginners and the experienced. <b>Warning!</b> Only those who are very experienced
						should attempt our Expert Stand Up Paddle Board Trip. This more challenging mode of travel down the river is sure to give you 
						the ride of your life. Your day will start with some training and instruction followed by some practice time on a calm part of the river. 
						Then the fun begins as you make the 10 mile journey down the river! 
						<a href="guidethree.php">Your world class guide will be Dan!</a>
						Why wait! Go ahead and book now!</p>
						<p>Price:</p>
						<p>Group of 6-8 people: $300 for 6 hours</p>
						<p>Individual price: $50 per person for 6 hours</p>
						<button type="button" onClick="book()">Book Now!</button>
				</content>
            </main>
            <footer>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/salmon/modules/footer.php';?>
            </footer>
        </div>
    </body>
</html>