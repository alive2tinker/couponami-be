<x-guest-layout>
    <h1 class="text-2xl text-center py-7 font-bold">@lang('Privacy Policy')</h1>
<div class="h-80 overflow-y-scroll">
    {{ strip_tags($privacy->value)}}
</div>
</x-guest-layout>
