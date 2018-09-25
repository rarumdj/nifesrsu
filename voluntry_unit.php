<?php
require('connection.php');

?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Prospera Free - New Amazing HTML5 Template</title>
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/responsee.css">
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">
    <!-- CUSTOM STYLE -->
    <link rel="stylesheet" href="css/template-style.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>    
    <script type="text/javascript" src="js/validation.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    
<script>
//  function submit()
// 	{
// 	    var fullname = $("#fullname").val(); 
// 	    var email = $("#email").val(); 
// 	    var phone = $("#phone").val(); 
// 	    var address = $("#address").val();
//       var category = $("#category").val(); 
// 	    var level = $("#level").val(); 
// 	    var birth = $("#birth").val(); 
// 	    var unit = $("#unit").val();
// 	    var gender = $("#gender").val();     
// 		$.ajax({
// 					type: "POST",
// 					url: "insertvol.php",
// 					data: "fullname="+ fullname + "&email=" + email + "&phone=" + phone + "&address=" + address + "&category=" + category + "&level=" + level + "&birth=" + birth + "&unit=" + unit + "&gender=" + gender,
// 					success: function(response)
// 						{
//                             alert(response);
// 						}
// 					});
		
// 	}
  </script>
  </head>  
  
  <body class="size-1140">
    <header role="banner">    
      <!-- Top Bar -->
      <div class="top-bar background-white">
        <div class="line">
          <div class="s-12 m-6 l-6">
            <div class="top-bar-contact">
              <p class="text-size-12">Contact Us: 0800 200 200 | <a class="text-orange-hover" href="mailto:contact@sampledomain.com">contact@sampledomain.com</a></p>
            </div>
          </div>
          <div class="s-12 m-6 l-6">
            <div class="right">
              <ul class="top-bar-social right">
                <li><a href="/"><i class="icon-facebook_circle text-orange-hover"></i></a></li>
                <li><a href="/"><i class="icon-twitter_circle text-orange-hover"></i></a> </li>
                <li><a href="/"><i class="icon-google_plus_circle text-orange-hover"></i></a></li>
                <li><a href="/"><i class="icon-instagram_circle text-orange-hover"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Top Navigation -->
      <nav class="background-white background-primary-hightlight">
        <div class="line">
          <div class="s-12 l-2">
            <a href="index.php" class="logo"><img src="img/logo-free.png" alt=""></a>
          </div>
          <div class="top-nav s-12 l-10">
            <p class="nav-text"></p>
            <ul class="right chevron">
              <li><a href="index.php">Home</a></li>
              <li><a href="about.php">About</a></li>
              <li><a>Ministeries</a>
                <ul>
                  <li><a href="officials.php">Officials</a></li>
                  <li><a href="dcg.php">DCGS</a></li>
                  <li><a href="voluntry_unit.php">Voluntry Unit</a></li>
                  <li><a href="forms.php">Forms</a></li>
                </ul>
              </li>
              <li><a>Resources</a>
              <ul>
                  <li><a href="events.php">Events</a></li>
                  <li><a href="e_library.php">E-Library</a></li>
                  <li><a href="cwc.php">CWC Publication</a></li>
                </ul>
                </li>
              <li><a>Giving</a>
              <ul>
                  <li><a href="donate.php">Donate</a></li>
                </ul>
                </li>
              <li><a href="contact.php">Contact Us</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    
     <!-- MAIN -->
    <main role="main">
      <!-- Content -->
      <article>
        <header class="section background-primary text-center">
            <h1 class="text-white margin-bottom-0 text-size-50 text-thin text-line-height-1">VOLUNTRY UNIT</h1>
        </header>
        <div class="section background-white"> 
          <div class="line">

          <h3 style="font-size:32px; text-align:center">UNITS & MEETING DAYS</h3>

<button class="accordion">UNITS</button>
<div class="panel">
 <table>
 <thead>
   <tr>
     <th>
       Units
     </th>
     <th>
       Days
     </th>
     <th>
       Time
     </th>
   </tr>
 </thead>
 <tbody>
   <tr>
     <td>
       FOLLOW UP
     </td>
     <td>
        TUESDAYS
     </td>
     <td>
        5PM
     </td>
   </tr>
   <tr>
     <td>
       EVANGELISM
     </td>
     <td>
        TUESDAYS
     </td>
     <td>
        5PM
     </td>
   </tr>
   <tr>
     <td>
       SWAT
     </td>
     <td>
        TUESDAYS
     </td>
     <td>
        5PM
     </td>
   </tr>
   <tr>
     <td>
       GOSPEL SINGER
     </td>
     <td>
        TUESDAYS
     </td>
     <td>
        5PM
     </td>
   </tr>
 </tbody>
</table>
</div>

<h3 style="font-size:32px; text-align:center">GET INVOLVED</h3>

<button class="accordion">FORM</button>
<div class="panel">
<br>
<h4 style="text-align:center">Please Fill the forms correctly and indicate where intrested</h4>
<br>
<form class="customform text-white" id="form-id" novalidate="novalidate">
                <div class="line">
                  <div class="margin">
                    
                      <input id="fullname" name="fullname" class="required email border-radius" placeholder="Your Full Name" title="Your Fullname" type="text" required />
                   
                    
                      <input id="email" name="email" class="required name border-radius" placeholder="Your E-mail" title="Your e-mail" type="text" />

                      <input name="phone" id="phone" class="required name border-radius" placeholder="Your Phone" title="Your Phone" type="text" required />

                      <input name="address" id="address" class="required name border-radius" placeholder="Your adress" title="Your address" type="text" required />

                      <select class="required name border-radius" id="faculty" onchange="changeCat(this);">
                          <option selected>Select Your Faculty</option>
                          <option value="A">Agriculture</option>
                          <option value="B">Engineering</option>
                          <option value="C">Environmental Sciences</option>
                          <option value="D">Law</option>
                          <option value="Q">Management Sciences</option>
                          <option value="F">Sciences</option>
                          <option value="G">Technical & Science Education</option>
                      </select>

                      <select class="required name border-radius" name="category" id="category">
                          <option>Select Your Department</option>
                      </select>

                      <select id="level" name="level" class="required name border-radius">
                        <option>Your Level</option>
                        <option>100</option>
                        <option>200</option>
                        <option>300</option>
                        <option>400</option>
                        <option>500</option>
                      </select>

                      Gender:<br>
                       <select id="gender" name="gender" class="required name border-radius" required>
                        <option value="">Male</option>
                        <option>Female</option>
                      </select>
                
              <input id="birth" name="birth" class="required name border-radius" placeholder="Date of Birth @e.g May 22" title="Date of birth" type="dd/mm/yy" required/>

              <select id="unit" name="unit" class="required name border-radius" required>
                        <option>Select Unit</option>
                        <option>Publicty</option>
                        <option>Follow Up</option>
                        <option>SWAT</option>
                        <option>Evangelism</option>
                        <option>Welfare</option>
                      </select>
                   
              
                <div class="s-12"><p style="border: 0px solid transparent;border-radius: 4px;margin-top: 0;color: inherit;margin-bottom: 0;color: #3c763d;background-color: #dff0d8;border-color: #d6e9c6;border-top-color: #c9e2b3;color: #2b542c;text-align:center" id="message"></p> <br>
                <button type="button" class="btn btn-success btn-block" name="insert-data" id="insert-data" onclick="insertData()">Submit</button>
                              
                            </div> 
              </form>
          
</div>
</article>
</main>

 <section class="section background-white">
        <div class="line">
          <div class="s-12 m-4">
            <h4 class="headline text-thin text-s-size-30" style="font-size:25px !important">Fellowship Days</h4>
            <p class="text-size-20" style="font-size:17px !important">Sundays @Chapel Children Hall  -  5:00pm<br />
                                    Wednesdays @Chapel Children Hall  -  5:00pm<br />
                                    Thursday (Alpha Club) @NIFES SEC - 5:00pm
            </p><br>
            <a class="button border-radius background-primary text-size-12 text-white text-strong" href="/">GET MORE INFO</a>
          </div>
           <div class="s-12 m-4">
            <h4 class="headline text-thin text-s-size-30" style="font-size:25px !important">Join our Mailing List</h4>
            <p class="text-size-20" style="font-size:17px !important">Stay in touch, and get updates and news by mail from NIFES RSUST.</p><br>
            <a class="button border-radius background-primary text-size-12 text-white text-strong" href="/">GET MORE INFO</a>
          </div>
           <div class="s-12 m-4">
            <h4 class="headline text-thin text-s-size-30" style="font-size:25px !important">Got Jesus?</h4>
            <p class="text-size-20" style="font-size:17px !important">Have you ever wondered what being "born-again" is really about?</p><br>
            <a class="button border-radius background-primary text-size-12 text-white text-strong" href="/">GET MORE INFO</a>
          </div>
        </div>  
      </section> 
      </div>
      </div>
      </article>
    </main>

     <!-- FOOTER -->
    <footer>
      <!-- Social -->
      <div class="background-primary padding text-center">
        <a href="/"><i class="icon-facebook_circle icon2x text-white"></i></a> 
        <a href="/"><i class="icon-twitter_circle icon2x text-white"></i></a>
        <a href="/"><i class="icon-google_plus_circle icon2x text-white"></i></a>
        <a href="/"><i class="icon-instagram_circle icon2x text-white"></i></a>                                                                        
      </div>
      
      <!-- Main Footer -->
      
            <!-- Collumn 1 -->
       
      
      <!-- Bottom Footer -->
      <section class="padding background-dark">
      <div class="line">
      <div class="s-12 l-12" style="text-align:center">
        <p class="text-size-12"><b>NIFES RSU © <?php echo date("M, Y");?></b></p>
        <p class="text-size-12"><b><a title="NIFES RSU">Design and Coding By<br> Rasonad MultiTech</a></b></p>
      </div>
    </div>
      </section>
    </footer>
    <script type="text/javascript" src="js/responsee.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/template-scripts.js"></script> 
    <script type="text/javascript" src="js/fac_dept.js"></script> 
    <script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].onclick = function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  }
}
</script>  

<script>

//     function submit(x) {
//    var xhttp = new XMLHttpRequest();

//    var fullname = document.getElementById("fullname").value;
//       var email = document.getElementById("email").value;
//       var phone = document.getElementById("phone").value;
//     var address = document.getElementById("address").value;
//     var category = document.getElementById("category").value;
//     var level = document.getElementById("level").value;
//     var birth = document.getElementById("birth").value;
//     var unit = document.getElementById("unit").value;
//     var gender = document.getElementById("gender").value;

//   xhttp.onreadystatechange = function() {
//     if (xhttp.readyState == 4 && xhttp.status == 200) {
  
//     }
//   };
//   xhttp.open("POST", "insertvol.php", true);
//   xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
//   xhttp.send("fullname="+ fullname + "&email=" + email + "&phone=" + phone + "&address=" + address + "&category=" + category + "&level=" + level + "&birth=" + birth + "&unit=" + unit + "&gender=" + gender);
  
// }
</script>
<script type="text/javascript">

  function insertData() {

      var fullname = $("#fullname").val(); 
	    var email = $("#email").val(); 
	    var phone = $("#phone").val(); 
	    var address = $("#address").val();
      var category = $("#category").val(); 
	    var level = $("#level").val(); 
	    var birth = $("#birth").val(); 
	    var unit = $("#unit").val();
      var gender = $("#gender").val();
      var dataString = {fullname:fullname,email:email,phone:phone,address:address,category:category,level:level,birth:birth,unit:unit,gender:gender};
      // if (fullname==''&& email=='' && phone=='' && address=='' && category=='' && level=='' && birth=='' && unit=='' && gender=='');
      //   {
      //       alert("Please Fill All Fields");
      //   }
      //   else
      //   {

// AJAX code to send data to php file.
        $.ajax({
            type: "POST",
            url: "insertvol.php",
            data: dataString,
            dataType: "JSON",
            beforeSend: function() {                    
    $empty = $('form#form-id').find("input").filter(function() {
        return this.value === "";
    });
    if($empty.length) {
        alert('Please Carefully Fill Out All The Fields');
        return false;
    }else{
        return true;
    };
},
            success: function(data) {
             $("#message").html(data);
            $("p").addClass("alert alert-success");
            },
            error: function(err) {
            alert(err);
            },
            complete:function(){
            $('#form-id').each(function(){
                this.reset();   //Here form fields will be cleared.
            });
       }
        });

}
  
  </script>

   </body>
</html>
    

        


   
