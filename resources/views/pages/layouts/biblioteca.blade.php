@extends('pages.layouts.spawn')

@section('content')
<div class="p-6 md:p-12 w-full max-w-7xl mx-auto">
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-10">
        <div>
            <h1 class="text-3xl font-black text-white tracking-wide">Minha Biblioteca</h1>
            <p class="text-spawn-muted text-sm mt-1">Jogos que você possui na sua conta.</p>
        </div>
    </div>

    <!-- Grid da Biblioteca -->
    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 xl:grid-cols-6 gap-4 md:gap-6">
        @for ($i = 0; $i < 4; $i++)
        <div class="group cursor-pointer">
            <div class="relative w-full aspect-[3/4] rounded-lg overflow-hidden mb-3 border border-white/5 transition-all shadow-lg">
                <img src="https://images.unsplash.com/photo-1511512578047-dfb367046420?q=80&w=400&auto=format&fit=crop&sig={{ $i }}" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition-opacity duration-300">
                <div class="absolute inset-0 flex items-center justify-center bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity backdrop-blur-sm">
                    <!-- Botão de Play Nativo -->
                    <button class="w-12 h-12 rounded-full bg-white text-black flex items-center justify-center transform hover:scale-110 transition-transform">
                        <i class="ph-fill ph-play text-2xl"></i>
                    </button>
                </div>
            </div>
            <h3 class="text-sm font-bold text-white truncate">Meu Jogo {{ $i + 1 }}</h3>
            <p class="text-[10px] text-spawn-muted">42 horas jogadas</p>
        </div>
        @endfor
    </div>
</div>
@endsection
