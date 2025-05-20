<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Login </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="d-flex justify-content-center align-items-center vh-100">
        <div class="card m-auto" style="width: 30rem">
            <div class="card-header">
                Login
            </div>
            <div class="card-body">

                <?php if (isset($_REQUEST['msg'])): ?>
                    <span class="d-block mb-3 text-danger"><?= $_REQUEST['msg'] ?></span>
                <?php endif; ?>

                <form action="<?= BASE_URL; ?>/login" method="POST">
                    <div class="mb-3">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                    </div>

                    <div class="mb-3">
                        <label for="">Password</label>
                        <input type="password" name="pass" class="form-control" placeholder="Password" required>
                    </div>

                    <button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
                </form>
            </div>
            <div class="card-footer text-center">
                Not yet a member? <a href="<?php echo BASE_URL; ?>/signup"> Sign Up </a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>