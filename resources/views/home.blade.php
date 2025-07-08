<x-landing-layout>
    <section class="bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 py-24 text-center">
            <h1 class="text-4xl font-extrabold text-gray-900">Plataforma de Rastreamento</h1>
            <p class="mt-4 text-lg text-gray-600">Monitore e gerencie sua frota em tempo real com segurança e praticidade.</p>
            <div class="mt-6">
                <a href="{{ route('register') }}" class="inline-flex items-center px-6 py-3 bg-indigo-600 border border-transparent rounded-md font-semibold text-white hover:bg-indigo-500">Comece Agora</a>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-4 py-16">
            <h2 class="text-3xl font-bold text-center text-gray-900">Recursos</h2>
            <div class="mt-10 grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-12 w-12 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 11c0-3.866-1.343-7-3-7s-3 3.134-3 7 1.343 7 3 7 3-3.134 3-7z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 11h12" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 18h6" />
                    </svg>
                    <h3 class="mt-4 text-xl font-semibold text-gray-900">Rastreamento em tempo real</h3>
                    <p class="mt-2 text-gray-600">Visualize a localização atual de cada veículo instantaneamente.</p>
                </div>
                <div class="text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-12 w-12 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 17v-2a4 4 0 014-4h5" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 13l6 6m0 0l-6-6m6 6H3" />
                    </svg>
                    <h3 class="mt-4 text-xl font-semibold text-gray-900">Alertas inteligentes</h3>
                    <p class="mt-2 text-gray-600">Receba notificações de eventos importantes diretamente no seu painel.</p>
                </div>
                <div class="text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-12 w-12 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 9V5a2 2 0 00-2-2h-6a2 2 0 00-2 2v4" />
                        <rect width="14" height="10" x="5" y="9" rx="2" ry="2" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 13h18" />
                    </svg>
                    <h3 class="mt-4 text-xl font-semibold text-gray-900">Relatórios completos</h3>
                    <p class="mt-2 text-gray-600">Acompanhe métricas e histórico de rotas com relatórios detalhados.</p>
                </div>
            </div>
        </div>
    </section>
</x-landing-layout>

