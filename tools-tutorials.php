<!DOCTYPE html>
<!--
Content page for famrecipe.org.
-->
<html lang="en-us">
    <head>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/head.php';?>
    </head>
    <body id="home">
        <div>
            <header role="banner">
<?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header.php';?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/navigation.php';?>
            </header>
             <main>
                <h1 class="pagename">Cooking Tools and Tutorials</h1>
				<br />
					<p>Here are a few of my favorite tools and instructional videos. I hope you find them
					as useful as I do.</p>
				<div>
                    <figure>
						<img src="imagefiles/cookingtools.jpg" alt="Cooking Tools" />
						<br />
						<figcaption>The right tools for the job!</figcaption>
					</figure>
                </div>
				<ol>
					<li><a href="http://www.online-unit-converter.com/cooking/">Unit Conversion</a></li>
					<li><a href="https://www.youtube.com/results?search_query=cooking+tutorials">Cooking How-tos</a></li>
				</ol>
				<h2>Video:</h2>
				<video controls preload="metadata" poster="imagefiles/butter.jpg">
					<source src="videofiles/butter.mp4.mp4" type="video/mp4">
					<p>Your browser does not support HTML5 video.</p>
				</video>
				<h2>Audio:</h2>
				<audio controls preload="none">
					<source src="audiofiles/cook.mp3">
					<source src="audiofiles/cook.ogg">
					<p>Your browser does not support HTML5 audio.</p>
				</audio>
            </main>
            <footer id="contentinfo">
<?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php';?>
            </footer>
        </div>
    </body>
</html>