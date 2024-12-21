<!-- Modal -->
<x-create-modal title="Add New Item">
    <!-- NAME -->
    <div class="col-md-6 mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Name" wire:model='name' />
        {{-- <x-error-message field="name" /> --}}
    </div>

    <!-- PRIZE -->
    <div class="col-md-6 mb-3">
        <label class="form-label">Prize</label>
        <input type="number" class="form-control" placeholder="Prize" wire:model='prize' />
        {{-- <x-error-message field="prize" /> --}}
    </div>

    <!-- BV LEFT -->
    <div class="col-md-6 mb-3">
        <label class="form-label">BV Left</label>
        <input type="number" class="form-control" placeholder="BV Left" wire:model='bv_left' />
        {{-- <x-error-message field="bv_left" /> --}}
    </div>

    <!-- BV RIGHT -->
    <div class="col-md-6 mb-3">
        <label class="form-label">BV Right</label>
        <input type="number" class="form-control" placeholder="BV Right" wire:model='bv_right' />
        {{-- <x-error-message field="bv_right" /> --}}
    </div>

    <!-- IMAGE -->
    <div class="col-md-12 mb-3">
        <label class="form-label">Image</label>
        <input type="file" class="form-control" wire:model='image' />
        {{-- <x-error-message field="image" /> --}}
    </div>

    <!-- DESCRIPTION -->
    <div class="col-md-12 mb-3">
        <label class="form-label">Description</label>
        <textarea class="form-control" rows="3" placeholder="Description" wire:model='description'></textarea>
        {{-- <x-error-message field="description" /> --}}
    </div>
</x-create-modal>
