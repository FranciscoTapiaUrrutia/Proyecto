<x-layouts.app 

title="login"
 meta-description="Home meta description"
 
 >
    <h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky500">
        Ingreso
    </h1>

    <form class="max-w-xl px-8 py-4 mx-auto bg-white rounded shadow dark:bg-slate-800" action="{{ route('login')}}" method="POST">
        @csrf
       
        <div class="space-y-4">

            
            <label class="flex flex-col">
                <span class="font-serif text-slate-600 dark:text-slate-400">
                    Email
                </span>
                <input class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400"
                 name="email"
                  type="email" 
                  value="{{ old('email') }}" >
                
                @error('email')
                    <small class="font-bold text-red-500/80"> {{ $message }} </small>
                @enderror
            </label>
            <label class="flex flex-col">
                <span class="font-serif text-slate-600 dark:text-slate-400">
                    Contraseña
                </span>
                <input class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400"
                 name="password"
                  type="password">
                
                @error('password')
                    <small class="font-bold text-red-500/80"> {{ $message }} </small>
                @enderror
            </label>
            <label class="flex items-center">
                <input class="rounded-md shadow-sm border-slate-300 dark:bg-slate-900/80 text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-slate-800 dark:border-slate-900 dark:text-slate-100 dark:placeholder:text-slate-400"
                 name="remember"
                  type="checkbox">
                <span class="cursor-pointer ml-2 font-serif text-slate-600 dark:text-slate-400">
                   Recuerdame
                </span>
        </div>
    
        <div class="flex items-center justify-between mt-4">
            
        <a class="text-sm font-semibold underline border-2 border-transparent rounded dark:text-slate-300 text-slate-600 focus:border-slate-500 focus:outline-none" 
        href="{{ route('register') }}">Registro</a>
    
        <button class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800"
         type="submit">Ingresar</button>
        </div>
    </form>

</x-layouts.app>
