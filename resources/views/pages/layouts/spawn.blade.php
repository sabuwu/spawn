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
            theme: { extend: { colors: { spawn: { bg: '#09090b', sidebar: '#121214', hover: '#27272a', accent: '#ffffff', muted: '#a1a1aa' } } } }
        }
    </script>
    <style>
        ::-webkit-scrollbar { width: 4px; height: 4px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background: #27272a; border-radius: 10px; }
        ::-webkit-scrollbar-thumb:hover { background: #3f3f46; }
        body { overscroll-behavior-y: none; }
    </style>
</head>
<body class="bg-spawn-bg text-gray-100 font-sans h-[100dvh] w-full overflow-hidden flex flex-col md:flex-row selection:bg-white selection:text-black">

    <!-- Sidebar Desktop -->
    <aside class="w-64 bg-spawn-sidebar border-r border-white/5 flex-col justify-between hidden md:flex z-50 flex-shrink-0">
        <div class="h-20 flex items-center px-6 border-b border-white/5">
            <div class="flex items-center gap-3">
                <i class="ph-fill ph-game-controller text-2xl text-white"></i>
                <span class="font-bold text-xl tracking-wide">SPAWN</span>
            </div>
        </div>

        <nav class="flex-1 px-4 py-6 space-y-1 overflow-y-auto">
            <p class="px-2 text-xs font-semibold text-spawn-muted uppercase tracking-wider mb-4">Loja</p>
            <a href="/dashboard" class="flex items-center gap-3 px-3 py-2.5 text-spawn-muted hover:text-white hover:bg-white/5 rounded-lg transition-colors font-medium">
                <i class="ph ph-house text-xl"></i> Início
            </a>
            <a href="/catalogo" class="flex items-center gap-3 px-3 py-2.5 text-spawn-muted hover:text-white hover:bg-white/5 rounded-lg transition-colors font-medium">
                <i class="ph ph-magnifying-glass text-xl"></i> Catálogo
            </a>
            <a href="/promocoes" class="flex items-center gap-3 px-3 py-2.5 text-spawn-muted hover:text-white hover:bg-white/5 rounded-lg transition-colors font-medium">
                <i class="ph ph-tag text-xl"></i> Promoções
            </a>

            <p class="px-2 text-xs font-semibold text-spawn-muted uppercase tracking-wider mt-8 mb-4">Biblioteca</p>
            <a href="/biblioteca" class="flex items-center gap-3 px-3 py-2.5 text-spawn-muted hover:text-white hover:bg-white/5 rounded-lg transition-colors font-medium">
                <i class="ph ph-books text-xl"></i> Meus Jogos
            </a>
            <a href="/downloads" class="flex items-center gap-3 px-3 py-2.5 text-spawn-muted hover:text-white hover:bg-white/5 rounded-lg transition-colors font-medium">
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
            @endauth
        </div>
    </aside>

    <!-- Miolo Dinâmico (Aqui entram as páginas) -->
    <main class="flex-1 relative overflow-y-auto overflow-x-hidden pb-20 md:pb-0 w-full">
        @yield('content')
    </main>

    <!-- Bottom Bar Mobile -->
    <nav class="md:hidden fixed bottom-0 w-full bg-spawn-sidebar/95 backdrop-blur-xl border-t border-white/5 flex justify-around items-center px-4 py-3 z-50">
        <a href="/dashboard" class="text-spawn-muted hover:text-white flex flex-col items-center gap-1 p-2 rounded-lg hover:bg-white/5 transition-colors">
            <i class="ph ph-house text-2xl"></i>
        </a>
        <a href="/catalogo" class="text-spawn-muted hover:text-white flex flex-col items-center gap-1 p-2 rounded-lg hover:bg-white/5 transition-colors">
            <i class="ph ph-magnifying-glass text-2xl"></i>
        </a>
        <a href="/biblioteca" class="text-spawn-muted hover:text-white flex flex-col items-center gap-1 p-2 rounded-lg hover:bg-white/5 transition-colors">
            <i class="ph ph-books text-2xl"></i>
        </a>
        @auth
            <a href="{{ route('profile.edit') }}" class="w-9 h-9 ml-2 rounded-full overflow-hidden border-2 border-transparent hover:border-spawn-muted transition-all shadow-lg flex-shrink-0">
                <img src="https://api.dicebear.com/7.x/avataaars/svg?seed={{ Auth::user()->name ?? 'Player' }}" class="w-full h-full bg-zinc-800 object-cover">
            </a>
        @endauth
    </nav>
</body>
</html>
