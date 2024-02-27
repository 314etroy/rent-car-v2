<?php

namespace App\Http\Livewire\Common;

use Livewire\Component;
use Illuminate\Contracts\View\View;

class OpenButtonModal extends Component
{
    public $data = null;

    public function emitDataToModal()
    {
        // $decryptData = decryptData($this->data['other']) ?? null;
        // $component = $decryptData['component'];
        // $method = 'show';

        // $this->emitTo($component, $method, $this->data['other']);
    }

    public function render(): View
    {
        return view('livewire.common.open-button-modal');
    }
}
