@extends('layouts.app')
@section('content')
    <div class="w-4/5 m-auto text-center">
        <div class="py-15 border-b border-gray-200">
            <h1 class="text-6xl">
                {{ trans('homepage.title_blog_page') }}
            </h1>
        </div>
    </div>
    
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="{{ asset('storage/image/blog-1.webp') }}" alt="">
        </div>
        <div>
            <h2 class="text-gray-700 font-bold text-5xl pb-4">
                {{ trans('homepage.post_slug') }}
            </h2>
            <span class="text-gray-500">
                By <span class="font-bold italic text-gray-800">
                    {{ trans('homepage.user_create') }}
                </span>, {{ trans('homepage.time_create') }}
            </span>
            <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
               {{ trans('homepage.post_description') }}
            </p>
            <a href="" class="uppercase bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl ">
                {{ trans('homepage.keep_reading') }}
            </a>
        </div>
    </div>
@endsection


