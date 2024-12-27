<!-- Modal -->
<x-edit-modal title="Edit Package">

    <!-- NAME -->
    <div class="col-md-6 mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Name" wire:model='name' />
        <x-error-message field="name" />
    </div>

    <!-- CODE -->
    <div class="col-md-6 mb-3">
        <label class="form-label">Code</label>
        <input type="text" class="form-control" value="{{ $code }}" wire:model='code' readonly />
        <x-error-message field="code" />
    </div>

    <!-- Direct Commission -->
    <div class="col-md-6 mb-3">
        <label class="form-label">Direct Commission</label>
        <input type="number" class="form-control" placeholder="Direct Commission" wire:model='direct_commission' />
        <x-error-message field="direct_commission" />
    </div>

    <!-- STATUS -->
    <div class="col-md-6 mb-3">
        <label class="form-label"> Status</label>
        <select class="form-control" wire:model='status' />
        <option value="active">Active</option>
        <option value="Inactive">Inactive</option>
        </select>
        {{-- <select class="form-control" wire:model='category_id'>
            <option value="">Select Category</option>
            @if (count($categories) > 0)
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" wire:key="category-{{ $category->id }}">{{ $category->name }}
                    </option>
                @endforeach
            @endif
        </select> --}}
        <x-error-message field="indirect_commission" />
    </div>

    <!-- POINT -->
    <div class="col-md-6 mb-3">
        <label class="form-label">Point</label>
        <input type="number" class="form-control" placeholder="Point" wire:model='point' />
        <x-error-message field="point" />
    </div>

    <!-- Price -->
    <div class="col-md-6 mb-3">
        <label class="form-label">Price</label>
        <input type="number" class="form-control" placeholder="Price" wire:model='price' />
        <x-error-message field="price" />
    </div>

    <!-- IMAGE -->
    <div class="col-md-12 mb-3">
        <label class="form-label">Image</label>
        <input type="file" class="form-control" wire:model='image' />
        <x-error-message field="image" />
    </div>

    <!-- DESCRIPTION -->
    <div class="col-md-12 mb-3">
        <label class="form-label">Description</label>
        <textarea class="form-control" rows="3" placeholder="Description" wire:model='description'></textarea>
        <x-error-message field="description" />
    </div>
</x-edit-modal>
