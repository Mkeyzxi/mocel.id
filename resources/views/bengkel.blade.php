<x:layout>
    <x-slot:title>Bengkel | mocel.id</x-slot:title>
    <main class="bg-[#F0F0F0] dark:bg-darkBg">
        <div class="lg:w-[1000px] mx-auto p-10 w-full bg-white dark:bg-darkCt">
            <div class="w-full"><a href="{{ route('bengkel.index') }}"><ion-icon name="arrow-back-outline" class="dark:text-darkFt"></ion-icon></a></div>
            
            <div style="background-image: url('{{ asset("storage/public/gambar_bengkel/" . $bengkels->workshop_image) }}');" class="w-full h-60 rounded-lg overflow-hidden bg-cover mt-10 bg-no-repeat shadow-md flex justify-start items-end p-16">
                {{-- <img src="{{ asset("storage/public/gambar_bengkel/" . $bengkels->workshop_image) }}" width="100%" alt=""> --}}
                <h1 class="font-bold text-white drop-shadow-md text-4xl">{{ $bengkels->workshop_name }}</h1>
            </div>
            <div class="flex gap-4 p-5 my-5">
                
    
                <div class="relative rounded-md lg:w-[500px] w-full ">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 shadow-md">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3 bg-secondary text-white dark:bg-darkFt dark:text-slate-700">
                                    Layanan
                                </th>
                                <th scope="col" class="px-6 py-3 bg-secondary text-white dark:bg-darkFt dark:text-slate-700">
                                    Harga
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            {!! $bengkels->ability !!}
                            
                            
                            {{-- <tr class="bg-white dark:bg-gray-800">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <!-- masukkan layanan disini-->
                                </th>
                                <td class="px-6 py-4">
                                    <!-- masukkan harga disini -->
                                </td>
                            </tr> --}}
                        </tbody>
                    </table>
                </div>
                <div class="flex-auto rounded-md overflow-hidden shadow-md">
                    {!! $bengkels->google_maps !!}
                </div>
            </div>
            
            <div class="p-10 flex flex-col gap-10 mt-28">
                <h1 class="lg:text-2xl text-center font-bold dark:text-darkFt">Chat Bengkel Via Whatsapp</h1>
                <div class="shadow-lg p-10">
                    <form class="max-w-lg mx-auto flex flex-col gap-[2px]" onsubmit="pesanBengkel()">
                        <div class="mb-5">
                            <label for="complaints" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Masukkan pesan untuk bengkel</label>
                            <textarea id="complaints" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required /></textarea>
                        </div>
                        <div class="flex items-center mb-4">
                            <input id="needsyes" type="radio" value="saya butuh montir!" name="needs" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="needsyes" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">butuh montir</label>
                        </div>
                        <div class="flex items-center">
                            <input checked id="needsno" type="radio" value="tidak butuh montir!" name="needs" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="needsno" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">tidak butuh montir</label>
                        </div>
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-5">Kirim</button>
                    </form>
                </div>
            </div>
            
        </div>
    </main>
    <script>
        function pesanBengkel(){
        let nomorTelepon = {{ $bengkels->workshop_number }}
        const complaints = document.getElementById('complaints').value;
        const needs = document.querySelector('input[name="needs"]:checked').value;
        const urlWhatsapp = `https://wa.me/${nomorTelepon}?text= saya ${needs}, pesan saya ${complaints} `; 

        window.open(urlWhatsapp, "_blank");
}
    </script>
</x:layout>