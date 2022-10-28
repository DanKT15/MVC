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

<div class="sign">
    <form action="" method="POST" class="sign-fom">
        <h1>sign in</h1>
        <div class="sign-items">
            <label for="name"><i class="bi bi-person-circle"></i></label>
            <input type="text" name="txtFullname" id="name" placeholder="Uername" required>
        </div>
        <div class="sign-items">
            <label for="password"><i class="bi bi-key-fill"></i></label>
            <input type="password" name="txtPassword" id="password" placeholder="Password" required>
        </div>
        <div class="sign-items">
            <label for="email"><i class="bi bi-mailbox2"></i></label>
            <input type="email" name="txtEmail" id="email" placeholder="Email">
        </div>
        <div class="submit-sign">
            <label for="sign"><i class="bi bi-check2-square"></i></label>
            <input type="submit" name='dangky' value="login" id="sign">
        </div><br>
        <a href="index.php?c=user&a">Trang Chủ</a>

    </form>
</div>

</body>
</html>