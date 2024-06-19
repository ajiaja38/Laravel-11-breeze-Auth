<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Barang') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('barang.create') }}" class="btn btn-primary mb-3">Add Barang</a>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead class="bg-gray-200">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Quantity</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" width="280px">Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                @foreach ($barangs as $barang)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $loop->iteration }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $barang->name }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $barang->description }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $barang->quantity }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $barang->price }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center gap-1 space-x-4">
                                            <a href="{{ route('barang.show', $barang->id) }}" class="btn btn-warning">Show</a>
                                            <a href="{{ route('barang.edit', $barang->id) }}" class="btn btn-primary">Edit</a>
                                            <form action="{{ route('barang.destroy', $barang->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
