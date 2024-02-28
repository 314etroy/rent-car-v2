<?php

namespace App\Http\Livewire\Common;

use Livewire\Component;

class Modal extends Component
{
    public $show = false;

    protected $listeners = [
        'show',
    ];

    public function show(string $value): void
    {
        // dd($value);
        // $data = decryptData($value);
        
        // $this->init($data);
        $this->show = !$this->show;
    }
}
