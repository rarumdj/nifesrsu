<?php
require('connection.php');
if (isset($_POST['qfaculty'])){
            $faculty = $_POST['qfaculty'];
            $department = $_POST['qdepartment'];
            $level = $_POST['qlevel'];
            $sem = $_POST['qsem'];
            // print "<script>window.location.assign('e_library.php?faculty=$faculty&department=$department&level=$level')</script>";

            if ($department == 'Animal Science' OR 'Forestry And Environment' OR 'Food Science And Technology' OR 'Home Science And Management' OR 'Fisheries' OR 'Crop/soil Science' OR 'Agricultural Economics And Extension' OR 'Petroleum Engineering' OR 'Mechanical Engineering' OR 'Marine Engineering' OR 'Civil Engineering' OR 'Chemical/petrochemical Engineering' OR 'Agricultural And Environmental Engineering' OR 'Electrical Engineering' OR 'Land Survey' OR 'Estate Management' OR 'Quantity Surveying' OR 'Architecture' OR 'Urban And Regional Planning' OR 'Business Law' OR 'International Law' OR 'Private Property Law' OR 'Public Law' OR 'Banking and Finance' OR 'Accountancy' OR 'Mass Communication' OR ' Office And Information Management' OR 'Marketing' OR 'Management' OR 'Secretarial Administration' OR 'Mathematics' OR 'Computer Science' OR 'Physics' OR 'Chemistry' OR 'Medical Laboratory Science' OR 'Applied And Environmental Biology' OR 'Science And Technical Education' OR 'Educational Foundations' OR 'Business Education' && $level == '100' OR '200' OR '300' OR '400' OR '500' && $sem == '1' OR '2') {
                $search_question = "SELECT * FROM questions WHERE ((department = '$department') AND (level = '$level') AND (sem = '$sem'))"; ?>
<a href="qform.php" class="button ajax-fetch">Back to Form</a>
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th align="" valign="middle">Course/Code</th>
              <th align="" valign="middle">Semester</th>
              <th align="" valign="middle">level</th>
              <th align="" valign="middle">Department</th>
              <th align="" valign="middle">Download</th>
              <th align="" valign="middle">Size</th>
              <th align="" valign="middle">File Type</th>
            </tr>
          </thead>
          <?php  $result_quest = mysql_query($search_question);
                $qsearchNum = mysql_num_rows($result_quest);

                if ($qsearchNum > 0) {
                    while ($row = mysql_fetch_assoc($result_quest)) {
                        $rowcourse = $row['file_name'];
                        $rowdepartment = $row['department'];
                        $rowlevel = $row['level'];
                        $rowsem = $row['sem'];
                        $rowfile_size = $row['file_size'];
                        $newfilesize = $rowfile_size / 1024 / 1024;
                        $newr = round($newfilesize, 2);
                        $rowtype = $row['type'];
                        $rowimg_id = $row['img_id'];
                        $rowcontent = $row['content']; ?>
          <tbody>
            <tr>
              <td align="" valign="middle"><?php echo $rowcourse; ?></td>
              <td align="" valign="middle"><?php echo $rowsem; ?></td>
              <td align="" valign="middle"><?php echo $rowlevel; ?></td>
              <td align="" valign="middle"><?php echo $rowdepartment; ?></td>
              <td align="" valign="middle"><?php ?><a href="admin/acad/download.php?img_id=<?php echo $rowimg_id; ?>" >Download</a></td>
              <td align="" valign="middle"><?php echo $newr; ?>MB</td>
              <td align="" valign="middle"><?php echo $rowtype; ?></td>
            </tr>
          </tbody>


          <?php
                    }
                } else {
                    echo $errormsg = 'No Question';
                }
            }
      
          ?>
        </table>
        <?php
        } elseif
            (isset($_POST['mfaculty'])){
                $faculty = $_POST['mfaculty'];
                $department = $_POST['mdepartment'];
                $level = $_POST['mlevel'];
                $sem = $_POST['msem'];
    
                // print "<script>window.location.assign('e_library.php?faculty=$faculty&department=$department&level=$level')</script>";
    
                if ($department == 'Animal Science' OR 'Forestry And Environment' OR 'Food Science And Technology' OR 'Home Science And Management' OR 'Fisheries' OR 'Crop/soil Science' OR 'Agricultural Economics And Extension' OR 'Petroleum Engineering' OR 'Mechanical Engineering' OR 'Marine Engineering' OR 'Civil Engineering' OR 'Chemical/petrochemical Engineering' OR 'Agricultural And Environmental Engineering' OR 'Electrical Engineering' OR 'Land Survey' OR 'Estate Management' OR 'Quantity Surveying' OR 'Architecture' OR 'Urban And Regional Planning' OR 'Business Law' OR 'International Law' OR 'Private Property Law' OR 'Public Law' OR 'Banking and Finance' OR 'Accountancy' OR 'Mass Communication' OR ' Office And Information Management' OR 'Marketing' OR 'Management' OR 'Secretarial Administration' OR 'Mathematics' OR 'Computer Science' OR 'Physics' OR 'Chemistry' OR 'Medical Laboratory Science' OR 'Applied And Environmental Biology' OR 'Science And Technical Education' OR 'Educational Foundations' OR 'Business Education' && $level == '100' OR '200' OR '300' OR '400' OR '500' && $sem == '1' OR '2') {
                    $search_material = "SELECT * FROM materials WHERE ((department = '$department') AND (level = '$level') AND (sem = '$sem'))"; ?>
          <a href="mform.php" class="button ajax-fetch1">Back to Form</a>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
              <thead>
                <tr>
                  <th align="" valign="middle">Course/Code</th>
                  <th align="" valign="middle">Semester</th>
                  <th align="" valign="middle">level</th>
                  <th align="" valign="middle">Department</th>
                  <th align="" valign="middle">Download</th>
                  <th align="" valign="middle">Size</th>
                  <th align="" valign="middle">File Type</th>
                </tr>
              </thead>
              <?php  $result_mat = mysql_query($search_material);
                    $msearchNum = mysql_num_rows($result_mat);
    
                    if ($msearchNum > 0) {
                        while ($row = mysql_fetch_assoc($result_mat)) {
                            $rowcourse = $row['file_name'];
                            $rowdepartment = $row['department'];
                            $rowlevel = $row['level'];
                            $rowsem = $row['sem'];
                            $rowfile_size = $row['file_size'];
                            $newfilesize = $rowfile_size / 1024 / 1024;
                            $newr = round($newfilesize, 2);
                            $rowtype = $row['type'];
                            $rowimg_id = $row['img_id'];
                            $rowcontent = $row['content']; ?>
              <tbody>
                <tr>
                  <td align="" valign="middle"><?php echo $rowcourse; ?></td>
                  <td align="" valign="middle"><?php echo $rowsem; ?></td>
                  <td align="" valign="middle"><?php echo $rowlevel; ?></td>
                  <td align="" valign="middle"><?php echo $rowdepartment; ?></td>
                  <td align="" valign="middle"><?php ?><a href="admin/acad/download.php?img_id=<?php echo $rowimg_id; ?>" >Download</a></td>
                  <td align="" valign="middle"><?php echo $newr; ?>MB</td>
                  <td align="" valign="middle"><?php echo $rowtype; ?></td>
                </tr>
              </tbody>
    
    
              <?php
                        }
                    } else {
                        echo $errormsg = 'No Material';
                    }
                }
            
              ?>
            </table>
            <?php 
        } elseif
            (isset($_POST['pfaculty'])){
                $faculty = $_POST['pfaculty'];
                $department = $_POST['pdepartment'];
                $level = $_POST['plevel'];
    
                // print "<script>window.location.assign('e_library.php?faculty=$faculty&department=$department&level=$level')</script>";
    
                if ($department == 'Animal Science' OR 'Forestry And Environment' OR 'Food Science And Technology' OR 'Home Science And Management' OR 'Fisheries' OR 'Crop/soil Science' OR 'Agricultural Economics And Extension' OR 'Petroleum Engineering' OR 'Mechanical Engineering' OR 'Marine Engineering' OR 'Civil Engineering' OR 'Chemical/petrochemical Engineering' OR 'Agricultural And Environmental Engineering' OR 'Electrical Engineering' OR 'Land Survey' OR 'Estate Management' OR 'Quantity Surveying' OR 'Architecture' OR 'Urban And Regional Planning' OR 'Business Law' OR 'International Law' OR 'Private Property Law' OR 'Public Law' OR 'Banking and Finance' OR 'Accountancy' OR 'Mass Communication' OR ' Office And Information Management' OR 'Marketing' OR 'Management' OR 'Secretarial Administration' OR 'Mathematics' OR 'Computer Science' OR 'Physics' OR 'Chemistry' OR 'Medical Laboratory Science' OR 'Applied And Environmental Biology' OR 'Science And Technical Education' OR 'Educational Foundations' OR 'Business Education' && $level == '100' OR '200' OR '300' OR '400' OR '500') {
                    $search_project = "SELECT * FROM projects WHERE ((department = '$department') AND (level = '$level'))"; ?>
          <a href="pform.php" class="button ajax-fetch2">Back to Form</a>
            <table class="table table-striped table-bordered table-hover">
              <thead>
                <tr>
                  <th align="" valign="middle">Course/Code</th>
                  <th align="" valign="middle">level</th>
                  <th align="" valign="middle">Department</th>
                  <th align="" valign="middle">Download</th>
                  <th align="" valign="middle">Size</th>
                  <th align="" valign="middle">File Type</th>
                </tr>
              </thead>
              <?php  $result_proj = mysql_query($search_project);
                    $psearchNum = mysql_num_rows($result_proj);
    
                    if ($psearchNum > 0) {
                        while ($row = mysql_fetch_assoc($result_proj)) {
                            $rowcourse = $row['file_name'];
                            $rowdepartment = $row['department'];
                            $rowlevel = $row['level'];
                            $rowfile_size = $row['file_size'];
                            $newfilesize = $rowfile_size / 1024 / 1024;
                            $newr = round($newfilesize, 2);
                            $rowtype = $row['type'];
                            $rowimg_id = $row['img_id'];
                            $rowcontent = $row['content']; ?>
              <tbody>
                <tr>
                  <td align="" valign="middle"><?php echo $rowcourse; ?></td>
                  <td align="" valign="middle"><?php echo $rowlevel; ?></td>
                  <td align="" valign="middle"><?php echo $rowdepartment; ?></td>
                  <td align="" valign="middle"><?php ?><a href="admin/acad/download.php?img_id=<?php echo $rowimg_id; ?>" >Download</a></td>
                  <td align="" valign="middle"><?php echo $newr; ?>MB</td>
                  <td align="" valign="middle"><?php echo $rowtype; ?></td>
                </tr>
              </tbody>
    
    
              <?php
                        }
                    } else {
                        echo $errormsg = 'No Project';
                    }
                }
            
              ?>
            </table>
           <?php }
        
        ?>
        <script>
         jQuery(".ajax-fetch").click(function(e){
          e.preventDefault();
          jQuery.get(jQuery(this).attr("href"), function(data) {
             jQuery("#qform-container").html(data);
          });
       });

       jQuery(".ajax-fetch1").click(function(e){
          e.preventDefault();
          jQuery.get(jQuery(this).attr("href"), function(data) {
             jQuery("#mform-container").html(data);
          });
       });

       jQuery(".ajax-fetch2").click(function(e){
          e.preventDefault();
          jQuery.get(jQuery(this).attr("href"), function(data) {
             jQuery("#pform-container").html(data);
          });
       });
</script>