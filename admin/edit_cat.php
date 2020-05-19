<?php
    require('includes/connection.php');
   $id   = '';
    $name = '';
    $image_name = '';

    if (isset($_POST['update'])) {
        $id              =$_POST['cat_id'];
        $name            = $_POST['cat_name'];
        $image_name      = $_FILES['image']['name'];
        
     if($_FILES['image']['error'] == 0)
     {   
             
        $query = "update category set cat_name      = '$name',
                                     cat_image       = '$image_name'
                  where cat_id = {$_GET['id']}";
        
        // print_r($query);die;
        
            move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/'.$_FILES['image']['name']);
            
        }
        else{
             $query = "update category set cat_name      = '$name'
                  where cat_id = $id ";
    }
    mysqli_query($conn , $query);
    header('location:manage_category.php');
        }

    $query   = "select * from category where cat_id = {$_GET['id']}";
    $result  = mysqli_query($conn , $query);
    $category = mysqli_fetch_assoc($result);



?>


<?php include('includes/header.php');?>
<!-- Form Examples area start-->
    <div class="form-example-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-example-wrap">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="cmp-tb-hd">
                            <h2>Category Update</h2>

                        </div>
                        <div class="form-example-int">
                            <div class="form-group">

                                <label>Category Name </label>
                                <div class="nk-int-st">
                                    <input name="cat_name" type="text" class="form-control input-sm" value="<?php echo $category['cat_name']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int mg-t-15">
                            <div class="form-group">
                                <label>Category Image</label>
                                <div class="nk-int-st">
                                    <input id="image" name="image" type="file" class="form-control input-sm" value="<?php echo $category['cat_image']; ?>"><?php echo "<img src='admin/uploads/{$category['cat_image']}' width='300px' height ='400px'>" ?>
                                    
                                
                                </div>
                            </div>
                        </div>
                   
                         <div class="form-example-int mg-t-15">
                             <button type="submit" name="update" class="btn btn-success notika-btn-success">Update</button>
                         </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php include('includes/footer.php');?>