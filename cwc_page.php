<?php
require_once('connection.php');

// Very important to set the page number first.
if (!(isset($_GET['pagenum']))) { 
	 $pagenum = 1; 
} else {
	$pagenum = intval($_GET['pagenum']); 		
}


// Get the total number of rows in the table
$query = mysql_query("SELECT count(*) FROM publication");
$query_data = mysql_fetch_row($query);
$numrows = $query_data[0];

//Number of results displayed per page 	by default its 10.
$page_limit =  ($_GET["show"] <> "" && is_numeric($_GET["show"]) ) ? intval($_GET["show"]) : 2;

//Calculate the last page based on total number of rows and rows per page. 
$last = ceil($numrows/$page_limit); 

//this makes sure the page number isn't below one, or more than our maximum pages 
if ($pagenum < 1) { 
	$pagenum = 1; 
} elseif ($pagenum > $last)  { 
	$pagenum = $last; 
}

$limit = 'LIMIT ' .($pagenum - 1) * $page_limit .',' .$page_limit;
// $lower_limit = ($pagenum - 1) * $page_limit;

$query  = mysql_query("SELECT * FROM publication ORDER BY id DESC $limit");
$num_row = mysql_num_rows($query);
if ($num_row > 0) {
while ($row = mysql_fetch_assoc($query)) {
$title = $row['title'];
$id = $row['id'];
$author = $row['author'];
$date = date("F d, Y",strtotime($row['date_added']));
?>  
                 <div class="s-author">
<p><a href="cwc_single.php?post_id=<?php echo $id; ?>"><?php echo $title; ?> </p></a>
<p>By: <?php echo $author; ?></p>
<p>Posted: <?php echo $date; ?></p>
</div><hr>
  <?php 
	  }
	}
		 
 ?>

<div class="clearfix"> </div>
                    
                    


<div class="height30"></div>
<table width="50%" border="0" cellspacing="0" cellpadding="2"  align="center">
<tr>
	
  <!-- <td valign="top" align="left">
	
<label> Rows Limit: 
<select name="show" onChange="changeDisplayRowCount(this.value);">
  <option value="10" <?php if ($_GET["show"] == 2 || $_GET["show"] == "" ) { echo ' selected="selected"'; }  ?> >10</option>
  <option value="20" <?php if ($_GET["show"] == 20) { echo ' selected="selected"'; }  ?> >20</option>
  <option value="30" <?php if ($_GET["show"] == 30) { echo ' selected="selected"'; }  ?> >30</option>
</select>
</label>

	</td> -->
  <td valign="top" align="center" >
  <ul id="myTab" class="nav nav-tabs" role="tablist">
	<?php
	if ( ($pagenum-1) > 0) {
	?>	
	
	 <li role='presentation'><a href="javascript:void(0);" class="links" onclick="displayRecords('<?php echo $page_limit;  ?>', '<?php echo 1; ?>');">First</a></li>
	 <li role='presentation'><a href="javascript:void(0);" class="links"  onclick="displayRecords('<?php echo $page_limit;  ?>', '<?php echo $pagenum-1; ?>');">Previous</a></li>
	<?php
	}
	//Show page links
	for($i=1; $i<=$last; $i++) {
		if ($i == $pagenum ) {
?>
		<li role='presentation'><a href="javascript:void(0);" class="selected" ><?php echo $i ?></a></li> 
<?php
	} else {  
?>
	<li role='presentation'><a href="javascript:void(0);" class="links"  onclick="displayRecords('<?php echo $page_limit;  ?>', '<?php echo $i; ?>');" ><?php echo $i ?></a></li> 
<?php 
	}
} 
if ( ($pagenum+1) <= $last) {
?>
	<li role='presentation'><a href="javascript:void(0);" onclick="displayRecords('<?php echo $page_limit;  ?>', '<?php echo $pagenum+1; ?>');" class="links">Next</a></li> 
<?php } if ( ($pagenum) != $last) { ?>	
	<li role='presentation'><a href="javascript:void(0);" onclick="displayRecords('<?php echo $page_limit;  ?>', '<?php echo $last; ?>');" class="links" >Last</a></li> 
<?php
	} 
?>
</td>
</ul>
	<td align="right" valign="center">
	Page <?php echo $pagenum; ?> of <?php echo $last; ?>
	</td>
</tr>
</table>



