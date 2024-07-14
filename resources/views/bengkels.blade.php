
<x:layout-bengkels>
    
    <x-slot:title>Info Bengkel</x-slot:title>
    <main class="overflow-hidden dark:bg-darkBg">
        
        <div class="flex justify-start items-start">
            <aside class="w-[21vw] h-[91.4vh] bg-sixty flex justify-between items-center flex-col p-8 shadow-besar dark:bg-darkCt">
                <div class="flex justify-center items-center flex-col gap-2">
                    <img src="{{ asset('img/profile.jpg') }}" width="70px" height="70px"  alt="profile pengguna" class="bg-white dark:bg-darkBg rounded-full">
                    
                    {{-- <h3>{{ $request->username }}</h3> --}}
                    <h3 class="dark:text-darkFt"></h3>
                </div>
               
                <div class="flex justify-center items-start flex-col gap-1 relative -top-14">
                    <h2 class="font-bold font-sans dark:text-darkFt">FILTER</h2>
                    <div class="flex justify-center items-start flex-col gap-8">
                        <div class="flex justify-center items-start flex-col">
                            <h2 class="font-bold text- font-sans dark:text-darkFt">Lokasi</h2>
                            <label for="makassar">
                                <input type="radio" id="makassar" value="makassar" name="city" class="peer">
                                <span class="font-sans peer-checked:underline dark:text-darkFt">Makassar</span>
                            </label>
                            <label for="gowa">
                                <input type="radio" id="gowa" value="gowa" name="city" class="peer">
                                <span class="font-sans peer-checked:underline dark:text-darkFt">Gowa</span>
                            </label>
                            <label for="maros">
                                <input type="radio" id="maros" value="maros" name="city" class="peer">
                                <span class="font-sans peer-checked:underline dark:text-darkFt">Maros</span>
                            </label>
                        </div>
                        <div class="flex justify-center items-start flex-col gap-1">
                            <h2 class="font-bold text-md font-sans dark:text-darkFt">Kategori</h2>
                            <label for="resmi">
                                <input type="radio" id="resmi" name="workshop_category" value="official" class="peer ">
                                <span class="font-sans peer-checked:underline dark:text-darkFt">Resmi</span>
                            </label>
                            <label for="spesialis">
                                <input type="radio" id="spesialis" name="workshop_category" value="specialist" class="peer">
                                <span class="font-sans peer-checked:underline dark:text-darkFt">Spesialis</span>
                            </label>
                        </div>
                    </div>
                </div>
                {{-- <div class="">
                    <a href="/password/{{  }}" class="dark:text-darkFt">Ganti password</a>
                </div> --}}
                <div class="">
                    <a href="{{ route('logout') }}" class="dark:text-darkFt">Keluar</a>
                </div>
            </aside>
        
            <main class="px-6 py-5">

                <div class="flex justify-center items-center w-[79vw] p-2">
                    <div class=" flex gap-14 justify-center items-center">
                        <form class="flex items-center mx-auto lg:w-[800px]">   
                            <label for="simple-search" class="sr-only dark:text-darkFt">Search</label>
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-darkCt" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5v10M3 5a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 10a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm12 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0V6a3 3 0 0 0-3-3H9m1.5-2-2 2 2 2"/>
                                    </svg>
                                </div>
                                <input type="text" name="bengkelSearch" id="simple-search" autocomplete="off" class=" bg-gray-50 border h-[50px] border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sixty focus:border-sixty block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sixty dark:focus:border-sixty" placeholder="Cari bengkel berdasarkan nama..." required />
                            </div>
                            <button type="submit" class="p-2.5 ms-2 text-sm dark:bg-darkCt font-medium text-white dark:text-darkFt  rounded-lg border border-sixty-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 bg-sixty dark:focus:ring-darkFt">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                </svg>
                                <span class="sr-only">Search</span>
                            </button>
                        </form>
                        {{-- <div class="flex gap-10">
                            <div class="w-8 h-8 bg-slate-800"></div>
                            <div class="w-8 h-8 bg-slate-800"></div>
                        </div> --}}
    
                    </div>
                    
                </div>
                <div class="w-full ml-20"><a href="{{ route('bengkel.index') }}"><ion-icon name="arrow-back-outline"></ion-icon></a></div>

                <div class="flex flex-wrap items-start justify-center h-[65vh] p-2 gap-x-7 gap-y-6 mt-6 ">
                    <!-- card 4-->
                    @foreach ($dataBengkels as $dataBengkel)
                    <div class="infoBengkelgsap w-[440px] flex rounded-lg overflow-hidden  relative shadow-besar dark:bg-darkCt">
                        <div class="overflow-hidden  w-[290px] h-[210px] ">
                            <img src="{{ asset('storage/gambar_bengkel/' . $dataBengkel->workshop_image) }}" style="width:100%; height:100%;" alt="bengkel gambar" class="object-cover">                        </div>
                        <div class="p-3 box-border w-1/2">
                            <h3 class="text-xl font-bold pr-7 dark:text-darkFt" >{{ $dataBengkel->workshop_name }}</h3>
                            <div class="flex justify-start items-start flex-col gap-2 mt-5">
                                <div class="flex justify-start items-start">
                                    <ion-icon name="location-outline"  class=" text-xl text-fivety w-10 box-content"></ion-icon>
                                    <p class="px-2 text-xs dark:text-darkFt">{{ Str::limit($dataBengkel->address, 55) }}</p>
                                </div>
                                <div class="flex justify-start items-center">
                                    <ion-icon name="star-outline" class="text-xl text-fivety w-[14px] box-border p-0.5" ></ion-icon>
                                    <p class="px-3 text-md font-bold dark:text-darkFt">{{ $dataBengkel->rating }}</p>
                                </div>
                                <div class=" flex justify-center items-center px-3 py-1 rounded-tl-lg rounded-bl-lg dark:text-darkFt dark:bg-darkBg font-light bg-fivety text-white absolute top-40 right-0 w-20 hover:bg-thirty hover:text-white transition-all hover:shadow-kecil">
                                    <a href="/bengkels/{{ $dataBengkel->workshop_name }}" class="" >Detail</a>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                    @endforeach
                    
                    
                </div>
                <div class="w-full px-10">{{ $dataBengkels->links() }}</div>
            </main>
        </div>
    </main>  
</x:layout-bengkels>