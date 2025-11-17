<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Show Product') }}</flux:heading>
{{--        <flux:subheading size="lg" class="mb-6">{{ __('Show Product') }}</flux:subheading>--}}
        <flux:separator variant="subtle" />
    </div>

    <div>
{{--        <a wire:navigate href="{{ route('products.index') }}" class="cursor-pointer px-3 py-2 text-xs font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">--}}
{{--            Back--}}
{{--        </a>--}}

        <div>
{{--            <div class="space-y-2">--}}
{{--                <div class="col-6">Name: <span class="font-bold">{{ $product->name }}</span></div>--}}
{{--                <div class="col-6">Description: <span class="font-bold">{{ $product->description }}</span></div>--}}
{{--                <div class="col-6">Price: <span class="font-bold">{{ $product->price }}</span></div>--}}
{{--                <div class="col-6">Promotion Price: <span class="font-bold">{{ $product->promotion_price }}</span></div>--}}
{{--            </div>--}}
{{--            <div class="ml-3 space-y-2 float-end">--}}
{{--                <div class="col-6">Discount: <span class="font-bold">{{ $product->discount }}</span></div>--}}
{{--                <div class="col-6">Tax: <span class="font-bold">{{ $product->tax }}</span></div>--}}
{{--                <div class="col-6">Quantity: <span class="font-bold">{{ $product->stock_quantity }}</span></div>--}}
{{--                <div class="col-6">Category: <span class="font-bold">{{ $product->category->name }}</span></div>--}}
{{--            </div>--}}
            <div class="overflow-x-auto mt-6">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 border dark:border-gray-700">
                    <tbody>
                    <tr class="border-b dark:border-gray-700 bg-white dark:bg-gray-900">
                        <th class="px-6 py-3 font-medium text-gray-900 dark:text-white whitespace-nowrap">Name</th>
                        <td class="px-6 py-3 text-gray-600 dark:text-gray-300">{{ ucfirst($product->name) }}</td>
                    </tr>
                    <tr class="border-b dark:border-gray-700 bg-white dark:bg-gray-900">
                        <th class="px-6 py-3 font-medium text-gray-900 dark:text-white whitespace-nowrap">Description</th>
                        <td class="px-6 py-3 text-gray-600 dark:text-gray-300">{{ ucfirst($product->description) }}</td>
                    </tr>
                    <tr class="border-b dark:border-gray-700 bg-white dark:bg-gray-900">
                        <th class="px-6 py-3 font-medium text-gray-900 dark:text-white whitespace-nowrap">Price</th>
                        <td class="px-6 py-3 text-gray-600 dark:text-gray-300">{{ $product->price }}</td>
                    </tr>
                    <tr class="bg-white dark:bg-gray-900">
                        <th class="px-6 py-3 font-medium text-gray-900 dark:text-white whitespace-nowrap">Quantity</th>
                        <td class="px-6 py-3 text-gray-600 dark:text-gray-300">{{ $product->stock_quantity }}</td>
                    </tr>
                    <tr class="bg-white dark:bg-gray-900">
                        <th class="px-6 py-3 font-medium text-gray-900 dark:text-white whitespace-nowrap">Category</th>
                        <td class="px-6 py-3 text-gray-600 dark:text-gray-300">{{ ucfirst($product->category->name) }}</td>
                    </tr>
                    <tr class="border-b dark:border-gray-700 bg-gray-50 dark:bg-gray-800">
                        <th class="px-6 py-3 font-medium text-gray-900 dark:text-white whitespace-nowrap">Promotion Price</th>
                        <td class="px-6 py-3 text-gray-600 dark:text-gray-300">{{ $product->promotion_price }}</td>
                    </tr>
                    <tr class="bg-white dark:bg-gray-900">
                        <th class="px-6 py-3 font-medium text-gray-900 dark:text-white whitespace-nowrap">Discount</th>
                        <td class="px-6 py-3 text-gray-600 dark:text-gray-300">{{ $product->discount }}</td>
                    </tr>
                    <tr class="bg-white dark:bg-gray-900">
                        <th class="px-6 py-3 font-medium text-gray-900 dark:text-white whitespace-nowrap">Tax</th>
                        <td class="px-6 py-3 text-gray-600 dark:text-gray-300">{{ $product->tax }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
