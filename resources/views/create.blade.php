<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6">
    <h4 class="mb-4 text-lg font-semibold text-gray-700">Create Data</h4>

    <form action="{{ route('store') }}" method="POST">
        @csrf
        <!-- Title -->
        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
            <input type="text" name="title" id="title" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="Enter book title" required>
        </div>

        <!-- Author -->
        <div class="mb-4">
            <label for="author" class="block text-sm font-medium text-gray-700">Author</label>
            <input type="text" name="author" id="author" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="Enter author's name" required>
        </div>

        <!-- Harga -->
        <div class="mb-4">
            <label for="harga" class="block text-sm font-medium text-gray-700">Harga</label>
            <input type="number" name="harga" id="harga" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="Enter book price" required>
        </div>

        <!-- Tanggal Terbit -->
        <div class="mb-4">
            <label for="tanggal_terbit" class="block text-sm font-medium text-gray-700">Tanggal Terbit</label>
            <input type="date" name="tanggal_terbit" id="tanggal_terbit" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
        </div>

        <!-- Submit and Back Buttons -->
        <div class="mt-6 flex justify-between">
            <!-- Tombol Back -->
            <a href="{{'/index'}}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-md">
                Back
            </a>
            <!-- Tombol Submit -->
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md">
                Create
            </button>
        </div>
    </form>
</div>
</body>
</html>