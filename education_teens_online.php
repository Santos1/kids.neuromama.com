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
					<div class="style1"><img src="images/titles/3.png" height="96"></div>
					</br></br>					
					<div id="frase1" style="position: relative; text-align: right; color: #CC1100; ">Education is simply the soul of a society as it passes from one generation to another.</div>
					<div id="autor1" style="position: relative; text-align: right; margin-left:130px; color: #551100; ">-G. K. Chesterson</div>
					<div id="frase2" style="position: relative; text-align: right; color: #CC1100; ">Instruction ends in the school-room, but education ends only with life.</div>
					<div id="autor2" style="position: relative; text-align: right; margin-left:130px; color: #551100;">-Frederick W.Robertson</div>			
					</br></br>
					
						<div id="teens_online" class="style6">Teens Online</div>
						<ul id="link_online">
						</br>
							<a class="simple" href="http://distancelearn.about.com/od/virtualhighschools/a/teensonline.htm" target="_blank"><span>Distance Learn</span></a>
							<a class="simple" href="http://www.down-syndrome.org/information/reading/adolescent/" target="_blank"><span>Down-Syndrome</span></a>
							<a class="simple" href="http://www.education.com/age/teen-years/" target="_blank"><span>Education Teens</span></a>
							<a class="simple" href="http://unesdoc.unesco.org/images/0012/001293/129363e.pdf" target="_blank"><span>Unesco</span></a>
							<a class="simple" href="http://teenlifelines.net/?gelci=military+schools&grp=military+schools&gclid=CIvOwtSXha8CFUUHRQodxX2B2g" target="_blank"><span>Teen Lifes</span></a>
							<a class="simple" href="http://www.sexetc.org/" target="_blank"><span>Sextc</span></a>
							<a class="simple" href="http://www.parentingteens.com/forums/forum/education/" target="_blank"><span>Parenting Teens</span></a>
							<a class="simple" href="http://character-in-action.com/character-education-teenagers-enjoy/" target="_blank"><span>Character In Action</span></a>
							<a class="simple" href="http://www.bygpub.com/books/tg2rw/tg2rwtoc.htm" target="_blank"><span>ByGPUG</span></a>
							<a class="simple" href="http://www.bygpub.com/books/tg2rw/chap6excerpt.htm" target="_blank"><span>ByGPUG experts</span></a>
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