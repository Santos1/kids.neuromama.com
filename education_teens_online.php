<html>
	<?php include 'header.php';?>
	<title>Education for Kids</title>
	<body>

		<?php include 'navigation.php';?>
		<div id="PageContainerOuter">
			<div id="PageContainer">
				<?php
					include 'images_banner.php'; 
				?>
				<div class="innerclear">
					<div class="style1">Education for Teens</div>
					</br></br>					
					<div id="frase1" style="position: relative; text-align: right; color: #CC1100; font-size: 12pt; font-weight: bold;">Education is simply the soul of a society as it passes from one generation to another.</div>
					<div id="autor1" style="position: relative; text-align: right; margin-left:130px; color: #551100; font-size: 10pt; font-weight: bold;">-G. K. Chesterson</div>
					<div id="frase2" style="position: relative; text-align: right; color: #CC1100; font-size: 12pt; font-weight: bold;">Instruction ends in the school-room, but education ends only with life.</div>
					<div id="autor2" style="position: relative; text-align: right; margin-left:130px; color: #551100; font-size: 10pt; font-weight: bold;">-Frederick W.Robertson</div>			
					</br></br></br>
					
						<div id="teens_online" class="style6">Teens Online</div>
						<ul class="simple" id="link_online">
						</br>
							<li><a href="http://distancelearn.about.com/od/virtualhighschools/a/teensonline.htm" target="_blank">http://distancelearn.about.com/od/virtualhighschools/a/teensonline.htm</a></li>
							<li><a href="http://www.down-syndrome.org/information/reading/adolescent/" target="_blank">http://www.down-syndrome.org/information/reading/adolescent/</a></li>
							<li><a href="http://www.education.com/age/teen-years/" target="_blank">http://www.education.com/age/teen-years/</a></li>
							<li><a href="http://unesdoc.unesco.org/images/0012/001293/129363e.pdf" target="_blank">http://unesdoc.unesco.org/images/0012/001293/129363e.pdf</a></li>
							<li><a href="http://teenlifelines.net/?gelci=military+schools&grp=military+schools&gclid=CIvOwtSXha8CFUUHRQodxX2B2g" target="_blank">http://teenlifelines.net/?gelci=military+schools&grp=military+schools&gclid=CIvOwtSXha8CFUUHRQodxX2B2g</a></li>
							<li><a href="http://www.sexetc.org/" target="_blank">http://www.sexetc.org/</a></li>
							<li><a href="http://www.parentingteens.com/forums/forum/education/" target="_blank">http://www.parentingteens.com/forums/forum/education/</a></li>
							<li><a href="http://character-in-action.com/character-education-teenagers-enjoy/" target="_blank">http://character-in-action.com/character-education-teenagers-enjoy/</a></li>
							<li><a href="http://www.bygpub.com/books/tg2rw/tg2rwtoc.htm" target="_blank">http://www.bygpub.com/books/tg2rw/tg2rwtoc.htm</a></li>
							<li><a href="http://www.bygpub.com/books/tg2rw/chap6excerpt.htm" target="_blank">http://www.bygpub.com/books/tg2rw/chap6excerpt.htm</a></li>
						</ul>
						</br>
						
						</br></br>

				</div>
			</div>
		</div>
	</body>
</html>



<script>
	$("#link_online").slideUp(0).delay(200).slideDown(600);
	
								// Randomize a phrase
	$('#frase1').hide();
	$('#autor1').hide();	
	$('#frase2').hide();
	$('#autor2').hide();
	var randf=Math.floor((Math.random()*2)+1);
	switch(randf){
		case 1:		$('#frase1').show();	$('#autor1').show(); 	break;
		case 2:		$('#frase2').show();	$('#autor2').show(); 	break;
	}
</script>