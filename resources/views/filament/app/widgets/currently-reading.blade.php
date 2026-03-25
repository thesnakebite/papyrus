<x-filament-widgets::widget>
    <x-filament::section class="h-full">
        <h2 class="text-lg font-semibold">Actualmente leyendo</h2>
        <div class="mt-3 grid grid-cols-1 sm:grid-cols-[repeat(auto-fit,minmax(12rem,1fr))] gap-4">
            @forelse ($books as $book)
                <div class="flex items-center gap-3">
                    <div class="shrink-0 w-16 aspect-2/3">
                        @if ($book['image'])
                            <img src="{{ $book['image'] }}" alt="{{ $book['title'] }}" class="w-full object-cover rounded-sm">
                        @else
                            <div class="w-full rounded-sm shrink-0 p-2 bg-slate-200 dark:bg-slate-700 flex items-center justify-center text-sm text-center text-gray-400 dark:text-gray-500">
                                Imagen no disponible
                            </div>
                        @endif
                    </div>

                    <div class="flex-1 space-y-1">
                        <p class="font-medium">
                            {{ $book['title'] }}
                        </p>
                        <p class="text-xs text-primary-600">
                            {{ $book['author'] }}
                        </p>
                    </div>
                </div>
            @empty
                <p class="text-sm text-gray-500 dark:text-gray-400">Actualmente no estás leyendo ningún libro.</p>
            @endforelse
        </div>
    </x-filament::section>
</x-filament-widgets::widget>
