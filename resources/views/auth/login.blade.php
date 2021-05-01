<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Login Page</title>
</head>
<body>
    <main class="bg-gray-200 h-screen">
        <div class="pt-16">
            <h1 class="text-center text-purple-500 text-5xl font-semibold">Login to continue</h1>
        </div>
        <div class="flex justify-center">
            <div class="pt-10 w-1/3 text-gray-500">
                <div class="p-4 bg-white rounded-xl shadow-md">
                    <form method="POST" action="/login">
                        @csrf
                        <div class="flex-col px-4">
                            <label class="block text-lg" for="">Email *</label>
                            <input class="mt-1 block w-full py-2 border-opacity-50 rounded-md px-2 border-2 border-gray-500" type="text" name="email" placeholder="Enater your email">
                            @error('email')
                                <p class="text-md text-red-500">{{ $errors->first('email') }}</p>
                            @enderror
                        </div>
                        <div class="flex-col mt-6 px-4">
                            <label class="block text-lg" for="">Password *</label>
                            <input class="mt-1 block w-full py-2 border-opacity-50 rounded-md px-2 border-2 border-gray-500" type="password" name="password" placeholder="Enater your password">
                            @error('password')
                                <p class="text-md text-red-500">{{ $errors->first('password') }}</p>
                            @enderror
                        </div>
                        <div class="flex mt-6 px-4">
                            <button type="submit" class="px-2 py-1 text-purple-500 font-semibold tracking-wide rounded-md border-2 border-purple-500 hover:text-purple-200 hover:bg-purple-500">Login</button>
                            <button type="reset" class="ml-2 px-2 py-2 font-semibold tracking-wide">Clear</button>
                        </div>
                    </form>
                </div>
                <div class="mt-2">
                    <h5 class="text-right text-gray-700"><a href="/password/reset">Forgot your password?</a></h5>
                </div>
            </div>
        </div>
    </main>
</body>
</html>