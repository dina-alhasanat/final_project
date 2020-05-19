<?php
    require('includes/connection.php');
    
    $price= '';
    $name = '';
    $desc = '';
    
    $image_name ='';

    if (isset($_POST['update'])) {
       
        $name            = $_POST['pro_name'];
        $price           = $_POST['pro_price'];
        $cat_id            = $_POST['cat_id'];
        $desc            = $_POST['pro_desc'];
        $image_name      = $_FILES['image']['name'];

         if($_FILES['image']['error'] == 0)
                     {   
             
      $query = "update product set pro_name      = '$name',
                                     pro_price     =  $price,
                                     cat_id        =  $cat_id,
                                     pro_desc      = '$desc',
                                     pro_image       = '$image_name'
                                     where pro_id = {$_GET['id']}";
        
        // print_r($query);die;
        
            move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/'.$_FILES['image']['name']);
            
        }
        else{
             $query = "update product set pro_name      = '$name'
                  where prot_id = $id ";
    }
    mysqli_query($conn , $query);
    header('location:manage_product.php');
        }
        
 $query  = "select * from product where pro_id = {$_GET['id']}";
    $result = mysqli_query($conn , $query);
    $product  = mysqli_fetch_assoc($result);



?>

<?php include('includes/header.php');?>
 <!-- Form Examples area start-->
    <!-- Form Examples area start-->
    <div class="form-example-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-example-wrap">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="cmp-tb-hd">
                            <h2>Product Update</h2>

                        </div>
                        <div class="form-example-int">
                            <div class="form-group">
                                <label>Product Name </label>
                                <div class="nk-int-st">
                                    <input name="pro_name" type="text" class="form-control input-sm" value="<?php echo $product['pro_name']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int mg-t-15">
                            <div class="form-group">
                                <label>Product Price</label>
                                <div class="nk-int-st">
                                     <input id="cc-name" name="pro_price" type="number" class="form-control input-sm" value="<?php echo $product['pro_price']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int mg-t-15">
                            <div class="form-group">
                                <label>Product Image</label>
                                <div class="nk-int-st">
                                    <input id="image" name="image" type="file" class="form-control input-sm" value="<?php echo $product['pro_image']; ?>"><?php echo "<img src='admin/uploads/{$product['pro_image']}' width='200px' height ='200px'>" ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int mg-t-15">
                            <div class="form-group">
                                <label>Product Description</label>
                                <div class="nk-int-st">
                                   <input name="pro_desc" type="text" class="form-control input-sm" value="<?php echo $product['pro_desc']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int mg-t-15">
                            <div class="form-group">
                                <label>Category name</label>
                                <div class="nk-int-st">
                                           <select name='cat_id' class="form-control choose">
                                            
                                            <?php
                                                
                                                $query  = "select * from category";
                                                $result = mysqli_query($conn , $query);
                                                
                                                while ($row = mysqli_fetch_array($result))
                                                {
                                                    echo "<option value='{$row['cat_id']}'>{$row['cat_name']}</option>";
                                                    
                                                    if($row['cat_id'] == $product['cat_id'])
                                                    {
                                                        echo "<option selected value='{$product['cat_id']}'>{$product['cat_name']}</option>";
                                                        
                                                    }
                                                }
                                                
                                            ?> 

                                        </select>
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