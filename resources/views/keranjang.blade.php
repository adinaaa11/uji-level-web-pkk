@extends('layout')

@section('konten')

<style>
    /* Container Styling */
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    /* Heading Styling */
    .keranjang-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: #2d3748;
        margin-bottom: 30px;
        text-align: center;
    }

    .keranjang-title span {
        color: #48bb78;
    }

    /* Table Styling */
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        padding: 16px;
        text-align: left;
        border-bottom: 1px solid #e2e8f0;
    }

    th {
        background-color: #f7fafc;
        font-weight: bold;
        color: #2d3748;
    }

    td {
        background-color: #fff;
        color: #4a5568;
    }

    tr:hover {
        background-color: #f1f5f9;
        cursor: pointer;
    }

    .table-row {
        transition: background-color 0.3s;
    }

    /* Action Buttons */
    .btn-update, .btn-delete {
        padding: 10px 20px;
        border-radius: 6px;
        font-size: 14px;
        cursor: pointer;
        border: none;
        transition: background-color 0.3s;
    }

    .btn-update {
        background-color: #3182ce;
        color: white;
    }

    .btn-update:hover {
        background-color: #2b6cb0;
    }

    .btn-delete {
        background-color: #e53e3e;
        color: white;
    }

    .btn-delete:hover {
        background-color: #c53030;
    }

    /* Input Styling */
    input[type="number"] {
        width: 60px;
        padding: 8px;
        border: 1px solid #e2e8f0;
        border-radius: 6px;
        text-align: center;
    }

    /* Checkout Button */
    .checkout-btn {
        display: inline-block;
        padding: 12px 24px;
        background-color: #48bb78;
        color: white;
        border-radius: 8px;
        font-weight: bold;
        text-transform: uppercase;
        font-size: 16px;
        margin-top: 30px;
        text-align: center;
        width: 100%;
        transition: background-color 0.3s;
    }

    .checkout-btn:hover {
        background-color: #38a169;
    }

    /* Footer */
    .checkout-container {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }

    /* Mobile Responsiveness */
    @media (max-width: 768px) {
        table {
            font-size: 14px;
        }

        .keranjang-title {
            font-size: 2rem;
        }
    }
</style>

<div class="container mx-auto my-8 p-6 bg-white shadow-lg rounded-lg">
    <!-- Title -->
    <h1 class="keranjang-title">Keranjang Belanja <span>Anda</span></h1>

    <!-- Cart Table -->
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Nama Item</th>
                    <th>Harga</th>
                    <th class="text-center">Jumlah</th>
                    <th>Total</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($keranjang as $item)
                    <tr class="table-row">
                        <td>{{ $item->nama }}</td>
                        <td>IDR {{ number_format($item->harga, 0, ',', '.') }}</td>
                        <td class="text-center">
                            <form action="{{ route('keranjang.update', $item->id) }}" method="POST" class="flex items-center justify-center">
                                @csrf
                                @method('PUT')
                                <input type="number" name="jumlah" value="{{ $item->jumlah }}" class="w-16 p-2 text-center border border-gray-300 rounded" min="1">
                                <button type="submit" class="btn-update ml-2">Update</button>
                            </form>
                        </td>
                        <td>IDR {{ number_format($item->harga * $item->jumlah, 0, ',', '.') }}</td>
                        <td class="action-btn">
                            <form action="{{ route('keranjang.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-delete">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Checkout Button -->
    <div class="checkout-container">
        <a href="/checkout" class="checkout-btn">
            Checkout
        </a>
    </div>
</div>

@endsection
