@props(['title'=>''])
<x-base-layout title={{$title}}>
    <x-layouts.header/>
    {{$slot}}
    <footer>
        <a href="#" class="href">APP BLADE LINK | " </a>
        {{-- Prikaz dodatnog sadržaja ako je prosleđen $footerLinks --}}
        {{ $footerLinks }}
    </footer>
</x-base-layout>

