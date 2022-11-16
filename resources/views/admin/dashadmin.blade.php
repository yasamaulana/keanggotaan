@extends('dash.main')

@section('main')
    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">Dashboard Admin</h1>
        </div>
    </header>
    @if (session()->has('success'))
        <div class="bg-indigo-600">
            <div class="mx-auto max-w-7xl py-3 px-3 sm:px-6 lg:px-8">
                <div class="flex flex-wrap items-center justify-between">
                    <div class="flex w-0 flex-1 items-center">
                        <span class="flex rounded-lg bg-indigo-800 p-2">
                            <!-- Heroicon name: outline/megaphone -->
                            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 110-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 01-1.44-4.282m3.102.069a18.03 18.03 0 01-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 018.835 2.535M10.34 6.66a23.847 23.847 0 008.835-2.535m0 0A23.74 23.74 0 0018.795 3m.38 1.125a23.91 23.91 0 011.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 001.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 010 3.46" />
                            </svg>
                        </span>
                        <p class="ml-3 truncate font-medium text-white">
                            {{ session('success') }}
                        </p>
                    </div>
                    <div class="order-2 flex-shrink-0 sm:order-3 sm:ml-3">
                        <button type="button"
                            class="-mr-1 flex rounded-md p-2 hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-white sm:-mr-2">
                            <span class="sr-only">Dismiss</span>
                            <!-- Heroicon name: outline/x-mark -->
                            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <main class="m-10">
        <div class="overflow-hidden bg-white shadow rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <div class="flex h-16 items-center justify-between">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Daftar Paket Yang Tersedia</h3>
                    <a href="{{ url('/tambah-paket') }}"><button
                            class="bg-blue-900 text-white block px-3 py-2 rounded-md text-base font-medium"
                            aria-current="page">Tambah Paket</button></a>
                </div>
            </div>
            <div class="border-t border-gray-200">
                <div class="grid p-3 grid-cols-1 gap-y-16 md:grid-cols-2 md:gap-x-12 md:gap-y-16">
                    @foreach ($data as $beli)
                        <div class="relative shadow-xl p-5 flex flex-col gap-6 sm:flex-row md:flex-col lg:flex-row">
                            <div
                                class="flex h-12 w-12 items-center justify-center rounded-xl bg-indigo-500 text-white sm:shrink-0">
                                <!-- Heroicon name: outline/globe-alt -->
                                <svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
                                </svg>
                            </div>
                            <div class="sm:min-w-0 sm:flex-1">
                                <p class="text-lg font-semibold leading-8 text-gray-900">{{ $beli->nama_paket }}</p>
                                <p class="mt-2 text-base leading-7 text-gray-600">{{ $beli->keterangan }}</p>
                                <p class="text-lg font-semibold leading-8 text-gray-900">{{ $beli->harga }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
@endsection
