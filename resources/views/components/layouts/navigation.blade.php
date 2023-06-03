<nav class="w-screen overflow-scroll bg-white border-b dark:bg-slate-900 border-slate-900/10 lg:px-8 dark:border-slate-300/10 lg:mx-0">
    <div class="px-4 mx-auto max-w-7xl sm:px-16 lg:px-20">
        <div class="relative flex items-center justify-between h-16">
            <div class="flex items-center justify-center flex-1 sm:items-stretch sm:justify-start">
                <div class="flex items-center flex-shrink-0">
                    <a href="{{ route('home') }}">
                     
                        LOGO
                   
                    </a>
                </div>
                <div class="mx-auto">
                    <div class="flex space-x-4">
                        <a href="{{ route('home') }}"
                           class="px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-white {{ request()->routeIs('home') ? 'text-sky-600 dark:text-white' : 'text-slate-400' }}">
                            Inicio
                        </a>
                        <a href="{{ route('posts.index') }}" class="px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-white {{ request()->routeIs('posts.*') ? 'text-sky-600 dark:text-white' : 'text-slate-400' }}">
                            Noticias
                        </a>
                        <a href="{{ route('compañias') }}" class="px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-white {{ request()->routeIs('about') ? 'text-sky-600 dark:text-white' : 'text-slate-400' }}">
                            Compañias
                        </a>
                        <a href="{{ route('contact') }}" class="px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-white {{ request()->routeIs('contact') ? 'text-sky-600 dark:text-white' : 'text-slate-400' }}">
                            Contacto
                        </a>

                        @guest
                       
                     <a href="{{ route('login') }}"
                        class="px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-white {{ request()->routeIs('login') ? 'text-sky-600 dark:text-white' : 'text-slate-400' }}">
                         ingresar
                     </a>

                     <a href="{{ route('donation') }}"
                        class="px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-white {{ request()->routeIs('donation') ? 'text-sky-600 dark:text-white' : 'text-slate-400' }}">
                         DONAR
                     </a>
                        @endguest

                        @auth
                            <a class="px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 text-sky-600 dark:text-white text-slate-400" href="#">{{ Auth::user()->name }}</a>
                            <form action="{{ route ('logout') }}" method="POST">
                                @csrf

                                <button  class="px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-white text-sky-600 dark:text-white text-slate-400">Salir</button>
                            </form> 
                            
                            <a href="{{ route('register') }}"
                            class="px-3 py-2 text-sm font-medium rounded-md hover:text-sky-600 dark:hover:text-white {{ request()->routeIs('register') ? 'text-sky-600 dark:text-white' : 'text-slate-400' }}">
                             Registro
                         </a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
