<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spawn | Configurações de Perfil</title>
    
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
                            border: '#27272a',
                            muted: '#a1a1aa'
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-spawn-bg text-gray-100 font-sans min-h-screen selection:bg-white selection:text-black">

    <div class="max-w-4xl mx-auto px-4 py-12">
        <div class="flex items-center gap-4 mb-10">
            <a href="{{ route('dashboard') }}" class="p-2 rounded-lg bg-spawn-card border border-spawn-border hover:bg-white/10 transition-colors">
                <i class="ph-bold ph-arrow-left text-white"></i>
            </a>
            <div>
                <h1 class="text-3xl font-black text-white tracking-wide">Seu Perfil</h1>
                <p class="text-sm text-spawn-muted">Gerencie suas informações e segurança.</p>
            </div>
        </div>

        <div class="space-y-6">
            
            <div class="p-6 bg-spawn-card border border-spawn-border rounded-xl">
                <div class="flex items-center gap-4 mb-6">
                    <img src="https://api.dicebear.com/7.x/avataaars/svg?seed={{ Auth::user()->name ?? 'Player' }}" class="w-20 h-20 rounded-full bg-zinc-800 ring-4 ring-spawn-bg">
                    <div>
                        <h2 class="text-xl font-bold text-white">Informações Básicas</h2>
                        <p class="text-xs text-spawn-muted">Atualize seu nome de exibição e e-mail.</p>
                    </div>
                </div>

                <form method="post" action="{{ route('profile.update') }}" class="space-y-4 max-w-xl">
                    @csrf
                    @method('patch')

                    <div>
                        <label class="block text-sm font-medium text-spawn-muted mb-1">Nome de Usuário</label>
                        <input type="text" name="name" value="{{ old('name', Auth::user()->name) }}" class="w-full bg-spawn-bg border border-spawn-border rounded-lg px-4 py-2.5 text-white focus:outline-none focus:border-white transition-colors" required>
                        @error('name') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-spawn-muted mb-1">E-mail</label>
                        <input type="email" name="email" value="{{ old('email', Auth::user()->email) }}" class="w-full bg-spawn-bg border border-spawn-border rounded-lg px-4 py-2.5 text-white focus:outline-none focus:border-white transition-colors" required>
                        @error('email') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                    </div>

                    <div class="pt-2">
                        <button type="submit" class="px-6 py-2.5 bg-white text-black font-bold rounded-lg hover:bg-gray-200 transition-colors">
                            Salvar Alterações
                        </button>
                        
                        @if (session('status') === 'profile-updated')
                            <span class="ml-4 text-sm text-green-400">Salvo com sucesso.</span>
                        @endif
                    </div>
                </form>
            </div>

            <div class="p-6 bg-spawn-card border border-spawn-border rounded-xl">
                <div class="mb-6">
                    <h2 class="text-xl font-bold text-white">Segurança</h2>
                    <p class="text-xs text-spawn-muted">Garanta que sua conta esteja usando uma senha longa e aleatória.</p>
                </div>

                <form method="post" action="{{ route('password.update') }}" class="space-y-4 max-w-xl">
                    @csrf
                    @method('put')

                    <div>
                        <label class="block text-sm font-medium text-spawn-muted mb-1">Senha Atual</label>
                        <input type="password" name="current_password" class="w-full bg-spawn-bg border border-spawn-border rounded-lg px-4 py-2.5 text-white focus:outline-none focus:border-white transition-colors">
                        @error('current_password') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-spawn-muted mb-1">Nova Senha</label>
                        <input type="password" name="password" class="w-full bg-spawn-bg border border-spawn-border rounded-lg px-4 py-2.5 text-white focus:outline-none focus:border-white transition-colors">
                        @error('password') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-spawn-muted mb-1">Confirmar Nova Senha</label>
                        <input type="password" name="password_confirmation" class="w-full bg-spawn-bg border border-spawn-border rounded-lg px-4 py-2.5 text-white focus:outline-none focus:border-white transition-colors">
                    </div>

                    <div class="pt-2">
                        <button type="submit" class="px-6 py-2.5 bg-white/10 text-white font-bold rounded-lg border border-white/10 hover:bg-white/20 transition-colors">
                            Atualizar Senha
                        </button>
                    </div>
                </form>
            </div>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                @csrf
            </form>

            <div class="flex justify-end">
                <button onclick="document.getElementById('logout-form').submit();" class="px-6 py-2.5 text-red-500 font-bold hover:bg-red-500/10 rounded-lg transition-colors flex items-center gap-2">
                    <i class="ph-bold ph-sign-out"></i> Encerrar Sessão
                </button>
            </div>

        </div>
    </div>
</body>
</html>
