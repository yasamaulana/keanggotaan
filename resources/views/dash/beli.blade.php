@extends('dash.main')

@section('main')
    <div class="bg-white py-24 sm:py-10">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="sm:text-center">
                <h2 class="text-lg font-semibold leading-8 text-indigo-600">Pebelian Paket</h2>
                <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Beli Paket Keanggotaan</p>
                <p class="mx-auto mt-6 max-w-2xl text-lg leading-8 text-gray-600">Rencakan paket keanggotaan anda</p>
            </div>


            <div class="mt-20 max-w-lg sm:mx-auto md:max-w-none">
                <div class="grid grid-cols-1 gap-y-16 md:grid-cols-2 md:gap-x-12 md:gap-y-16">
                    @foreach ($datas as $beli)
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
                                <button class="bg-blue-900 text-white block px-3 py-2 rounded-md text-base font-medium"
                                    aria-current="page">Beli Paket</button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
@endsection
