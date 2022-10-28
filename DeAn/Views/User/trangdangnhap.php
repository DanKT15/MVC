<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="Views/css/menu.css">
    <link rel="stylesheet" href="Views/css/container.css">
    <link rel="stylesheet" href="Views/css/stars.css">
    <link rel="stylesheet" href="Views/css/sign.css">
    <link rel="stylesheet" href="Views/css/login.css">
    <!-- <link rel="stylesheet" href="css/prize.css"> -->
    <title>truyenfull</title>
</head>
<body>

        <div class="login">
        <div class="login-main">
            <div class="login-header">
                <h1>login</h1>
            </div>
            <form action="" method="POST" class="login-form">
                <div class="login-items 1">
                    <label for="name"><i class="bi bi-person-circle"></i></label>
                    <input type="text" name="txtFullname" id="name" placeholder="Uername" required>
                </div>
                <div class="login-items 2">
                    <label for="password"><i class="bi bi-key-fill"></i></label>
                    <input type="password" name="txtPassword" id="password" placeholder="Password" required>
                </div>
                <div class="button">
                    <label for="button"><i class="bi bi-person-check"></i></label>
                    <input type="submit" name="dangnhap" value="login" id="button">
                </div><br>
                <!-- <div class="sign-button">
                        <a href="index.php?page=sign" class="sign"><i class="bi bi-person-plus-fill"></i></a>
                </div> -->
                <a href="index.php?c=user&a">Trang Chủ</a>
                
            </form>
        </div>
        </div>

</body>
</html>