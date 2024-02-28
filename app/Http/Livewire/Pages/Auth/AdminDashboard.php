<?php

namespace App\Http\Livewire\Pages\Auth;

use Livewire\Component;

use App\Models\CarSpecification;
use App\Models\AdditionalService;
use App\Models\AdditionalEquipment;

class AdminDashboard extends Component
{

    public $additionalEquipment = [];
    public $additionalServices = [];
    public $carSpecifications = [];

    public function boot()
    {
        $this->additionalEquipment = AdditionalEquipment::select(['nume', 'descriere', 'pret'])->get()->toArray();
        $this->additionalServices = AdditionalService::select(['titlu', 'descriere', 'pret'])->get()->toArray();
        $this->carSpecifications = CarSpecification::select(['nume', 'transmisie', 'combustibil', 'pret'])->get()->toArray();
    }

    public function render()
    {
        return view('livewire.pages.auth.admin-dashboard');
    }
}
