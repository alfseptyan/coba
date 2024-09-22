<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Table</title>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
        <!-- Tombol Create -->
        <div class="p-6">
            <a href="{{ route('create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Create
            </a>
        </div>
        <table class="min-w-full table-auto border-collapse">
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Judul</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Penulis</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Harga</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal Terbit</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($books as $index => $book)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $book->id }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $book->title }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $book->author }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ "Rp" . number_format($book->harga, 2, ',', '.') }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $book->tanggal_terbit }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <!-- Form untuk Delete -->
                        <form action="{{ route('destroy', $book->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus buku ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-800">Delete</button>
                        </form>
                        <!-- Tombol Edit -->
                        <a href="{{ route('edit', $book->id) }}" class="text-blue-600 hover:text-blue-800">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Bagian untuk menampilkan total buku dan total harga -->
        <div class="p-6 bg-gray-100">
            <p class="text-lg font-semibold text-gray-700">Total Buku: {{ $totalBooks }}</p>
            <p class="text-lg font-semibold text-gray-700">Total Harga Buku: Rp{{ number_format($totalHarga, 2, ',', '.') }}</p>
        </div>
    </div>
</body>
</html>
