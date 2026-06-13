<!DOCTYPE html>
<html lang="pt-BR" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spawn | Bem-vindo</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        spawn: {
                            bg: '#09090b',
                            card: '#121214',
                            muted: '#a1a1aa'
                        }
                    }
                }
            }
        }
    </script>
    <style>
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #09090b; }
        ::-webkit-scrollbar-thumb { background: #27272a; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #3f3f46; }
    </style>
</head>
<body class="bg-spawn-bg text-gray-100 font-sans overflow-x-hidden selection:bg-white selection:text-black">

    <header class="absolute top-0 w-full z-50 border-b border-white/5 bg-spawn-bg/50 backdrop-blur-md">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <i class="ph-fill ph-game-controller text-3xl text-white"></i>
                <span class="font-black text-2xl tracking-widest text-white">SPAWN</span>
            </div>

            <div class="flex items-center gap-4">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm font-semibold hover:text-white transition-colors">Ir para o Launcher</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm font-semibold text-spawn-muted hover:text-white transition-colors">Entrar</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="px-5 py-2.5 bg-white text-black text-sm font-bold rounded hover:bg-gray-200 transition-colors flex items-center gap-2">
                                <i class="ph-bold ph-user-plus"></i> Criar Conta
                            </a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </header>

    <main class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden min-h-[90vh] flex items-center">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1542751371-adc38448a05e?q=80&w=2070&auto=format&fit=crop" alt="Background" class="w-full h-full object-cover opacity-30">
            <div class="absolute inset-0 bg-gradient-to-b from-spawn-bg/80 via-spawn-bg/90 to-spawn-bg"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-6 text-center">
            <span class="px-3 py-1 text-xs font-bold uppercase tracking-widest text-white bg-white/10 border border-white/20 rounded-full inline-block mb-6 backdrop-blur-sm">
                A nova era dos games
            </span>
            <h1 class="text-5xl md:text-7xl font-black text-white tracking-tight mb-6">
                Sua biblioteca, <br class="hidden md:block">
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-white to-gray-500">sem limites.</span>
            </h1>
            <p class="mt-4 max-w-2xl mx-auto text-lg md:text-xl text-spawn-muted mb-10">
                Acesse o catálogo completo da Spawn. Descubra novos mundos, gerencie sua coleção e inicie suas partidas em um launcher leve, escuro e direto ao ponto.
            </p>
            
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ route('login') }}" class="px-8 py-4 bg-white text-black font-bold rounded hover:bg-gray-200 transition-colors flex items-center justify-center gap-2 text-lg">
                    <i class="ph-fill ph-sign-in text-xl"></i> Acessar o Launcher
                </a>
                <a href="#catalogo" class="px-8 py-4 bg-white/5 border border-white/10 text-white font-bold rounded hover:bg-white/10 transition-colors flex items-center justify-center gap-2 text-lg backdrop-blur-sm">
                    Ver Catálogo <i class="ph-bold ph-arrow-down"></i>
                </a>
            </div>
        </div>
    </main>

    <section id="catalogo" class="py-20 bg-spawn-bg relative z-10">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-white mb-4">O que te espera lá dentro...</h2>
                <p class="text-spawn-muted">Uma curadoria impecável dos melhores títulos de todos os gêneros.</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
                
                <div class="relative aspect-[3/4] rounded-lg overflow-hidden border border-white/5 group">
                    <img src="https://images.unsplash.com/photo-1552820728-8b83bb6b773f?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent opacity-80 group-hover:opacity-100 transition-opacity"></div>
                    <div class="absolute bottom-0 left-0 p-4 w-full transform translate-y-2 group-hover:translate-y-0 transition-transform">
                        <h3 class="font-bold text-white truncate">Cyber Odyssey</h3>
                        <p class="text-xs text-spawn-muted">Ação / RPG</p>
                    </div>
                </div>

                <div class="relative aspect-[3/4] rounded-lg overflow-hidden border border-white/5 group">
                    <img src="https://images.unsplash.com/photo-1605901309584-818e25960b8f?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent opacity-80 group-hover:opacity-100 transition-opacity"></div>
                    <div class="absolute bottom-0 left-0 p-4 w-full transform translate-y-2 group-hover:translate-y-0 transition-transform">
                        <h3 class="font-bold text-white truncate">Protocol Zero</h3>
                        <p class="text-xs text-spawn-muted">FPS Tático</p>
                    </div>
                </div>

                <div class="relative aspect-[3/4] rounded-lg overflow-hidden border border-white/5 group">
                    <img src="https://images.unsplash.com/photo-1534423861386-85a16f5d13fd?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent opacity-80 group-hover:opacity-100 transition-opacity"></div>
                    <div class="absolute bottom-0 left-0 p-4 w-full transform translate-y-2 group-hover:translate-y-0 transition-transform">
                        <h3 class="font-bold text-white truncate">Wasteland</h3>
                        <p class="text-xs text-spawn-muted">Sobrevivência</p>
                    </div>
                </div>

                <div class="relative aspect-[3/4] rounded-lg overflow-hidden border border-white/5 group hidden md:block">
                    <img src="https://images.unsplash.com/photo-1511512578047-dfb367046420?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent opacity-80 group-hover:opacity-100 transition-opacity"></div>
                    <div class="absolute bottom-0 left-0 p-4 w-full transform translate-y-2 group-hover:translate-y-0 transition-transform">
                        <h3 class="font-bold text-white truncate">Hollow System</h3>
                        <p class="text-xs text-spawn-muted">Indie</p>
                    </div>
                </div>

                <div class="relative aspect-[3/4] rounded-lg overflow-hidden border border-white/5 group hidden lg:block">
                    <img src="https://images.unsplash.com/photo-1550745165-9bc0b252726f?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent opacity-80 group-hover:opacity-100 transition-opacity"></div>
                    <div class="absolute bottom-0 left-0 p-4 w-full transform translate-y-2 group-hover:translate-y-0 transition-transform">
                        <h3 class="font-bold text-white truncate">Retro Grid</h3>
                        <p class="text-xs text-spawn-muted">Arcade</p>
                    </div>
                </div>
            </div>

            <div class="mt-20 text-center">
                <p class="text-gray-400 mb-6">Pronto para iniciar sua jornada?</p>
                <a href="{{ route('login') }}" class="inline-flex items-center gap-2 px-8 py-3 bg-white/10 hover:bg-white/20 text-white font-bold rounded-full transition-colors border border-white/20">
                    Fazer Login na Plataforma <i class="ph-bold ph-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <footer class="py-8 border-t border-white/5 text-center text-sm text-spawn-muted">
        <p>&copy; {{ date('Y') }} Spawn Store. OpSec & Infra em primeiro lugar.</p>
    </footer>

</body>
</html>
