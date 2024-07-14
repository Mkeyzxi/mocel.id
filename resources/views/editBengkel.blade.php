<x:layout>
    <x-slot:title>Edit Bengkel</x-slot:title>

    <div class="lg:w-[900px] mx-auto lg:mt-[120px] mb-28 font-mono z-0">
        <div class="w-full"><a href="{{ route('bengkel.index') }}"><ion-icon name="arrow-back-outline"></ion-icon></a></div>

        <h1 class="bold text-4xl text-slate-800 font-bold py-2">Edit Bengkel</h1> 
        <h2 class="bold text-xl text-slate-800 font-light mb-10">{{ $bengkelEdit->workshop_name }}</h2>    
        <form action="{{ route('bengkel.update', ['id' => $bengkelEdit->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="grid gap-4 mb-4 sm:grid-cols-2">
                <div>
                    <label for="workshop_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">workshop_name</label>
                    <input type="text" name="workshop_name" id="workshop_name" value="{{ old('workshop_name ', $bengkelEdit->workshop_name) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Ex. Apple iMac 27&ldquo;">
                </div>
                <div>
                    <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">address</label>
                    <input type="text" name="address" id="address" value="{{ old('address', $bengkelEdit->address) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Ex. Apple">
                </div>
                <div>
                    <label for="google_maps" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">google_maps</label>
                    <input type="text" name="city" id="city" value="{{ old('city', $bengkelEdit->city) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Ex. Apple">
                </div>
                <div class="">
                    <label for="workshop_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor bengkel</label>
                    <input type="text" id="workshop_number" old="workshop_number" value="{{ old('workshop_number', $bengkelEdit->workshop_number) }}" name="workshop_number" value="62" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 hover:border-secondary hover:ring-secondary" >   
                </div>
                <div>
                    <label for="google_maps" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">google_maps</label>
                    <input type="text" name="google_maps" id="google_maps" value="{{ old('google_maps', $bengkelEdit->google_maps) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Ex. Apple">
                </div>
                <div>
                    <label for="rating" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">rating</label>
                    <input type="number" id="rating" name="rating" step="any" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >                </div>
                <div>
                    <label for="workshop_category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">workshop_Category</label>
                    <select id="workshop_category" name="workshop_category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option selected="" value="{{ old('workshop_category', $bengkelEdit->workshop_category) }}">Silahkan pilih kategori</option>
                        <option value="spesialist">Spesialis</option>
                        <option value="official">Resmi</option>
                    </select>
                </div>
                <div class="">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="workshop_image">Upload gambar</label>
                <input value="{{ old('workshop_image', $bengkelEdit->workshop_image) }}" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" name="workshop_image" id="workshop_image" type="file"" >
                </div>
                <div class="sm:col-span-2">
                    <label for="ability" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kemampuan</label>
                    <textarea id="ability" rows="10" name="ability" value="{{ old('ability', $bengkelEdit->ability) }}" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukkan ability artikel...">{{ old('paragraph', $bengkelEdit->ability) }}</textarea>                    
                </div>
            </div>
            <div class="flex items-center space-x-4">
                <button type="submit" class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Update</button>
            </div>
        </form>
    </div>
   
</x:layout>