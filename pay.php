<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đồ gỗ trang trí</title>
    <link rel="stylesheet" href="public/styles.css">
</head>

<body>
    <!-- header -->
    <div class=" text-white bg-yellow-800 h-auto">
        <div class="container mx-auto flex justify-between">
            <a class="ml-5 my-2" href="../Du_an_1/">
                <img src="images/logo.png" width="200" alt="">
            </a>
            <div class="flex my-auto">
                <a href="./login/login.php"><svg class="w-7 h-7 mx-3 transition delay-150 duration-300 ease-in-out transform hover:scale-150 bg-amber-600 text-white font-semibold" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                    </svg></a>
                |
                <a href="order.php"><svg class="w-7 h-7 mx-3 transition delay-150 duration-300 ease-in-out transform hover:scale-150 bg-amber-600 text-white font-semibold" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg></a>
            </div>

        </div>
    </div>
    <!-- menu -->
    <div class="container mx-auto  bg-yellow-600 text-white h-8">
        <div class="pt-1 flex justify-between">
            <nav class="ml-1">
                <ul class="flex my-auto">
                    <li class="text-center hover:bg-yellow-700 w-36"><a class="my-auto" href="../Du_an_1/">Trang chủ</a></li>
                    <li class="text-center hover:bg-yellow-700 w-36"><a href="./list.php">Sản phẩm</a></li>
                    <li class="text-center hover:bg-yellow-700 w-36"><a href="./news.php">Tin tức</a></li>
                    <li class="text-center hover:bg-yellow-700 w-36"><a href="./contact.php">Liên hệ</a></li>
                </ul>
            </nav>
            <!-- form search -->
            <form action="" method="post">
                <div class="flex bg-white mr-1 rounded">
                    <input class="bg-white focus:bg-white rounded" type="search" name="search" size="45" placeholder="Tìm kiếm" id="">
                    <button class="text-black" type="submit"><svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg></button>
                </div>
            </form>
        </div>
    </div>
    <!-- body -->
    <div class="container mx-auto">
        <div class="flex"><a class="flex" href="../Du_an_1/"><svg class="w-5 h-5 my-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                </svg>TRANG CHỦ</a>
            <p class="mx-3">|</p>
            <a href="">THANH TOÁN</a>
        </div>
    </div>
    <div class="container mx-auto my-4 text-right bg-gray-200">
        <h2 class="text-center mt-10 mb-12 text-3xl">THANH TOÁN</h2>
        <form action="" method="post">
            <h2 class="text-center">THÔNG TIN KHÁCH HÀNG</h2>
            <div class="w-auto mx-96 text-left my-10">
                <label class="w-" for="">Họ: </label>
                <input type="text" name="last_name">
                <label for="">Tên:</label>
                <input type="text" name="name">
                <br>
                <br>
                <label for="">Số điện thoại người nhân: </label>
                <input type="text" name="num_phone">
                <br>
                <br>
                <label for="">Địa chỉ: </label>
                <input type="text">
                <br>
                <br>
                <label for="">Ghi chú: </label>
                <br>
                <textarea name="" id="" cols="120" rows="10"></textarea>
            </div>
            <h2 class="text-center mb-10">THÔNG TIN SẢN PHẨM</h2>
            <table class="table w-full text-center">
                <thead>
                    <tr class="mx-5">
                        <th>Sản phẩm</th>
                        <th class="w-40">Đơn giá</th>
                        <th class="w-40">Số lượng</th>
                        <th class="w-40">Thành tiền</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="divide-y">
                        <td class="flex mx-36 my-5">
                            <img src="./images/tuonggo537-1.jpg" class="w-24 h-24" alt="">
                            <p class="mx-2">Tượng Di Lặc gánh đào gỗ hương 70x45x22cm</p>
                        </td>
                        <td>7,000,000 ₫</td>
                        <td><input type="number" name="amount" value="1" class="border w-12" readonly id=""></td>
                        <td>7,000,000 ₫</td>
                    </tr>
                    <tr class="divide-y">
                        <td class="flex mx-36 my-5">
                            <img src="./images/tuonggo537-1.jpg" class="w-24 h-24" alt="">
                            <p class="mx-2">Tượng Di Lặc gánh đào gỗ hương 70x45x22cm</p>
                        </td>
                        <td>7,000,000 ₫</td>
                        <td><input type="number" name="amount" value="1" class="border w-12" readonly id=""></td>
                        <td>7,000,000 ₫</td>
                    </tr>
                </tbody>
            </table>
            <div class="mr-10 flex justify-end">
                <h2 class="font-bold text-xl">Tổng tiền:</h2>
                <p class="my-auto">14.000.000 ₫</p>
            </div>
            <button type="submit" class="bg-blue-500 w-36 h-12 text-gray-100 font-bold my-8 mr-10">THANH TOÁN</button>
        </form>
    </div>
    <!-- footer -->
    <div class="text-white bg-yellow-600">
        <div class="container mx-auto grid grid-cols-12 gap-6">
            <div class="col-span-3 my-5">
                <h2>THÔNG TIN LIÊN HỆ</h2>
                <br>
                <a href="">Link</a>
            </div>
            <div class="col-span-3 my-5">
                <h2>HƯỚNG DẪN</h2>
                <br>
                <a href="">Link</a>
            </div>
            <div class="col-span-3 my-5">
                <h2>THANH TOÁN</h2>
                <br>
                <a href="">Link</a>
            </div>
            <div class="col-span-3 my-5">
                <h2>LIÊN KẾT</h2>
                <br>
                <a href="">Link</a>
            </div>

        </div>

        <div class="container mx-auto text-center">
            <hr>
            <p>© 2021 Copyright Team DLN. All rights reserved.</p>
        </div>
    </div>
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</body>

</html>