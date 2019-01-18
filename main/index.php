<html>
    <head><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href ="style.css">

    </head>
       <body>
 <?php
  include_once "header.php"        
 ?>

    


   
     <div class="slideshowContainern">

		<div class="mySlidesn faden">
  
  			<img src="images/slide4.jpg" style="width:100% " height="450px">
  		<div class="textn">Travel to mezmorizing places in Sri Lanka</div>
	</div>

	<div class="mySlidesn faden">
  
  		<img src="images/slide.jpg" style="width:100%" height="450px">
  		<div class="textn">Enjoy the beuty </div>
	</div>

	<div class="mySlidesn faden">
  
  		<img src="images/slide2.jpg" style="width:100%" height="450px">
  		<div class="textn">Feel the amazing weather </div>
	</div>

	<div class="mySlidesn faden">
  
  			<img src="images/slide3.jpg" style="width:100% " height="450px">
  		<div class="textn">The Weather,Beuty,You will be amazed!</div>
	</div>


	<a class="previ" onclick="plusSlides(-1)">&#10094;</a>
	<a class="nexti" onclick="plusSlides(1)">&#10095;</a>

	</div>
	<br>

	<div style="text-align:center">
  		<span class="dotn" onclick="currentSlide(1)"></span> 
  		<span class="dotn" onclick="currentSlide(2)"></span> 
  		<span class="dotn" onclick="currentSlide(3)"></span> 
  		<span class="dotn" onclick="currentSlide(4)"></span>
	</div>

	<script>
		var slideIndex = 1;
		showSlides(slideIndex);

		window.onload = setInterval(myTimer, 4000)

		function myTimer() {
 		plusSlides(1);
		}

		function plusSlides(n) {
  		showSlides(slideIndex += n);
		}

		function currentSlide(n) {
  		showSlides(slideIndex = n);
		}

		function showSlides(n) {
  		var i;
  		var slides = document.getElementsByClassName("mySlidesn");
  		var dots = document.getElementsByClassName("dotn");
  		if (n > slides.length) {slideIndex = 1}    
  		if (n < 1) {slideIndex = slides.length}
  		for (i = 0; i < slides.length; i++) {
      	slides[i].style.display = "none";  
  		}
  		for (i = 0; i < dots.length; i++) {
      	dots[i].className = dots[i].className.replace(" activen", "");
  		}
  		slides[slideIndex-1].style.display = "block";  
  		dots[slideIndex-1].className += " activen";
		}

	</script>
    <div id="whereto"></div>
 <div class="card" style="width: 18rem;">
  <img src="images/ravana.png" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">This popular waterfall is one of the country's widest & has a cave mentioned in an Indian epic poem</p>
  </div>
</div> <div class="card" style="width: 18rem;">
  <img src="images/ninea.png" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">conic arched railway bridge made of stone, brick & cement, bordered by lush greenery.</p>
  </div>
</div> <div class="card" style="width: 18rem;">
  <img src="images/ellar.png" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Popular hike offering dramatic views from the mountain's peak, a notable place to watch the sunrise.

</p>
  </div>
</div> <div class="card" style="width: 18rem;">
  <img src="images/dova.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Sacred rock temple known for its 38-foot Buddha statue carved in a granite boulder.

</p>
  </div>
</div> <div class="card" style="width: 18rem;">
  <img src="images/pora.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Porawagala is most suitable place to observe Bandarawela area in Sri Lanka. It is located 3 km away from the Bandarawela town and it is one of a key .</p>
  </div>
</div> <div class="card" style="width: 18rem;">
  <img src="images/sigiriya.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">The ruins of a 5th-century city, anchored by a towering rock fortress accessible by steep stairs..</p>
  </div>
</div>
         <div class="card" style="width: 18rem;">
  <img src="images/tt.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Large temple featuring rituals & services around the sacred Tooth Relic, the canine tooth of Buddha.</p>
  </div>
</div>
         <div class="card" style="width: 18rem;">
  <img src="images//yala.png" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Massive forest & grasslands with elephants, leopards, crocodiles & abundant bird life.</p>
  </div>
</div>
  
           
           <?php
           include_once "footer.php";
           ?>
            
           
		
	   </table>
    </div>
    

</body>