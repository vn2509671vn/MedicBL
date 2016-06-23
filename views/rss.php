<?php
include("../config.php");
$sql_posts = "SELECT * FROM posts";
$sql_posts_rss = mysql_query($sql_posts);
$sql_infor = "SELECT * FROM infor_hos";
$sql_infor_rss = mysql_query($sql_infor)
?> 

<?php header('Content-type: application/xml; charset="utf8"',true); ?>  
<rss version="2.0">
	<channel> 
	<?php
		while($row1 = mysql_fetch_array($sql_infor_rss)) {
	?>
		<title><?php echo $row1['infor_hos_title']; ?></title>
		<link><?php echo $row1['infor_hos_link'] ?></link> 
		<description><?php echo $row1['infor_hos_descript'] ?></description>
		<docs><?php echo $row1['infor_hos_link'] ?></docs>
	<?php
	}
	?>
		<?php while($row = mysql_fetch_array($sql_posts_rss)) {  ?>
		
		   <item>  
			   <title><?php echo str_replace(array(' ', '<', '>', '&', '{', '}', '*'), array(' '), $row['post_title']);?></title>
			   
			   <description><?php echo str_replace(array(' ', '<', '>', '&', '{', '}', '*'), array(' '), strip_tags($row['post_content']));?></description>
		   </item>

		<?php } ?>

    </channel>  
</rss>