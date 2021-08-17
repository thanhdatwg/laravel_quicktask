@extends('layouts.app')
@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    {{ trans('homepage.title') }}
                </h1>
                <a href="{{ route('blogs.index') }}" class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase ">
                    {{ trans('homepage.redirect_blog_button') }}
                </a>
            </div>
        </div>
    </div>
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="{{ asset('storage/image/blog-2.jpeg') }}" alt="">
        </div>
        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                {{ trans('homepage.post_slug') }}
            </h2>
            <p class="py-8 text-gray-500 text-l">
                {{ trans('homepage.post_title') }}
            </p>
            <p class="font-extrabold text-gray-600 text-s pb-9">
                {{ trans('homepage.post_description') }}
            </p>

            <a href="{{ route('blogs.index') }}" class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
            {{ trans('homepage.find_out_more_button') }}</a>
        </div>
    </div>
@endsection
