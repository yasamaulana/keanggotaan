@extends('dash.main')

@section('main')
    <div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-8">
            <div>
                <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Tambah Paket
                </h2>
                </p>
            </div>
            <form class="mt-8 space-y-6" action="{{ url('nambah-paket') }}" method="POST">
                @csrf
                <input type="hidden" name="remember" value="true">
                <div class="-space-y-px rounded-md shadow-sm">
                    <div>
                        Nama Paket
                        <input id="email-address" name="nama" type="text"required
                            class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                            placeholder="Nama Paket">
                    </div>
                    <br>
                    <div>
                        Keterangan Paket
                        <input id="email-address" name="keterangan" type="text"required
                            class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                            placeholder="Keterangan Paket">
                    </div>
                    <br>
                    <div>
                        Harga Paket
                        <input id="email-address" name="harga" type="number"required
                            class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                            placeholder="Harga Paket">
                    </div>
                </div>

                <div>
                    <button type="submit"
                        class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        Tambah Paket
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
