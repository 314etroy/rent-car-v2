@props([
    'noActiveCss' =>
        'ms-1 text-sm font-medium text-gray-700 hover:text-black md:ms-2 dark:text-gray-400 dark:hover:text-white cursor-not-allowed',
    'activeCss' =>
        'inline-flex items-center text-sm font-medium hover:text-black dark:text-gray-400 dark:hover:text-white rounded-full bg-blue-500 px-2 py-0.5 text-white',
])

<li>
    <div class="flex items-center">
        @if ($sectionNumber !== 0)
            @include('svg.breadcrumb-right-arrow')
        @endif
        <button {{ $sectionNumber <= $step ? "wire:click=changeSection('" . $sectionNumber . "')" : null }}
            class="{{ $sectionNumber <= $step ? $activeCss : $noActiveCss }}">{{ __('translations.' . $content) }}</button>
    </div>
</li>
