<?php

namespace App\Livewire\Admin\Packages;

use App\Models\Package;
use Livewire\Component;

class PackagesDelete extends Component
{
    public $package;

    protected $listeners = ['packageDelete'];

    public function packageDelete($id)
    {
        #fill $package with the same eloquent model of the same id
        $this->package = Package::find($id);

        #show delete modal
        $this->dispatch('deleteModalToggle');
    }
    #----------------------------------------------------------
    public function submit()
    {
        #delete record
        $this->package->delete();
        $this->reset('package');

        #hide modal
        $this->dispatch('deleteModalToggle');

        #refresh packages data
        $this->dispatch('refreshData')->to(PackagesData::class);
    }
    #----------------------------------------------------------
    public function render()
    {
        return view('admin.packages.packages-delete');
    }
}
