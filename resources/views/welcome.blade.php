<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Welcome to OneSyntax</title>
</head>
<body>
    <main class="flex justify-center items-center bg-gray-300 h-screen">
        <div class="flex items-center w-1/2 h-2/3">
            <div class="-mt-24">
                <div>
                    <h1 class="text-center text-6xl text-gray-600">Welcome to OneSyntax</h1>
                </div>
                <div class="pt-4">
                    <h3 class="text-center text-2xl text-gray-600">
                        Please <span class="text-gray-500 hover:underline cursor-pointer"><a href="/login">login</a></span> to continue
                    </h3>
                </div>
            </div>
        </div>

    </main>
</body>
</html>