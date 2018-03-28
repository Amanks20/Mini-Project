    <!--    Navigation Bar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
         <span class="sr-only">Toggle Navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
     </button>

            <a href="index.php" class="navbar-brand">Book Store</a>
            <!--      adding a search area-->
            <form action="#" method="post" class="navbar-form navbar-left">
                <div class="input-group">
                    <input name="search" type="text" class="form-control" placeholder="Search book by title,author or publisher..." style="width:400px;">
                    <span class="input-group-btn">
                            <button class="btn btn-primary" type="submit" name="submit">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                    </span>
                </div>
                <!--                end of input-group -->
            </form>

            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">Home</a></li>

                    <!-- creating a dropdown for Categories-->

                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header"><h5>All Categories</h5></li>
                            <li class="divider"></li>
                            <?php
                                 
                                 $query ="SELECT * FROM category";
                                 $select_all_post_sidebar = mysqli_query($connection,$query);
                                 
                                while($row = mysqli_fetch_assoc($select_all_post_sidebar)){
                                    $cat_id = $row['category_id'];
                                    $cat_title = $row['category_title'];
                                       echo "<li><a href='category.php?category=$cat_id'>{$cat_title}</a></li>";
                                }
                                
                                ?>
                       
                        </ul>
                    </li>

                    <li class=""><a href="#">Cart <i class="fa fa-shopping-cart" style=""></i></a></li>
                    <li class=""><a href="#" data-toggle="modal" data-target="#SignIn">SignIn <span class="glyphicon glyphicon-log-in"></span></a></li>
                    <li class=""><a href="#" data-toggle="modal" data-target="#SignUp">SignUp <i class="fa fa-user-plus"></i></a></li>
                    <li class=""><a href="about.php">About Us</a></li>
                </ul>
            </div>

        </div>
        <!--           end of container-->
    </nav>