<?php

namespace App\Livewire\Admin\Packages;

use App\Models\Package;
use Livewire\Component;
use Illuminate\Support\Str;

class PackagesCreate extends Component
{
    public  $name, $code, $price, $direct_commission, $indirect_commission, $point, $image, $description;

    public function mount()
    {
        // توليد كود عشوائي عند تحميل المكون
        $this->generateCode();
    }

    public function generateCode()
    {
        // توليد كود عشوائي على النمط المطلوب
        $this->code = 'Package-' . Str::upper(Str::random(5));
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'code' => 'required|string|unique:packages,code|max:50', // الكود مطلوب، نصي، فريد، وبحد أقصى 50 حرفًا
            'price' => 'required|numeric|min:0', // السعر مطلوب، رقمي، وقيمته لا تقل عن 0
            'direct_commission' => 'required|numeric|min:0', // العمولة المباشرة مطلوبة، رقمية، ولا تقل عن 0
            'indirect_commission' => 'nullable|numeric|min:0', // العمولة غير المباشرة اختيارية، رقمية، ولا تقل عن 0
            'point' => 'required|integer|min:0', // النقاط مطلوبة، عدد صحيح، ولا تقل عن 0
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048', // الصورة اختيارية، ويجب أن تكون صورة من الأنواع المذكورة وحجمها لا يزيد عن 2 ميجابايت
            'description' => 'nullable|string|max:500', // الوصف اختياري، نصي، بحد أقصى 500 حرف
        ];
    }
    public function submit()
    {
        $data = $this->validate();
        #save data
        Package::create($data);
        $this->reset(['name', 'code', 'price', 'direct_commission', 'indirect_commission', 'point', 'image', 'description']);

        #hide modal
        $this->dispatch('createModalToggle');

        #refresh skills data
        $this->dispatch('refreshData')->to(PackagesData::class);
    }
    #-------------------------------------------------------------------
    public function render()
    {
        return view('admin.packages.packages-create');
    }
}
