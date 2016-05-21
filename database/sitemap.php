<?php
include('connection.php');
/*$sitemap_content = "<?xml version=\"1.0\" encoding=\"UTF-8\"?><br/><urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\"><br/><url><loc>http://www.tinycent.com/</loc></url><br/>";

echo "<h2>Recent Posts</h2><br/>";
//function dynamic_sitemap(){
	$query = "SELECT * FROM ManagePost;";
	$r = mysqli_query($dbc,$query);
	while($row = mysqli_fetch_array($r)){
		$sitemap_content .= "<url><loc>http://www.tinycent.com/post=".$row['id'].";desc=".$row['title']."</loc></url>";
		echo "<a href='".$row['id']."'>".$row['title']."</a><br/>";
	}
//}
	$sitemap_content .="</urlset>";
	echo $sitemap_content;
	//$sitemap = fopen("sitemap.xml","w");
	//fwrite($sitemap, $sitemap_content);
*/
include 'sitemap-git.php';
$sitemap = new Sitemap('http://tinycent.com');  
$sitemap->setPath('xmls/');
$query = "SELECT * FROM ManagePost;";
	$r = mysqli_query($dbc,$query);
	while($row = mysqli_fetch_array($r)){
		//$sitemap_content .= "<url><loc>http://www.tinycent.com/post=".$row['id'].";desc=".$row['title']."</loc></url>";
		$title = str_replace(' ', '_', $row['title']);
		$sitemap->addItem('/post/' . $title, '0.6', 'weekly');
		echo "".$title."<br/>";
	}
$sitemap->createSitemapIndex('http://tinycent.com/sitemap/', 'Today');
// $name = str_replace(' ', '_', $name);