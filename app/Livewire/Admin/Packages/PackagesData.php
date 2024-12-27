<?php

namespace App\Livewire\Admin\Packages;

use App\Models\Package;
use Livewire\Component;
use Livewire\WithPagination;

class PackagesData extends Component
{
    use WithPagination;

    public $search;

    protected $listeners = ['refreshData' => '$refresh'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $data = Package::where('name', 'like', '%' . $this->search . '%')->paginate(10);
        return view('admin.packages.packages-data', get_defined_vars());
    }
}
