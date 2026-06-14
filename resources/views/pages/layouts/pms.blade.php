@extends('pages.layouts.spawn')

@section('content')
<div class="p-6 md:p-12 w-full max-w-7xl mx-auto">
    <div class="mb-10">
        <h1 class="text-3xl font-black text-green-400 tracking-wide flex items-center gap-3">
            <i class="ph-fill ph-tag"></i> Ofertas Especiais
        </h1>
        <p class="text-spawn-muted text-sm mt-1">Os melhores descontos da semana. Aproveite antes que acabe.</p>
    </div>

    <!-- Grid de Promoções (Cards mais largos) -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @for ($i = 0; $i < 6; $i++)
        <div class="bg-white/5 border border-white/10 rounded-xl overflow-hidden flex hover:border-green-500/50 transition-colors group cursor-pointer">
            <div class="w-1/3 aspect-[3/4] sm:aspect-square relative overflow-hidden">
                <img src="https://images.unsplash.com/photo-1605901309584-818e25960b8f?q=80&w=400&auto=format&fit=crop&sig={{ $i }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
            </div>
            <div class="w-2/3 p-4 flex flex-col justify-between">
                <div>
                    <h3 class="text-lg font-bold text-white leading-tight mb-1">Título em Promoção {{ $i + 1 }}</h3>
                    <p class="text-xs text-spawn-muted line-clamp-2">Uma aventura incrível com preço reduzido por tempo limitado.</p>
                </div>
                <div class="flex items-end justify-between mt-4">
                    <div class="bg-green-500 text-black font-black text-xs px-2 py-1 rounded">-50%</div>
                    <div class="text-right">
                        <p class="text-xs text-spawn-muted line-through">R$ 200,00</p>
                        <p class="text-sm font-bold text-green-400">R$ 100,00</p>
                    </div>
                </div>
            </div>
        </div>
        @endfor
    </div>
</div>
@endsection
