<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="../public/styles.css">
    <style>
        body {
            background-image: url("../images/bg_login.jpg");
        }
    </style>
</head>

<body>
    <div class="container mx-auto my-auto px-80 pt-40 ">
        <!-- form login -->
        <div class="border  w-auto  m-auto py-5">
            <h2 class="text-center text-gray-300 text-3xl pt-5">ĐĂNG NHẬP</h2>
            <form class="text-center" action="" method="post">
                <input placeholder="Tên tài khoản" type="text" class="mx-auto mt-5 block appearance-none placeholder-gray-800 border border-green-800 rounded-md w-64 py-3 px-4 text-gray-700 leading-5 focus:outline-none focus:ring-2 focus:ring-green-800">
                <input placeholder="Mật khẩu" type="text" class="mx-auto mt-5 block appearance-none placeholder-gray-800 border border-green-800 rounded-md w-64 py-3 px-4 text-gray-700 leading-5 focus:outline-none focus:ring-2 focus:ring-green-800">
                <button type="submit" class="mx-auto my-5 w-40 h-12 rounded-md bg-green-700 text-gray-300" name="btnLogin">ĐĂNG NHẬP</button>
            </form>
            <div class="flex justify-between mx-5 text-gray-300">
                <a class="no-underline hover:underline" href="../">TRANG CHỦ</a>
                <a class="no-underline hover:underline" href="./registration.php">ĐĂNG KÝ</a>
            </div>
        </div>
    </div>
</body>

</html>