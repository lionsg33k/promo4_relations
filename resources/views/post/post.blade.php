@extends('layouts.index')


@section('content')
    <div class="h-screen">

        <div class="grid grid-cols-3 ">
            <div class=""></div>


            {{-- content  --}}
            <div class="border min-h-screen ">

                <form action="{{ route('post.store') }}" method="post" class="py-5 px-3 space-y-3 border-y">
                    @csrf
                    <div class="">
                        <h1 class="capitalize text-amber-900/80 font-semibold">crete post</h1>
                    </div>
                    <textarea rows="6"
                        class="py-3 px-4 border-2 border-amber-400 shadow-lg focus:outline-none text-amber-700 rounded-lg w-full"
                        placeholder="Whats on your mind ..." name="content" id=""></textarea>
                    <div class="flex items-center justify-between">
                        <div class="py-1 px-5 text-amber-600 bg-white shadow-lg  font-semibold">Add Photo</div>
                        <button class="bg-amber-600 py-1 px-8 text-white rounded-lg">Post</button>
                    </div>
                </form>

                <div class="h-full py-5 px-3 space-y-3 ">


                    @forelse ($posts as $post)
                        <div class=" space-y-2">
                            <div class="flex header">
                                <img class="w-20 h-20 aspect-square" src="{{ asset('image/p.png') }}" alt="">
                                <div class="flex flex-col">
                                    <h1 class="text-sm font-semibold">Default User</h1>
                                    <h1 class="text-xs">{{ $post->created_at->diffForhumans() }}</h1>
                                </div>
                            </div>

                            <div class="px-5">
                                {{ $post->content }}
                            </div>

                            <div class="px-5 flex items-center gap-x-3">
                                <form class="w-3/4 flex items-center" action="/comments/store" method="POST">
                                    @csrf
                                    <input name="post_id" value="{{ $post->id }}" type="hidden">
                                    <input placeholder="Add Coment"
                                        class="w-full rounded-lg placeholder:text-amber-600 text-amber-600 py-1 px-4 focus:outline-none border border-amber-600"
                                        type="text" name="comment" id="">
                                </form>
                                <div class=" flex items-center">
                                    <form action="/posts/like" method="post">
                                        @csrf
                                        <input  value="{{ $post->id }}" name="post_id" type="hidden">
                                        <button class="cursor-pointer flex items-center gap-x-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                fill="red" class="bi bi-heart" viewBox="0 0 16 16">
                                                <path
                                                    d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                                            </svg>
                                        <h1>{{ $post->like }}</h1>
                                        </button>
                                    </form>
                                </div>
                            </div>

                            <div class="px-8  ">
                                @foreach ($post->comments as $comment)
                                    <div class="py-3">

                                        <h1 class="text-black/80">{{ $comment->comment }}</h1>
                                        <h1 class="text-xs text-black/40">{{ $comment->created_at->diffForhumans() }}</h1>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @empty
                        <div class=" flex  items-center justify-center">

                            <h1 class="text-black/50 capitalize">No Post Available at the moment </h1>
                        </div>
                    @endforelse
                </div>

            </div>






            <div class=""></div>
        </div>
    </div>
@endsection
