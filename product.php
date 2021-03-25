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
    <div class="container mx-auto my-4">
        <div class="flex"><a class="flex" href="../Du_an_1/"><svg class="w-5 h-5 my-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                </svg>TRANG CHỦ</a>
            <p class="mx-3">>></p>
            <a href="">Tên sản phẩm</a>
        </div>
    </div>
    <div class="grid grid-cols-12 gap-4  my-5 container mx-auto">
        <!-- categories -->
        <div class="col-span-3">
            <div class="flex h-12 font-bold bg-yellow-700 border-b-2">
                <svg class="w-7 h-7 my-auto text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                </svg>
                <h2 class="m-auto text-white">DANH MỤC</h2>
            </div>
            <div>
                <a href="">
                    <div class="flex h-12 bg-yellow-600 hover:bg-yellow-700 text-white border-b-2">
                        <svg class="w-5 h-5 my-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                        <h2 class="m-auto">Mục 1</h2>
                    </div>
                </a>
            </div>
            <br>
            <hr>
            <!-- selling products -->
            <div class="flex h-12 font-bold bg-yellow-700 border-b-2">
                <svg class="w-7 h-7 my-auto text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                </svg>
                <h2 class="m-auto text-white">SẢN PHẨM BÁN BÁN CHẠY</h2>
            </div>
            <a href="product.php">
                <div class="border round-sm flex h-24">
                    <img class="mx-5 my-auto" width="50" height="50" src="images/tuonggo607.jpeg" alt="">
                    <div class="my-auto">
                        <h1 class="text-yellow-600 font-bold hover:text-yellow-800">Tên sản phẩm</h1>
                        <h2 class="font-bold">Giá: 10000000000 đ</h2>
                    </div>
                </div>
            </a>
        </div>
        <!-- products -->
        <div class="col-span-9">
            <div class="flex my-5">
                <img width="350" height="680" src="images/tuonggo607.jpeg" alt="">
                <div class="mx-3">
                    <h2 class="text-2xl text-yellow-500 mb-5">Tượng Di Lặc gánh đào gỗ hương 70x45x22cm</h2>
                    <h2 class="font-bold text-2xl text-red-500 mb-5">7,000,000 ₫</h2>
                    <!-- specifications -->
                    <div class="my-10">
                        <p class="font-bold">Mã:
                        <p></p>
                        </p>
                        <br>
                        <p class="font-bold">Tính trạng:
                        <p></p>
                        </p>
                        <br>
                        <p class="font-bold">Chất liệu:
                        <p></p>
                        </p>
                        <br>
                        <p class="font-bold">Kích thước:
                        <p></p>
                        </p>
                        <br>
                        <a class="hover:underline no-underline text-white" href="#">
                            <div class="bg-yellow-500 text-center rounded-md transition delay-150 duration-300 ease-in-out transform hover:scale-105 bg-amber-600 text-white font-semibold px-6 py-3">
                                <h2 class="font-bold">THÊM VÀO GIỎ HÀNG</h2>
                                <P>Giao hàng miễn phí tận nơi</P>
                            </div>
                        </a>
                        <br>
                        <a class="hover:underline no-underline text-white" href="#">
                            <div class="bg-blue-500 text-center rounded-md transition delay-150 duration-300 ease-in-out transform hover:scale-105 bg-amber-600 text-white font-semibold px-6 py-3">
                                <h2 class="font-bold">LIÊN HỆ</h2>
                                <P>Tư vấn trực tiếp về sản phẩm</P>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- policy -->
                <div class="">
                    <div class="border border-blue-500 flex mb-5">
                        <img class="my-2 mx-2" src="images/1d07c2bacaefc123ddc782e6288ddc41.png" width="50" height="50" alt="">
                        <p class="my-auto mx-2">Hỗ trợ tư vấn: 0363.480.678</p>
                    </div>
                    <div class="border border-blue-500 flex mb-5">
                        <img class="my-2 mx-2" src="images/images.png" width="50" height="50" alt="">
                        <p class="my-auto mx-2">Cam kết 100% hàng đảm bảo chất lượng</p>
                    </div>
                    <div class="border border-blue-500 flex mb-5">
                        <svg class="text-blue-500 w-16 h-16" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                        </svg>
                        <p class="my-auto mx-2">Nhận đổi trả hàng trong 07 ngày</p>
                    </div>
                    <div class="border border-blue-500 flex mb-5">
                        <svg class="text-blue-500 w-16 h-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                            <path d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7a1 1 0 00-1 1v6.05A2.5 2.5 0 0115.95 16H17a1 1 0 001-1v-5a1 1 0 00-.293-.707l-2-2A1 1 0 0015 7h-1z" />
                        </svg>
                        <p class="my-auto mx-2">Miễn phí giao hàng trên toàn quốc</p>
                    </div>
                    <div class="border border-blue-500 flex mb-5">
                        <svg class="text-blue-500 w-16 h-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z" />
                            <path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd" />
                        </svg>
                        <p class="my-auto mx-2">Xem hàng và thanh toán tại nhà</p>
                    </div>
                </div>
            </div>
            <div>
                <h2>Hình ảnh sản phẩm</h2>
                <br>
                <img class="mx-auto" src="images/tuonggo537-1.jpg" alt="">
                <br>
                <img class="mx-auto" src="images/tuonggo537-2.jpg" alt="">
                <br>
                <img class="mx-auto" src="images/tuonggo537-3.jpg" alt="">
                <br>
                <img class="mx-auto" src="images/tuonggo537-4.jpg" alt="">
                <br>
                <img class="mx-auto" src="images/tuonggo537-5.jpg" alt="">
                <br>
                <img class="mx-auto" src="images/tuonggo537-6.jpg" alt="">
                <br>
                <img class="mx-auto" src="images/tuonggo537-7.jpg" alt="">
            </div>
        </div>
    </div>
    <!-- related products -->
    <div class="container mx-auto">
        <h2 class="font-bold">SẢN PHẨM LIÊN QUAN</h2>
        <div class="grid grid-cols-12 gap-6 py-5">
            <a class="col-span-3" href="product.php">
                <div class="border round-sm text-center pb-2">
                    <img class="mx-auto my-5" width="200" height="400" src="images/tuonggo607.jpeg" alt="">
                    <h1 class="text-yellow-600 font-bold hover:text-yellow-800">Tượng Di Lặc nhị phúc gỗ hương liền khối 80x32x30cm</h1>
                    <h2 class="font-bold">Giá: 10000000000 ₫</h2>
                </div>
            </a>
            <a class="col-span-3" href="product.php">
                <div class="border round-sm text-center pb-2">
                    <img class="mx-auto my-5" width="200" src="images/tuonggo607.jpeg" alt="">
                    <h1 class="text-yellow-600 font-bold hover:text-yellow-800">Tên sản phẩm</h1>
                    <h2 class="font-bold">Giá: 10000000000 ₫</h2>
                </div>
            </a>
            <a class="col-span-3" href="product.php">
                <div class="border round-sm text-center pb-2">
                    <img class="mx-auto my-5" width="200" src="images/tuonggo607.jpeg" alt="">
                    <h1 class="text-yellow-600 font-bold hover:text-yellow-800">Tên sản phẩm</h1>
                    <h2 class="font-bold">Giá: 10000000000 ₫</h2>
                </div>
            </a>
            <a class="col-span-3" href="product.php">
                <div class="border round-sm text-center pb-2">
                    <img class="mx-auto my-5" width="200" src="images/tuonggo607.jpeg" alt="">
                    <h1 class="text-yellow-600 font-bold hover:text-yellow-800">Tên sản phẩm</h1>
                    <h2 class="font-bold">Giá: 10000000000 ₫</h2>
                </div>
            </a>

        </div>
    </div>
    <!-- footer -->
    <div class="text-white bg-yellow-600">
        <div class="container mx-auto grid grid-cols-12 gap-6">
            <div class="col-span-4 my-5">
                <h2 class="text-lg">THÔNG TIN LIÊN HỆ</h2>
                <br>
                <a class="flex" href="#">
                    <svg class="w-18 h-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                    </svg>
                    <p class="mx-5">17 Ng. 85 P. Định Công Thượng, Định Công, Hoàng Mai, Hà Nội, Việt Nam</p>
                </a>
                <br>
                <a class="flex" href="">
                    <svg class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    <p class="mx-5 my-auto">0363.480.678</p>
                </a>
                <br>
                <a class="flex" href="">
                    <svg class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <p class="mx-5 my-auto">0363.480.678</p>
                </a>
            </div>
            <div class="col-span-4 my-5">
                <h2 class="text-lg">THANH TOÁN</h2>
                <br>
                <a class="flex" href="">
                    <svg class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                    </svg>
                    <p class="mx-3 my-auto">Thanh toán qua thẻ tín dụng</p>
                </a>
                <br>
                <a class="flex" href="">
                    <svg class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path fill="#fff" d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0" />
                    </svg>
                    <p class="mx-3 my-auto">Thanh toán khi bằng tiền mặt khi nhận hàng</p>
                </a>
            </div>
            <div class="col-span-4 my-5">
                <h2 class="text-lg">LIÊN KẾT</h2>
                <br>
                <div class="flex">
                    <a href=""><img class="w-10 h-10" src="./images/1200px-Facebook_icon.svg.png" alt=""></a>
                    <a href=""><img class="w-10 h-10 ml-5" src="./images/1d07c2bacaefc123ddc782e6288ddc41.png" alt=""></a>
                    <a href=""><img class="w-10 h-10 mx-5" src="./images/600px-Instagram_logo_2016.svg.png" alt=""></a>
                </div>
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