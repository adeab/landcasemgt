<div class="container center-element home-card">
    <div class="card-body">
        <div class="row">
            <div class="call-section">
                <x-project-logo class="logo-home" />
                <x-credit />
            </div>
        </div>
        <div class="row">
            <button class="home-button citizen-btn" wire:click="gotocasesearch">
                <i class="fas fa-users"></i>
                Citizen Corner
            </button>
        </div>
        <div class="row">
            <button class="home-button ofc-btn" wire:click="gotologin">
                <i class="fas fa-user-lock"></i>
                Office Corner
            </button>
        </div>
    </div>
</div>
