<!--the code below is the connection to the database-->
 <?php include "Includes/db.php";?>
  <!--the  code below adds the header to the page-->
   <?php include "Includes/header.php" ?>

<!--   the code below adds a Navigation bar to this page-->
    <?php include "Includes/navigation.php";?>
    
<!--    Adds an image slider to this page-->
    <?php include "Includes/slider.php";?>
    
    

    <hr style="height:3px; background-color:black;">

<!--     the code below adds a sign in modal to the page-->
    <?php include "Includes/signIn.php";?>
    
<!--    the code below adds a sign up modal to the page-->
    <?php include "Includes/signUp.php";?>
    

    
<!--          the code below adds a category Sidebar to this page-->
         <?php include "Includes/categories.php"?>
           
           
            <!--               Main Content-->

            <div class="col-md-8">
                <h3>Available Books</h3>
                <hr>
                <?php
    
                      if(isset($_GET['category'])){
                          $book_category_id = $_GET['category'];
                 
                 //Selecting all books from the book_info in the bookstore database
                 $book_query = "SELECT * FROM book_info WHERE book_category_id = $book_category_id";
                 $run_query = mysqli_query($connection,$book_query);
                
                //Checking if there are items in the table
             
                    while($row = mysqli_fetch_array($run_query)){
                        $book_id = $row['book_id'];
                        $book_title = $row['book_title'];
                        $book_author = $row['book_author'];
                        $book_image = $row['book_image'];
                        $book_price = $row['book_price'];        
                ?>
                 <div class="col-md-3">
                    <div class="panel panel-warning">
                        <div class="panel-heading"> <h5><?php echo $book_title?></h5></div>
                        <div class="panel-body">
                            <a href="book_info.php"><img src="img/<?php echo $book_image?>" alt="" style="width:180px; height:200px"></a>
                        
                         <h5><?php echo $book_author?></h5>
                         <h5>$ <?php echo $book_price?></h5>
                         <div class="panel-heading"></div>
                         <a class="btn btn-info btn-lg btn-block" book_id="$book_id"><i class="fa fa-shopping-cart"></i><strong> Add to Cart </strong></a>
                        </div>
                   </div>
                </div>  
                    <?php    }    }?>   
                   
        </div>
            <div class="col-md-1"></div>
        </div>

    </div>
    <br>

<!--the code below adds a footer to the page-->
  <?php include "Includes/footer.php"?>