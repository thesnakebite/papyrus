@use('App\Filament\App\Resources\Books\BookResource')
<x-filament-widgets::widget>
    <x-filament::section class="h-full">
        <div class="space-y-3">
            <div class="flex items-center justify-between">
                <h3 class="text-lg font-semibold">Novedades</h3>

                <a href="{{ BookResource::getUrl() }}" class="text-sm text-primary-600 hover:underline">
                    Ver Todo →
                </a>
            </div>

            <div class="grid grid-cols-[repeat(6,7rem)] gap-3 overflow-x-auto">
                @forelse ($books as $book)
                    <div>
                        <a href="{{ BookResource::getUrl('view', ['record' => $book['id']]) ?? '#' }}" class="block rounded-sm">
                            @if ($book['image'])
                                <img src="{{ $book['image'] }}" alt="{{ $book['title'] }}" class="w-full aspect-2/3 object-cover rounded-sm">
                            @else
                                <div class="w-full aspect-2/3 rounded-sm shrink-0 p-2 bg-slate-200 dark:bg-slate-700 flex items-center justify-center text-sm text-center text-gray-400 dark:text-gray-500">
                                    Imagen no disponible
                                </div>
                            @endif

                            <div class="pt-3 space-y-1">
                                <p class="text-sm">
                                    {{ $book['title']}}
                                </p>
                                <p class="text-xs text-slate-500 dark:text-slate-400">
                                    {{ \Carbon\Carbon::parse($book['created_at'])->diffForHumans() }}
                                </p>
                            </div>
                        </a>
                    </div>
                @empty
                    <div class="col-span-full text-sm text-gray-500 dark:text-gray-400">No hay nuevas novedades en este momento.</div>
                @endforelse
            </div>
        </div>
    </x-filament::section>
</x-filament-widgets::widget>
