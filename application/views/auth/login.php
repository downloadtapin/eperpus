<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
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
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><a href="../index.html"><img class="logo-img" src="assets/gambar/logo.PNG" alt="logo"></a><span class="splash-description">SISTEM INFORMASI PERPUSTAKAAN SMK NEGERI 1 RANTAU
                </span></div>
            <div class="card-body">

                <body>
                    <?php if (isset($error)) { ?>
                        <div style="color:red;"> <?php echo $error; ?> </div>
                    <?php } ?>
                    <form action="<?php echo base_url(); ?>Auth/aksi_login" method="post">
                        <label>Username:</label>
                        <input type="text" name="username" required />
                        <br>
                        <br>
                        <label>Password:</label>
                        <input type="password" name="password" required />
                        <br>
                        <br>
                        <input type="submit" value="Login" />
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