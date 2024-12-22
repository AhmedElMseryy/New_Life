<?php

namespace App\Livewire\Admin\Ranks;

use App\Models\Rank;
use Livewire\Component;

class RanksUpdate extends Component
{

    public $rank, $name, $prize, $bv_left, $bv_right, $image, $description;

    protected $listeners = ['rankUpdate'];

    public function rankUpdate($id)
    {
        #fill $rank with the same eloquent model of the same id
        $this->rank = Rank::find($id);
        $this->name = $this->rank->name;
        $this->prize = $this->rank->prize;
        $this->bv_left = $this->rank->bv_left;
        $this->bv_right = $this->rank->bv_right;
        $this->image = $this->rank->image;
        $this->description = $this->rank->description;
        $this->resetValidation();

        #show edit modal
        $this->dispatch('editModalToggle');
    }

    #----------------------------------------------------------
    public function rules()
    {
        return [
            'name' => 'required',
            'prize' => 'required',
            'bv_left' => 'nullable',
            'bv_right' => 'nullable',
            'image' => 'nullable',
            'description' => 'nullable',
        ];
    }
    public function submit()
    {
        $data = $this->validate();
        #save data
        $this->rank->update($data);

        #hide modal
        $this->dispatch('editModalToggle');

        #refresh ranks data
        $this->dispatch('refreshData')->to(RanksData::class);
    }

    #----------------------------------------------------------

    public function render()
    {
        return view('admin.ranks.ranks-update');
    }
}
