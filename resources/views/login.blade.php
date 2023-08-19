<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
  <div class="flex items-center justify-center min-h-screen">

    <div class="border border-gray-300 p-6 rounded-lg w-1/4">
      <div class="text-blue-400 text-3xl font-bold text-center mt-2">Web Truyện</div>
      <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl text-center mt-6">
        Sign in to your account
      </h1>
      <form class="mt-6" action="/admin/login" method="post">
        @csrf
        @if(!empty($errorMsg))
        <div class="mb-4 text-red-500"> {{ $errorMsg }}</div>
        @endif
        <div>
          <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your email</label>
          <input type="email" name="email" id="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="name@company.com" required="">
        </div>
        <div class="mt-4">
          <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Password</label>
          <input type="password" name="password" id="password" placeholder="••••••••" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required="">
        </div>
        <button type="submit" class="w-full bg-blue-400 px-4 py-2 rounded text-white mt-6">Sign in</button>
      </form>
    </div>
  </div>





</body>

</html>