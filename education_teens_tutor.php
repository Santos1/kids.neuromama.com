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
					<div class="style1">Find your Tutor</div>
					</br></br>					
					<div id="frase1" style="position: relative; text-align: right; color: #CC1100; font-size: 12pt; font-weight: bold;">What sculpture is to a block of marble, education is to the human soul.</div>
					<div id="autor1" style="position: relative; text-align: right; margin-left:130px; color: #551100; font-size: 10pt; font-weight: bold;">-Joseph Addison</div>
					<div id="frase2" style="position: relative; text-align: right; color: #CC1100; font-size: 12pt; font-weight: bold;">I am not a teacher but an awakener.</div>
					<div id="autor2" style="position: relative; text-align: right; margin-left:130px; color: #551100; font-size: 10pt; font-weight: bold;">-Robert Frost</div>
					</br></br></br>
					
						<div id="teens_games" class="style6">Games for Teens</div>
						<ul class="simple" id="link_games">
						</br>
							<li><a href="http://tutor.schools.com/prequal.jsp?&CCID=20170683203856714&QTR=ZZf201108111129150Za20170683Zg172Zw6Zm807Zc203856714Zs3086ZZ&CLK=866120325193910166&ac=003&ai=7A5247D9189DD6EB4FDD83FC18DFCA6349BB9118&ad=9791717058&sp=www.goodsitesforkids.org&fb=math%20homework%20help%20for%20kids&mt=&aceid=&kw=K-12%20Math&theme=FindtheRight&gclid=CIDwjbvEg68CFQ6EhwodsSIx0Q&&WT.srch=1" target="_blank">http://tutor.schools.com</a></li>
							<li><a href="http://www.zurinstitute.com/onlinegaming.html" target="_blank">http://www.zurinstitute.com/onlinegaming.html</a></li>
							<li><a href="http://www.practicalmoneyskills.com/games/" target="_blank">http://www.practicalmoneyskills.com/games/</a></li>
							<li><a href="http://www.factmonster.com/games.html" target="_blank">http://www.factmonster.com/games.html</a></li>
							<li><a href="http://www.learn4good.com/games/for-high-school-students.htm" target="_blank">http://www.learn4good.com/games/for-high-school-students.htm</a></li>
							<li><a href="http://www.girlgames1.com/educationalgames.html" target="_blank">http://www.girlgames1.com/educationalgames.html</a></li>
							<li><a href="http://www.learn4good.com/games/online.htm" target="_blank">http://www.learn4good.com/games/online.htm</a></li>
							<li><a href="http://howtoedu.org/2010/50-free-online-educational-games-that-are-more-fun-than-youd-think/" target="_blank">http://howtoedu.org/2010/50-free-online-educational-games-that-are-more-fun-than-youd-think/</a></li>
							<li><a href="http://www.webgame14.com/" target="_blank">http://www.webgame14.com/</a></li>
							<li><a href="http://quizhub.com/quiz/quizhub.cfm" target="_blank">http://quizhub.com/quiz/quizhub.cfm</a></li>
						</ul>
						</br>
						<div id="teens_guide" class="style6">A Guide for Teenagers</div>
						<ul class="simple" id="link_guide">
						</br>
							<li><a href="http://win.niddk.nih.gov/publications/take_charge.htm" target="_blank">http://win.niddk.nih.gov/publications/take_charge.htm</a></li>
							<li><a href="http://www.stayteen.org/my-paper-girlfriend?gclid=CJ2vw4aaha8CFSQaQgodH0nI3A" target="_blank">http://www.stayteen.org/my-paper-girlfriend?gclid=CJ2vw4aaha8CFSQaQgodH0nI3A</li>
							<li><a href="http://www.studentsoftheworld.info/menu_jeux.html" target="_blank">http://www.studentsoftheworld.info/menu_jeux.html</a></li>
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