<?php
require('connection.php');
// Very important to set the page number first.
if (!(isset($_GET['pageno']))) { 
	 $pageno = 1; 
} else {
	$pageno = intval($_GET['pageno']); 		
}


// Get the total number of rows in the table
$query = mysql_query("SELECT count(*) FROM videos");
$query_data = mysql_fetch_row($query);
$numrows = $query_data[0];

//Number of results displayed per page 	by default its 10.
$page_limit =  ($_GET["show1"] <> "" && is_numeric($_GET["show1"]) ) ? intval($_GET["show1"]) : 2;

//Calculate the last page based on total number of rows and rows per page. 
$last = ceil($numrows/$page_limit); 

//this makes sure the page number isn't below one, or more than our maximum pages 
if ($pageno < 1) { 
	$pageno = 1; 
} elseif ($pageno > $last)  { 
	$pageno = $last; 
}

$limit = 'LIMIT ' .($pageno - 1) * $page_limit .',' .$page_limit;
// $lower_limit = ($pageno - 1) * $page_limit;

$query  = mysql_query("SELECT * FROM videos ORDER BY id DESC $limit");
$num_row = mysql_num_rows($query);
if ($num_row > 0) {
  while ($row = mysql_fetch_assoc($query)) {
   $video_path = $row['video_path'];
   $title = $row['title'];
   $desc = $row['description'];
   $desct = substr($desc, 0, 150);
   $post_id = $row['post_id'];
   $views = $row['views'];
   $date = date("d/m/Y",strtotime($row['date_added']));
?>
  <div id='view<?php echo "$post_id"; ?>' class="col-md-6 w3-agileits-news-left" style="margin-top:10px;">
  <div class="col-sm-5 wthree-news-img">
	<a href="events_single.php?post_id=<?php echo $post_id; ?>" onclick="views('<?php echo $post_id; ?>')"><img src="<?php echo "admin/pub/".$img_path; ?>" alt="" /></a>
  </div>
  <div class="col-sm-7 wthree-news-info">
	<h5><a href="events_single.php?post_id=<?php echo $post_id; ?>" onclick="views('<?php echo $post_id; ?>')"><?php echo $title; ?></a></h5>
	<p><?php echo $desct; ?></p>
	<ul>
		<li><i class="icon-clock" aria-hidden="true"></i> <?php echo $date; ?></li>
		<li><i class="icon-eye" aria-hidden="true"></i> <?php echo $views; ?></li>
	  </ul>
	</div>
	<div class="clearfix"> </div>
  </div>
  
  <?php 
	  }
	}
		 
 ?>

<div class="clearfix"> </div>
<div class="wthree-news-top-left">
                   </div>
                    
                    


<div class="height30"></div>
<table width="50%" border="0" cellspacing="0" cellpadding="2"  align="center">
<tr>
	
  <!-- <td valign="top" align="left">
	
<label> Rows Limit: 
<select name="show1" onChange="changeDisplayRowCount(this.value);">
  <option value="10" <?php if ($_GET["show1"] == 2 || $_GET["show1"] == "" ) { echo ' selected="selected"'; }  ?> >10</option>
  <option value="20" <?php if ($_GET["show1"] == 20) { echo ' selected="selected"'; }  ?> >20</option>
  <option value="30" <?php if ($_GET["show1"] == 30) { echo ' selected="selected"'; }  ?> >30</option>
</select>
</label>

	</td> -->
  <td valign="top" align="center" >
  <ul id="myTab" class="nav nav-tabs" role="tablist">
	<?php
	if ( ($pageno-1) > 0) {
	?>	
	
	 <li role='presentation'><a href="javascript:void(0);" class="links" onclick="displayRecords1('<?php echo $page_limit;  ?>', '<?php echo 1; ?>');">First</a></li>
	 <li role='presentation'><a href="javascript:void(0);" class="links"  onclick="displayRecords1('<?php echo $page_limit;  ?>', '<?php echo $pageno-1; ?>');">Previous</a></li>
	<?php
	}
	//show1 page links
	for($i=1; $i<=$last; $i++) {
		if ($i == $pageno ) {
?>
		<li role='presentation'><a href="javascript:void(0);" class="selected" ><?php echo $i ?></a></li> 
<?php
	} else {  
?>
	<li role='presentation'><a href="javascript:void(0);" class="links"  onclick="displayRecords1('<?php echo $page_limit;  ?>', '<?php echo $i; ?>');" ><?php echo $i ?></a></li> 
<?php 
	}
} 
if ( ($pageno+1) <= $last) {
?>
	<li role='presentation'><a href="javascript:void(0);" onclick="displayRecords1('<?php echo $page_limit;  ?>', '<?php echo $pageno+1; ?>');" class="links">Next</a></li> 
<?php } if ( ($pageno) != $last) { ?>	
	<li role='presentation'><a href="javascript:void(0);" onclick="displayRecords1('<?php echo $page_limit;  ?>', '<?php echo $last; ?>');" class="links" >Last</a></li> 
<?php
	} 
?>
</td>
</ul>
	<td align="right" valign="center">
	Page <?php echo $pageno; ?> of <?php echo $last; ?>
	</td>
</tr>
</table>
