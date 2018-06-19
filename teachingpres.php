<!DOCTYPE html>
<!--
Content page for famrecipe.org.
-->
<html lang="en-us">
    <head>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/head.php';?>
    </head>
    <body id="body">
        <div id="body">
            <header id="header">
				<div id="header">
<?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header.php';?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/navigation.php';?>
				</div>
            </header>
            <main id="main">
                <div id="main">
                    <article>
						<h1 class="pagename">Teaching Presentation: The Video Element!</h1>
						<h6>"Video Killed the Radio Star"</h6>
						<content>
							<h3>The HTML5 Video Basics</h3>
							<ul>
								<li>The HTML5 element looks like this: <b>&lt;video src&equals;&quot;path&sol;filename&quot;&gt;&lt;&sol;video&gt;</b>. 
								And can have the following attributes: src, controls, autoplay, preload, loop, poster, 
								height, width, muted, and type.</li>
								<li>Some attributes you will not want to use such as the loop attribute. Except for very 
								specific or necessary reasons.</li>
								<li>Flash is a thing of the past, however, web developers need to be mindful of their 
								audience and the possibility of older browsers still in use.</li>
								<li>When developing, you should ensure your video files are available to everyone through 
								the use of a video converter to convert your video file into MP4, OGV, and WebM formats.</li>
							</ul>
						</content>
						<content>
							<h3>The Video Formats and Hosting</h3>
							<ul>
								<li>It is considered best practice to at least use two formats: WebM and MP4.  This way 
								you are sure to have your video available to browsers that support HTML5 &lt;video&gt; 
								elements and those that do not who still need flash</li>
								<li>The easiest way to embed a video into your site is through a hosting service (youtube or vimeo).  
								However, there are some cases when this would not be appropriate and you would need to host the 
								video on your own site.</li>
								<li>For the most part, players and plugins are a thing of the past.</li>
							</ul>
						</content>
						<content>
							<h2>Using Flash (just in case)</h2>
							<ul>
								<li>Step 1: Encode or convert your video into the FLV format. This is the format that 
								is required for Flash video players.</li>
								<li>Step 2: Find and use a player for your .flv video file. Some recommended choices 
								can be found on www.osflv.com or www.longtailvideo.com.</li>
								<li>Step 3:  Include the player and video in the code for your website. You should include this 
								block of code in the &lt;head&gt; section of your webpage and you will need to use javascript in order 
								for your video player and file to be functional.</li>
							</ul>
						</content>
						<content>
							<h3>Flash Player Example</h3>
							<figure>
								<img src="imagefiles/flash.png" alt="Flash player example" class="large" />
							</figure>
						</content>
						<content>
							<h3>WARNING!!!</h3>
							<ul>
								<li>Even though the HTML5 &lt;video&gt; element has been widely used, you need to use both the HTML5 &lt;video&gt; 
								element and Flash video in order for your video to be accessible to everyone. </li>
							</ul>
						</content>
						<content>
							<h3>HTML5 &lt;video&gt; Important Notes</h3>
							<ul>
								<li>In order for your video to be compatible with all of the browsers, you will need to covert 
								your video into different formats—this is called encoding.</li>
								<li>When writing the code you include the path two each of the converted video files through the 
								use of multiple &lt;source&gt; tags which are a child element of the &lt;video&gt; element.</li>
								<li>Browsers provide their own controls for the player which can be altered through the use of Javascript.</li>
							</ul>
						</content>
						<content>
							<h3>Using HTML5 &lt;video&gt;</h3>
							<ul>
								<li>Step 1:  Convert your .flv video file into the other video file types that are most used as 
								previously mentioned on slide 3.</li>
								<li>Step 2:  Write the &lt;video&gt; code block which will include the source or location of the video files 
								(multiple file types and locations) and any other important attributes as mentioned earlier on.  
								It is also best practice to include a short description of the video for accessibility and in case the 
								video does not work for the user.</li>
								<li>Step 3:  Test and put in use.</li>
							</ul>
						</content>
						<content>
							<h3>HTML5 &lt;video&gt; Example</h3>
							<figure>
								<img src="imagefiles/htmlvideo.png" alt="HTML5 video example" class="large" />
							</figure>
						</content>
						<content>
							<h3>Works Cited</h3>
							<ol>
								<li>BlaineRobertson.net. &quot;HTML5 Video&quot;. June, 18, 2016. http://blainerobertson.net/content/?content=487</li>
								<li>Duckett, J. (2011). HTML and CSS: Design and Build Websites. Wiley & Sons, Indianapolis, IN. ISBN: 978-1118008188.</li>
							</ol>
						</content>
					</article>
                </div>
            </main>
            <footer id="footer">
				<div id="footer">
<?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php';?>
				</div>
            </footer>
        </div>
    </body>
</html>