@extends('layout')

@section('header')
    <h1 class="text-[3rem] text-white font-bold">Posts</h1>
@endsection


@section('content')    

    @foreach ($posts as $post)
        <div class="card bg-[#d3ddeec9] w-100 h-[500px] max-w-100 max-h-[500px] m-8 p-5 rounded-[20px] flex flex-col gap-5 shadow-xl">
            <div class="card__title">
                <h1 class="font-semibold leading-8 text-2xl italic text-center">{{$post->title}}</h1>            
            </div>
            <div class="card__image overflow-hidden rounded-[15px] h-[250px]">
                <img src="{{$post->image->path}}" alt="image">
            </div>
            <div class="card__body">
                <p class="italic">{{$post->body}}</p>
            </div>
        </div>
    @endforeach

    @endsection
    
@section('footer')
    {{$posts->links()}}
@endsection