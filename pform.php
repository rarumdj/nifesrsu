<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<div id="pform-container">
        <form class="customform text-white" id="pselectForm" action="" method="POST">
        <p align="center" id='puploadPanel'>
          <div class="line">
            <div class="margin">

              <select name="pfaculty" id="pfaculty" class="required name border-radius" required>
                <option>Choose Your Faculty</option>
                <option value="agriculture">Agriculture</option>
                <option value="engineering">Engineering</option>
                <option value="environmental_science">Environmental Science</option>
                <option value="law">Law</option>
                <option value="management_science">Management Science</option>
                <option value="sciences">Science</option>
                <option value="education">Technical Science and Education</option>
              </select>
              <p style='display:none; position: relative; top: 5%; left: 40%; z-index: 5000; width: 422px; text-align: center; ' id='pwaitPanel'>
        <img src='loader.gif' title='Please Wait' />
    </p>
              <select name="pdepartment" id="pdepartment" class="required name border-radius" required>
                <option>Choose Your Department</option>
              </select>
              <select name="plevel" class="required name border-radius" required>
                <option>Choose Your Level</option>
                <option>100</option>
                <option>200</option>
                <option>300</option>
                <option>400</option>
                <option>500</option>
              </select>

              <div class="s-12"><button class="submit-form button background-primary border-radius text-white">Submit Button</button></div>

            </div>
          </div>
      </p>
        </form>
        </div>

        <!-- FORM SELECT OPTION -->
<script type="text/javascript" src="js/project.js"></script>
<script type="text/javascript" src="js/material.js"></script>
<script type="text/javascript" src="js/question.js"></script>
        <script type="text/javascript">
// CALL PROJECT DATABASE
$('#pselectForm').submit(function(e){
    e.preventDefault(); // Prevent Default Submission
    $.ajax({
    url: 'libdisplay.php',
    type: 'POST',
    data: $(this).serialize(), // it will serialize the form data
        dataType: 'html'
    })
    .done(function(data){
        $('#pform-container').fadeOut('slow', function(){
             $('#pform-container').fadeIn('slow').html(data);
        });
    })
    .fail(function(){
        alert('Submit Failed ... Try Again');    
    });
});
  
// GIF LOAD
    $(document).ready(function() {
        $("#pform-container").submit(function() {
            $("#puploadPanel").toggle();
            $("#pwaitPanel").toggle();
        });
    });

</script>