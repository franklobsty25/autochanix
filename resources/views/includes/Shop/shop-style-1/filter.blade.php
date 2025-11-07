<div class="col-xl-9 col-lg-8 col-md-7 col-sm-12">
    <form action="{{ url('/shops') }}" method="GET" class="d-flex justify-content-end align-items-center">
        <div class="input-group w-50">
            <input
                type="text"
                name="search"
                class="form-control custom-height b-0"
                placeholder="Search products..."
                value="{{ request('search') }}"
                aria-label="Search products"
            >
            <button class="btn btn-primary" type="submit">
                <i class="lni lni-search"></i>
            </button>
        </div>
    </form>
</div>
