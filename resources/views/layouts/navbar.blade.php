<div class="fixed top-0 left-0 w-full p-4 flex z-50 bg-gray-500">
    @if (!Route::is('home'))
        <a href="{{ route('home') }}" class="bg-slate-400 text-gray-900 font-bold px-4 py-2 rounded-lg hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-zinc-900 sm:w-auto">
            Retour à l'accueil
        </a>
    @else 
        <div class="fixed top-0 left-0 w-full p-4 flex z-50 bg-gray-500">
            <div class="text-black font-bold text-xl px-10 py-2 sm:w-auto">
                Accueil
            </div>
        </div>
    @endif
</div>