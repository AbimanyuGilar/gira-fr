<div x-data="{ isOpen: false }" class="relative inline-block text-left">
    <div>
      <button @click="isOpen = !isOpen" type="button" class="inline-flex justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-slate-900 hover:bg-gray-50" id="menu-button" aria-expanded="true" aria-haspopup="true">
        {{ $current }}
        <svg class="-mr-1 text-gray-400 size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
          <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
        </svg>
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
        class="absolute left-0 z-10 w-56 mt-2 overflow-y-scroll origin-top-right bg-white rounded-md shadow-lg max-h-64 ring-1 ring-black/5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1"
        @click.away="isOpen = false"
    >
        <input type="hidden" name="{{ $name }}" id="{{ $name }}" value="{{ $current }}">
        <div class="py-1 role="none">
            @foreach ($items as $item)
                <a href="" onclick="event.preventDefault(); document.getElementById('{{ $name }}').value='{{ $item }}'; document.getElementById('{{ $form }}').submit();" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50" role="menuitem" tabindex="-1" id="menu-item-0">{{ $item }}</a>
            @endforeach
        </div>
    </div>
</div>
