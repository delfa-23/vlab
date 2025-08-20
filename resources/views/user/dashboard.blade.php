<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard User
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h1 class="text-2xl font-bold mb-4">Halo, {{ Auth::user()->name }} 👋</h1>
                <p>Selamat datang di dashboard <strong>User</strong>.</p>
            </div>
        </div>
    </div>
</x-app-layout>
