<?php

namespace App\Livewire\Admin\Packages;

use App\Models\Package;
use Livewire\Component;

class PackagesUpdate extends Component
{
    public  $package, $name, $code, $price, $direct_commission, $status, $point, $image, $description;

    protected $listeners = ['packageUpdate'];

    public function packageUpdate($id)
    {
        #fill $packages with the same eloquent model of the same id
        $this->package = Package::find($id);
        $this->name = $this->package->name;
        $this->code = $this->package->code;
        $this->price = $this->package->price;
        $this->direct_commission = $this->package->direct_commission;
        $this->status = $this->package->status;
        $this->point = $this->package->point;
        $this->image = $this->package->image;
        $this->description = $this->package->description;
        $this->resetValidation();

        #show edit modal
        $this->dispatch('editModalToggle');
    }

    #----------------------------------------------------------
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:50',
            'price' => 'required|numeric|min:0',
            'direct_commission' => 'required|numeric|min:0',
            'status' => 'nullable|string',
            'point' => 'required|integer|min:0',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'description' => 'nullable|string|max:500',
        ];
    }
    public function submit()
    {
        $data = $this->validate();
        #save data
        $this->package->update($data);

        #hide modal
        $this->dispatch('editModalToggle');

        #refresh packages data
        $this->dispatch('refreshData')->to(PackagesData::class);
    }

    #----------------------------------------------------------
    public function render()
    {
        return view('admin.packages.packages-update');
    }
}
