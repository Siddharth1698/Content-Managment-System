           
            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">




                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                     <label>Enter your tags here</label>
                    <form action="search.php" method="post">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" name="submit" type="submit">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    </form>
                    <!-- /.input-group -->
                </div>

<div class="well">
                    <h4>Login</h4>
                    <form action="login.php" method="post">
                    <div class="input-group">
                        <p>Enter username</p>

                        <input type="text" name="username" class="form-control">
                               <p>Enter password</p>

                        <input type="password" name="password" class="form-control">
                        </div>
                        <span class="input-group-btn">
                            <button class="btn btn-default" name="submit" type="submit">
                                <span class="glyphicon glyphicon-search">Login</span>
                        </button>
                        </span>
                    
                    </form>
                    <!-- /.input-group -->
                </div>



                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-12">

                            <ul class="list-unstyled">
                               <?php

                                        $query = "SELECT * FROM posts";
                                        $select_all_cat = mysqli_query($connection,$query);
                                       
                                       while ($row = mysqli_fetch_assoc($select_all_cat)) {
                                           $post_title = $row['post_title'];
                                       echo "<li><a href='#'>{$post_title}</a></li>";
                                       }

                                   ?>
               
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                       
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>