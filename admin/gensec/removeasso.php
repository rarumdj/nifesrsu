<?php
include('../../connection.php');
$asso = $_POST['removeasso'];           

$delete_asso = mysql_query("DELETE FROM associates WHERE int_id = '$asso'");

$reset = mysql_query("ALTER TABLE `associates` DROP `id`");
$reset = mysql_query("ALTER TABLE `associates` AUTO_INCREMENT = 1");
$reset = mysql_query("ALTER TABLE `associates` ADD `id` int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST");

$h = mysql_query("SELECT * FROM members WHERE int_id = '$asso'");
$num_row = mysql_num_rows($h);
if($num_row > 0){
while($row = mysql_fetch_array($h)){
$id = $row['int_id'];

?>
<form action="" method="POST" accept-charset="utf-8">
<td <?php echo "id='asso".$id."'" ?>><?php echo "<input type='button' class='btn btn-success' value='&#10004;' onclick='loadDoc(".$id.")' />" ?></td>
</form>
<?php
}
}
?>
<script>
function loadDoc(x) {
        var txt;
       var ok = confirm("Are You Sure You Want to Add!");
       if (ok == true){
        
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("asso"+x).innerHTML = xhttp.responseText;
    }
  };
  xhttp.open("POST", "makeasso.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("asso="+x);

  txt = "<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>Warning!</strong> Added Successfully!";
}else{
txt = "<div class='alert alert-warning alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>Warning!</strong> Cancelled";
}
document.getElementById("text").innerHTML = txt;
}
</script>