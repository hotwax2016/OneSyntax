<!doctype html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <!--
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    -->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div class="flex bg-red-300 h-screen">
        <div class="w-2/12 bg-purple-500 text-purple-200">
            <div class="flex justify-center items-center h-16">
                OneSyntax
            </div>
            <div class="pt-5 px-4">
                <ul>
                    <li class="px-2 py-3 text-md font-semibold hover:bg-purple-200 hover:text-purple-500 rounded-md cursor-pointer"><a href="/dashboard">Dashboard</a></li>
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
                            <li class="pl-8 px-2 py-2 text-md font-semibold hover:bg-purple-200 hover:text-purple-500 rounded-md cursor-pointer"><a href="/users">User</a></li>
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
                <div>
                    @yield('main')
                </div>
            </div>
        </div>
    </div>
</body>
</html>
