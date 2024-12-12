@extends('layout')

@section('titlePage', 'Home')

@section('konten')

<!-- Section 1: Background with Gradient -->
<section class="relative">
    <div class="absolute inset-0 bg-cover bg-center opacity-50" style="background-image: url('image/ngops2.jpeg');"></div>
    <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56 relative z-10">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl drop-shadow-xl animate-fadeIn">Selamat Datang di DEN'COFFEE</h1>
        <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48 animate-slideUp">
            Halo, Terima kasih telah mengunjungi Coffee Shop kami! Di sini, Anda akan menikmati berbagai minuman kopi yang lezat sesuai yang Anda inginkan serta pemandangan yang indah. Anda juga bisa menikmati berbagai menu makanan pilihan di sini.
        </p>
        <div class="mt-8 flex justify-center">
            <div class="w-1/2 h-1 bg-yellow-500 animate-expand"></div>
        </div>
    </div>
</section>

<!-- Section 2: Kenapa Memilih DEN'COFFEE? -->
<section class="py-16 bg-gradient-to-r from-gray-100 via-white to-gray-200">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-semibold text-gray-800 animate-fadeIn">Kenapa Memilih DEN'COFFEE?</h2>
        <p class="mt-4 text-gray-600 text-lg animate-slideUp">
            Kami tidak hanya menyajikan kopi berkualitas terbaik, tetapi juga memberikan pengalaman yang tak terlupakan dengan suasana yang nyaman dan pelayanan yang ramah.
        </p>
        <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- First Feature -->
            <div class="p-6 bg-white rounded-lg shadow-lg hover:shadow-2xl transform transition-transform duration-300 hover:scale-105 group">
                <img src="image/gambar1.jpeg" alt="Coffee Beans" class="w-24 h-24 mx-auto rounded-full shadow-md transition-transform group-hover:rotate-12">
                <h4 class="mt-4 text-xl font-bold text-gray-800 group-hover:text-yellow-500">Kopi Berkualitas</h4>
                <p class="mt-2 text-gray-600 group-hover:text-gray-800">Kami menggunakan biji kopi pilihan yang diolah secara profesional untuk menghasilkan rasa yang otentik.</p>
            </div>
            <!-- Second Feature -->
            <div class="p-6 bg-white rounded-lg shadow-lg hover:shadow-2xl transform transition-transform duration-300 hover:scale-105 group">
                <img src="image/gambar2.jpeg" alt="Cafe Atmosphere" class="w-24 h-24 mx-auto rounded-full shadow-md transition-transform group-hover:rotate-12">
                <h4 class="mt-4 text-xl font-bold text-gray-800 group-hover:text-yellow-500">Suasana Nyaman</h4>
                <p class="mt-2 text-gray-600 group-hover:text-gray-800">Ruang yang dirancang dengan penuh cinta, cocok untuk bersantai atau bekerja.</p>
            </div>
            <!-- Third Feature -->
            <div class="p-6 bg-white rounded-lg shadow-lg hover:shadow-2xl transform transition-transform duration-300 hover:scale-105 group">
                <img src="image/gambar3.jpeg" alt="Friendly Service" class="w-24 h-24 mx-auto rounded-full shadow-md transition-transform group-hover:rotate-12">
                <h4 class="mt-4 text-xl font-bold text-gray-800 group-hover:text-yellow-500">Pelayanan Ramah</h4>
                <p class="mt-2 text-gray-600 group-hover:text-gray-800">Kami selalu berusaha memberikan pelayanan terbaik untuk membuat pengalaman Anda menyenangkan.</p>
            </div>
        </div>
    </div>
</section>

@endsection
