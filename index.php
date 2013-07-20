<html>
	<?php
		
		include 'header.php';?>

	<body>
		<?php include 'navigation.php';?>
		<div id="PageContainerOuter">
			<div id="PageContainer">
				<?php
					include 'images_banner.php'; 
				?>
				<?php #include 'info1.php';?>
				<?php
			    $i=0;
			    $url = "http://news.google.com/?ned=us&topic=t&output=rss"; // url of google news
			    $xml = simplexml_load_file('http://www.surfnetkids.com/reader/feed/'); //loading the document
			    $items = $xml->channel->item; //gets the title of the document.     
			    echo "<article  class=\"block_topic_post\">";
			    foreach($items as $item){ if($i<5){ echo "<div class = \"news\" id=\"news$i\">";$i++;
			    ?>
			    <?php
			    echo "<a class=\"simple\" href=\"".$item->link."\" target=\"_blank\"><span>".$item->title."<span></a>";
			    echo "</br></br>";
			    echo "<span>".$item->description."</span></br>";
			    echo "</br></br>";
			    echo "</div>";
			    }
			    else
			    break;
			    }
			    echo "</article>";
			    ?>
			     <div class="sidebar">
			     	<a class= "simple2" href="cartoons.php"><span>Cartoons!</span></a>
			     	<a class= "simple1" href="cartoons.php"><span>MOVIES!</span></a>
			     	<a class= "simple"href="cartoons.php"><span>NeuroMama!</span></a>
			     	<a class= "simple1" href="cartoons.php"><span>Books!</span></a>
			     	<a class= "simple"href="cartoons.php"><span>Games!</span></a>
			     	<a class= "simple2" href="cartoons.php"><span>Educational!</span></a>
			     </div>
			</div>
		</div>
	</body>
</html>