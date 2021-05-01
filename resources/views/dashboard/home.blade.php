<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Welcome to Dashboard</title>
</head>
<body>
    <div class="flex bg-red-300 h-screen">
        <div class="w-2/12 bg-purple-500 text-purple-200">
            <div class="flex justify-center items-center h-16">
                OneSyntax
            </div>
            <div class="pt-5 px-4">
                <ul>
                    <li class="px-2 py-3 text-md font-semibold hover:bg-purple-200 hover:text-purple-500 rounded-md cursor-pointer">Dashboard</li>
                    <li class="px-2 py-3 text-md font-semibold hover:bg-purple-200 hover:text-purple-500 rounded-md cursor-pointer">Employee Management</li>
                    <li class="px-2 py-3 text-md font-semibold hover:text-purple-100 rounded-md cursor-pointer">System Management</li>
                    <li>
                        <ul>
                            <li class="pl-8 px-2 py-2 text-md font-semibold hover:bg-purple-200 hover:text-purple-500 rounded-md cursor-pointer">Country</li>
                            <li class="pl-8 px-2 py-2 text-md font-semibold hover:bg-purple-200 hover:text-purple-500 rounded-md cursor-pointer">State</li>
                            <li class="pl-8 px-2 py-2 text-md font-semibold hover:bg-purple-200 hover:text-purple-500 rounded-md cursor-pointer">City</li>
                            <li class="pl-8 px-2 py-2 text-md font-semibold hover:bg-purple-200 hover:text-purple-500 rounded-md cursor-pointer">Department</li>
                        </ul>
                    </li>
                    <li class="px-2 py-3 text-md font-semibold hover:text-purple-100 rounded-md cursor-pointer">User Management</li>
                    <li>
                        <ul>
                            <li class="pl-8 px-2 py-2 text-md font-semibold hover:bg-purple-200 hover:text-purple-500 rounded-md cursor-pointer">User</li>
                            <li class="pl-8 px-2 py-2 text-md font-semibold hover:bg-purple-200 hover:text-purple-500 rounded-md cursor-pointer">Role</li>
                            <li class="pl-8 px-2 py-2 text-md font-semibold hover:bg-purple-200 hover:text-purple-500 rounded-md cursor-pointer">Permission</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="w-10/12 bg-gray-100">
            <div class="h-16 bg-white shadow">
                <div class="flex justify-end items-center h-full px-8 text-purple-500">
                    <div>
                        @auth
                            {{ Auth::user()->name }}
                        @endauth
                    </div>
                    <div class="ml-3 cursor-pointer px-3 py-2 bg-purple-100 rounded-md hover:bg-purple-200">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
            <div class="mt-1 p-4 bg-gray-100">
                <div class="text-gray-500">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste sit fugiat corporis quia a repellat accusantium fuga cupiditate distinctio ullam, quas voluptates voluptas debitis, officia, dolores eos quod sunt molestiae.
                </div>
            </div>
        </div>
    </div>
</body>
</html>