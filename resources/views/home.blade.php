@extends('layouts.app')
@section('content')
<div class="grid grid-cols-12 mt-2 content-end">
<!-- kiri -->
<div class="col-span-12 md:col-span-3 ">
  <div class="bg-white mx-5 my-2 rounded py-5 shadow sticky top-5">
    <div class="m-5 prose font-nunito text-xl font-bold">Categories: </div>
    <ul class="m-0">
      <a href="#">
        <li class="px-5 prose py-3 text-lg hover:bg-cyan-400 hover:text-white duration-500 ">General
        </li>
      </a>
      <a href="#">
        <li class="px-5 prose py-3 text-lg hover:bg-cyan-400 hover:text-white duration-500  text-white bg-cyan-400">
          Laravel</li>
      </a>
      <a href="#">
        <li class="px-5 prose py-3 text-lg hover:bg-cyan-400 hover:text-white duration-500 ">Tailwind
        </li>
      </a>
      <a href="#">
        <li class="px-5 prose py-3 text-lg hover:bg-cyan-400 hover:text-white duration-500 ">College
        </li>
      </a>
      <a href="#">
        <li class="px-5 prose py-3 text-lg hover:bg-cyan-400 hover:text-white duration-500 ">
          Uncategorized</li>
      </a>
    </ul>
  </div>
</div>

<!-- right menu -->
<div class="col-span-12 md:col-span-9">
  <div class="bg-white rounded mx-5 my-2 p-5 shadow">
    <div class="flex my-5 justify-between">
      <div class="prose font-nunito text-xl font-bold">Notes</div>
      <div class="w-6/12">
        <input type="text" name="search" class="border rounded p-2 w-full" placeholder="Search ... ">
      </div>
    </div>
    <a href="{{route('notes.show', 1)}}">
      <div class="w-100 border shadow-sm rounded p-3 mb-2 hover:bg-gray-100 duration-300">
        <span class="prose text-lg font-bold">Judul</span>
        <p class="text-gray-800 line-clamp-3 max-w-none">some description. Lorem ipsum dolor sit amet
          consectetur
          adipisicing
          elit.
          Rem
          consectetur,
          ullam quo
          officiis debitis quam tempora ipsa exercitationem iure incidunt iste cumque, adipisci
          sapiente inventore
          numquam tenetur accusantium impedit cum?
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro accusamus ut sint maiores
          et. Provident,
          possimus? Fuga culpa dicta praesentium?</p>
        <div class="flex justify-between">
          <div class="flex justify-start gap-1 mt-1">
            <span class="px-2 py-1 rounded text-white  bg-red-500">Laravel</span>
            <span class="px-2 py-1 rounded text-white  bg-amber-500">Tailwind</span>
          </div>
          <div class="flex items-center gap-2 divide-x divide-gray-400">
            <span class=" text-gray-600">updated 3 days ago</span>
            <span class="pl-2">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
            </span>
            19
          </div>
        </div>
      </div>
    </a>
    <a href="#">
      <div class="w-100 border shadow-sm rounded p-3 mb-2 hover:bg-gray-100">
        <span class="prose text-lg font-bold">Judul</span>
        <p class="text-gray-600 line-clamp-3">some description. Lorem ipsum dolor sit amet consectetur
          adipisicing
          elit.
          Rem
          consectetur,
          ullam quo
          officiis debitis quam tempora ipsa exercitationem iure incidunt iste cumque, adipisci
          sapiente inventore
          numquam tenetur accusantium impedit cum?
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro accusamus ut sint maiores
          et. Provident,
          possimus? Fuga culpa dicta praesentium?</p>
      </div>
    </a>
    <a href="#">
      <div class="w-100 border shadow-sm rounded p-3 mb-2 hover:bg-gray-100">
        <span class="prose text-lg font-bold">Judul</span>
        <p class="text-gray-600 line-clamp-3">some description. Lorem ipsum dolor sit amet consectetur
          adipisicing
          elit.
          Rem
          consectetur,
          ullam quo
          officiis debitis quam tempora ipsa exercitationem iure incidunt iste cumque, adipisci
          sapiente inventore
          numquam tenetur accusantium impedit cum?
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro accusamus ut sint maiores
          et. Provident,
          possimus? Fuga culpa dicta praesentium?</p>
      </div>
    </a>
  </div>
</div>
</div>
@endsection