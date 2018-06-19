<!DOCTYPE html>
<!--
Page for Salmon River Final
-->
<html lang="en-us">
    <head>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/salmon/modules/head.php';?>
    </head>
    <body>
        <div>
            <header>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/salmon/modules/header.php';?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/salmon/modules/navigation.php';?>
            </header>
            <main>
			<h1>Contact Form</h1>
                <content>
					<h2>Send Us An Email</h2>
					<p>Have a question, comment or concern? Please fill out the below contact form so 
					we can help! Thank you and we look forward to helping soon!</p>
					<form action="contactformsend.php" method="post" enctype="text/plain">
					<fieldset>
						<legend>Send Us An Email</legend>
						<label for="name">Name:</label><br />
						<input type="text" name="name" placeholder="Your Name" /><br />
						<label for="email">E-mail Address:</label><br />
						<input type="email" name="email" placeholder="Your E-mail Address" /><br />
						<label for="comment">Comment:</label><br />
						<textarea type="text" name="comment" placeholder="Your comment: 70 characters or less" maxlength="70"></textarea>
						<br />
						<input type="submit" name="submit" value="Send" />
						<input type="reset" value="Reset" />
					</fieldset>
					</form>
				</content>
				<content>
					<h3>Address:</h3>
					<p>777 River Drive</p>
					<p>Middle of No Where, Idaho 39384</p>
					<br />
					<h3>Phone:</h3>
					<p>(888) 888-8888</p>
					<br />
					<h3>Business Hours:</h3>
					<p>Monday-Friday: 8am-5pm</p>
					<p>Saturdays: 7am-9pm</p>
					<p>Sundays: Closed</p>
				</content>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6101342.636327967!2d12.256895447280378!3d22.120356432425357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13883b64fb267151%3A0xd6406bdc582d7390!2sSahara+Desert!5e0!3m2!1sen!2sus!4v1469151957253" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </main>
            <footer>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/salmon/modules/footer.php';?>
            </footer>
        </div>
    </body>
</html>