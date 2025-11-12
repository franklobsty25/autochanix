<?php
new class extends \Livewire\Volt\Component {
    public $isDetails = false;
};
?>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('shop') }}" wire:navigate>Shop</a></li>
        @if($isDetails)
        <li class="breadcrumb-item active" aria-current="page">Details</li>
        @endif
    </ol>
</nav>
