<!DOCTYPE html>
<!--
Home page for famrecipe.org.
-->
<html lang="en-us">
    <head>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/head.php';?>
    </head>
    <body id="home">
        <div>
            <header>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header.php';?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/navigation.php';?>
            </header>
            <main class="pagecenter">
                <div>
                    <figure>
						<img src="imagefiles/homepage.jpg" alt="Photograph of a grandmother, mother, and child cooking together" class="center" id="hp"/>
						<br />
						<figcaption class="hpcaption">Handed down family recipes help strengthen families across generations!</figcaption>
					</figure>
					<hgroup>
						<h2 class="hpcaption">We believe that the center of every home is the kitchen. It is in this part
						of a home that grandparents, parents, children, and grandchildren come together to laugh, learn, and love. 
						Start today to strengthen your family ties no matter how spread out your family is. Simply create your profile
						and start a family cookbook for your family or join one a member of your family has already created. You can 
						also find many amazing recipes from families around the world. Have fun!</h2>
					</hgroup>
                </div>
				<div>
				<a href="cooking-page.php">
					<figure>
						<img src="imagefiles/getcooking.png" alt="Get Cooking" />
						<br />
						<figcaption>In a rush to make dinner? Click here to find the perfect recipe!</figcaption>
					</figure>
					<hgroup>
						<h2>Here you can browse through recipes shared from families across the world.
						every culture, occasion, and type of dish.</h2>
					</hgroup>
				</a>
				<a href="tools-tutorials.php">
					<figure>
						<img src="imagefiles/howtos.jpg" alt="How-Tos" />
						<br />
						<figcaption>Need some quick tips or help converting units? Click here to get all of the help you will need!</figcaption>
					</figure>
					<hgroup>
						<h2>Here you can find learn the secrets to making your cooking look, smell, and taste like a professional
						chef cooked it. You can also take advantage of the conversion tool to make the math easy.</h2>
					</hgroup>
				</a>
				</div>
				<div>
				<a href="ourfavorites.php">
					<figure>
						<img src="imagefiles/ourfavorites.png" alt="A few of our favorites" />
						<br />
						<figcaption>Not sure what to cook tonight? Here are  few of our favorites!</figcaption>
					</figure>
					<hgroup>
						<h2>Here you will find only the top-rated recipes which have made it to our favorites category.
						This will surely save you time and help you find what you need to impress.</h2>
					</hgroup>
				</a>
				<a href="account.php">
					<figure>
						<img src="imagefiles/signin.png" alt="Photograph of a grandmother, mother, and child cooking together" />
						<br />
						<figcaption>What to create your own family cookbook and group? Here is where you can create your 
						family cookbook that you can hand down and access from any device when you need it.</figcaption>
					</figure>
					<hgroup>
						<h2>Here you will be able to organize or join your family group and start creating your online
						cookbook.</h2>
					</hgroup>
				</a>
				</div>
            </main>
            <footer>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php';?>
            </footer>
        </div>
    </body>
</html>