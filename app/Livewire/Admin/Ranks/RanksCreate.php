<?php

namespace App\Livewire\Admin\Ranks;

use App\Models\Rank;
use Livewire\Component;

class RanksCreate extends Component
{

    public  $name, $prize, $bv_left, $bv_right, $image, $description;


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
        Rank::create($data);
        $this->reset(['name', 'prize', 'bv_left', 'bv_right', 'image', 'description']);

        #hide modal
        $this->dispatch('createModalToggle');

        #refresh skills data
        $this->dispatch('refreshData')->to(RanksData::class);
    }
    #-------------------------------------------------------------------
    public function render()
    {
        return view('admin.ranks.ranks-create');
    }
}
