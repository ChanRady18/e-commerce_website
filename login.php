<div class="container">
    <main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row vh-100">
                <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">

                        <div class="text-center mt-4">
                            <h1 class="h2"> សួស្តីមកកាន់​ Login Page </h1>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-4">
                                    <form action="login.php?action=1" method="POST">
                                        <div class="mb-3">
                                            <label class="form-label">Username</label>
                                            <input class="form-control form-control-lg" type="text" name="username"
                                                placeholder="Enter your username" />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Password</label>
                                            <input class="form-control form-control-lg" type="password" name="password"
                                                placeholder="Enter your password" />
                                        </div>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" value="remember-me"
                                                    name="remember-me" checked>
                                                <span class="form-check-label">
                                                    Remember me next time
                                                </span>
                                            </label>
                                        </div>
                                        <div class="text-center mt-3">
                                            <button type="submit" class="btn btn-lg btn-primary">Login</button>
                                        </div>
                                        <br>
                                        <p>Don't have an account? <a href="register.php" style="color: blue;"
                                                class="link-info">Register
                                                here</a></p>

                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<?php

if (isset($_POST['login'])) {

    $email = trim($_POST['username']);

    $password = trim($_POST['password']);

    $password = md5($password);

    $run_login = mysqli_query($con, "select * from users where password = '$password' AND username = '$username '");

    $check_login = mysqli_num_rows($run_login);

    $row_login = mysqli_fetch_array($run_login);



    if ($check_login == 0) {

        echo "<script>alert('Email or password is incorrect, Please try again!')</script>";
        exit();
    }

    $run_cart = mysqli_query($con, "select * from cart where ip_address = '$ip'");

    $check_cart = mysqli_num_rows($run_cart);

    if ($check_login > 0 and $check_cart == 0) {

        $_SESSION['user_id'] = $row_login['id'];
        $_SESSION['role'] = $row_login['role'];

        $_SESSION['email'] = $email;
        echo "<script>alert('You has logged in successfully!')</script>";
        echo "<script>window.open('my_account.php','_self')</script>";
    } else {
        echo $_SESSION['user_id'] = $row_login['id'];
        echo $_SESSION['role'] = $row_login['role'];

        $_SESSION['email'] = $email;
        echo "<script>alert('You has logged in successfully!')</script>";
        echo "<script>window.open('checkout.php','_self')</script>";
    }
}
?>