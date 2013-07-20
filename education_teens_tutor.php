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
					<div id="frase1" style="position: relative; text-align: right; color: #CC1100;">What sculpture is to a block of marble, education is to the human soul.</div>
					<div id="autor1" style="position: relative; text-align: right; margin-left:130px; color: #551100;">-Joseph Addison</div>
					<div id="frase2" style="position: relative; text-align: right; color: #CC1100;">I am not a teacher but an awakener.</div>
					<div id="autor2" style="position: relative; text-align: right; margin-left:130px; color: #551100;">-Robert Frost</div>
					</br></br>
					
						<div id="teens_games" class="style6">Games for Teens</div>
						<ul id="link_games">
						</br>
							<a class="simple" href="http://tutor.schools.com/prequal.jsp?&CCID=20170683203856714&QTR=ZZf201108111129150Za20170683Zg172Zw6Zm807Zc203856714Zs3086ZZ&CLK=866120325193910166&ac=003&ai=7A5247D9189DD6EB4FDD83FC18DFCA6349BB9118&ad=9791717058&sp=www.goodsitesforkids.org&fb=math%20homework%20help%20for%20kids&mt=&aceid=&kw=K-12%20Math&theme=FindtheRight&gclid=CIDwjbvEg68CFQ6EhwodsSIx0Q&&WT.srch=1" target="_blank"><span>Tutor School</span></a>
							<a class="simple1" href="http://www.zurinstitute.com/onlinegaming.html" target="_blank"><span>Zur Institute</span></a>
							<a class="simple2" href="http://www.practicalmoneyskills.com/games/" target="_blank"><span>Money Skills</span></a>
							<a class="simple" href="http://www.factmonster.com/games.html" target="_blank"><span>FactMonster</span></a>
							<a class="simple1" href="http://www.learn4good.com/games/for-high-school-students.htm" target="_blank"><span>Learn 4 good High School</span></a>
							<a class="simple2" href="http://www.girlgames1.com/educationalgames.html" target="_blank"><span>Girls Games</span></a>
							<a class="simple" href="http://www.learn4good.com/games/online.htm" target="_blank"><span>Learn 4 good</span></a>
							<a class="simple1" href="http://howtoedu.org/2010/50-free-online-educational-games-that-are-more-fun-than-youd-think/" target="_blank"><span>How to Edu</span></a>
							<a class="simple2" href="http://www.webgame14.com/" target="_blank"><span>Web Game</span></a>
							<a class="simple" href="http://quizhub.com/quiz/quizhub.cfm" target="_blank"><span>Quiz Hub</span></a>
						</ul>
						</br>
						<div id="teens_guide" class="style6">A Guide for Teenagers</div>
						<ul id="link_guide">
						</br>
							<a class="simple" href="http://win.niddk.nih.gov/publications/take_charge.htm" target="_blank"><span>Take Charge</span></a>
							<a class="simple2" href="http://www.stayteen.org/my-paper-girlfriend?gclid=CJ2vw4aaha8CFSQaQgodH0nI3A" target="_blank"><span>Stay Teen</span></a>
							<a class="simple" href="http://www.studentsoftheworld.info/menu_jeux.html" target="_blank"><span>Students of the World</span></a>
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