<x-slot:title>Dashboard</x-slot:title>
<div class="container-fluid">
    <div class="flex-column">
            <div class="flex justify-between mb-4">
                <h1 class="text-2xl font-bold text-white-800">Dashboard</h1>

                <button wire:click="refreshStats"
                        class="px-3 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition cursor-pointer">
                    Refresh
                </button>
            </div>
        <div class="flex align-items-around justify-content-around gap-4 mb-4">

                {{-- Users Widget --}}
                <div class="flex-auto w-100 bg-white border border-gray-200 rounded-lg shadow p-5">
                    <p class="text-sm text-gray-500">Users</p>
                    <h2 class="text-3xl font-bold text-blue-600">{{ $usersCount }}</h2>
                </div>

                {{-- Products Widget --}}
                <div class="flex-auto w-100 bg-white border border-gray-200 rounded-lg shadow p-5">
                    <p class="text-sm text-gray-500">Products</p>
                    <h2 class="text-3xl font-bold text-green-600">{{ $productsCount }}</h2>
                </div>

                {{-- Orders Widget --}}
                <div class="flex-auto w-100 bg-white border border-gray-200 rounded-lg shadow p-5">
                    <p class="text-sm text-gray-500">Orders</p>
                    <h2 class="text-3xl font-bold text-indigo-600">{{ $ordersCount }}</h2>
                </div>

                {{-- Orders Widget --}}
                <div class="flex-auto w-100 bg-white border border-gray-200 rounded-lg shadow p-5">
                    <p class="text-sm text-gray-500">Transactions</p>
                    <h2 class="text-3xl font-bold text-indigo-600">{{ $ordersCount }}</h2>
                </div>

                {{-- Sales Widget --}}
                <div class="flex-auto w-100 bg-white border border-gray-200 rounded-lg shadow p-5">
                    <p class="text-sm text-gray-500">Total Sales</p>
                    <h2 class="text-3xl font-bold text-red-600">
                        ₵{{ number_format($totalSales, 2) }}
                    </h2>
                </div>
        </div>
        <livewire:admin.components.dashboard-chart />
        <livewire:admin.components.dashboard-list />
    </div>
</div>

{{--<div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">--}}
{{--    <div class="grid auto-rows-min gap-4 md:grid-cols-3">--}}
{{--        <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">--}}
{{--            <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />--}}
{{--        </div>--}}
{{--        <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">--}}
{{--            <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />--}}
{{--        </div>--}}
{{--        <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">--}}
{{--            <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">--}}
{{--        <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />--}}
{{--    </div>--}}
{{--</div>--}}

