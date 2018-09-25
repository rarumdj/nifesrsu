
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
<?php
include('../../connection.php');


$gen_id = $_POST['exco'];

$select_exco = "SELECT * FROM executive WHERE gen_id = '$gen_id'";
$result_exco = mysql_query($select_exco);

$num_row = mysql_num_rows($result_exco);

if ($num_row > 0) {



   ?>
   <form id="delete" action="generation.php" onsubmit="return confirm('Are You Sure You Want to Delete Exco?');" method="POST">
   <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th align="" valign="middle">Full Name</th>
                                            <th align="" valign="middle">Sex</th>
                                            <th align="" valign="middle">Phone</th>
                                            <th align="" valign="middle">Department</th>
                                            <th align="" valign="middle">Phone</th>
                                            <th align="" valign="middle">Level</th>
                                            <th align="" valign="middle">Office</th>
                                            <th align="" valign="middle" colspan="2">Edit</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    while ($row = mysql_fetch_assoc($result_exco)) {

                                            $id = $row['id'];
                                             $fullname = $row['fullname'];
                                              $sex = $row['gender'];
                                             $phone = $row['phone'];
                                             $dept   = $row['department'];
                                             $email = $row['email'];
                                             $level = $row['level'];
                                             $office = $row['office'];
                                             $gen_id = $row['gen_id'];
                                        
                                    
                                    ?>
                                    <tbody>
                                        
                                        <tr>
                                            <td align="" valign="middle"><?php echo $fullname; ?></td>
                                            <td align="" valign="middle"><?php echo $sex; ?></td>
                                            <td align="" valign="middle"><?php echo $phone; ?></td>
                                            <td align="" valign="middle"><?php echo $dept; ?></td>
                                            <td align="" valign="middle"><?php echo $email; ?></td>
                                            <td align="" valign="middle"><?php echo $level; ?></td>
                                            <td align="" valign="middle"><?php echo $office; ?></td>
                                            <td align="" valign="middle"><a href="delete_action.php?id=<?php echo $id; ?>" data-confirm="Are You Sure You Want to Delete Exco?" id="delete" class="btn btn-danger" title="Click To Delete">&#10008;</a></td>
                                           <td align="" valign="middle"><a href="edit_exco.php?id=<?php echo $id; ?>" onclick="" class="btn btn-primary" title="Click To Edit">&#9997;</a></td>
                                        </tr>
                                    </tbody>
                                    <?php
                                    }
                                    ?>
                                </table>

                                </form>


                            

                            </div>

                            <?php
                            
}

else {
    echo "<h1>No Member Yet</h1>";
}
?>



<script>
// $('#delete').on("click", function (e) {
//     e.preventDefault();

//     var choice = confirm($(this).attr('data-confirm'));

//     if (choice) {
//         window.location.href = $(this).attr('href');
//     }
// });

var elems = document.getElementsByClassName('btn btn-danger');
var confirmIt = function (e) {
    if (!confirm('Are you sure?')) e.preventDefault();
};
for (var i = 0, l = elems.length; i < l; i++) {
    elems[i].addEventListener('click', confirmIt, false);
}

 /*$(function() {
        $(document).on('click','.delbutton',function(){
        var element = $(this);
        var del_id = element.attr("id");
        var info = 'id=' + del_id;
        if(confirm("Are you sure you want to delete this Record?")){
            $.ajax({
                type: "POST",
                url: "delete_action.php",
                data: info,
                success: function(){  } 
            });
        }
        return false;
        });
        });*/


</script>
