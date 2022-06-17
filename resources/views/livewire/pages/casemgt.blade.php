
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <div class="container-fluid py-4">
        @if ($message)
            <div class="alert alert-info alert-dismissible text-white" role="alert">
                <span class="text-sm">
                    {{ $message }}
                </span>
                <button type="button" wire:click="rmvMsg" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
              </div>

        @endif

        @if ($list_mode)
            <livewire:components.caselist/>
        @else
            <livewire:components.caseform/>
        @endif
</div>
</main>
