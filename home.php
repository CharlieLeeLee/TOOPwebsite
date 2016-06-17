<!DOCTYPE HTML>
<html>
	<head>
		<title>The Opposite of People</title>
		<meta name="viewport" content="width=device-width, height=768, maximum-scale=0.85" />
		<link rel="stylesheet" type="text/css" href="styles/style.css" />
				
	</head>
	<body>	
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
		<link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
		<script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
		<script type="text/javascript" src="script/fancybox.js"></script>	
		<!--Nav bar and header-->
		<div id="header">
			<a class="pagelink" id="logolink" href="#home"></a>
		<ul id="navigation">
			<li><a class="pagelink" href="#about" id="aboutlink"></a></li>
			<li><a class="pagelink" href="#twig" id="twiglink"></a></li>
			<li><a class="pagelink" href="#audition" id="audlink"></a></li>
			<li><a class="pagelink" href="#members" id="memberlink"></a></li>
			<li><a class="pagelink" href="#archives" id="archivelink"></a></li>
			<li><a class="pagelink" href="#contact" id="contactlink"></a></li>
		</ul>
		<div class="clear"></div>
		</div>
<div id="container">
	<div id="mask">		
		
		<!--home page-->
		<div id="home">
			<div id="homebox" class="box" style="background-color:transparent;">
				<div id="hometitle">
					<h1 style="float:left; width: 700px;">The Opposite of People Theatre Company</h1>
				</div>
					<!--add current season information to the home page based on database information-->
			</div>
		</div>	
		
		<!--about page-->
		<div id="about">
			<div id="aboutbox">
				<div id="abouttop">
				<p style="float: right; display: block; width: 500px; margin-right: 20px; line-height:20px;" title="What is TOOP?">
				TOOP was founded in the Spring of 2008 by the former cast of the University of Rochester International Theatre Program's 
				production of Suzan Lori Parks's <i>365 Days / 365 Plays</i>. Originally consisting of only a handful of actors, TOOP has since grown 
				to include students with talents and skills in all aspects of theatre - from the writing of a play to its design and eventual 
				performance. As a result, we have been able to put on between two and four full-scale theatrical productions each semester 
				in Drama House, and the seats are always filled with dedicated fans. TOOP prides itself on quality and professionalism and 
				continues to grow and change with each new member.
        		</p>
				</div>
				
				<div id="aboutbottom">
				<h1></h1>
				<!--I will figure out what I want to do here later-->
				</div>
			</div>
				
		</div>
		
		<!--Twig Page-->
		<div id="twig">
			<div id="twigbox">
			<p style="float: right; display: block; width: 500px; margin-right: 20px; line-height:20px;">
			The TOOP Writers' Guild, or TWiG, is one of the few resources available for playwriting on campus. TWiG strives to<br /><br />
		    <b><twig>1.</twig></b>Provide a way for students on campus to learn about playwriting in a non-academic environment.<br />
    		<b><twig>2.</twig></b>Instruct TOOP members on this fundamental aspect of theater.<br />
   			<b><twig>3.</twig></b>Foster a community of writers and actors for writing workshops to improve the quality of student written plays.<br />
    		<b><twig>4.</twig></b>Sponsor an outlet for student written works, both by holding staged readings each semester and by encouraging fully-staged original work. <br /><br />
			Several of TOOP's main-stage productions have come out of TWiG, including <i>Orifice</i> by Sarah Young (Fall, 2010), <i>Threading</i> by Kelsey Burritt (Fall, 2011), 
			<i>Until the Sonder Falls</i> by Evelyn Hernandez (Spring 2015), and <i>Energy, Mass, Light</i> by Katherine Varga (Fall 2015).
        	</p>
			</div>
		</div>
			
		<!--Audition page-->
		<div id="audition">
			<div id="audbox">
			<div id="audtop">
			<p style="float: right; display: block; width: 500px; margin-right: 20px; line-height:20px;">
			TOOP holds auditions at the beginning of each semester, open to all students at the University of Rochester. <a href="mailto:theoppositeofpeople@gmail.com">Contact us</a>
			or come to one of our info shows to find out more. Sign up for an audition time in Drama House.<br />
			If you're preparing for auditions, you can get the audition form <!--add link to form pdf--> here. Anyone can audition for up to <b>2</b> of the following areas:
			</p>
			</div>
			
			<!--fancybox table of Audition categories-->
			<div id="audbottom">
			<table>
				<tr>
					<td><a id="acting" class = "gallery auditionlink" target="_blank" href="#actingdiv" rel="4"></a></td>
					<td><a rel="4" href="#directingdiv" target="_blank" class="gallery auditionlink" id="directing"></a></td>
					<td><a rel="4" href="#writingdiv" target="_blank" class="gallery auditionlink" id="writing"></a></td>
					<td><a rel="4" href="#lightingdiv" target="_blank" class="gallery auditionlink" id="lighting"></a></td>
				</tr>
				<tr>
					<td><a rel="4" href="#sounddiv" target="_blank" class="gallery auditionlink" id="sound"></a></td>
					<td><a rel="4" href="#costumediv" target="_blank" class="gallery auditionlink" id="costume"></a></td>
					<td><a rel="4" href="#propsdiv" target="_blank" class="gallery auditionlink" id="props"></a></td>
					<td><a rel="4" href="#setdiv" target="_blank" class="gallery auditionlink" id="set"></a></td>
				</tr>
			</table>
			</div>
			
			<!--contents of the pop-up fancyboxes-->
			<div style="display: none">
				<div id="actingdiv" class="auditioninfo"> 
					<div class="case clienteditor">
					<h1> Acting</h1>
					<p> add acting audition info here</p>
					</div>
					<div class="clear"></div>
				</div>
				<div id="directingdiv" class="auditioninfo">
					<div class="case">
					<h1> Directing</h1>
					<p> add directing audition info here</p>
					</div>
					<div class="clear"></div>
				</div>
				<div id="writingdiv" class="auditioninfo">
					<div class="case">
					<h1> Writing</h1>
					<p> add writing audition info here</p>
					</div>
					<div class="clear"></div>
				</div>
				<div id="lightingdiv" class="auditioninfo">
					<div class="case">
					<h1> Lighting Design</h1>
					<p> add lighting audition info here</p>
					</div>
					<div class="clear"></div>
				</div>
				<div id="sounddiv" class="auditioninfo">
					<div class="case">
					<h1> Sound Design</h1>
					<p> add sound audition info here</p>
					</div>
					<div class="clear"></div>
				</div>
				<div id="costumediv" class="auditioninfo">
					<div class="case">
					<h1> Costume Design</h1>
					<p> add costume audition info here</p>
					</div>
					<div class="clear"></div>
				</div>
				<div id="propsdiv" class="auditioninfo">
					<div class="case">
					<h1> Props Design</h1>
					<p> add props audition info here</p>
					</div>
					<div class="clear"></div>
				</div>
				<div id="setdiv" class="auditioninfo">
					<div class="case">
					<h1> Set Design</h1>
					<p> add set audition info here</p>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
		</div>
		
		<!--Members page-->
		<div id="members">
			<div id="membox">
			<div id="memtop">
			<h1 align=center>Our Illustrious E-Board</h1>
			
			<!--create table of executive board members with the database-->
			<table>
				<tr>
			<?php
				include("script/execList.php");?>
				</table>
			</div>
			<div id="membottom">
			<h1 align=center>Our Other Members</h1>
			<!--use database information to display members-->
			<table>
				<?php
				$list_alums = false;
				include("script/memberList.php");?>
			</table>
			</div>
			</div>
		</div>
		
		<!--archives page-->
		<div id="archives">
			<div id="gallbox">
			<h1>Past Shows</h1>
			<!--use database information to create galleries-->
			</div>
		</div>
		
		<!--contact page-->
		<div id="contact">
			<div id="contactbox">
			<div id="contacttop">
			<h1>Contact Us</h1>
			<!--use email form here-->
			</div>
			<div id="contactbottom">
			<h2>Social Media</h2>
			<p>Like us on Facebook, and follow us on Tumblr!</p>
			<!--add social media links/buttons-->
			<p>Keep up with the latest TOOP news by joining our fan mailing list!</p>
			<!--email list form-->
			</div>
			</div>
		</div>
	</div>
</div>
  </body>
</html>

