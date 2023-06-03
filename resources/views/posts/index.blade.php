<x-layouts.app
    title="Noticias"
    meta-description="Blog meta description"

>

<header class="px-6 py-4 space-y-2 text-center">

    <h1 class="font-serif text-3xl text-center text-sky-600 dark:text-sky500">
        Noticias 
    </h1>


    @auth
    <a class="inline-flex items-center bg-blue-500 hover:bg-blue-700 text-white font-serif py-1 px-6   rounded-full" href="{{ route('posts.create') }}">
        Crear nuevo post
        </a>
    @endauth

</header>
<main class="grid w-full gap-4 px-4 max-w-7xl sm:grid-cols-2 md:grid-cols-3">

    @foreach($posts as $post)
   <div class="max-w-3xl px-4 py-2 space-y-4 bg-white rounded shadow dark:bg-slate-800">
        <h2 class="text-xl text-slate-600 dark:text-slate-300 hover:underline">
            <a href="{{ route('posts.show', $post->id) }}">
            {{ $post->title }}
            </a>
        </h2>
    @auth
        <div class="flex justify-between">
            <a class="text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-2 py text-center mr-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800"
         href="{{ route('posts.edit', $post) }}">Editar</a>
        <form action="{{ route('posts.destroy', $post) }}" method="POST">
            @csrf            
            @method('DELETE')
            <button class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-2 py text-center mr-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900" type="submit">
                Eliminar
            </button>

        </div>
    @endauth    
        </form>
    </div>
@endforeach

</main>



</x-layouts.app>