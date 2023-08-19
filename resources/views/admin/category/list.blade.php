<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thể Loại Truyện</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="px-20 text-gray-800">
    <div class="flex justify-between items-center mt-10">
        <div class="text-2xl font-bold">Danh sách thể loại</div>
        <button class="bg-blue-400 px-4 py-2 rounded text-white" onclick="history.back()">Quay lại</button>
    </div>
    <div class="mt-6">
        <a class="bg-yellow-400 px-4 py-2 rounded text-white" href="/admin/category/create">Thêm mới</a>
    </div>
    <table class="table-auto w-full mt-10">
        <thead>
            <tr>
                <th class="border">CatID</th>
                <th class="border">Tên Chuyên Mục4</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $key => $category)
            <tr>
                <td class="text-center border">{{$key+1}}</td>
                <td class="border p-4 text-center">{{ $category->name }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
