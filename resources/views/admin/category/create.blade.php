<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <title>Thêm Thể Loại Mới</title>
</head>

<body>
  @if(!empty($errorMsg))
  <div> {{ $errorMsg }}</div>
  @endif
  <div class="flex items-center justify-center min-h-screen">
    <div class="border border-gray-300 p-6 rounded-lg w-1/4">
      <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl  text-center mt-6">
        Thêm Thể Loại Mới
      </h1>
      <form class="mt-6 mb-4" action="/admin/category/store" method="post" enctype="multipart/form-data">
        @csrf
        <label for="Email" class="block mb-2 text-sm font-medium text-gray-900 ">
          Tên Thể Loại:
          <input type="text" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </label><br><br>
        <button type="submit" class="w-full bg-blue-400 px-4 py-2 rounded text-white mt-3">Thêm mới</button>
      </form>
    </div>
  </div>
</body>

</html>