<x-layouts.app
title="nuevo Post"
meta-description="Creacion nuevo post"

>


<h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">
   Crear nuevo post
</h1>



<form class="max-w-xl px-8 py-4 mx-auto bg-white rounded shadow dark:bg-slate-800" action="{{ route('posts.store')}}" method="POST">
    @csrf
   
    @include('posts.form')

    <div class="flex items-center justify-between mt-4">
        
    <a class="text-sm font-semibold underline border-2 border-transparent rounded dark:text-slate-300 text-slate-600 focus:border-slate-500 focus:outline-none" 
    href="{{ route('posts.index') }}">Regresar</a>

    <button class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800"
     type="submit">Enviar</button>
    </div>
</form>

</x-layouts.app>