<!DOCTYPE html>
<!--
Content page for famrecipe.org.
-->
<html lang="en-us">
    <head>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/head.php';?>

<script type="text/javascript">
	function output() {
		var alert = "We are unable to process your request at this time. Sorry and have a nice day!";
		window.alert(alert);
	}
</script>
    </head>
    <body id="home">
        <div>
            <header role="banner">
<?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header.php';?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/navigation.php';?>
            </header>
            <main id="main">
                <content>
					<h1 class="pagename">Sign-In</h1>
					<h3>Username:</h3>
					<input type="text">
					<h3>Password:</h3>
					<input type="text">
					<button type="button" onClick="output()">Sign-In</button>
				</content>
				<br />
				<content>
					<h1>New User?</h1>
					<button type="button" onClick="output()">Create Account</button>
				</content>
				<content>
					<h1>Account Benefits</h1>
					<ol>
						<li>Access to your own online family cookbook.</li>
						<li>Ability to save your favorite recipes to your cookbook.</li>
						<li>Create family and friend cooking social network.</li>
						<li>Share your prize winning recipes with the world and have a chance to win a family vacation on us!</li>
					</ol>
				</content>
            </main>
            <footer id="contentinfo">
<?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php';?>
            </footer>
        </div>
    </body>
</html>