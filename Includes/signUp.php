<?php
//Checking if 
    if(isset($_POST['submit'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $username = $_POST['user_name'];
        $password = $_POST['pass_word'];
        $email = $_POST['email'];
        $ph_num = $_POST['ph_num'];
        $address = $_POST['ad_dress'];
        
         //Password encryption
         //Creating the hash format
         $hashFormat = "$2y$10$"; // 10$ tells the crypt function the number of times to run the hash
         // Creating a salt variable to contain a string of at least 22 Characters
         $salt = "jesuswillsurelysavethem!";
         //concatenating the $hashFormat and $salt
         $conc_hash_salt = $hashFormat.$salt;
         $pass_word = crypt($password,$conc_hash_salt);

        
        //Inserting Details into the user_info table in the book_Store database.
        $query ="INSERT INTO user_info(user_firstname,user_lastname,username,pass_word,email,phone_number,ad_dress)";
        $query .= "VALUES('{$fname}','{$lname}','{$username}','{$pass_word}','{$email}','{$ph_num}','{$address}')";
        
        $insert_query= mysqli_query($connection,$query);
        
        if($insert_query){
            echo"<h4 class='alert alert-warning' data-dismiss='close'>Sign Up Successful<h4>";
        }
        
    }
?>
   

   
   
   <!--        SignUp Modal-->
    <div id="SignUp" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <center>
                        <h3 class="modal-title">Sign Up for Free</h3>
                    </center>
                </div>
                <div class="modal-body">            
                <form action="" method="post">
                    <div class="form-group">
                        <label for="fname"> First Name:</label> 
                        <input type="text" class="form-control" name="fname">
                    </div>
                     <div class="form-group">
                        <label for="lname">Last Name:</label>
                        <input type="text" class="form-control" name="lname">
                    </div>
                     <div class="form-group">
                        <label for="user_name">Username:</label>
                        <input type="text" class="form-control" name="user_name">
                    </div>
                     <div class="form-group">
                        <label for="pass_word">Password:</label>
                        <input type="password" class="form-control" name="pass_word">
                    </div>
                     <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                     <div class="form-group">
                        <label for="ph_num">Phone Number:</label>
                        <input type="tel" min="1" max="15" class="form-control" name="ph_num">
                    </div>
                     <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" name="ad_dress">
                    </div>
                    <button type="submit" class="btn btn-success" name="submit" style="width:162px">Sign Up</button>
                    
                    <button type="reset" class="btn btn-info"  style="width:162px">Cancel</button>
                    
                </form>
                </div>
                <div class="modal-footer">
                     <button class="btn btn-danger" type="button" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>