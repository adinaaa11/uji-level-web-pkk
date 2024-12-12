<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    public function index()
    {
        $keranjang = session()->get('keranjang', []);
        return view('keranjang.index', compact('keranjang'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required|integer',
            'nama' => 'required|string',
            'harga' => 'required|numeric',
            'jumlah' => 'required|integer|min:1',
        ]);

        $keranjang = session()->get('keranjang', []);

        // Tambahkan item baru atau update jumlah
        if (isset($keranjang[$request->id])) {
            $keranjang[$request->id]['jumlah'] += $request->jumlah;
        } else {
            $keranjang[$request->id] = [
                'id' => $request->id,
                'nama' => $request->nama,
                'harga' => $request->harga,
                'jumlah' => $request->jumlah,
            ];
        }

        session(['keranjang' => $keranjang]);

        return redirect()->route('keranjang.index')->with('success', 'Produk berhasil ditambahkan ke keranjang!');
    }

    public function update(Request $request, $id)
{
    // Validasi input jumlah
    $request->validate([
        'jumlah' => 'required|integer|min:1',
    ]);

    // Ambil data keranjang dari session
    $keranjang = session()->get('keranjang', []);

    // Cek apakah item dengan ID tersebut ada dalam keranjang
    if (isset($keranjang[$id])) {
        // Update jumlah produk sesuai input dari form
        $keranjang[$id]['jumlah'] = $request->jumlah;

        // Simpan kembali keranjang yang sudah diperbarui ke session
        session(['keranjang' => $keranjang]);

        return redirect()->route('keranjang.index')->with('success', 'Jumlah item berhasil diperbarui!');
    } else {
        return redirect()->route('keranjang.index')->with('error', 'Item tidak ditemukan!');
    }
}

    
    public function destroy($id)
    {
        $keranjang = session()->get('keranjang', []);

        if (isset($keranjang[$id])) {
            unset($keranjang[$id]);
            session(['keranjang' => $keranjang]);
            return redirect()->back()->with('success', 'Item berhasil dihapus.');
        }

        return redirect()->back()->with('error', 'Item tidak ditemukan!');
    }

    public function clear()
    {
        session()->forget('keranjang');
        return redirect()->route('keranjang.index')->with('success', 'Keranjang telah dikosongkan!');
    }

    public function checkout()
    {
        $keranjang = session()->get('keranjang', []);
        $total = array_sum(array_map(function ($item) {
            return $item['harga'] * $item['jumlah'];
        }, $keranjang));

        return view('checkout', compact('keranjang', 'total'));
    }
}
