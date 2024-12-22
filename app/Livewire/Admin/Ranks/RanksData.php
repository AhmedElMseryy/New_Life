<?php

namespace App\Livewire\Admin\Ranks;

use App\Models\Rank;
use Livewire\Component;
use Livewire\WithPagination;

class RanksData extends Component
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
        $data = Rank::where('name', 'like', '%' . $this->search . '%')->paginate(10);
        return view('admin.ranks.ranks-data', get_defined_vars());
    }
}
