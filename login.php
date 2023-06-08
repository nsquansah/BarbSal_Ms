<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once 'assets/php/head.php'; ?>
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-6">
            <div class="card">
                <div class="card-header text-center">
                    <h1>BarbSal Login</h1>
                </div>
                <div class="card-body">
                    <form>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" id="email" class="form-control mb-2 text-bg-light" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password"class="form-control mb-2 text-bg-light" placeholder="Enter password">
                    </div>
                    <div class="form-group">
                        <div class="container">
                            <div class="row">
                                <button type="submit" class="btn btn-lg btn-primary col-sm-4 mt-3">LOGIN</button>
                                <div class="col-sm-4"></div>
                                <button type="submit" class="btn btn-lg btn-danger col-sm-4 mt-3">CANCEL</button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-2"></div>
                                <button type="submit" class="btn btn-lg btn-primary  col-sm-12 mt-3">SIGN UP</button>
                                <div class="col-sm-2"></div>
                            </div>
                        </div>
                    </div>
                    </form>
                    </div>
                </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
    
</body>
</html>