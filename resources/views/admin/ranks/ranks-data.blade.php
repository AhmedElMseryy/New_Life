<div>
    <div class="d-flex justify-content-between align-items-center mb-3">
        <!-- Add New -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#login-modal">
            Add New
        </button>

        <!-- SEARCH -->
        <input type="text" class="form-control w-auto" placeholder="Search..." wire:model.live="search">
    </div>

    <div class="table-responsive dt-responsive">
        <table id="c-tool-ele" class="table table-striped table-bordered nowrap">
            <thead>
                <tr>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>DOB</th>
                    <th>Salary</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Quinn Flynn</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                    <!-- ACTIONS -->
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                actions
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <!-- Edit -->
                                <a class="dropdown-item" href="#"
                                    wire:click.prevent="$dispatch('skillUpdate',{ id: {{ 1 }} })">
                                    <i class="bx bx-edit-alt me-1"></i>
                                    Edit
                                </a>

                                <!-- Delete -->
                                <a class="dropdown-item" href="#"
                                    wire:click.prevent="$dispatch('skillDelete',{ id: {{ 1 }} })">
                                    <i class="bx bx-trash me-1"></i>
                                    Delete
                                </a>

                                <!-- Show -->
                                <a class="dropdown-item" href="#"
                                    wire:click.prevent="$dispatch('skillShow',{ id: {{ 1 }} })">
                                    <i class="bx bx-show-alt me-1"></i>
                                    Show
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</div>
