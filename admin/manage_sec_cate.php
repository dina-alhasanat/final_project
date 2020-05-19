<?php
  require('includes/connection.php');
  if(isset($_POST['submit'])){
        //fetch data from web form
        $name=$_POST['catname'];


  $query="insert into seccate (seccate_name)
          value ('$name')";

  mysqli_query($conn ,$query);

  header('location:manage_sec_cate.php');

// echo $query; die;

}

  ?>

<?php  include('includes/header.php'); ?>
<!-- Form Examples area start-->
    <div class="form-example-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-example-wrap" >
                    <form action="" method="post">
                        <div class="cmp-tb-hd">
                            <h2>Secondary category information</h2>

                        </div>
                        <div class="form-example-int">
                            <div class="form-group">
                                <label>Secondary category name </label>
                                <div class="nk-int-st">
                                    <input name="catname" type="text" class="form-control input-sm" >
                                </div>
                            </div>
                        </div>
                        
                        
                       
                        <div class="form-example-int mg-t-15">
                            <button class="btn btn-success notika-btn-success" type="submit" name="submit">Submit</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Normal Table area Start-->
    <div class="normal-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="normal-table-list mg-t-30">
                        <div class="basic-tb-hd">
                            <h2>secondary category Table</h2>
                           
                        </div>
                        <div class="bsc-tbl-cls">
                            <table class="table table-cl">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php
                                                $query  = 'select * from seccate';
                                                $result = mysqli_query($conn , $query);
                                                while ($seccate = mysqli_fetch_assoc($result)) {
                                                    echo "<tr class='active' >";
                                                    echo "<td>{$seccate['seccate_id']}</td>";
                                                    echo "<td>{$seccate['seccate_name']}</td>";
                                                    
                                                    //? id={$admin['admin_id']} >> get id in url
                                                    echo "<td><a href='edit_admin.php ? id={$seccate['seccate_id']}' class='btn btn-info'>Edit</a></td>";

                                                    echo "<td><a href='delete_admin.php ? id={$seccate['seccate_id']}' class='btn btn-danger'>Delete</td>";
                                                    echo "</tr>";
                                                }
                                            ?>
                                  
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Normal Table area End-->



<?php  include('includes/footer.php'); ?>