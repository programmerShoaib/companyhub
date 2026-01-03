<!DOCTYPE html>
<html>
<head>
    <title>CompanyHub</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

<nav class="bg-blue-600 p-4 text-white flex justify-between">
    <h1 class="font-bold">CompanyHub</h1>
    <a href="/employees" class="hover:underline">Employees</a>
</nav>

<div class="p-6 transition-all duration-500">
    @yield('content')
</div>

</body>
</html>
