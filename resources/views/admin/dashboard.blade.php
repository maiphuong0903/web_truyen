<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang Admin</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="">
        <div class="text-white bg-blue-400 p-6 flex items-center justify-between">
            <div class="text-3xl">Xin chào {{ session('userName') }}!</div>
            <div>
                <a class="text-md bg-white py-2 px-4 rounded-full text-gray-800" href="/login">Đăng xuất</a>
            </div>
        </div>
        <div class="flex items-center justify-center mt-[200px]">
            <div class=" p-6 rounded-lg w-1/2  flex gap-8">
                <div class="w-1/2 border border-blue-300 h-[200px] rounded-xl flex justify-center items-center">
                    <a href="/admin/category" class="text-2xl font-semibold">Quản Lý Thể Loại</a>
                </div>
                <div class="w-1/2 border border-blue-300 h-[200px] rounded-xl flex justify-center items-center">
                    <a href="/admin/book" class="text-2xl font-semibold">Quản Lý Truyện</a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>