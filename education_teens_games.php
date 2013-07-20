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
					<div class="style1"><img src="images/titles/3.png"  height="96"></div>
					</br></br>					
					<div id="frase1" style="position: relative; text-align: right; color: #CC1100; ">Whatever is good to know is difficult to learn.</div>
					<div id="autor1" style="position: relative; text-align: right; margin-left:130px; color: #551100; ">-Greek Proverb</div>
					<div id="frase2" style="position: relative; text-align: right; color: #CC1100; ">The growth in secondary education in recent years is unprecedented.</br>The result is overcrowded classrooms filled with teenagers from</br>diverse social and cultural backgrounds.</div>
					<div id="autor2" style="position: relative; text-align: right; margin-left:130px; color: #551100;"></div>
					</br></br></br>
					
						<div id="teens_games" class="style6">Games for Teens</div>
						<ul id="link_games">
						</br>
							<a class="simple" href="http://www.icivics.org/games?gclid=CN2c39LNh68CFQ0FRQod7l0T9g" target="_blank"><span>iCivics</span></a>
							<a class="simple1" href="http://www.zurinstitute.com/onlinegaming.html" target="_blank"><span>Zur Institute</span></a>
							<a class="simple2" href="http://www.practicalmoneyskills.com/games/" target="_blank"><span>Money skills</span></a>
							<a class="simple" href="http://www.factmonster.com/games.html" target="_blank"><span>Factmonster</span></a>
							<a class="simple1" href="http://www.learn4good.com/games/for-high-school-students.htm" target="_blank"><span>Learn 4 good</span></a>
							<a class="simple2" href="http://www.girlgames1.com/educationalgames.html" target="_blank"><span>Girl Games</span></a>
							<a class="simple" href="http://www.learn4good.com/games/online.htm" target="_blank"><span>Learn 4 good Games</span></a>
							<a class="simple1" href="http://howtoedu.org/2010/50-free-online-educational-games-that-are-more-fun-than-youd-think/" target="_blank"><span>How to Edu</span></a>
							<a class="simple2" href="http://www.webgame14.com/" target="_blank"><span>Web Game 14</span></a>
							<a class="simple" href="http://quizhub.com/quiz/quizhub.cfm" target="_blank"><span>Quiz Hub</span></a>
						</ul>
						</br>
						<div id="teens_guide" class="style6">A Guide for Teenagers</div>
						<ul id="link_guide">
						</br>
							<a class="simple" href="http://win.niddk.nih.gov/publications/take_charge.htm" target="_blank"><span>Niddk</span></a>
							<a class="simple1" href="http://www.stayteen.org/my-paper-girlfriend?gclid=CJ2vw4aaha8CFSQaQgodH0nI3A" target="_blank"><span>Stay Teen</span></a>
							<a class="simple2" href="http://www.studentsoftheworld.info/menu_jeux.html" target="_blank"><span>Student World</span></a>
						</ul>
						</br>
						</br></br>

				</div>
			</div>
		</div>
	</body>
</html>



<script>
	$("#link_games").slideUp(0).delay(200).slideDown(600);
	$("#link_guide").slideUp(0).delay(200).slideDown(600);
	
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