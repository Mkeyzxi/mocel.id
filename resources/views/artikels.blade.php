<x-layout>
    <x-slot:title>Info Otomotif</x-slot:title>
    {{-- <x-slot:halaman>1</x-slot:halaman>
    <x-slot:title>2</x-slot:title> --}}
    <main class="dark:bg-darkBg">

    
    <div class="container ">
        <form class="flex items-center mx-auto lg:w-[800px] pt-24">   
            <label for="artikelSearch" class="sr-only">Search</label>
            <div class="relative w-full">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5v10M3 5a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 10a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm12 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0V6a3 3 0 0 0-3-3H9m1.5-2-2 2 2 2"/>
                    </svg>
                </div>
                <input type="text" id="artikelSearch" name="artikelSearch" autocomplete="off" value="{{ old('artikelSearch') }}" class="bg-gray-50 border h-[50px] border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-secondary focus:border-secondary block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-secondary dark:focus:border-secondary" placeholder="Mencari artikel berdasarkan nama...." required />
            </div>
            <button type="submit" class="p-2.5 ms-2 text-sm  font-medium text-white bg-si rounded-lg border dark:bg-darkCt border-sixty dark:border-darkFt hover:bg-secondary focus:ring-4 focus:outline-none focus:ring-blue-300 dark:hover:bg-si dark:focus:ring-secondary bg-sixty">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </button>
        </form>
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
                <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Artikel mocel</h2>
                <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">Ada banyak cara untuk menggunakan kendaraan begitu juga dengan cara merawatnya, berikut tentang kendaraan.</p>
            </div>
            <div class="grid lg:gap-8 gap-8 lg:grid-cols-3 md:grid-cols-2 grid-cols-1">
        @foreach ($artikels as $artikel)
        {{-- <article class="py-8 max-width-screen-md border-b border-gray-300">
            <h3 class="font-bold text-4xl text-slate-800 my-2">{{ $artikel['judul'] }}</h3>
            <div class="">
                <a href="#" class="font-light text-slate-700 mb-5 block">{{ $artikel['pembuat'] }} | {{ $artikel['created_at']->format('d F Y'); }}</a>
            </div>
            <p class="lg:w-2/3 font-light text-slate-700 my-4">{{ Str::limit($artikel['paragraph'], 150)}}</p>            
            <a href="/artikels/{{ $artikel['judul'] }}" class="font-medium text-sky-500  block w-32">Read more &raquo;</a>

        </article> --}}
                
                    <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                        <div class="flex justify-between items-center mb-5 text-gray-500">
                            <span class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                                <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"></path></svg>
                                {{ $artikel->category }}
                            </span>
                            <span class="text-sm">{{ $artikel->created_at->diffForHumans() }}</span>
                        </div>
                        <a href="#">
                            <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $artikel->title }}</h2>
                        </a>
                        
                        <p class="mb-5 font-light text-gray-500 dark:text-gray-400">{{ strip_tags(Str::limit($artikel->paragraph, 250)); }}</p>
                        <div class="flex justify-between items-center">
                            <div class="flex items-center space-x-4">
                                <img class="w-7 h-7 rounded-full" src="{{ asset('img/profile.jpg') }}" alt="user"/>
                                <span class="font-medium text-sm dark:text-white">
                                    {{ $artikel->writer }}
                                </span>
                            </div>
                            <a href="/artikels/{{ $artikel->title }}" class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                                Lanjut
                                <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </a>
                        </div>
                    </article>          
                 
        @endforeach
    </div> 
    </div>
    </div>
</main>
</x-layout>