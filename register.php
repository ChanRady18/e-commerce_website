<div class="container">

    <script>
    $(document).ready(function() {
        $("#password_confirm2").on('keyup', function() {

            var password_confirm1 = $("#password_confirm1").val();

            var password_confirm2 = $("#password_confirm2").val();

            // alert(password_confirm2);

            if (password_confirm1 == password_confirm2) {

                $("#status_for_comfirm_password").html('<p style="color:#28a745;">Password match</p>');

            } else {
                $("#status_for_comfirm_password").html(
                    '<p style="color:#dc3545;">Password do not match</p>');
            }

        });
    });
    </script>

    <!-- <div class="registerbox">
        <div class="register_box">
            <div class="inner_login">
                <h1 align="center">Register.</h1>
                <form method="POST" action="" enctype="multipart/form-data">
                    <label><b>Name : </b></label>
                    <input type="text" name="name" placeholder="Username" required>

                    <label><b>Email : </b></label>
                    <input type="text" name="email" placeholder="Email" required>

                    <label><b>Password : </b></label>
                    <input type="password" id="password_confirm1" name="password" placeholder="Password" required>

                    <label><b>Confirm Password : </b></label>
                    <input type="password" id="password_confirm2" name="confirm_password" placeholder="Confirm Password"
                        required>
                    <p id="status_for_comfirm_password"></p>

                    <label><b>Profile Picture : </b></label>
                    <input type="file" name="image">
                    <br>

                    <label><b>Address : </b></label>
                    <input type="text" name="address" placeholder="Address" required>

                    <br>
                    <p>Already have account! <a style="color:blue" href="index.php?action=login">Login Now.</a></p>
                    <button id="register" type="submit" name="register">Register</button>
                </form>
            </div>
        </div>
    </div> -->
    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                                    <form class="mx-1 mx-md-4">

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" id="form3Example1c" class="form-control" name="name"
                                                    placeholder="Username" required />
                                                <label class="form-label" for="form3Example1c">Your Name</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="email" name="email" id="form3Example3c"
                                                    class="form-control" />
                                                <label class="form-label" for="form3Example3c">Your Email</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="password" id="password_confirm1" name="password"
                                                    type="password" id="form3Example4c" class="form-control" />
                                                <label class="form-label" for="form3Example4c">Password</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="password" id="password_confirm2" name="confirm_password"
                                                    type="password" id="form3Example4cd" class="form-control" />
                                                <label class="form-label" for="form3Example4cd">Repeat your
                                                    password</label>
                                            </div>
                                        </div>
                                        <label><b>Profile Picture : </b></label>
                                        <input type="file" name="image">
                                        <br>
                                        <label><b>Address : </b></label>
                                        <input type="text" name="address" placeholder="Address" required>

                                        <div class="form-check d-flex justify-content-center mb-5">
                                            <input class="form-check-input me-2" type="checkbox" value=""
                                                id="form2Example3c" />
                                            <label class="form-check-label" for="form2Example3">
                                                I agree all statements in <a href="#!">Terms of service</a>
                                            </label>
                                        </div>

                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button type="button" class="btn btn-primary btn-lg">Register</button>
                                        </div>

                                    </form>

                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                    <img src="images/reg.jpg" class="img-fluid" alt="Sample image">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    if (isset($_POST['register'])) {

        if (!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirm_password']) && !empty($_POST['name'])) {

            $ip = get_ip();
            $name = $_POST['name'];
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);
            $hash_password = md5($password);
            $confirm_password = trim($_POST['confirm_password']);

            $image = $_FILES['image']['name'];
            $image_tmp = $_FILES['image']['tmp_name'];
            $address = $_POST['address'];

            $check_exist = mysqli_query($con, "select * from users where email = '$email'");

            $email_count = mysqli_num_rows($check_exist);

            $row_register = mysqli_fetch_array($check_exist);

            if ($email_count > 0) {
                echo "<script>alert('Sorry, your email $email already exist in our database!')</script>";
            } elseif ($row_register != $email && $password == $confirm_password) {

                move_uploaded_file($image_tmp, "customer/customer_images/$image");

                $run_insert = mysqli_query($con, "insert into users (ip_address,name,email,password,country,city,user_address,image) values ('$ip','$name','$email','$hash_password','$country','$city','$address','$image') ");

                if ($run_insert) {
                    $sel_user = mysqli_query($con, "select * from users where email = '$email' ");

                    $row_user = mysqli_fetch_array($sel_user);

                    $_SESSION['user_id'] = $row_user['id'];
                    $_SESSION['role'] = $row_user['role'];
                }

                $run_cart = mysqli_query($con, "select * from cart where ip_address = '$ip'");

                $check_cart = mysqli_num_rows($run_cart);

                if ($check_cart == 0) {

                    $_SESSION['email'] = $email;

                    echo "<script>alert('Account has been created')</script>";

                    echo "<script>window.open('my_account.php','_self')</script>";
                } else {

                    $_SESSION['email'] = $email;

                    echo "<script>alert('Account has been created')</script>";

                    echo "<script>window.open('checkout.php','_self')</script>";
                }
            } elseif ($password != $confirm_password) {

                echo "<script>alert('Password do not match')</script>";
            }
        }
    }

    ?>

</div><!-- /.content_wrapper -->