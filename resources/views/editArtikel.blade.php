<x:layout>
    <x-slot:title>Edit Artikel</x-slot:title>
    <div class="lg:w-[900px] mx-auto lg:mt-[120px] mb-28 font-mono z-0">
        <div class="w-full"><a href="{{ route('dashboard') }}"><ion-icon name="arrow-back-outline"></ion-icon></a></div>
        <h1 class="bold text-4xl text-slate-800 font-bold py-2">Edit Artikel</h1> 
        <h2 class="bold text-xl text-slate-800 font-light mb-10">{{ $artikelEdit->title }}</h2>    
        <form action="{{ route('artikel.update', ['id' => $artikelEdit->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="grid gap-4 mb-4 sm:grid-cols-2">
                <div>
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                    <input type="text" name="title" id="title" value="{{ old('title', $artikelEdit->title) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Ex. Apple iMac 27&ldquo;">
                </div>
                <div>
                    <label for="writer" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">writer</label>
                    <input type="text" name="writer" id="writer" value="{{ old('writer', $artikelEdit->writer) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Ex. Apple">
                </div>
                <div>
                    <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                    <select id="category" name="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option selected="" value="{{ old('category', $artikelEdit->category) }}">Silahkan pilih kategori</option>
                        <option value="Tips & Trik">Tips & Trik</option>
                        <option value="Artikel">Artikel</option>
                        <option value="Tutorial">Tutorial</option>
                    </select>
                </div>
                <div class="">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="image">Upload gambar</label>
                <input value="{{ old('image', $artikelEdit->image) }}" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" name="image" id="image" type="file"" >
                </div>
                <div class="sm:col-span-2">
                    <label for="paragraph" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Paragraph</label>
                    <textarea id="paragraph" rows="10" name="paragraph" value="{{ old('paragraph', $artikelEdit->paragraph) }}" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukkan paragraph artikel...">{{ old('paragraph', $artikelEdit->paragraph) }}</textarea>                    
                </div>
            </div>
            <div class="flex items-center space-x-4">
                <button type="submit" class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Update</button>
            </div>
        </form>
    </div>
   
</x:layout>