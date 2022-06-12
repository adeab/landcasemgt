
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <div class="container-fluid py-4">
        @if ($list_mode)
            <livewire:components.caselist/>
        @else
            <livewire:components.caseform/>
        @endif
</div>
</main>
