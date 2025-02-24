<div class="fixed top-0 left-0 w-full p-4 flex z-50 bg-gray-500 space-x-4">
    @if (!Route::is('home'))
        <a href="{{ route('home') }}" class="bg-slate-400 text-gray-900 font-bold px-4 py-2 rounded-lg hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-zinc-900 sm:w-auto">
            Accueil
        </a>
    @else 
        <div class="text-black font-bold text-xl px-10 sm:w-auto">
            Accueil
        </div>
    @endif
    @if (Route::is('books.show'))
        <a href="{{ route('books.index') }}" class="bg-slate-400 text-gray-900 font-bold px-4 py-2 rounded-lg hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-zinc-900 sm:w-auto">
            Liste des livres
        </a>
    @endif
</div>
