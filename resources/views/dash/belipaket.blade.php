@extends('dash.main')

@section('main')
    <div style="margin: 90px;"
        class="relative place-content-center shadow-2xl bg-white rounded-3xl p-5 text-center flex flex-col gap-6 sm:flex-row md:flex-col lg:flex-row">
        <div class="sm:min-w-0 sm:flex-1">
            <h1 style="font-size: 25px">Apakah anda yakin untuk membeli paket ini?</h1>
            <p class="text-lg font-semibold leading-8 text-gray-900">{{ $paketan->nama_paket }}</p>
            <p class="mt-2 text-base leading-7 text-gray-600">{{ $paketan->keterangan }}</p>
            <p class="text-lg font-semibold leading-8 text-gray-900">{{ $paketan->harga }}</p>

            <form action="{{ url('beli') }}" method="POST">
                @csrf
                <div class="mt-8 flex gap-x-4 sm:justify-center">
                    <input type="hidden" name="paket" value="{{ $paketan->nama_paket }}">
                    <button type="submit"
                        class="inline-block rounded-lg bg-indigo-600 px-4 py-1.5 text-base font-semibold leading-7 text-white shadow-sm ring-1 ring-indigo-600 hover:bg-indigo-700 hover:ring-indigo-700">
                        Beli Sekarang
                        <span class="text-indigo-200" aria-hidden="true">&rarr;</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
