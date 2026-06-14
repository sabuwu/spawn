@extends('pages.layouts.spawn')

@section('content')
<div class="p-6 md:p-12 w-full max-w-4xl mx-auto">
    <div class="mb-10">
        <h1 class="text-3xl font-black text-white tracking-wide">Downloads Ativos</h1>
        <p class="text-spawn-muted text-sm mt-1">Gerencie a instalação e atualização dos seus jogos.</p>
    </div>

    <div class="space-y-4">
        <!-- Item Baixando -->
        <div class="p-4 md:p-6 bg-white/5 border border-white/10 rounded-xl relative overflow-hidden">
            <div class="absolute top-0 left-0 h-1 bg-white/10 w-full">
                <!-- Barra de Progresso Animada -->
                <div class="h-full bg-blue-500 w-[65%] animate-pulse"></div>
            </div>
            
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mt-2">
                <div class="flex items-center gap-4 w-full">
                    <img src="https://images.unsplash.com/photo-1552820728-8b83bb6b773f?q=80&w=100&auto=format&fit=crop" class="w-12 h-12 md:w-16 md:h-16 rounded object-cover border border-white/10">
                    <div class="flex-1">
                        <h3 class="text-sm md:text-base font-bold text-white">Cyber Odyssey - Atualização V2.0</h3>
                        <div class="flex justify-between items-center mt-1">
                            <p class="text-xs text-blue-400 font-medium">Baixando... 12.4 GB / 18.0 GB</p>
                            <p class="text-xs text-spawn-muted">34 MB/s</p>
                        </div>
                    </div>
                </div>
                
                <div class="flex gap-2 w-full sm:w-auto justify-end">
                    <button class="p-2 rounded bg-white/10 text-white hover:bg-white/20 transition-colors">
                        <i class="ph-bold ph-pause"></i>
                    </button>
                    <button class="p-2 rounded bg-white/10 text-red-400 hover:bg-red-500/20 hover:text-red-500 transition-colors">
                        <i class="ph-bold ph-x"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Item na Fila -->
        <div class="p-4 md:p-6 bg-transparent border border-white/5 rounded-xl">
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                <div class="flex items-center gap-4 w-full opacity-60">
                    <div class="w-12 h-12 md:w-16 md:h-16 rounded bg-white/5 border border-white/10 flex items-center justify-center">
                        <i class="ph ph-image text-2xl text-spawn-muted"></i>
                    </div>
                    <div>
                        <h3 class="text-sm md:text-base font-bold text-white">Neon Syndicate</h3>
                        <p class="text-xs text-spawn-muted mt-1">Na fila (Aguardando)</p>
                    </div>
                </div>
                <button class="p-2 rounded bg-white/5 text-white hover:bg-white/10 transition-colors flex-shrink-0">
                    <i class="ph-bold ph-arrow-up"></i>
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
