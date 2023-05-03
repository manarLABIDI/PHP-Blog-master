<?php
if(isset($_POST['submit']))
{
 $url=$_POST['url'];

 $rest_url = "http://api.facebook.com/restserver.php?format=json&method=links.getStats&urls=".urlencode($url);
 
 $json = json_decode(file_get_contents($rest_url),true);

 echo "Facebook Shares = ".$json[0][share_count];

 echo "Facebook Likes = ".$json[0][like_count];
 
 echo "Facebook Comments = ".$json[0][comment_count];
}
?>