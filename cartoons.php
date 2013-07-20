<html>
	<?php include 'header.php';?>
	
	<title>Cartoons!</title>
	<body>
        <?php include 'navigation.php';?>
		<div id="PageContainerOuter">
			<div id="PageContainer">
				<?php
					include 'images_banner.php';
				?>
				
				<div class="style1"><img style="padding-left: 190px;"src="images/titles/8.png"  height="96"></div>
				</br></br>
				
				
				
				<!-------------------------------------------------------------------------------------------------- -->
							<!--		initialize plugin 	-->
				<script src="http://code.jquery.com/jquery.min.js"></script>
				<script src="js/youmax.min.js"></script>
				<!---------------------------------------------------- -->			
				
				<style>
					body {
						font-family: Calibri;
						font-size: 14px;
						text-align:center;
					}
					#youmax{width:100% !important;}
				</style>
				
				<div class="style2"> Select your cartoon channel!</div>
			</br></br>
				<div class="innerclear">
					<input type="Hidden" id="Whiz" value="http://www.youtube.com/user/WhizKid8881"/>
					<input type="Hidden" id="CartoonHangover" value="http://www.youtube.com/user/CartoonHangover"/>
					<input type="Hidden" id="Kidskioske" value="https://www.youtube.com/user/Kidskioske"/>
					<input type="Hidden" id="KidsTV123" value="http://www.youtube.com/user/KidsTV123"/>
					<input type="Hidden" id="NimbleToons" value="https://www.youtube.com/user/NimbleToons"/>
					<input type="Hidden" id="OfficialPoppyCat" value="https://www.youtube.com/user/OfficialPoppyCat"/>
					<input type="Hidden" id="PeppaPigCartoons2013" value="http://www.youtube.com/user/PeppaPigCartoons2013"/>
					<input type="Hidden" id="peppavids123" value="http://www.youtube.com/user/peppavids123"/>
					
					<img style="width: 108px; height: 108px" src="images/easyscience.jpg" type="button" value="Whiz" onclick="openvideos('#Whiz');"/>
					<img style="width: 108px; height: 108px" src="images/cartoonHangOver.jpg" type="button" value="CartoonHangover" onclick="openvideos('#CartoonHangover');"/>
					<img style="width: 108px; height: 108px" src="images/kidskioske.jpg" type="button" value="Kidskioske" onclick="openvideos('#Kidskioske');"/>
					<img style="width: 108px; height: 108px" src="images/kidstv123.png" type="button" value="KidsTV123" onclick="openvideos('#KidsTV123');"/>
					<img style="width: 108px; height: 108px" src="images/NimbleToons.jpg" type="button" value="NimbleToons" onclick="openvideos('#NimbleToons');"/>
					<img style="width: 108px; height: 108px" src="images/PoppyCat.jpg" type="button" value="OfficialPoppyCat" onclick="openvideos('#OfficialPoppyCat');"/>
					<img style="width: 108px; height: 108px" src="images/PeppaPig.jpg" type="button" value="PeppaPigCartoons2013" onclick="openvideos('#PeppaPigCartoons2013');"/>
					<img style="width: 108px; height: 108px" src="images/DisneyPrincess.jpg" type="button" value="peppavids123" onclick="openvideos('#peppavids123');"/>
					
					<script>
					
					function openvideos(channelwanted){
						$('#youmax').empty().append(' loading ...');
						youmaxDefaultTab = "uploads";
						youTubeChannelURL=$(channelwanted).val();
						youTubePlaylistURL=$('#youTubePlaylistUrl').val();
						youmaxColumns = 4;
						youmaxWidgetWidth = 900;
						youmaxFeaturedPlaylistId = null;
						prepareYoumax();
					}
					</script>
				</div>
				<div id="youmax"></div>

				
						<!--		initialize old jquery	-->
				<script type="text/javascript" src="js/commoncode.js"></script>
				<script type="text/javascript" src="js/jquery-1.js"></script>
				<script type="text/javascript" src="js/jquery_004.js"></script> 
				<script type="text/javascript" src="js/jquery.js"></script>
			</div>
		</div>
	</body>
</html>