<x-layout>
    <x-slot:title>Artikel | mocel.id</x-slot:title>
    {{-- <x-slot:halaman>s</x-slot:halaman>
    <x-slot:title>s</x-slot:title> --}}
    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
        <div id="kembaliKeatas" class="fixed bottom-10 right-10 z-10 p-1 rounded-lg hidden transition-all animate-bounce shadow-besar"><a href="#"><ion-icon name="arrow-up-outline" class="text-sixty text-[30px]"></ion-icon></a></div>

        {{-- <article class="py-8 max-width-screen-md border-b border-gray-300">
            <h3 class="font-bold text-4xl text-slate-800 my-2">{{ $artikels['judul'] }}</h3>
            <div class="">
                <a href="#" class="font-light text-slate-700 mb-5 block">{{ $artikels['pembuat'] }} | {{ $artikels->created_at->diffForHumans(); }}</a>
            </div>
            <p class="lg:w-2/3 font-light text-slate-700 my-4">{!! $artikels['paragraph'] !!}</p>            
            <a href="/artikels" class="font-medium text-sky-500  block w-32">&laquo; Back Beranda</a>

        </article> --}}


    <div class="flex justify-between px-4 mx-auto max-w-screen-xl  ">
        <article class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
            <header class="mb-4 lg:mb-6 not-format">
                <address class="flex items-center mb-6 not-italic">
                    <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                        <img class="mr-4 w-16 h-16 rounded-full" src="">
                        <div>
                            <a href="#" rel="author" class="text-xl font-bold text-gray-900 dark:text-white">{{ $artikels->writer }}</a>
                            <p class="text-base text-gray-500 dark:text-gray-400">{{ $artikels->category }}</p>
                            <p class="text-base text-gray-500 dark:text-gray-400"><time pubdate datetime="2022-02-08" title="February 8th, 2022">{{ date_format($artikels->created_at, 'd M Y') }}</time></p>
                        </div>
                    </div>
                </address>
                <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">{{ $artikels->title }}</h1>
            </header>
            
            <figure>
                <img src="{{ asset('storage/public/gambar/' . $artikels->image) }}" alt="gambar background" width="600px" height="100px">
            </figure>
            <div class="">
                {!! $artikels->paragraph !!}
            </div>       
                
            
            
           
                
            

    </main>
</x-layout>