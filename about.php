<!--the code below is the connection to the database-->
 <?php include "Includes/db.php";?>
  <!--the  code below adds the header to the page-->
   <?php include "Includes/header.php" ?>
<!--   the code below adds a Navigation bar to this page-->
    <?php include "Includes/navigation.php";?>
<!--    Adds an image slider to this page-->
    <hr style="height:3px; background-color:black;">
<!--     the code below adds a sign in modal to the page-->
    <?php include "Includes/signIn.php";?>
<!--    the code below adds a sign up modal to the page-->
    <?php include "Includes/signUp.php";?>
        
           
            
        </div>

    </div>
    <br>

<!--   Footer-->
    <footer class="blog-footer">
        <p>Norbert Amankwah Copyright &copy; All rights reserved</p>

        <p>
            <a href="about.php">Back to top</a>
        </p>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>