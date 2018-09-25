<?php
$gen_id = $_POST['exco'];

?>
<!DOCTYPE <html>
    

                                <div class="row">
                                <form role="form" class="selectForm" id="selectForm" action="form_action.php" method="POST" enctype="multipart/form-data">
                                    <div class="col-md-6">
                                     <div class="form-group">
                                            <label>Full Name</label>
                                            <input class="form-control" placeholder="First & Last Name" name="fullname" required="required" />
                                        </div>
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <select class="form-control" name="gender">
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Faculty</label>
                                            <select class="form-control" id="faculty" onchange="changeCat(this);">
                                                <option selected>Select Your Faculty</option>
                                                <option value="A">Agriculture</option>
                                                <option value="B">Engineering</option>
                                                <option value="C">Environmental Sciences</option>
                                                <option value="D">Law</option>
                                                <option value="Q">Management Sciences</option>
                                                <option value="F">Sciences</option>
                                                <option value="G">Technical & Science Education</option>
                                            </select>
                                            </div>
                                            <div class="form-group">
                                            <label>Department</label>
                                            <select class="form-control" name="department" id="category">
                                                <option>Select Your Department</option>
                                            </select>
                                            </div>
                                            <div class="form-group">
                                            <label>Office</label>
                                            <select class="form-control" name="office">
                                                <option>Select Office</option>
                                                <option>President</option>
                                                <option>Vice President</option>
                                                <option>General Secetretary</option>
                                                <option>Asst. General Secetretary</option>
                                                <option>Prayer Secetretary</option>  
                                                <option>Assit. Prayer Secetretary</option>
                                                <option>Treasurer</option>
                                                <option>Financial Secetretary</option>
                                                <option>Bible Study Secetretary</option>
                                                <option>Assit. Bible Study Secetretary</option>
                                                <option>Evangelism Secetretary</option>
                                                <option>Follow-UP Secetretary</option>
                                                <option>Assit. Follow-UP Secetretary</option>
                                                <option>DCG Coordinator</option>  
                                                <option>Welfare Secetretary</option>
                                                <option>Lit/CWC Secetretary</option>
                                                <option>Brothers Coordinator</option>
                                                <option>Publicity Secetretary</option>
                                                <option>Organizing Secetretary</option>
                                                <option>Assit. Organizing Secetretary</option>
                                                <option>Gospel Singer Secetretary</option>
                                                <option>Gospel Theatre Secetretary</option>
                                                <option>Hall Coordinator</option>  
                                                <option>Hall B</option>
                                                <option>Hall C</option>
                                                <option>Hall D</option>
                                                <option>Hall E</option>
                                                <option>Hall F</option>
                                                <option>Hall G</option>
                                                <option>Hall H</option>
                                                <option>Hall NDDC</option>
                                                <option>FYBF Coordinator</option>
                                          </select>
                                        </div>
                                        </div>
                                
                                <div class="col-md-6">  
                                            <div class="form-group">
                                            <label>Phone</label>
                                            <input class="form-control" name="phone" placeholder="0810XXXXXXX" />
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" name="email" placeholder="john@hotmail.com" />
                                        </div>
                                        <div class="form-group">
                                            <label>Level</label>
                                            <select class="form-control" name="level">
                                                <option>Select Level</option>
                                                <option>100</option>
                                                <option>200</option>
                                                <option>300</option>
                                                <option>400</option>
                                                <option>500</option>  
                                          </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" name="pix">
                                        </div>
                                        </div>
                                        <div class="col-md-12">
                                        <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Submit">
                                        </div>
                                        <input type="hidden" value="<?php echo $gen_id; ?>" name="gen_id" /> 
                                </form>

                            </div>
                            </div>
  
    
                           
                            </html>
                          
