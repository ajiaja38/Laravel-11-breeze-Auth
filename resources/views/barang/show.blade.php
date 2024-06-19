<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Show Barang') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Name</label>
                        <div class="mt-1">{{ $barang->name }}</div>
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Description</label>
                        <div class="mt-1">{{ $barang->description }}</div>
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Quantity</label>
                        <div class="mt-1">{{ $barang->quantity }}</div>
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Price</label>
                        <div class="mt-1">{{ $barang->price }}</div>
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <a href="{{ route('barang.index') }}" class="btn btn-secondary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
