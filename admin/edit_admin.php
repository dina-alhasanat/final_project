<?php

    require('includes/connection.php');
    if (isset($_POST['submit'])) {
        
        $email    = $_POST['admin_email'];
        $password = $_POST['admin_password'];
        $fullname = $_POST['fullname'];


        $query = "update admin set admin_email    = '$email',
                                   admin_password = '$password',
                                   fullname       = '$fullname'
                  where admin_id = {$_GET['id']}";
        
        // echo $query; die;
        mysqli_query($conn, $query);

        header('location:manage_admin.php');

    }

    $query  = "select * from admin where admin_id = {$_GET['id']}";
    $result = mysqli_query($conn , $query);
    $admin  = mysqli_fetch_assoc($result);

    // echo "<pre>";print_r($admin);
    // die;

?>

<?php include('includes/header.php');?>
<div class="form-example-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-example-wrap">
                    <form action="" method="post">
                        <div class="cmp-tb-hd">
                            <h2>Admin Update</h2>

                        </div>
                        <div class="form-example-int">
                            <div class="form-group">
                                <label>Admin Email </label>
                                <div class="nk-int-st">
                                    <input name="admin_email" type="text" class="form-control input-sm" value="<?php echo $admin['admin_email']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int mg-t-15">
                            <div class="form-group">
                                <label>Admin Password</label>
                                <div class="nk-int-st">
                                   <input  name="admin_password" type="password" class="form-control input-sm " value="<?php echo $admin['admin_password']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int mg-t-15">
                            <div class="form-group">
                                <label>Admin Fullname</label>
                                <div class="nk-int-st">
                                    <input  name="fullname" type="text" class="form-control input-sm" value="<?php echo $admin['fullname']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int mg-t-15">
                            <div class="fm-checkbox">
                                <label><input type="checkbox" class="i-checks"> <i></i> Don't forget to check me out</label>
                            </div>
                        </div>
                        <div class="form-example-int mg-t-15">
                            <button type="submit" name="submit"  class="btn btn-success notika-btn-success">Update</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php include('includes/footer.php');?>