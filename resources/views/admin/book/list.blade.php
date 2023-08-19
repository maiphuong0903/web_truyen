<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách truyện</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="px-20 text-gray-800">
    <div class="flex justify-between items-center mt-10">
        <div class="text-2xl font-bold">Danh sách truyện</div>
        <a class="bg-blue-400 px-4 py-2 rounded text-white" href="/admin/dashboard">Quay lại</a>
    </div>
    <div class="mt-6">
        <a class="bg-yellow-400 px-4 py-2 rounded text-white" href="/admin/book/create">Thêm mới</a>
    </div>

    <table class="table-auto w-full mt-10">
        <thead>
            <tr>
                <th class="border">Stt</th>
                <th class="border">Mã Truyện</th>
                <th class="border">Tên truyện</th>
                <th class="border">Tác giả</th>
                <th class="border">Thể loại</th>
                <th class="border">Hình ảnh</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $key => $book)
            <tr>
                <td class="text-center border">{{$key+1}}</td>
                <td class="border p-4">{{$book->code}}</td>
                <td class="border p-4">{{$book->name}}</td>
                <td class="border p-4">{{$book->other}}</td>
                <td class="border p-4">{{$book->category->name}}</td>
                <td class="border p-4 flex justify-center">
                    <img class="w-20 h-32 object-cover" src="http://127.0.0.1:8000/.{{$book->image}}" />
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>