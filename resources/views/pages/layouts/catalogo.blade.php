@extends('pages.layouts.spawn')

@section('content')
<div class="p-6 md:p-12 w-full max-w-7xl mx-auto">
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-10">
        <div>
            <h1 class="text-3xl font-black text-white tracking-wide">Catálogo Completo</h1>
            <p class="text-spawn-muted text-sm mt-1">Explore todos os títulos disponíveis na plataforma.</p>
        </div>
        <div class="relative w-full md:w-72">
            <i class="ph ph-magnifying-glass absolute left-3 top-1/2 transform -translate-y-1/2 text-spawn-muted"></i>
            <input type="text" placeholder="Buscar jogos..." class="w-full bg-white/5 border border-white/10 rounded-lg pl-10 pr-4 py-2.5 text-sm text-white focus:outline-none focus:border-white/30 transition-colors">
        </div>
    </div>

    <!-- Filtros Rápidos -->
    <div class="flex gap-2 overflow-x-auto pb-4 mb-6 snap-x scroll-smooth">
        <button class="px-4 py-1.5 bg-white text-black text-xs font-bold rounded-full whitespace-nowrap snap-start">Todos</button>
        <button class="px-4 py-1.5 bg-white/5 text-white hover:bg-white/10 text-xs font-medium rounded-full whitespace-nowrap snap-start border border-white/5">Ação</button>
        <button class="px-4 py-1.5 bg-white/5 text-white hover:bg-white/10 text-xs font-medium rounded-full whitespace-nowrap snap-start border border-white/5">RPG</button>
        <button class="px-4 py-1.5 bg-white/5 text-white hover:bg-white/10 text-xs font-medium rounded-full whitespace-nowrap snap-start border border-white/5">Indie</button>
        <button class="px-4 py-1.5 bg-white/5 text-white hover:bg-white/10 text-xs font-medium rounded-full whitespace-nowrap snap-start border border-white/5">Estratégia</button>
    </div>

    <!-- Grid do Catálogo -->
    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4 md:gap-6">
        @for ($i = 0; $i < 10; $i++)
        <div class="group cursor-pointer">
            <div class="relative w-full aspect-[3/4] rounded-lg overflow-hidden mb-3 border border-white/5 group-hover:border-white/30 transition-all">
                <img src="https://images.unsplash.com/photo-1552820728-8b83bb6b773f?q=80&w=400&auto=format&fit=crop&sig={{ $i }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            </div>
            <h3 class="text-sm font-bold text-white truncate group-hover:text-gray-300">Jogo Genérico {{ $i + 1 }}</h3>
            <p class="text-xs text-spawn-muted">R$ 199,90</p>
        </div>
        @endfor
    </div>
</div>
@endsection
