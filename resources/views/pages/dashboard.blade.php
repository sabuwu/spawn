<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spawn Launcher</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        spawn: {
                            bg: '#09090b',       
                            sidebar: '#121214',  
                            hover: '#27272a',    
                            accent: '#ffffff',   
                            muted: '#a1a1aa'     
                        }
                    }
                }
            }
        }
    </script>
    <style>
        /* Oculta scrollbar para uma pegada mais nativa, mas mantém a funcionalidade... */
        ::-webkit-scrollbar { width: 4px; height: 4px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background: #27272a; border-radius: 10px; }
        ::-webkit-scrollbar-thumb:hover { background: #3f3f46; }
        
        /* Previne o bounce effect no iOS/Android que estraga a imersão do app */
        body { overscroll-behavior-y: none; }
    </style>
</head>
<body class="bg-spawn-bg text-gray-100 font-sans h-[100dvh] w-full overflow-hidden flex flex-col md:flex-row selection:bg-white selection:text-black">

    <aside class="w-64 bg-spawn-sidebar border-r border-white/5 flex-col justify-between hidden md:flex z-50 flex-shrink-0">
        <div class="h-20 flex items-center px-6 border-b border-white/5">
            <div class="flex items-center gap-3">
                <i class="ph-fill ph-game-controller text-2xl text-white"></i>
                <span class="font-bold text-xl tracking-wide">SPAWN</span>
            </div>
        </div>

        <nav class="flex-1 px-4 py-6 space-y-1 overflow-y-auto">
            <p class="px-2 text-xs font-semibold text-spawn-muted uppercase tracking-wider mb-4">Loja</p>
            <a href="#" class="flex items-center gap-3 px-3 py-2.5 bg-white/10 text-white rounded-lg transition-colors font-medium">
                <i class="ph ph-house text-xl"></i> Início
            </a>
            <a href="#" class="flex items-center gap-3 px-3 py-2.5 text-spawn-muted hover:text-white hover:bg-white/5 rounded-lg transition-colors font-medium">
                <i class="ph ph-magnifying-glass text-xl"></i> Catálogo
            </a>
            <a href="#" class="flex items-center gap-3 px-3 py-2.5 text-spawn-muted hover:text-white hover:bg-white/5 rounded-lg transition-colors font-medium">
                <i class="ph ph-tag text-xl"></i> Promoções
            </a>

            <p class="px-2 text-xs font-semibold text-spawn-muted uppercase tracking-wider mt-8 mb-4">Biblioteca</p>
            <a href="#" class="flex items-center gap-3 px-3 py-2.5 text-spawn-muted hover:text-white hover:bg-white/5 rounded-lg transition-colors font-medium">
                <i class="ph ph-books text-xl"></i> Meus Jogos
            </a>
            <a href="#" class="flex items-center gap-3 px-3 py-2.5 text-spawn-muted hover:text-white hover:bg-white/5 rounded-lg transition-colors font-medium">
                <i class="ph ph-download-simple text-xl"></i> Downloads
            </a>
        </nav>

        <div class="p-4 border-t border-white/5">
            @auth
                <a href="{{ route('profile.edit') }}" class="flex items-center gap-3 px-3 py-3 rounded-lg hover:bg-white/5 transition-colors cursor-pointer group">
                    <img src="https://api.dicebear.com/7.x/avataaars/svg?seed={{ Auth::user()->name ?? 'Player' }}" class="w-10 h-10 rounded-full bg-zinc-800 ring-2 ring-transparent group-hover:ring-spawn-muted transition-all flex-shrink-0">
                    <div class="flex-1 overflow-hidden">
                        <p class="text-sm font-medium text-white truncate">{{ Auth::user()->name ?? 'Usuário' }}</p>
                        <p class="text-xs text-green-400">Online</p>
                    </div>
                    <i class="ph ph-gear text-spawn-muted group-hover:text-white group-hover:rotate-90 transition-all duration-300"></i>
                </a>
            @else
                <div class="flex flex-col gap-2">
                    <a href="{{ route('login') }}" class="w-full text-center py-2 text-sm font-medium text-white hover:bg-white/10 rounded-lg transition-colors">Entrar</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="w-full text-center py-2 text-sm font-medium bg-white text-black hover:bg-gray-200 rounded-lg transition-colors">Criar Conta</a>
                    @endif
                </div>
            @endauth
        </div>
    </aside>

    <main class="flex-1 relative overflow-y-auto overflow-x-hidden pb-20 md:pb-0 w-full">
        
        <section class="relative w-full min-h-[450px] md:min-h-[500px] lg:h-[65vh] overflow-hidden flex flex-col justify-end p-5 md:p-12">
            <img src="https://images.unsplash.com/photo-1542751371-adc38448a05e?q=80&w=2070&auto=format&fit=crop" class="absolute inset-0 w-full h-full object-cover opacity-40 pointer-events-none">
            <div class="absolute inset-0 bg-gradient-to-t from-spawn-bg via-spawn-bg/60 to-transparent"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-spawn-bg via-transparent to-transparent"></div>

            <div class="relative z-10 w-full max-w-full">
                <div class="flex flex-wrap gap-2 mb-3">
                    <span class="px-2 py-0.5 bg-white/10 backdrop-blur-md rounded text-[10px] sm:text-xs font-semibold text-white border border-white/10">Ação</span>
                    <span class="px-2 py-0.5 bg-white/10 backdrop-blur-md rounded text-[10px] sm:text-xs font-semibold text-white border border-white/10">RPG</span>
                </div>
                <h1 class="text-4xl sm:text-5xl md:text-7xl font-black text-white tracking-tight mb-3 drop-shadow-lg break-words leading-tight">
                    NEON <br class="hidden sm:block"> SYNDICATE
                </h1>
                <p class="max-w-2xl text-sm md:text-lg text-gray-300 mb-6 drop-shadow-md line-clamp-3 md:line-clamp-none">
                    Explore uma metrópole cyberpunk implacável. Personalize seus implantes, monte sua equipe e descubra os segredos corporativos mais obscuros antes que o sistema reinicie.
                </p>
                <div class="flex flex-col sm:flex-row gap-3 w-full sm:w-auto">
                    <button class="flex items-center justify-center gap-2 px-6 py-3 bg-white text-black rounded font-bold hover:bg-gray-200 transition-colors text-sm w-full sm:w-auto">
                        <i class="ph-fill ph-play text-lg"></i> Obter Agora
                    </button>
                    <button class="flex items-center justify-center gap-2 px-6 py-3 bg-white/10 text-white rounded font-medium hover:bg-white/20 backdrop-blur-md transition-colors border border-white/5 text-sm w-full sm:w-auto">
                        <i class="ph ph-plus text-lg"></i> Lista de Desejos
                    </button>
                </div>
            </div>
        </section>

        <section class="w-full px-5 md:px-12 py-6 overflow-hidden">
            <div class="flex justify-between items-end mb-5">
                <h2 class="text-xl md:text-2xl font-bold text-white">Lançamentos</h2>
                <a href="#" class="text-xs md:text-sm text-spawn-muted hover:text-white transition-colors flex items-center gap-1 whitespace-nowrap">Ver todos <i class="ph ph-caret-right"></i></a>
            </div>

            <div class="w-full overflow-x-auto pb-4 flex gap-3 md:gap-4 snap-x scroll-smooth">
                
                <div class="w-32 sm:w-36 md:w-44 flex-shrink-0 snap-start group cursor-pointer">
                    <div class="relative w-full aspect-[3/4] rounded-lg overflow-hidden mb-2 border border-white/5 group-hover:border-white/30 transition-all">
                        <img src="https://images.unsplash.com/photo-1552820728-8b83bb6b773f?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 flex items-center justify-center transition-opacity backdrop-blur-[2px]">
                            <i class="ph-fill ph-play-circle text-3xl text-white"></i>
                        </div>
                    </div>
                    <h3 class="text-xs md:text-sm font-medium text-white truncate group-hover:text-gray-300">Cyber Odyssey</h3>
                    <p class="text-[10px] md:text-xs text-spawn-muted">R$ 159,90</p>
                </div>

                <div class="w-32 sm:w-36 md:w-44 flex-shrink-0 snap-start group cursor-pointer">
                    <div class="relative w-full aspect-[3/4] rounded-lg overflow-hidden mb-2 border border-white/5 group-hover:border-white/30 transition-all">
                        <img src="https://images.unsplash.com/photo-1605901309584-818e25960b8f?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <h3 class="text-xs md:text-sm font-medium text-white truncate group-hover:text-gray-300">Protocol Zero</h3>
                    <p class="text-[10px] md:text-xs text-spawn-muted">R$ 89,00</p>
                </div>

                <div class="w-32 sm:w-36 md:w-44 flex-shrink-0 snap-start group cursor-pointer">
                    <div class="relative w-full aspect-[3/4] rounded-lg overflow-hidden mb-2 border border-white/5 group-hover:border-white/30 transition-all">
                        <img src="https://images.unsplash.com/photo-1534423861386-85a16f5d13fd?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <h3 class="text-xs md:text-sm font-medium text-white truncate group-hover:text-gray-300">Wasteland Drivers</h3>
                    <p class="text-[10px] md:text-xs text-spawn-muted">Gratuito</p>
                </div>
                
                <div class="w-32 sm:w-36 md:w-44 flex-shrink-0 snap-start group cursor-pointer">
                    <div class="relative w-full aspect-[3/4] rounded-lg overflow-hidden mb-2 border border-white/5 group-hover:border-white/30 transition-all">
                        <img src="https://images.unsplash.com/photo-1511512578047-dfb367046420?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <h3 class="text-xs md:text-sm font-medium text-white truncate group-hover:text-gray-300">Hollow System</h3>
                    <p class="text-[10px] md:text-xs text-spawn-muted">R$ 120,00</p>
                </div>
                
                <div class="w-32 sm:w-36 md:w-44 flex-shrink-0 snap-start group cursor-pointer">
                    <div class="relative w-full aspect-[3/4] rounded-lg overflow-hidden mb-2 border border-white/5 group-hover:border-white/30 transition-all">
                        <img src="https://images.unsplash.com/photo-1550745165-9bc0b252726f?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <h3 class="text-xs md:text-sm font-medium text-white truncate group-hover:text-gray-300">Retro Grid</h3>
                    <p class="text-[10px] md:text-xs text-spawn-muted">R$ 45,90</p>
                </div>

            </div>
        </section>
        
        <div class="hidden md:block h-16 w-full"></div>

    </main>

    <nav class="md:hidden fixed bottom-0 w-full bg-spawn-sidebar/95 backdrop-blur-xl border-t border-white/5 flex justify-around items-center px-4 py-3 z-50">
        <a href="#" class="text-white flex flex-col items-center gap-1 p-2 rounded-lg hover:bg-white/5 transition-colors">
            <i class="ph-fill ph-house text-2xl"></i>
        </a>
        <a href="#" class="text-spawn-muted hover:text-white flex flex-col items-center gap-1 p-2 rounded-lg hover:bg-white/5 transition-colors">
            <i class="ph ph-magnifying-glass text-2xl"></i>
        </a>
        <a href="#" class="text-spawn-muted hover:text-white flex flex-col items-center gap-1 p-2 rounded-lg hover:bg-white/5 transition-colors">
            <i class="ph ph-books text-2xl"></i>
        </a>
        
        @auth
            <a href="{{ route('profile.edit') }}" class="w-9 h-9 ml-2 rounded-full overflow-hidden border-2 border-transparent hover:border-spawn-muted transition-all shadow-lg flex-shrink-0">
                <img src="https://api.dicebear.com/7.x/avataaars/svg?seed={{ Auth::user()->name ?? 'Player' }}" class="w-full h-full bg-zinc-800 object-cover">
            </a>
        @else
            <a href="{{ route('login') }}" class="text-spawn-muted hover:text-white flex flex-col items-center gap-1 p-2 ml-2 rounded-lg hover:bg-white/5 transition-colors">
                <i class="ph ph-sign-in text-2xl"></i>
            </a>
        @endauth
    </nav>

</body>
</html>
