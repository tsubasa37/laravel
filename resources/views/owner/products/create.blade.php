<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('owner.products.store') }}" method="POST">
                        @csrf
                        <div class="-m-2">
                            <div class="p-2 w-1/2 mx-auto">
                                <div class="relative">
                                    <select name="category">
                                        @foreach($categories as $category)
                                            <optgroup label="{{ $category->name }}">
                                                @foreach($category->secondary as $secondary)
                                                    <option value="{{ $secondary->id}}" > {{ $secondary->name }}</option>
                                                @endforeach
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>
                            </div>
                            <x-select-image :images="$images" name="image1" />
                            <div class="p-2 w-full flex justify-around mt-4">
                                <button type="button" onclick="location.href='{{ route('owner.products.index') }}'" class="bg-gray-200 border-0 py-2 px-8 focus:outline-none hover:bg-gray-600 rounded text-lg">戻る</button>
                                <button type="submit" class="text-white bg-blue-500 border-0 py-2 px-8 focus:outline-none hover:bg-blue-600 rounded text-lg">登録</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        'use strict'
        const images = document.querySelectorAll('.image') //全てのimageタグを取得
        images.forEach(image => { // 1つずつ繰り返す
            image.addEventListener('click', function(e){ // クリックしたら
                const imageName = e.target.dataset.id.substr(0, 6) //data-idの6文字
                const imageId = e.target.dataset.id.replace(imageName + '_', '') // 6文字カット
                const imageFile = e.target.dataset.file
                const imagePath = e.target.dataset.path
                const modal = e.target.dataset.modal
                // サムネイルと input type=hiddenのvalueに設定
                document.getElementById(imageName + '_thumbnail').src = imagePath + '/' + imageFile
                document.getElementById(imageName + '_hidden').value = imageId
                MicroModal.close(modal); //モーダルを閉じる
            })
        })
    </script>
</x-app-layout>
