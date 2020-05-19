<?php

    require('includes/connection.php');
    if (isset($_POST['submit'])) {
        $name     = $_POST['cust_name'];
        $email    = $_POST['cust_email'];
        $password = $_POST['cust_pass'];
        $mobile   = $_POST['cust_mobile'];
        $address  = $_POST['cust_address'];

        $query = "update customer set customer_name     = '$name',
                                      customer_email    = '$email',
                                      customer_password = '$password',
                                      mobile            = '$mobile',
                                      address           = '$address'
                  where customer_id = {$_GET['id']}";
        
        mysqli_query($conn , $query);

        header('location:manage_customer.php');
    }

    $query  = "select * from customer where customer_id = {$_GET['id']}";
    $result = mysqli_query($conn , $query);
    $customer = mysqli_fetch_assoc($result);

?>

<?php include('includes/header.php');?>

 <div class="form-example-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-example-wrap">
                    <form action="" method="post">
                        <div class="cmp-tb-hd">
                            <h2>Customer Update</h2>

                        </div>
                        <div class="form-example-int">
                            <div class="form-group">
                                <label>Customer Name </label>
                                <div class="nk-int-st">
                                   <input name="cust_name" type="text" class="form-control input-sm" value="<?php echo $customer['customer_name'] ?>">

                                </div>
                            </div>
                        </div>
                        <div class="form-example-int mg-t-15">
                            <div class="form-group">
                                <label>Customer Email</label>
                                <div class="nk-int-st">
                                    <input name="cust_email" type="Email" class="form-control input-sm" value="<?php echo $customer['customer_email'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int mg-t-15">
                            <div class="form-group">
                                <label>Customer Password</label>
                                <div class="nk-int-st">
                                    <input name="cust_pass" type="password" class="form-control input-sm" value="<?php echo $customer['customer_password'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int mg-t-15">
                            <div class="form-group">
                                <label>Customer Mobile</label>
                                <div class="nk-int-st">
                                   <input name="cust_mobile" type="number" class="form-control input-sm" value="<?php echo $customer['mobile'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int mg-t-15">
                            <div class="form-group">
                                <label>Customer Address</label>
                                <div class="nk-int-st">
                                   <input name="cust_address" type="text" class="form-control input-sm" value="<?php echo $customer['address'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int mg-t-15">
                            <div class="fm-checkbox">
                                <label><input type="checkbox" class="i-checks"> <i></i> Don't forget to check me out</label>
                            </div>
                        </div>
                        <div class="form-example-int mg-t-15">
                            <button class="btn btn-success notika-btn-success" type="submit" name="submit">Update</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include('includes/footer.php');?>