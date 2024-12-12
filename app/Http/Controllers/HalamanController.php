<?php  

namespace App\Http\Controllers;  

use Illuminate\Http\Request;  
use App\Http\Requests\PostRequest; // Jangan lupa import PostRequest jika digunakan

class HalamanController extends Controller 
{     
    public function home()     
    {         
        return view('home');     
    }      

    public function about()     
    {         
        return view('about');     
    }      

    public function menu()     
    {         
        return view('menu');     
    }      

    public function index()
   {
    return view('keranjang.index'); // Harus sesuai dengan path di 'resources/views/keranjang/index.blade.php'
   }

    public function contactForm() // Ganti nama method ini untuk menghindari duplikasi nama
    {         
        return view('contact');     
    }      

    public function create() // Ganti nama method ini untuk menghindari duplikasi nama
    {         
        return view('post.create');     
    }   
    public function submitContact(PostRequest $request) // Ganti nama method ini untuk menghindari duplikasi nama
    {         
        $data = $request->validated();         
        return redirect()->route('result')->with('data', $data); // Perbaiki tanda koma menjadi titik dua
    } 
}
  