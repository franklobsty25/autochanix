<?php
new class extends \Livewire\Volt\Component {
    public $currentPage;
};
?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}" wire:navigate>Home</a></li>
        <li class="breadcrumb-item"><a href="#">Support</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ $currentPage ?? '' }}</li>
    </ol>
</nav>
