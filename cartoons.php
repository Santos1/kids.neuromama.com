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
				</br>
				<div class="style1" style="color: #9900CC">Cartoons!</div>
				</br></br></br>
				<!--------------------------------------------------------------------------------------------------->
							<!--		initialize plugin 	-->
				<script src="http://code.jquery.com/jquery.min.js"></script>
				<script src="js/youmax.min.js"></script>
				<!--------------------------------------------------------------------------------------------------->				
				
				<style>
					body {
						font-family: Calibri;
						font-size: 14px;
						text-align:center;
					}
					#youmax{width:100% !important;}
					
				</style>
				
				
				<div class="innerclear">
					<input type="Hidden" id="Whiz" value="http://www.youtube.com/user/WhizKid8881"/>
					<input type="Hidden" id="80s" value="http://www.youtube.com/user/seriesmexico80s"/>
					
					<img style="width: 80px; height: 80px" src="http://i1.ytimg.com/i/2-K-dU4h3D3rk-CAZ0eBzQ/mq1.jpg?v=504cb004" type="button" value="Whiz" onclick="openvideos('#Whiz');"/>
					<img style="width: 80px; height: 80px" src="http://i1.ytimg.com/i/LNz905xzQlEAlTmlm6u7Jg/mq1.jpg?v=51218926" type="button" value="80s" onclick="openvideos('#80s');"/>
					
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