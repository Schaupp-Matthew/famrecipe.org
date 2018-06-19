<!DOCTYPE html>
<!--
Content page for famrecipe.org.
-->
<html lang="en-us">
    <head>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/head.php';?>
    </head>
    <body>
        <div>
            <header>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header.php';?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/navigation.php';?>
            </header>
            <main class="pagecenter">
                <h1 class="pagename">Get Cooking</h1>
				<br />
				<a href="maindishes.php">
				<div>
                    <figure>
						<img src="imagefiles/maindish.jpg" alt="Main Dishes" class="large" />
						<br />
						<figcaption>Main Dishes</figcaption>
					</figure>
                </div>
				</a>
				<a href="sidedishes.php">
				<div>
                    <figure>
						<img src="imagefiles/sidedish.jpg" alt="Side Dishes" class="medium" />
						<br />
						<figcaption>Side Dishes</figcaption>
					</figure>
                </div>
				</a>
				<a href="desserts.php">
				<div>
                    <figure>
						<img src="imagefiles/desserts.jpg" alt="Occasions" class="medium" />
						<br />
						<figcaption>Desserts</figcaption>
					</figure>
                </div>
				</a>
				<a href="cultures.php">
				<div>
                    <figure>
						<img src="imagefiles/cultures.jpg" alt="Cultural" class="medium" />
						<br />
						<figcaption>Cultural</figcaption>
					</figure>
                </div>
				</a>
				<a href="breakfast.php">
				<div>
                    <figure>
						<img src="imagefiles/breakfast.png" alt="Food Pairings" class="medium" />
						<br />
						<figcaption>Breakfast</figcaption>
					</figure>
                </div>
				</a>
            </main>
            <footer>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php';?>
            </footer>
        </div>
    </body>
</html>