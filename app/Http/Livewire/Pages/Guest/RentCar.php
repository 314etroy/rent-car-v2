<?php

namespace App\Http\Livewire\Pages\Guest;

use Livewire\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Validation\ValidationException;

class RentCar extends Component
{

    public $step = 0;

    public $rawData = [
        'rent_date' => [
            'location' => '',
            'return_location' => '',
            'return_to_another_location' => '',
            'pickup_date' => '',
            'return_date' => '',
            'pickup_time' => '',
            'return_time' => '',
        ],
        'choose_car' => [
            'search' => '',
        ],
        'additional_services' => [
            'starter_1' => '',
            'starter_2' => '',
            'starter_3' => '',
        ],
        'check_out' => [
            'name' => '',
            'email' => '',
            'city' => '',
            'phone' => '',
            'flight_number' => '',
            'reservation_info' => '',
            'password' => '',
            'confirm_password' => '',
            'terms' => '',
            'policy' => '',
        ],
    ];

    public $rent_date_rules = [
        'rawData.rent_date.location' => 'required',
        'rawData.rent_date.return_location' => '',
        'rawData.rent_date.return_to_another_location' => '',
        'rawData.rent_date.pickup_date' => 'required',
        'rawData.rent_date.return_date' => 'required',
        'rawData.rent_date.pickup_time' => 'required',
        'rawData.rent_date.return_time' => 'required',
    ];

    public $chose_car_rules = [
        'rawData.choose_car.search' => '',
    ];

    public $additional_services_rules = [
        'rawData.additional_services.starter_1' => 'required',
        'rawData.additional_services.starter_2' => 'required',
        'rawData.additional_services.starter_3' => 'required',
    ];

    public $check_out_rules = [
        'rawData.check_out.name' => 'required',
        'rawData.check_out.email' => 'required',
        'rawData.check_out.city' => 'required',
        'rawData.check_out.phone' => 'required',
        'rawData.check_out.flight_number' => 'required',
        'rawData.check_out.reservation_info' => 'required',
        'rawData.check_out.password' => 'required',
        'rawData.check_out.confirm_password' => 'required',
        'rawData.check_out.terms' => 'required',
        'rawData.check_out.policy' => 'required',
    ];

    protected $rules = [
        // 'rawData.rent_date.location' => 'required',
        // 'rawData.rent_date.return_to_another_location' => 'required',
        // 'rawData.rent_date.pickup_date' => 'required',
        // 'rawData.rent_date.return_date' => 'required',
        // 'rawData.rent_date.pickup_time' => 'required',
        // 'rawData.rent_date.return_time' => 'required',

        // 'rawData.choose_car.search' => 'required',

        // 'rawData.check_out.name' => 'required',
        // 'rawData.check_out.email' => 'required',
        // 'rawData.check_out.city' => 'required',
        // 'rawData.check_out.phone' => 'required',
        // 'rawData.check_out.flight_number' => 'required',
        // 'rawData.check_out.reservation_info' => 'required',
        // 'rawData.check_out.password' => 'required',
        // 'rawData.check_out.confirm_password' => 'required',
        // 'rawData.check_out.terms' => 'required',
        // 'rawData.check_out.policy' => 'required',
    ];

    protected $messages = [
        'rawData.rent_date.location.required' => 'este necesar',
        'rawData.rent_date.return_to_another_location.required' => 'este necesar',
        'rawData.rent_date.pickup_date.required' => 'este necesar',
        'rawData.rent_date.return_date.required' => 'este necesar',
        'rawData.rent_date.pickup_time.required' => 'este necesar',
        'rawData.rent_date.return_time.required' => 'este necesar',

        'rawData.choose_car.search.required' => 'este necesar',

        'rawData.additional_services.starter_1.required' => 'este necesar',
        'rawData.additional_services.starter_2.required' => 'este necesar',
        'rawData.additional_services.starter_3.required' => 'este necesar',

        'rawData.check_out.name.required' => 'este necesar',
        'rawData.check_out.email.required' => 'este necesar',
        'rawData.check_out.city.required' => 'este necesar',
        'rawData.check_out.phone.required' => 'este necesar',
        'rawData.check_out.flight_number.required' => 'este necesar',
        'rawData.check_out.reservation_info.required' => 'este necesar',
        'rawData.check_out.password.required' => 'este necesar',
        'rawData.check_out.confirm_password.required' => 'este necesar',
        'rawData.check_out.terms.required' => 'este necesar',
        'rawData.check_out.policy.required' => 'este necesar',
    ];

    public function boot()
    {
        if (Cookie::has('step')) {
            $this->step = (int) Cookie::get('step');
        }
    }

    public function updated(string $property): void
    {
        if (strpos($property, 'rawData') === false) {
            return;
        }

        // Pentru fix-ul de la checkbox-uri am creat acest array
        $resetChecboxAndRadioInputs = ['rawData.rent_date.return_to_another_location', 'rawData.check_out.terms', 'rawData.check_out.policy'];

        if (in_array($property, $resetChecboxAndRadioInputs)) {
            $nestedKey = substr($property, strpos($property, '.') + 1);
            $propertyValue = data_get($this->rawData, $nestedKey);
            // Am facut if-ul de mai jos pentru ca avem situatia in care checkbox-urile odata selectate raman in true sau false si nu mai dau eroarea: 'is required'
            if ($propertyValue === false) {
                $this->reset($property);
                $this->handleValidateOnlyProperty($property);
            }
        }

        $this->handleValidateOnlyProperty($property);
    }

    private function handleValidateOnlyProperty(string $property)
    {
        switch ($this->step) {
            case 0:
                $this->validateOnly($property, $this->rent_date_rules);
                break;

            case 1:

                $this->validateOnly($property, $this->chose_car_rules);
                break;

            case 2:
                $this->validateOnly($property, $this->additional_services_rules);
                break;

            case 3:

                $this->validateOnly($property, $this->check_out_rules);
                break;

            default:
                dd('Eroare la validarea input-ului, contacteaza echipa de suport!');
                break;
        }
    }

    public function changeSection(int $value, $hasFirstStepReValidation = true)
    {
        if ($value <= $this->step) {
            $this->setCookieStep($value);
        }

        if ((bool) $hasFirstStepReValidation) { // acest if este pus pentru a nu mai da trigger la validare cand se trece de la step-ul 4 la 0
            switch ($this->step) {
                case 0:
                    return $this->handleSectionValidation($this->rent_date_rules, $value);

                case 1:
                    return $this->handleSectionValidation($this->chose_car_rules, $value);

                case 2:
                    return $this->handleSectionValidation($this->additional_services_rules, $value);

                case 3:
                    return $this->handleSectionValidation($this->check_out_rules, $value);

                default:
                    $this->setCookieStep($value);
                    return;
            }
        }
    }

    private function handleSectionValidation(array $rules, int $value)
    {
        if ($this->hasValidationErrors($rules)) {
            $this->validate($rules);
        } else {
            if ($value === 4) { // am pus acest if pentru a reseta datele utilizatroului atunci cand ajunge in step 4
                $this->reset('rawData');
            }

            $this->setCookieStep($value);
        }
    }

    private function hasValidationErrors(array $rules): bool
    {
        try {
            $this->validate($rules);
            return false;
        } catch (ValidationException $e) {
            // Validation errors occurred
            // dd($e->validator->getMessageBag());
            return true;
        }
    }

    private function setCookieStep(int $value): void
    {
        if (!$value || !is_numeric($value) || $value === 0) {
            $this->reset('step');
        } else {
            $this->step = $value;
        }

        $this->setCookie('step', $this->step);
    }

    private function setCookie(string $key, int|string|null $value, int $expires = 60): void
    {
        Cookie::queue($key, $value, $expires);
    }

    // private function setRulesAndMessages(): void
    // {
    //     $arr_keys = array_keys($this->modalData['rightFormFields']);

    //     foreach ($arr_keys as $rule) {
    //         $this->rules['modalData.rightFormFields.' . $rule . '.value'] = 'required';
    //         $this->messages['modalData.rightFormFields.' . $rule . '.value.required'] = 'The ' . str_replace("_", " ", $rule) . ' is required.';
    //     }
    // }

    public function render()
    {
        return view('livewire.pages.guest.rent-car');
    }
}
