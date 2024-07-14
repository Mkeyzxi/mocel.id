<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk</title>
    @vite('resources/css/app.css')
</head>
<body>
    <main>
        <div class="container lg:flex lg:justify-end items-center lg:content-center lg:gap-18">
            <div class="login p-5">
               
                <section class="lg:w-[377px] lg:mt-5 lg:flex lg:flex-col justify-end ">
                    <img src="{{ asset('img/LogoMocel.svg') }}" alt="Logo Mocel" width="102px" class="block mx-auto my-3">
                    <h2 class="text-center text-3xl font-bold font-mono">Daftar</h2>
                    <p class="text-center text-sm">Masukkan data anda untuk membuat akun</p>
                    @if ($errors->any())
                    <ul type="circle" class=" border-1 shadow-md p-2 my-2 rounded-md">
                        @foreach ($errors->all() as $error)
                            {{-- <li class="text-slate-800 text-md">{{ $error }}</li> --}}
                            <div class="flex items-center p-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                                <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                                </svg>
                                <span class="sr-only">Info</span>
                                    <div>
                                    <span class="font-medium">{{ $error }}</span>
                                </div>
                            </div>
                        @endforeach
                    </ul>
                    @endif
                    <form action="{{ route('buatAkun') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <label for="email">
                            <span class="block my-3 text-[12px]">Email</span>
                            <input id="email" type="email" name="email" value="{{ old('email') }}" class="ring-1 ring-[#979696] h-11 rounded-md w-full mb-1.5 p-2 invalid:border-red-900 invalid:ring-red-900 hover:border-secondary hover:ring-secondary" autofocus>
                        </label>
                        <label for="username">
                            <span class="block my-3 text-[12px]">Nama Pengguna</span>
                            <input id="username" type="text" name="username" class="ring-1 ring-[#979696] h-11 rounded-md w-full mb-1.5 hover:border-secondary hover:ring-secondary" autofocus>
                        </label>
                        <label for="phone_number">
                            <span class="block my-3 text-[12px]">Nomor Telepon</span>
                            <input id="phone_number" type="number" name="phone_number" class="ring-1 ring-[#979696] h-11 rounded-md w-full mb-1.5 invalid:border-red-900 invalid:ring-red-900 hover:border-secondary hover:ring-secondary" autofocus>
                        </label> 
                        <label for="password">
                            <span class="block my-3 text-[12px]">Kata sandi</span>
                            <input id="password" type="password" name="password" class="ring-1 ring-[#979696] h-11 rounded-md w-full invalid:border-red-900 invalid:ring-red-900 hover:border-secondary hover:ring-secondary">
                        </label>
                        <label for="Conditions">
                            <input id="Conditions" type="checkbox" name="Conditions" class="h-3 w-3 rounded-full">
                            <span class="my-1 text-[14px]">saya setuju dengan syarat persyaratan</span>
                        </label>
                        <button type="submit" name="masuk" class="h-11 rounded-md w-full bg-[#2C3E50] text-white font-bold my-8 hover:bg-secondary transition-all hover:ring-secondary">Daftar</button>
                    </form>
                </section>
                
            </div>
            <div class="hidden lg:block lg:w-1/2 lg:mt-7 "><img src="{{ asset('img/backgroundBuatAkun.png') }}" alt="background daftar mocel" width="484px"></div>

        </div>
    </main>
        
</body>
</html>