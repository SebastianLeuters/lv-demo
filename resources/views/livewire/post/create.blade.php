@php use function Laravel\Prompts\error; @endphp
<div xmlns="http://www.w3.org/1999/html" class="m-5">
    <h1 class="bg-green-800 dark:text-white text-center p-4">Inhalt hochladen</h1>
    <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">
        <form wire:submit="save" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-rows-2 lg:grid-flow-col grid-cols-2 gap-4">
                <div class="col-span-2 lg:col-span-1 m-5">
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Überschrift</label>
                    <input wire:model="title" type="text" id="title" name="title" placeholder="Titel" required
                           class="rounded bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                    @error('title') <span class="error text-red-600">{{ $message }}</span> @enderror
                </div>

                <div class="col-span-2 lg:col-span-1 m-5">
                    <label for="body" class="block mb-2 text-sm font-medium text-gray-900">Inhalt</label>
                    <textarea wire:model="body" id="title" name="body" placeholder="Text" required rows="3"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-gray-950 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
                    </textarea>
                    @error('body') <span class="error text-red-600">{{ $message }}</span> @enderror
                </div>
                <div class="row-span-2 col-span-2 m-5 border-solid border-1 bg-gray-100  border-b-gray-500 rounded content-center" @if ($photo && !$errors->has('photo')) style="background-image: url({{ $photo->temporaryUrl() }}); background-size: cover; background-repeat: no-repeat" @endif>

                        <label class="m-auto block mb-2 text-sm font-medium text-gray-900 border border-gray-300 rounded-full w-50 bg-green-800 text-white p-2 text-center" for="photo">Datei hochladen
                        <input class="hidden block p-2 text-sm text-gray-900 border border-gray-300 rounded-full cursor-pointer text-white bg-green-800 bg-gray-50  focus:outline-none dark:border-gray-600 dark:placeholder-gray-400" id="photo" type="file" wire:model="photo">
                        </label>
                            <br/>

                        @error('photo') <span class="error text-red-600">{{ $message }}</span> @enderror
                </div>
            </div>


            <div class="grid grid-cols-2 gap-4">
                <div class="col-start-1 lg:col-start-2 col-span-2">
                    <button type="submit"
                            class="w-full float-right bg-green-800 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        Inhalt ausspielen
                    </button>
                </div>

            </div>
        </form>
    </div>
</div>

