<?php
    require('includes/connection.php');
    if (isset($_POST['submit'])) 
    {
        
        $name       = $_POST['pro_name'];
        $price      = $_POST['pro_price'];
        $desc       = $_POST['pro_desc'];
        $cat_id     = $_POST['cat_id'];
        
        // echo "<pre>";
        // print_r($_FILES);die;

        $image_name  = $_FILES['image']['name'];
        $tmp_name    = $_FILES['image']['tmp_name'];
        $path        = 'uploads/';
        
        // where FILE_NAME is the name attribute of the file input in your form
        $fileError = $_FILES["image"]["error"]; 
        switch($fileError) 
        {
            case UPLOAD_ERR_INI_SIZE:
        // Exceeds max size in php.ini
            echo "<script>alert('max size in php.ini')</script>";
            break;
            case UPLOAD_ERR_PARTIAL:
        // Exceeds max size in html form
            echo "<script>alert('max size in html form')</script>";
            break;
            case UPLOAD_ERR_NO_FILE:
        // No file was uploaded
            echo "<script>alert('No file was uploaded!')</script>";
            break;
            case UPLOAD_ERR_NO_TMP_DIR:
        // No /tmp dir to write to
            echo "<script>alert('Missing a temporary folder')</script>";
            break;
            case UPLOAD_ERR_CANT_WRITE:
        // Error writing to disk
            echo "<script>alert('Failed to write file to disk')</script>";
            break;
            default:
        // No error was faced! Phew!
            

            move_uploaded_file($tmp_name, $path.$image_name);
        
            //add new record to DB
            $query = "insert into product(pro_name , pro_price ,pro_desc , pro_image  , cat_id)
                  values('$name' , $price , '$desc' , '$image_name'  , $cat_id)";
            
            // echo $query; die;

            mysqli_query($conn, $query);
        
            header('location:manage_product.php');
            
            // break;
        }
                    
        
    }
?>


<?php  include('includes/header.php'); ?>

<!-- Form Examples area start-->
    <!-- Form Examples area start-->
    <div class="form-example-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-example-wrap">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="cmp-tb-hd">
                            <h2>Product information</h2>

                        </div>
                        <div class="form-example-int">
                            <div class="form-group">
                                <label>Product Name </label>
                                <div class="nk-int-st">
                                    <input name="pro_name" type="text" class="form-control input-sm" >
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int mg-t-15">
                            <div class="form-group">
                                <label>Product Price</label>
                                <div class="nk-int-st">
                                    <input name="pro_price" type="number" class="form-control input-sm" >
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int mg-t-15">
                            <div class="form-group">
                                <label>Product Image</label>
                                <div class="nk-int-st">
                                    <input id="image" name="image" type="file" class="form-control input-sm" >
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int mg-t-15">
                            <div class="form-group">
                                <label>Product Description</label>
                                <div class="nk-int-st">
                                    <input name="pro_desc" type="text" class="form-control input-sm" >
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int mg-t-15">
                            <div class="form-group">
                                <label>Category name</label>
                                <div class="nk-int-st">
                                   <select name='cat_id' class="form-control input-sm">
                                            <?php
                                                //get data from category
                                                $query  = "select * from category";
                                                $result = mysqli_query($conn , $query);
                                                while ($category = mysqli_fetch_assoc($result)) 
                                                {
                                                    echo "<option value ='{$category['cat_id']}'>{$category['cat_name']}</option>";
                                                }

                                            ?>
                                        </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-example-int mg-t-15">
                            <button id="submit" type="submit" name="submit" class="btn btn-success notika-btn-success">Submit</button>
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
                            <h2>Product Table</h2>
                           
                        </div>
                        <div class="bsc-tbl-cls">
                            <table class="table table-cl">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Image</th>
                                        <th>Description</th>
                                        <th>Category Name</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php
                                        
                                  $query="select * from product inner join category on category.cat_id=product.cat_id";
                                        $result = mysqli_query($conn , $query);
                                        
                                        while ($product = mysqli_fetch_assoc($result)) 
                                        {
                                            echo "<tr class='active'>";
                                            echo "<td>{$product['pro_id']}</td>";
                                            echo "<td>{$product['pro_name']}</td>";
                                            echo "<td>{$product['pro_price']}</td>";
                                            echo "<td><img src='uploads/{$product['pro_image']}' width='200px' height='200px'></td>";
                                            echo "<td>{$product['pro_desc']}</td>";
                                            echo "<td>{$product['cat_name']}</td>";
                                            echo "<td><a href='edit_pro.php ? id={$product['pro_id']}' class='btn btn-info'>Edit</a></td>";
                                            echo "<td><a href='delete_pro.php ? id={$product['pro_id']}' class='btn btn-danger'>Delete</a></td>";
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

<script type="text/javascript">
    
    $(document).ready(function()
    {
       
        $('#submit').click(function()
        {

            var image_name = $('#image').val();
            if (image_name == '') 
            {
                alert('please select image');
                return false;
            }
            else
            {
                var ext = $('#image').val().split('.').pop().toLowerCase();
                if (jQuery.inArray(ext , ['jpg' , 'jpeg' , 'png' , 'pdf' , 'gif']) == -1) 
                {
                    alert('invalid Image file!');
                    $('#image').val('');
                    return false;
                }
            }

        });

    });

</script>