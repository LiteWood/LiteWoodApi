<?php
$ago = $_GET["day"];// Picture Time(Today:0，Yesterday:1，The Day Before Yesterday : 2 , NextDay : -1,Valid only after 16:00 on the same day)
if($ago=='')
	$ago=0;
$jsona = 'https://cn.bing.com/HPImageArchive.aspx?format=js&idx='.$ago.'&n=1';
function imgsrc($day)////Get The URL
{
	$data = json_decode(file_get_contents('https://cn.bing.com/HPImageArchive.aspx?format=js&idx='.$day.'&n=1'), true); // Get JSON From Bing
	return "https://cn.bing.com".$data['images'][0]['url'];//Return The URL
}
$url = imgsrc($ago);
header("Location:$url");//Redirect To The Picture
?>