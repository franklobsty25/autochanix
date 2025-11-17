<x-slot:title>Create Product</x-slot:>
<div>
    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Create Product') }}</flux:heading>
{{--        <flux:subheading size="lg" class="mb-6">{{ __('Form For Create New Product') }}</flux:subheading>--}}
        <flux:separator variant="subtle" />
    </div>

    <div>
{{--        <a wire:navigate href="{{ route('products.index') }}"--}}
{{--           class="cursor-pointer px-3 py-2 text-xs font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">--}}
{{--            Back--}}
{{--        </a>--}}

        <form class="mt-6 space-y-6" wire:submit="save">
            <flux:input label="Name*" type="text" name="name" placeholder="Enter Name" wire:model="form.name" />
            <flux:textarea label="Description*" name="description" placeholder="Enter description" wire:model="form.description" />
            <flux:input label="Price*" type="number" step="0.01" name="price" placeholder="Enter price" wire:model="form.price" />
            <flux:input label="Quantity*" type="number" name="stock_quantity" placeholder="Enter stock quantity" wire:model="form.stock_quantity" />
            <flux:input label="Promotion Price" type="number" step="0.01" name="promotion_price" placeholder="Enter promotion price" wire:model="form.promotion_price" />
            <flux:input label="Discount" type="number" name="discount" placeholder="Enter discount" wire:model="form.discount" />
            <flux:input label="Tax" type="number" name="tax" placeholder="Enter tax" wire:model="form.tax" />
            <flux:select label="State*" placeholder="Choose state..." wire:model="form.state">
                <flux:select.option>Choose...</flux:select.option>
                @foreach(\App\StateEnum::cases() as $state)
                    <flux:select.option value="{{ $state->value }}">{{ ucfirst($state->value) }}</flux:select.option>
                @endforeach
            </flux:select>
            <flux:select label="Category*" placeholder="Choose category..." wire:model="form.category_id">
                <flux:select.option>Choose...</flux:select.option>
                @if(!$categories)
                    <flux:select.option>No categories available</flux:select.option>
                @else
                    @foreach($categories as $category)
                        <flux:select.option value="{{ $category->id }}">{{ ucfirst($category->name) }}</flux:select.option>
                    @endforeach
                @endif
            </flux:select>
            <flux:input label="Upload Images*" type="file" multiple wire:model="form.images" />
            <flux:button type="submit" variant="primary" class="float-end">
                Create Product
            </flux:button>
        </form>
    </div>
</div>
