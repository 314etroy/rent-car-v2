<?php

namespace App\Http\Livewire\Common;

use Livewire\Component;
use Livewire\Attributes\On;

class Modal extends Component
{
    public $show = false;

    #[On('show')]
    public function show()
    {
        dd('onShow()');
        // $data = decryptData($value);
        
        // $this->init($data);
        // $this->show = !$this->show;
    }
}
