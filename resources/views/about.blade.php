@extends('layout')

@section('titlePage', 'gallery')

@section('konten')

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About DEN'COFFEE</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

  <!-- Hero Section -->
  <header class="bg-cover bg-center h-96" style="background-image: url('image/background.jpg');">
    <div class="flex items-center justify-center h-full bg-black bg-opacity-50">
      <h1 class="text-white text-5xl font-bold drop-shadow-lg">Welcome to Our Coffee Shop</h1>
    </div>
  </header>

  <!-- About Us Section -->
  <section class="py-16 bg-white">
    <div class="container mx-auto px-6 text-center">
      <h2 class="text-4xl font-bold text-gray-800">About Us</h2>
      <p class="mt-4 text-gray-600 text-lg">
      DEN’ COFFEE adalah sebuah caffee yang terletak di daerah Malang, Jawa Timur. Cafe ini di bangun sejak Agustus 2024. Desain bangunan Cafe ini terlihat sangat unik, hingga banyak mahasiswa maupun anak sekolah yang sering mengunjungi cafe ini. 
      </p>
    </div>
  </section>

  <!-- Story Section -->
  <section class="py-16 bg-gray-50">
  <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
    <img src="image/storycoffee.jpeg" alt="Our Coffee Story" class="rounded-lg shadow-lg">
    <div>
      <h3 class="text-3xl font-semibold text-gray-800">Our Story</h3>
      <p class="mt-4 text-gray-600">
        At <span class="font-bold text-gray-800">[Coffee Shop Name]</span>, we started with a simple dream: to create a cozy space where coffee lovers can enjoy the finest brews.
      </p>
      <p class="mt-4 text-gray-600">
        We carefully source our beans from sustainable farms and roast them to perfection, ensuring every cup tells a story of passion and quality.
      </p>
      <p class="mt-4 text-gray-600">
        Beyond coffee, we’re about connection—offering a warm and welcoming space for everyone to gather, unwind, and create memories.
      </p>
      <a href="#our-values" class="mt-6 inline-block bg-yellow-500 text-white py-2 px-4 rounded-lg hover:bg-yellow-600">
          Learn More
        </a>
    </div>
  </div>
</section>

  <!-- Values Section -->
  <section id="our-values" class="py-16 bg-gray-50">
  <div class="container mx-auto px-6 text-center">
    <h2 class="text-3xl font-semibold text-gray-800">Our Values</h2>
    <p class="mt-4 text-gray-600">Apa yang menjadi inti dari perjalanan kami di <span class="font-bold text-gray-900">Den'Coffee</span>.</p>
    <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-8">
      <div class="p-6 bg-white rounded-lg shadow-lg hover:shadow-2xl">
        <h4 class="mt-4 text-xl font-bold text-gray-800">Quality</h4>
        <p class="mt-2 text-gray-600">Kami hanya menggunakan biji kopi terbaik untuk memberikan rasa yang kaya dan pengalaman tak terlupakan di setiap cangkir.</p>
      </div>
      <div class="p-6 bg-white rounded-lg shadow-lg hover:shadow-2xl">
        <h4 class="mt-4 text-xl font-bold text-gray-800">Sustainability</h4>
        <p class="mt-2 text-gray-600">Kami berkomitmen untuk menjaga keberlanjutan dengan praktik ramah lingkungan yang menghormati alam dan komunitas.</p>
      </div>
      <div class="p-6 bg-white rounded-lg shadow-lg hover:shadow-2xl">
        <h4 class="mt-4 text-xl font-bold text-gray-800">Community</h4>
        <p class="mt-2 text-gray-600">Menciptakan ruang yang hangat dan nyaman bagi semua orang untuk terhubung, bersantai, dan menikmati momen bersama.</p>
      </div>
    </div>
  </div>
</section>

</body>
</html>



@endsection