<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>">
    </script>
    <link href="<?php echo base_url('assets/vendor/fonts/circular-std/style.css" rel="stylesheet"') ?>">
    </script>
    <link rel="stylesheet" href="<?php echo base_url('assets/libs/css/style.css') ?>">
    </script>
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/fonts/fontawesome/css/fontawesome-all.css') ?>">
    </script>
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
        }

        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #f2f2f2;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px grey;
            text-align: center;
        }

        h1 {
            margin-bottom: 40px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border-radius: 5px;
            border: 1px solid #ccc;
            outline: none;
        }

        button[type="submit"] {
            width: 100%;
            padding: 14px 20px;
            margin: 8px 0;
            border-radius: 5px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #3e8e41;
        }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center">LOGIN ADMIN</div>
            <div class="card-body">
                <body>
                    <?php if (isset($error)) { ?>
                        <div style="color:red;"> <?php echo $error; ?> </div>
                    <?php } ?>
                    <form action="<?php echo base_url(); ?>Admin/aksi_login" method="post">
                        <input type="text"name="username" placeholder="Username" required>
                        <input type="password"name="password" placeholder="Password" required>
                        <button type="submit">Login</button>
                    </form>
                </body>
            </div>
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="<?php echo base_url('assets/vendor/jquery/jquery-3.3.1.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.js') ?>"></script>
</body>

</html>