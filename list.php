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
    <div class=" text-white bg-yellow-800 h-10">
        <div class="container mx-auto flex justify-between">
            <a class="ml-5 my-2" href="../Du_an_1/">
                Đồ gỗ hàng hiệu
            </a>
            <div class="flex my-2">
                <a href="#"><svg class="w-7 h-7 mx-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                    </svg></a>
                |
                <a href="#"><svg class="w-7 h-7 mx-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
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
                    <li class="text-center hover:bg-yellow-700 w-36"><a href="../Du_an_1/">Trang chủ</a></li>
                    <li class="text-center hover:bg-yellow-700 w-36"><a href="./list.php">Sản phẩm</a></li>
                    <li class="text-center hover:bg-yellow-700 w-36"><a href="./news.php">Tin tức</a></li>
                    <li class="text-center hover:bg-yellow-700 w-36"><a href="./contact.php">Liên hệ</a></li>
                </ul>
            </nav>
            <!-- form search -->
            <form action="" method="post">
                <div class="flex">
                    <input class="bg-gray-200 focus:bg-white" type="search" name="search" size="45" placeholder="Tìm kiếm" id="">
                    <button class="" type="submit"><svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg></button>
                </div>
            </form>
        </div>
    </div>
    <!-- slide -->
    <div class="container mx-auto">
        <img class="w-full" src="images/slider1.jpg" alt="">
    </div>
    <!-- body -->
    <div class="grid grid-cols-12 gap-4  mt-10 container mx-auto">
        <!-- categories -->
        <div class="col-span-3">
            <div class="flex h-12 font-bold border-b-2">
                <svg class="w-7 h-7 my-auto bg-yellow-600 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                </svg>
                <h2 class="m-auto">Danh mục</h2>
            </div>
            <a href="">
                <div class="flex h-12 bg-yellow-600 text-white border-b-2">
                    <svg class="w-5 h-5 my-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                    <h2 class="m-auto">Mục 1</h2>
                </div>
            </a>
            <a href="">
                <div class="flex h-12 bg-yellow-600 text-white border-b-2">
                    <svg class="w-5 h-5 my-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                    <h2 class="m-auto">Mục 2</h2>
                </div>
            </a>
            <a href="">
                <div class="flex h-12 bg-yellow-600 text-white border-b-2">
                    <svg class="w-5 h-5 my-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                    <h2 class="m-auto">Mục 3</h2>
                </div>
            </a>
            <a href="">
                <div class="flex h-12 bg-yellow-600 text-white border-b-2">
                    <svg class="w-5 h-5 my-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                    <h2 class="m-auto">Mục 4</h2>
                </div>
            </a>
            <br>
            <hr>
            <div class="flex h-12 font-bold">
                <svg class="w-7 h-7 my-auto bg-yellow-600 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                </svg>
                <h2 class="m-auto">SẢN PHẨM BÁN BÁN CHẠY</h2>
            </div>
            <a href="product.php">
                <div class="border round-sm flex h-24">
                    <img class="mx-5 my-auto" width="50" height="50" src="images/tuonggo607.jpeg" alt="">
                    <div class="my-auto">
                        <h1 class="">Tên sản phẩm</h1>
                        <h2 class="">Giá: 10000000000 đ</h2>
                    </div>
                </div>
            </a>
            <a href="product.php">
                <div class="border round-sm flex h-24">
                    <img class="mx-5 my-auto" width="50" height="50" src="images/tuonggo607.jpeg" alt="">
                    <div class="my-auto">
                        <h1 class="">Tên sản phẩm</h1>
                        <h2 class="">Giá: 10000000000 đ</h2>
                    </div>
                </div>
            </a>
            <a href="product.php">
                <div class="border round-sm flex h-24">
                    <img class="mx-5 my-auto" width="50" height="50" src="images/tuonggo607.jpeg" alt="">
                    <div class="my-auto">
                        <h1 class="">Tên sản phẩm</h1>
                        <h2 class="">Giá: 10000000000 đ</h2>
                    </div>
                </div>
            </a>
        </div>
        <!-- products -->
        <div class="col-span-9">
            <h2 class="font-bold">SẢN PHẨM MỚI</h2>
            <hr>
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
            <h2 class="font-bold">SẢN PHẨM NỔI BẬT</h2>
            <hr>
            <div class="grid grid-cols-12 gap-6 py-5">
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
                <a class="col-span-3" href="product.php">
                    <div class="border round-sm text-center pb-2">
                        <img class="mx-auto my-5" width="200" src="images/tuonggo607.jpeg" alt="">
                        <h1 class="text-yellow-600 font-bold hover:text-yellow-800">Tên sản phẩm</h1>
                        <h2 class="font-bold">Giá: 10000000000 ₫</h2>
                    </div>
                </a>
            </div>
        </div>
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

</html>\