<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk</title>
    @vite('resources/css/app.css')
</head>
<body >
    <main class=" ">
        <div class="container flex justify-center items-center h-[100vh] gap-20  rounded-2xl p-2">
            <img class="hidden lg:block" src="{{ asset('img/backgroundLogin.png') }}" alt="background login mocel" width="480px" >
            <div class="login p-2">
                <img src="{{ asset('img/LogoMocel.svg') }}" alt="Logo Mocel" width="102px" class="block mx-auto my-3 ">
                <h2 class="text-center text-3xl font-bold font-mono">Masuk</h2>
                <p class="text-center text-sm">Masukkan Informasi Akun Anda</p>
                <section>
                    @if ($errors->any())
                    <ul type="circle" class="border-1 shadow-md p-2 my-2 rounded-md">
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
                    <form action="{{ route('login') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label for="email">
                            <span class="block my-3 text-[12px]">Email</span>
                            <input type="email" name="email" value="{{ old('email') }}" class="ring-1 ring-[#979696] h-11 rounded-md w-full mb-1.5 invalid:border-red-900 invalid:ring-red-900" autofocus >
                        </label>
                        <label for="password">
                            <span class="block my-3 text-[12px]">Kata sandi</span>
                            <input type="password" name="password" class="ring-1 ring-[#979696] h-11 rounded-md w-full invalid:border-red-900 invalid:ring-red-900">
                        </label>
                        <button type="submit" name="masuk" class="h-11 rounded-md w-full bg-[#2C3E50] text-white font-bold mt-8 ">Masuk</button>
                        <div class="flex justify-center">
                            <a href="/register">Belum punya akun?</a>
                        </div>
                    </form>
                </section>

            </div>
        </div>
    </main>

</body>
</html>