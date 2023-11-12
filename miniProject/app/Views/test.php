<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginStyle.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>

<body>
    <div class="wrapper">
        <form action="">
            <h1>Login</h1>
                <div class="input-box">
                    <input type="text" placeholder="Username" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="password" placeholder="Password" required>
                    <i class='bx bxs-lock-alt' ></i>
                </div>
                <div class="remember-forgot">
                    <label>
                        <input type="checkbox"> Remember me
                    </label>
                    <a href="#">Forgot password?</a>
                </div> 
                
                <a href="map.html">
                    <button type="submit" class="btn">Login</button>
                  </a>
                <div class="register-link">
                    <p>Don't have an account?<a href="#">Register</a></p>
                </div>
        </form>
    </div>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    
</head>

<body>
    <div class="wrapper">
        <form action="/login/auth" method="post">
            <h1>Login</h1>
            <?php if(session()->getFlashdata('msg')): ?>
                <div class="alert alert-danger"><?= session()->getFlashdata('msg'); ?></div>
                <?php endif; ?>
                <div class="input-box">
                <input type="email" name="email" class="form-control" id="inputforemail" value="<?= set_value('email'); ?>">
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                <input type="password" name="password" class="form-control" id="inputforpassword">
                    <i class='bx bxs-lock-alt' ></i>
                </div>
                <div class="remember-forgot">
                    <label>
                        <input type="checkbox"> Remember me
                    </label>
                    <a href="#">Forgot password?</a>
                </div> 
                
                <a href="map.html">
                    <button type="submit" class="btn">Login</button>
                </a>
                <div class="register-link">
                    <p>Don't have an account?<a href="/register">Register</a></p>
                </div>
        </form>
    </div>
</body>

</html>