@extends('layout')

@section('titlePage', 'Contact Us')

@section('konten')
<!-- Display success message if available -->
@if(session('success'))
    <div class="bg-green-500 text-white p-4 rounded-lg mb-4">
        {{ session('success') }}
    </div>
@endif

<!-- Contact Us Section -->
<div class="bg-gray-50 py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-lg mx-auto text-center">
        <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
            Hubungi Kami 
        </h2>
        <p class="mt-4 text-lg leading-6 text-gray-500">
            Kami ingin mendengar dari Anda! Jika Anda memiliki pertanyaan atau ingin memberikan masukan, kirimkan pesan kepada kami.
        </p>
    </div>

    <!-- Contact Form -->
    <div class="mt-12 max-w-xl mx-auto bg-white p-8 rounded-xl shadow-lg">
        <form action="{{ route('contact.submit') }}" method="POST">
            @csrf

            <!-- Email Field -->
            <div class="mb-6">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="name@domain.com" required>
            </div>

            <!-- Subject Field -->
            <div class="mb-6">
                <label for="subject" class="block text-sm font-medium text-gray-700">Subject</label>
                <input type="text" name="subject" id="subject" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Subjek pesan" required>
            </div>

            <!-- Message Field -->
            <div class="mb-6">
                <label for="message" class="block text-sm font-medium text-gray-700">Pesan Anda</label>
                <textarea name="message" id="message" rows="4" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Tulis pesan Anda di sini..." required></textarea>
            </div>

            <!-- Submit Button -->
            <div class="mb-6">
                <button type="submit" class="w-full bg-pink-600 text-white font-semibold py-2 px-4 rounded-md hover:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-pink-500">
                    Kirim Pesan
                </button>
            </div>

        </form>
    </div>
</div>

<!-- Contact Information -->
<div class="bg-gray-100 py-12">
    <div class="max-w-lg mx-auto text-center">
        <h3 class="text-xl font-medium text-gray-800">Atau hubungi kami langsung</h3>
        <p class="mt-4 text-lg text-gray-600">
            Den Coffee, Jalan Araya Megah No. 09 Malang, Jawa Timur.
        </p>
        <p class="mt-2 text-lg text-gray-600">
            Email: <a href="mailto:info@dencoffee.com" class="text-pink-600 hover:text-pink-700">info@dencoffee.com</a>
        </p>
        <p class="mt-2 text-lg text-gray-600">
            Telp: <a href="tel:+622123456789" class="text-pink-600 hover:text-pink-700">+62 21 23456789</a>
        </p>
    </div>
</div>

@endsection
