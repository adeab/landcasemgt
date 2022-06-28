<x-app-layout>
    <div class="d-flex flex-column justify-content-center align-items-center homepage-content-custom main-content">
        {{-- <x-project-logo class="bd-gov-logo"/> --}}
        <x-land-logo class="land-logo-home"/>
        <x-project-title-english class="logo-title-english"/>
        <x-project-title class="logo-title"/>
        @livewire('components.welcome-card')
        <x-credit class="container text-center py-3"/>
    </div>

</x-app-layout>
