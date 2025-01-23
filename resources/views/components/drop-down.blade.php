<div x-data="{ isOpen: false }" class="relative inline-block text-left" onclick="event.stopPropagation()">
    <div>
      <button @click="isOpen = !isOpen" type="button" class="inline-flex justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-md hover:bg-gray-50" id="menu-button" aria-expanded="true" aria-haspopup="true">
        {{ $slot }}
      </button>
    </div>
    <div
        x-show="isOpen"
        x-transition:enter="transition ease-out duration-100 transform"
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75 transform"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        class="absolute right-0 z-10 w-56 mt-2 overflow-y-scroll origin-top-right bg-white rounded-md shadow-lg max-h-64 ring-1 ring-black/5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1"
        @click.away="isOpen = false"
    >
        <div class="py-1" role="none">
            @foreach ($items as $item)
                <a href="" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50" role="menuitem" tabindex="-1" id="menu-item-0">{{ $item }}</a>
            @endforeach
        </div>
    </div>
</div>
