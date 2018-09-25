<?php
include('../../connection.php');
$asso = $_POST['asso'];           

$insert_asso = mysql_query("INSERT INTO associates (int_id, name, gender, birthday, phone, email, location,	year_of_graduation, date_added)
SELECT int_id, name, gender, birthday, phone, email, location, year_of_graduation, NOW()
FROM members
WHERE int_id = '$asso'");

$h = mysql_query("SELECT * FROM members WHERE int_id = '$asso'");
$num_row = mysql_num_rows($h);
if($num_row > 0){
while($row = mysql_fetch_array($h)){
$id = $row['int_id'];

?>
<form action="" method="POST" accept-charset="utf-8">
<td <?php echo "id='removeasso".$id."'" ?>><?php echo "<input type='button' class='btn btn-danger' value='&#10008;' onclick='loadDoc1(".$id.")' />" ?></td>
</form>
<?php
}
}
?>
<script>
    function loadDoc1(y) {
        var txt;
       var ok = confirm("Are You Sure You Want to Remove!");
       if (ok == true){
        
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("removeasso"+y).innerHTML = xhttp.responseText;
    }
  };
  xhttp.open("POST", "removeasso.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("removeasso="+y);

  txt = "<div class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>Warning!</strong> Successfully Removed!";
}else{
txt = "<div class='alert alert-warning alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>Warning!</strong> Cancelled";
}
document.getElementById("text").innerHTML = txt;
}
  </script> 
