<x-filament::dropdown>
    <x-slot name="trigger">
        <x-filament::button
            color="gray"
            outlined>
            <span>{{$availableLanguages[$currentLanguage]['name'] ?? $currentLanguage}}</span>
        </x-filament::button>
    </x-slot>

    <x-filament::dropdown.list>
        @foreach($availableLanguages as $code=>$lang)
        <x-filament::dropdown.list.item
            wire:click="switchLanguage('{{$code}}')"
            >
            {{$lang['name']}}
        </x-filament::dropdown.list.item>
        @endforeach
    </x-filament::dropdown.list>
</x-filament::dropdown>