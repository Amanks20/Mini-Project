<!--        Side Bar-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1"></div>

            <div class="col-md-2">
                <center>
                    <h3>Categories</h3>
                </center>
                <div class="well well-md">
                    <div class="nav nav-pills nav-stacked">
                        <?php
                                 
                                 $query ="SELECT * FROM category";
                                 $select_all_post_sidebar = mysqli_query($connection,$query);
                                 
                                while($row = mysqli_fetch_assoc($select_all_post_sidebar)){
                                    $cat_id = $row['category_id'];
                                    $cat_title = $row['category_title'];
                                       echo "<li><a href='category.php?category=$cat_id'>{$cat_title}</a></li>";
                                }
                                
                                ?>
                       
                    </div>
                </div>
            </div>