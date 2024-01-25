@php
    $type ??= 'text';
    $class ??= null;
    $name ??= '';
    $value ??= '';
    $label ??= '';
    // $label ??= Str::ucfirst($name);
    $placeholder ??= Str::ucfirst('ex: ' . $label);
@endphp

<div class="flex flex-col gap-1 w-full">
    <label for="{{ $name }}" class="text-sm text-gray-500">{{ $label }}</label>

    @if ($type === 'textarea')
        <textarea name="{{ $name }}" cols="30" rows="4" id="{{ $name }}"
            class="outline-none w-full bg-transparent p-2 h-32 border-[1px] border-gray-200 rounded-md hover:border-blue-300 focus:border-blue-300 focus:ring-2 focus:ring-blue-100 duration-200 text-gray-400">{{ $value }}</textarea>
    @elseif ($type === 'password')
        <div class="w-full inline-flex relative">
            <input type="{{ $type }}" id="{{ $name }}" name="{{ $name }}"
                value="{{ $value }}" data-target="{{ $name }}"
                class="@error($name) border-red-500
        @enderror password password-toggle outline-none w-full bg-transparent pl-2 h-10 border-[1px] border-gray-200 rounded-md hover:border-blue-300 focus:border-blue-300 focus:ring-2 focus:ring-blue-100 duration-200 text-gray-400">
            <i class="bi bi-eye-fill absolute top-3 right-4 eye-icon-toggle" data-target="{{ $name }}"></i>
        </div>
    @else
        <input type="{{ $type }}" id="{{ $name }}" name="{{ $name }}"
            value="{{ $value }}"
            class="@error($name) border-red-500
      @enderror outline-none w-full bg-transparent pl-2 h-10 border-[1px] border-gray-200 rounded-md hover:border-blue-300 focus:border-blue-300 focus:ring-2 focus:ring-blue-100 duration-200 text-gray-400">
    @endif
    @error($name)
        <div class="text-sm text-red-500">
            {{ $message }}
        </div>
    @enderror
</div>
