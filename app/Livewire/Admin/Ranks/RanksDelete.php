<?php

namespace App\Livewire\Admin\Ranks;

use App\Models\Rank;
use Livewire\Component;

class RanksDelete extends Component
{
    public $rank;

    protected $listeners = ['rankDelete'];

    public function rankDelete($id)
    {
        #fill $rank with the same eloquent model of the same id
        $this->rank = Rank::find($id);

        #show delete modal
        $this->dispatch('deleteModalToggle');
    }
    #----------------------------------------------------------
    public function submit()
    {
        #delete record
        $this->rank->delete();
        $this->reset('rank');

        #hide modal
        $this->dispatch('deleteModalToggle');

        #refresh ranks data
        $this->dispatch('refreshData')->to(RanksData::class);
    }
    #----------------------------------------------------------
    public function render()
    {
        return view('admin.ranks.ranks-delete');
    }
}
