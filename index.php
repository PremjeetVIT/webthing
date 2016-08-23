<?php include 'database.php'; ?>

<?php
	// Create Select Query
	$query = "SELECT * FROM webtab ";
	$webtab = mysqli_query($con, $query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Premjeet Kumar Singh | Full-Stack Developer </title>
	<link rel="stylesheet" href="css/style.css">
	<!-- <link rel="stylesheet" href="css/lightbox.css"> -->
	<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,700' rel='stylesheet' type='text/css'>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/lightbox.js"></script>
	<script src="js/script.js"></script>

</head>

<script>
var like_i = 0;
var like_array = ["Programming","Designing with Bootstrap","Logical Thinking","Learn New Technologies and Languages","Being Active in Social Media"];
var like_elem;
function likeNext(){
	like_i++;
	like_elem.style.opacity = 0;
	if(like_i > (like_array.length - 1)){
		like_i = 0;
	}
	setTimeout('likeSlide()',1000);
}
function likeSlide(){
	like_elem.innerHTML = like_array[like_i];
	like_elem.style.opacity = 1;
	setTimeout('likeNext()',2000);
}

// ........... New Code.......
var myString = "HTML5, CSS3: JavaScript, jQuery: Angularjs, Nodejs: PHP, JAVA: NoSQL:.";
var myArray = myString.split(":");
var loopTimer;
function frameLooper() {
	if(myArray.length > 0) {
		document.getElementById("mytech").innerHTML += myArray.shift() +"<br>";
		if(myArray.length <= 0){
			myArray=myString.split(":");
			document.getElementById("mytech").innerHTML = "";
		}
	} else {
		clearTimeout(loopTimer); 
                return false;
	}
	loopTimer = setTimeout('frameLooper()',2000);
}


</script>

<body>
	

<div id="wrap">
	

		<div class="blue-margin"></div>

		<div class="intro p50">
			<div class="picture"></div>
			<h1>Premjeet Kumar Singh</h1>
			<p class="slogan">Full-Stack Developer @ <a href="http://sarasbyte.com" target="_blank">Saras Byte</a></p>
		</div>
	<div class="thingsDo p50 blue">
		<h2>Things i did</h2>
		<section>
			<div class="container">
			
				<ul id="gallery">
					<li  class="design"><a href="https://github.com/Premjeet-Singh/assorted-proj/tree/master/Button_Animation" data-lightbox="projects" data-title="Button Animation" data-desc="This is the Animation project and it perform operations after pressing corresponding button like FadeIn, FadeOut, SlideIn, SlideOut, etc."> <img src="img/pic1.png"></a></li>
					<li class="design programming"><a href="https://github.com/Premjeet-Singh/assorted-proj/tree/master/Custom%20Alert" data-lightbox="projects" data-title="Custom Alert" data-desc="This project contains the custom alert box to show messages or output."> <img src="img/pic2.png"></a></li>
					<li class="cms"><a href="https://github.com/Premjeet-Singh/assorted-proj/tree/master/dargdrop" data-lightbox="projects" data-title="Drag &amp; Drop" data-desc="In this project we can drag and drop the objects in the drop zone and can also see that which objects are in the drop zone by printing object name."> <img src="img/pic3.png"></a></li>
					<li class="cms design"><a href="https://github.com/Premjeet-Singh/assorted-proj/tree/master/Editable%20Web%20Page" data-lightbox="projects" data-title="Editable Web Page" data-desc="This project defines that user can edit their content on the browser."> <img src="img/pic4.png"></a></li>
					<li class="design cms programming"><a href="img/pic5.png" data-lightbox="projects" data-title="FAQs" data-desc="
					This Web Application project is the example of FAQ(Frequently Asked Questions)."> <img src="img/pic5.png"></a></li>
					<li class="design"><a href="img/pic6.png" data-lightbox="projects" data-title="MILE Tracker" data-desc="This is the web application in which we can store the distance with date which we have covered and also can edit and delete and can search by distance or date."> <img src="img/pic6.png"></a></li>
					<li class="programming"><a href="img/pic7.png" data-lightbox="projects" data-title="Password Match" data-desc="This is the simple application in which user can enter their name and password. If both the field of password match then it shows successfull message with how much time you take."> <img src="img/pic7.png"></a></li>
					<li class="cms design"><a href="img/pic8.png" data-lightbox="projects" data-title="Object Ratation" data-desc="In this web application object will rotate clock and anti-clock wise after pressing corresponding button and it also shows the degree of rotation."> <img src="img/pic8.png"></a></li>
					<li class="cms"><a href="img/pic9.png" data-lightbox="projects" data-title="Tic Tac Toe" data-desc="This is the simple Tic Tac Toe web application game."> <img src="img/pic9.png"></a></li>
					
					<li class="programming design cms"><a href="https://github.com/Premjeet-Singh/TODO_List" data-lightbox="projects" data-title="Todo List" data-desc="This is the simple web application Todo List in which we can add task and can also delete the task. All the task will be stored in the Local Storage."> <img src="img/pic10.png"></a></li>
					
					<li class="programming design cms"><a href="#" data-lightbox="projects" data-title="Image Repeat" data-desc="This is the simple Image Repeatation web application."> <img src="img/pic11.png"></a></li>
					<li class="programming cms"><a href="img/pic14.png" data-lightbox="projects" data-title="ShoutBox" data-desc="This is the simple web application ShoutBox."> <img src="img/pic14.png"></a></li>
				

				</ul>
			</div>
		</section>
	</div>
	<div class="thingsLike p50 purple">
		<h2>Things i like</h2>
		<p class="normal">

			<strong>[ &nbsp;&nbsp;</strong><span id="like"></span><strong>&nbsp;&nbsp; ]</strong>
			<script>like_elem = document.getElementById("like"); likeSlide(); </script>
			<!-- Programming<br>
			Designing<br>
			Logical Thinking<br>
			Learn New Tecnologies and Languages<br>
			Being active in Social Media --> 
		</p>
	</div>


	<div class="technology p50 red">
		<h2>What is technology to me ?</h2>
		<p class="normal">
			<div id="mytech"></div>
			<script>frameLooper();</script>
			<!-- Java<br>
			HTML5, CSS<br>
			JavaScript, jQuery<br>
			Angularjs, PHP<br>
			Nosql -->
		</p>
	</div>

	<div class="form p80">
		
		<h3>Get in touch :) </h3>
		<form action="">
			

			<input type="email" placeholder="Eg. username@mail.com" class="name" required>
			<textarea name="" class="txtarea" cols="30" rows="10" placeholder="Leave your message here" required></textarea>
		   <input type="submit" value="submit" id="submit">

		</form>
	</div>


	<div class="footer p80">
		
		<p>"Take courage and work on,</p>
		<p>patience and steady work,</p>
		<p>this is the only way."</p><br><br>
		<!-- <p class="small">Sappot na bane content aur design copy na kare. dhanyawad!</p> -->
		<p class="small">Copyright &copy; 2012-2016. All Rights Reserved.</p>

	</div>


</div>


</body>
</html>