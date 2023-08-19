<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Thêm Truyện Mới</title>
</head>

<body>
    @if(!empty($errorMsg))
    <div> {{ $errorMsg }}</div>
    @endif
    <div class="flex items-center justify-center min-h-screen mt-10">
        <div class="border border-gray-300 px-6 rounded-lg w-1/4">
            <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl  text-center mt-4">
                Thêm Truyện Mới
            </h1>
            <form class="mt-4 mb-4" action="/admin/book/store" method="post" enctype="multipart/form-data">
                @csrf
                <label for="Email" class="block text-sm font-medium text-gray-900 ">
                    Mã truyện:
                    <input type="text" name="code" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </label><br>
                <label for="Email" class="block text-sm font-medium text-gray-900 ">
                    Tên truyện:
                    <input type="text" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </label><br>
                <label for="Email" class="block text-sm font-medium text-gray-900 ">
                    Thể Loại:
                    <select name="category" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline>
                        @foreach($categories as $category)
                            <option value=" {{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </label><br>
                <label for="Email" class="block text-sm font-medium text-gray-900 ">
                    Tác giả:
                    <input type="text" name="other" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </label><br>
                <label for="Email" class="block text-sm font-medium text-gray-900 ">
                    Mô tả:
                    <input type="text" name="description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </label><br>
                <label for="Email" class="block text-sm font-medium text-gray-900 ">
                    Hình ảnh:
                    <input type="file" name="image" class="w-full py-2 px-3">
                </label><br>
                <button type="submit" class="w-full bg-blue-400 px-4 py-2 rounded text-white">Thêm Mới</button>
            </form>
        </div>
    </div>

</body>

</html>