@extends('layout')

@section('konten')

<style>
    /* General Styles */
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f7fafc;
        color: #333;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 1200px;
        margin: 30px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        overflow-x: auto;
    }

    h1 {
        text-align: center;
        font-size: 2.5rem;
        color: #2d3748;
        margin-bottom: 30px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        padding: 16px;
        text-align: left;
        border-bottom: 1px solid #e2e8f0;
        color: #4a5568;
    }

    th {
        background-color: #edf2f7;
        font-weight: bold;
    }

    tr:hover {
        background-color: #f1f5f9;
        cursor: pointer;
    }

    .btn-danger {
        background-color: #e53e3e;
        color: white;
        padding: 8px 16px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .btn-danger:hover {
        background-color: #c53030;
    }
</style>

<div class="container mx-auto py-8">
    <h1 class="text-2xl font-bold mb-4">Keranjang Belanja</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(count($keranjang) > 0)
    <table class="w-full text-left">
        <thead>
            <tr>
                <th>Produk</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Total</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($keranjang as $id => $item)
                <tr>
                    <td>{{ $item['nama'] }}</td>
                    <td>Rp {{ number_format($item['harga'], 0, ',', '.') }}</td>
                    <td>
                        <form action="{{ route('keranjang.update', $id) }}" method="POST" style="display: flex; align-items: center;">
                            @csrf
                            @method('PUT')
                            <input type="number" name="jumlah" value="{{ $item['jumlah'] }}" min="1" style="width: 60px; margin-right: 10px;">
                            <button type="submit" style="background-color: #4caf50; color: white; border: none; padding: 5px 10px; border-radius: 5px; cursor: pointer;">
                                Update
                            </button>
                        </form>
                    </td>
                    <td>Rp {{ number_format($item['harga'] * $item['jumlah'], 0, ',', '.') }}</td>
                    <td>
                        <form action="{{ route('keranjang.destroy', $id) }}" method="POST">
                             @csrf
                             @method('DELETE')
                             <button type="submit" style="background-color: #e53e3e; color: white; border: none; padding: 5px 10px; border-radius: 5px; cursor: pointer;">
                                 Hapus
                             </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p>Keranjang Anda kosong.</p>
@endif

</div>

@endsection
