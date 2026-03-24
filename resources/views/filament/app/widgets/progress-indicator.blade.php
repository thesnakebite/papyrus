<x-filament-widgets::widget>
    <x-filament::section class="h-full dark:bg-slate-800">
        <div class="flex flex-col gap-2">
            <h2 class="text-lg font-semibold">Racha de lectura al nivel profesional</h2>
            <p class="text-sm text-gray-500 dark:text-gray-400">
                Has leído <strong>{{ $booksRead }}</strong> libros hasta ahora.
            </p>

            <div class="relative w-full h-4 bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden">
                <div
                    class="h-full bg-linear-to-r from-primary-500 to-primary-600 rounded-full transition-all duration-700"
                    style="width: {{ $progress }}%;"
                ></div>
            </div>

            <div class="flex justify-between text-xs text-gray-500 dark:text-gray-400">
                <span>0 libros</span>
                <span>{{ $target }} libros</span>
            </div>

            <p class="text-sm mt-2">
                @if($progress >= 100)
                    🎉 Has llegado <strong>Lector Pro</strong> ¡Nivel! ¡Sigue así!
                @else
                    Solo faltan <strong>{{ $target - $booksRead }}</strong> más libros para alcanzar el nivel de <strong>lector Pro!</strong>
                @endif
            </p>
        </div>
    </x-filament::section>
</x-filament-widgets::widget>
