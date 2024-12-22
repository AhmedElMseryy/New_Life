<div>
    <div class="d-flex justify-content-between align-items-center mb-3">
        <!-- Add New -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
            Add Rank
        </button>

        <!-- SEARCH -->
        <input type="text" class="form-control w-auto" placeholder="Search..." wire:model.live="search">
    </div>

    <div class="table-responsive dt-responsive">
        @if (count($data) > 0)
            <table id="c-tool-ele" class="table table-striped table-bordered nowrap">
                <thead>
                    <tr>
                        <th>NAME</th>
                        <th>CODE</th>
                        <th>BV LEFT</th>
                        <th>BV RIGHT</th>
                        <th>PRIZE</th>
                        <th>ORDER</th>
                        <th>STATUS</th>
                        <th>ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $record)
                        <tr>
                            <td>{{ $record->name }}</td>
                            <td>{{ $record->prize }}</td>
                            <td>{{ $record->bv_left }}</td>
                            <td>{{ $record->bv_right }}</td>
                            <td>{{ $record->image }}</td>
                            <td>{{ $record->description }}</td>
                            <td>$320,800</td>
                            <!-- ACTIONS -->
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        actions
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <!-- Edit -->
                                        <a class="dropdown-item" href="#"
                                            wire:click.prevent="$dispatch('rankUpdate',{ id: {{ $record->id }}})">
                                            <i class="bx bx-edit-alt me-1"></i>
                                            Edit
                                        </a>

                                        <!-- Delete -->
                                        <a class="dropdown-item" href="#"
                                            wire:click.prevent="$dispatch('rankDelete',{ id: {{ $record->id }}})">
                                            <i class="bx bx-trash me-1"></i>
                                            Delete
                                        </a>

                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $data->links() }}
        @else
            <span class="text-danger">No Results Found</span>
        @endif
    </div>
</div>
