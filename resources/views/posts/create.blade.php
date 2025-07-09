@extends('layout')

@section('header')
    <h1 class="text-[3rem] text-white font-bold">Nuevo Post</h1>
@endsection

@section('content')
    <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data" class="bg-[#d3ddeec9] rounded-[20px] shadow-xl flex p-[20px] flex-col items-center w-[600px] gap-[20px]">
        @csrf        
        <h2 class="text-[2rem] text-[#1b3864] font-bold">Nuevo Post</h2>
        @error('title')
        <span class="text-red-700">
            {{$message}}
        </span>
        @enderror
        <label for="titulo" class="w-[100%] grid grid-cols-[80px_1fr] items-center"> Titulo:
            <input type="text" class="w-[100%] rounded-[10px] border-[#1b3864] border-solid border outline-none p-[2px_10px]" id="titulo" name="title" value="{{old('title')}}">
        </label>
        @error('body')
        <span class="text-red-700">
            {{$message}}
        </span>
        @enderror
        <label for="cuerpo" class="w-[100%] grid grid-cols-[80px_1fr]"> Cuerpo:
            <textarea name="body" id="cuerpo" class="w-[100%] rounded-[10px] border-[#1b3864] border-solid border outline-none p-[2px_10px]">{{old('body')}}</textarea>
        </label>
        @error('image')
        <span class="text-red-700">
            {{$message}}
        </span>
        @enderror
        <label for="imagen" class="bg-[#1b3864] hover:cursor-pointer text-white font-bold p-[5px_10px] rounded-[10px]" >
            <input type="file" class="hidden" id="imagen" accept=".jpg, .jpeg, .png" name="image"/>
            Seleccionar una Imagen
        </label>
        <button type="submit" class="bg-[#1b3864] p-[5px_12px] text-white font-semibold rounded-[10px]">Enviar</button>
    </form>
@endsection