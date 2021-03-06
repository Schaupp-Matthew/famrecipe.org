<!DOCTYPE html>
<!--
This is the site plan for my web site: famrecipe.org
-->
<html>
    <head>
       <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/head.php';?>
    </head>
    <body>
	<header>
		<?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header.php';?>
		<?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/navigation.php';?>
	</header>
	<main>
	<hgroup>
        <h1 class="pagename">Site Plan</h1>
		<h2>famrecipe.org</h2>
	</hgroup>
	<article>
        <h2>Purpose</h2>
            <p>I would like to create an informational site that would act as an
                online family cookbook.  This site will have all of our families
                favorite recipes complete with instructions, pictures, 
                techniques, and video tutorials.  I would like to do this 
                because my family is spread across the United States and because
                my wife loves cooking.  My site would also help spread the 
                delicious traditions of our family culture with others 
                throughout the world.  This site would help bring my spread out 
                family together by sharing our favorite recipes with each other.
                Now that I am thinking about creating this not only for my 
                family but for the world as a product I would like to tweak it a
                little.  I would like my site to be a platform for families 
                around the world to create their own family cookbooks.</p>
	</article>
	<article>
        <h2>Target Audience</h2>
			<p><strong>Physical Description:</strong></p>
				<li>Age:  25-80, primarily the ages of mothers and grandmothers</li>
				<li>Gender:  Both male and female, however mostly female</li>
				<li>Education:  High School or higher</li>
				<li>Economic status:  Middle-class, mostly for stay at home mothers in 
					single income households.  Income limited.</li>
				<li>Language:  Initially only English</li>
				<li>Geographic location:  The USA </li>
				<li>Ethnicity:  All ethnicities</li>
			<p><strong>Technological Description:</strong></p>
				<li>Device(s) used to access site:  All device types but mostly smart phones</li>
				<li>Operating system of choice:  Does not matter</li>
				<li>Browser of choice:  Does not matter</li>
				<li>Frequency of use:  Daily use</li>
				<li>Experience level:  Most will be proficient with using their device and technology choice, however some novice users are 
				to be expected</li>
	</article>
	<article>
        <h2>Personas</h2>
		<figure>
			<img src="imagefiles/male.jpg" alt="Picture of Man" class="medium" /> 
			<br />
			<figcaption><h3>Male</h3></figcaption>
		</figure>
			<p>Michael Smith is a loving husband and a father of three children.  He works for 
			a local insurance company making around $50,000.00 annually as an insurance agent.  He and his family are a typical middle-class
			family living on a budget and making ends meet.  He lives in the state of Arizona.  Though he works as an insurance agent, the 
			most important title he carries is Dad.  He occasionally cooks a meal for his family when his wife is unable or he wants to.  
			When he is going to cook a meal it is important to him to have a clear list of ingredients and instructions for him to 
			successfully feed his family.  He likes going to famrecipe.org because he can easily access his family’s cookbook or favorite 
			recipes and have access to his wife’s instructions and notes to make the meal just the way she likes.  On a day when he will be 
			visiting the site he might say something like:  “My wife isn’t feeling good so I would love to help out by cooking a good meal 
			for my family so she can rest.  I wonder what my wife’s favorite recipes are and what her meal plans where for this day?” 
			Michael goes to famrecipe.org because he knows he will be able to find all of the information he needs to pull off having a 
			successful meal.</p>
		<figure>
			<img src="imagefiles/womenone.jpg" alt="Picture of Women" class="medium" />
			<br />
			<figcaption><h3>Female</h3></figcaption>
		</figure>
			<p>Stacy Smith is a stay-at-home mother is five children who loves cooking delicious, healthy meals for her family.  
			Though she doesn’t bring home an income, she knows the value of her job as a loving mother who knows how to make a budget 
			work without compromising on the health of her family.  This is why she has a profile with and visits famrecipe.org daily 
			so she can create, organize, and plan her meals with ease.  Feeding her family a healthy diet on a budget isn’t easy in America 
			where she lives where everything is fast, convenient, highly processed food.  She hates processed foods.  She visits the site 
			daily in order to plan her meals for the week, generate a grocery shopping list, and to share her favorite recipes with her 
			extended family who she is connected with on the website.  She also loves the fact that she gets to share her recipes with the 
			rest of the world.  On a typical day you might hear her say:  “We have a busy evening today so I need to make a meal that has 
			very little prep and cook time.  I wonder which one of my recipes has the lowest amount of prep and cook time combined?”</p>
		<figure>
			<img src="imagefiles/womentwo.jpg" alt="Picture of Grandmother" class="medium" />
			<br />
			<figcaption><h3>Female 2</h3></figcaption>
		</figure>
			<p>Heather Smith is a proud mother and grandmother who believes in the power of a family sitting around a table together to 
			enjoy a healthy, home cooked meal together.  She spent her life as a mother fine-tuning her cooking skills and her recipes 
			loves that she can pass that on to her children and grandchildren through famrecipe.org.  She and her husband are enjoying 
			retired life but she still cooks like she has to feed an entire family of hungry mouths.  She visits the site often though 
			she is not too comfortable with technology because of how easy it is to create and share a recipe with her family members whom 
			she is connected with on the site.  On a typical day you might hear her tell a friend:  “I hate trying to search the internet 
			for a recipe I like, that is why I love famrecipe.org because I have access to all of the recipes I love through my family’s 
			cookbook.  It’s so easy to use!"</p>
	</article>
	<article>
        <h2>Scenarios</h2>
			<li>How do I search a recipe by culture?</li>
			<li>How there be a measuring conversion tool?</li>
			<li>How would I access by cook book?</li>
			<li>How Do I send invites to my cook book?</li>
			<li>How do I share my cook book on social media?</li>
			<li>How do I make my recipes and profile private or public?</li>
			<li>How do I search for recipes by ingredients?</li>
			<li>How can I search what dishes pair well together?</li>
			<li>How can I post videos and how-to's on the site?</li>
			<li>How can I sort recipes by star ratings and reviews?</li>
	</article>
	<article>
		<h1>Content Architecture</h1>
			<h2>Content List</h2>
				<li>Home-This will be the link to the home page. It will be present on every page in the navigation bar and the logo.</li>
				<li>Get Cookin’-This will be the link in the navigation bar that will take you to the categories listed below for recipes.
				You will not need to have an account to access this public information.</li>
				<li>Main Dishes-This will be the link to the page with all of the publicly shared main dish recipes from other users. There will always
				be at least two featured recipes.</li>
				<li>Side Dishes-This will be the link to the page with all of the publicly shared side dish recipes from other users. There will always
				be at least two featured recipes.</li>
				<li>Occasions-This will be the link to the page that organizes recipes according to special occasions such as birthdays, weddings, holidays, etc.</li>
				<li>Culture-This will be the link to the page that organizes recipes according to culture: i.e. mexican, german, african, etc.</li>
				<li>Pairings-This will be the page that organizes and links recipes together. The links will be created from past user input.</li>
				<li>How-To’s-This will be a link with video and audio tutorials.</li>
				<li>Videos-This will be the video page.</li>
				<li>Unit conversion tool-This will be a page with unit conversion tools that can be used while cooking.</li>
				<li>Share-This will be the page that allows you to share the website with your friends and family using your favorite social media.</li>
				<li>Sign-in/New user registration-This will be the page to sign-in or to creat a new user account/cookbook.</li>
				<li>Profile-This will be the page that will display all of the users profile information.</li>
				<li>Cookbook-This will be the page that displays the users cookbook.</li>
				<li>Search Bar (include/exclude ingredient)-The seach bar will be present on every page along with the logo and navigation bar.</li>
	</article>
	<article>
		<h2>Site Maps</h2>
		<figure>
			<img src="imagefiles/sitemap-1.jpg" alt="Site Map 1" class="large" />
			<br />
			<figcaption><h3>Site Map 1</h3></figcaption>
		</figure>
			<br>
		<figure>
			<img src="imagefiles/sitemap-2.jpg" alt="Site Map 2" class="large" />
		<br />
			<figcaption><h3>Site Map 2</h3></figcaption>
		</figure>		
			<br>
		<h2>Wire Frames</h2>
			<figure>
				<img src="imagefiles/browser.jpg" alt="Browser Wire Frame" class="large" />
				<img src="imagefiles/tablet.jpg" alt="Tablet Wire Frame" class="large" />
				<img src="imagefiles/phone.jpg" alt="Phone Wire Frame" class="large" />
			</figure>
	</article>
	<article>
		<h1>Style Guide</h1>
			<figure>
				<img src="imagefiles/color.jpg" alt="Color Palette" alt="Color Scheme" class="large" />
					<br />
				<figcaption><h2>Color Scheme</h2></figcaption>
			</figure>
				<p>Color #ffffff will be used as the main background and for page names on navigation bar.</p>
				<p>Color #000000 will be used for all text within the body.</p>
				<p>Color #d5f1f2 will be used as a secondary background.</P>
				<p>Color #7fc0c3 will be used in the logo design.</p>
				<p>Color #2f8488 will be used for the page names on content pages and for links.</p>
				<p>Color #006469 will be used for the navigation bar and for the site name.</p>
			<h2>Typography</h2>
				<h3>Site Name and Page Names:</h3>  
					<li>Font-family: Arial, Helvetica, Sans-serif</li>
					<li>Font-Size: 32px</li>
					<li>Font-weight: Bold</li>
				<h3>Headings</h3>
					<li>Font-family: Arial, Helvetica, Sans-serif</li>
					<li>Font-Size: 24px</li>
					<li>Font-weight: Bold</li>
				<h3>Paragraphs:</h3>
					<li>Font-family: Arial, Helvetica, Sans-serif</li>
					<li>Font-Size: 16px</li>
					<li>Font-weight: Normal</li>
				<h3>Links:</h3>
					<li>Font-family: Arial, Helvetica, Sans-serif</li>
					<li>Font-Size: 16px</li>
					<li>Font-weight: Normal</li>
					<li>Text-color: #2f8488</li>
					<li>Link visited: #006469</li>
    </article>
	<footer>
		<?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php';?>
	</footer>
	</main>
	</body>
</html>
