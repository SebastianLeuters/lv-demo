<div class="p-6 m-5 bg-white border border-gray-200 rounded-lg shadow-sm>
    <div class="grid grid-cols-1">
        <div class="col-span-1 lg:col-span-1 lg:mr-5">
            <div class="aspect-16/9 bg-no-repeat bg-cover"
                 style="background-image: url('{{route('post.image', ['postId' => $id], true)}}');"></div>
        </div>
        <div class="col-span-1">
            <a href="{{route('post.detail', ['id' => $id])}}">
                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 ">{{$title}}</h5>
            </a>
        </div>
        <div class="col-span-1">
            <p class="mb-3 font-normal  ">
                {{$body}}
            </p>
        </div>
        <div class="col-span-1 md:w-100">
            <a href="{{route('posts.index')}}" class="rounded-full focus:outline-none text-white bg-green-800  focus:ring-4 focus:ring-green-300 font-medium text-sm px-5 py-2.5 me-2 mb-2">Zurück zur Übersicht</a>
        </div>
    </div>
</div>

