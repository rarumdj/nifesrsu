<?php
require('connection.php');
$id = $_POST['id'];

$h = mysql_query("SELECT * FROM likes WHERE post_id = '$id'");
$num_row = mysql_num_rows($h);

$row = mysql_fetch_array($h);
    $likes = $row['likes'];
    $dislikes = $row['dislikes'];

if ($likes == 0 && $dislikes == 0){
    $like_query = mysql_query("INSERT INTO likes (post_id, likes, dislikes, date_added) VALUES ('$id',1,'',NOW())"); 
} 
elseif ($likes < 1){
    $qu = mysql_query("UPDATE likes SET likes = likes + 1 WHERE likes = '$likes' AND  post_id =  '$id'");
} 
elseif($likes  > 0) {
    $qu = mysql_query("UPDATE likes SET likes = likes + 1 WHERE likes = '$likes' AND  post_id =  '$id'");
}

$h = mysql_query("SELECT * FROM likes WHERE post_id = '$id'");
$num_row = mysql_num_rows($h);

$row = mysql_fetch_array($h);
    $likes = $row['likes'];
    $dislikes = $row['dislikes'];
    $post_id = $row['post_id'];
    

if($likes == 0 AND $dislikes == 0){

    ?>
    <i class="" aria-hidden="true" id='like<?php echo "$post_id"; ?>'>
    <a class="btn btn-default btn-xs"  onclick="likes('<?php echo $post_id; ?>')"><i class="icon-sli-like" aria-hidden="true"></i>Likes<?php echo ($likes); ?></a>&nbsp;&nbsp;<a class="btn btn-default btn-xs" onclick="dislikes('<?php echo $post_id; ?>')"><i class="icon-sli-dislike" aria-hidden="true"></i>Dislikes<?php echo($dislikes); ?></a>
    </i>
      <?php }else{ ?>
        <i class="" aria-hidden="true" id='like<?php echo "$post_id"; ?>'>
    <a class="btn btn-default btn-xs"  onclick="likes('<?php echo $post_id; ?>')"><i class="icon-sli-like" aria-hidden="true"></i>Likes(<?php echo $likes; ?>)</a>&nbsp;&nbsp;<a class="btn btn-default btn-xs" onclick="dislikes('<?php echo $post_id; ?>')"><i class="icon-sli-dislike" aria-hidden="true"></i>Dislikes(<?php echo $dislikes; ?>)</a>
    </i>
      <?php } ?>