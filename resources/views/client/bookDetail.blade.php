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
  <div>
    <div class="flex items-center bg-white container mx-auto py-6">
      <div class="flex-1 ml-[170px]">
        <div class="italic text-4xl text-blue-500 relative">
          TruyenHay
        </div>
      </div>

      <div class="flex">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
        </svg>
        {{ session('userName') }}
      </div>
      <div class="w-48 text-center mr-[200px]">
        <a href="/login" class="text-blue-500 font-bold hover:text-blue-700 border px-4 py-2 rounded-full">Đăng xuất</a>
      </div>
    </div>
  </div>

  <div class="mt-6 px-[10%]">Trang chủ / {{$book->name}}</div>


  <div class="px-[10%] text-gray-700 bg-gray-100">
    <div class="mt-10 pt-4 flex justify-between">
      <div>
        <div class="text-lg">Tên tác giả: {{$book->other}}</div>
        <div class="text-2xl font-semibold mt-3">{{$book->name}}</div>
        <div class="text-lg mt-3">Thể loại: {{$book->category->name}}</div>
        <div class="text-lg mt-3 w-[800px] mb-3">{{$book->description}}</div>
      </div>

      <div class="mr-12 mb-4">
        <img class="h-[220px] w-[150px] object-cover rounded-sm" src="http://127.0.0.1:8000/.{{$book->image}}" alt="Ảnh 1" />
      </div>
    </div>
  </div>

  <div class="grid grid-cols-12 bg-gray-100 text-gray-600 mt-20">
    <div class="col-span-4 text-center">
      <h5 class="text-lg font-medium my-4">Thông tin liên hệ</h5>
      <hr />
      <p class="my-2">Hotline:(04) 7308 6680</p>
      <p class="mb-2">Email:maiphuong@gmail.com</p>
      <p>Ngõ 44-Trần Thái Tông-Cầu Giấy-Hà Nội</p>
    </div>
    <div class="col-span-8">
      <h5 class="text-lg font-medium my-4">Mô tả website</h5>
      <hr />
      <p class="mt-2 mb-4">
        TruyenHay là một website đọc truyện online hỗ trợ đọc truyện trên điện
        thoại di động và máy tính bảng với rất nhiều thể loại truyện được
        chúng tôi sưu tầm từ nhiều nguồn khác nhau trên internet.
      </p>
      <p class="mb-4">
        Chúng tôi KHÔNG CHỊU TRÁCH NHIỆM về vấn đề bản quyền! Nếu bạn cho rằng
        chúng tôi đang đăng tải một tài liệu có bản quyền hãy cho chúng tôi
        biết về điều đó.
      </p>
    </div>
    <div class="col-span-12">
      <hr />
      <h5 class="text-lg font-medium mx-4 text-center">
        &copy; TruyenHay 2023
      </h5>
      <hr class="w-1/2 border border-gray-200" />
    </div>
  </div>
</body>

</html>