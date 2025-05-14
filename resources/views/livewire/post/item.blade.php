<div class="p-6 m-5 bg-white border border-gray-200 rounded-lg shadow-sm ">
    <a href="{{route('post.detail', ['id' => $id])}}">
    <div class="grid grid-cols-3">
        <div class="col-span-3 lg:col-span-1 lg:mr-5 ">
            <div class="aspect-16/9 bg-no-repeat bg-cover"  style="background-image: url('{{route('post.image', ['postId' => $id], true)}}');"></div>
        </div>
        <div class="col-span-3 lg:order-first">

                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900">{{$title}}</h5>

        </div>
        <div class="col-span-2 ml-5 md:ml-0">
            <p class="mb-3 font-normal text-gray-800 ">
                {{$body}}
            </p>
        </div>
    </div>
    </a>
</div>

