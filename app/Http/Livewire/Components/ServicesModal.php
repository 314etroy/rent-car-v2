<?php

namespace App\Http\Livewire\Components;

use Illuminate\Support\Str;
use Illuminate\Contracts\View\View;
use App\Http\Livewire\Common\Modal;
use Illuminate\Database\Eloquent\Model;

use App\Models\GenBlogBase;
use App\Models\GenBlogStatus;

use App\Models\GenBlogLangArticle;
use App\Models\GenBlogLangCategory;
use App\Models\GenBlogLangSubcategory;

use App\Models\GenBlogArticleImage;
use App\Models\GenBlogLangArticleTag;

class ServicesModal extends Modal
{

    // protected $rules = [];

    // protected $messages = [];

    // public $modalDataInit = [];

    // public $modalData = [
    //     'initFormData' => [],
    //     'leftLanguages' => [],
    //     'leftFormFields' => [],
    //     'rightFormFields' => [],
    //     'changingTheLanguage' => '',
    //     'selectedFormLanguage' => '',
    //     'dbBase' => GenBlogBase::class,
    //     'dbStatus' => GenBlogStatus::class,
    //     'dbModal' => null,
    //     'structure' => null,
    // ];

    public $modalProps = [
        'id' => null,
        'rowId' => null,
        'rowData' => null,
        'operation' => null,
        'inhibModalClosure' => false,
        'itemType' => null,
    ];

    // public function boot()
    // {
    //     $this->modalDataInit = $this->modalData;
    // }

    // protected function init(array $data): void
    // {
    //     empty($data['itemType']) && exit;

    //     $this->modalProps = $data;

    //     $this->setModal($data['itemType']);
    //     $this->reseFormFields();
    //     $this->handleModalData($data);
    // }

    // private function reseFormFields(): void
    // {
    //     $this->modalData['leftFormFields'] = $this->modalData['rightFormFields'] = $this->modalData['structure'];
    //     $this->resetProp('modalData.selectedFormLanguage');
    //     $this->resetProp('modalData.changingTheLanguage');
    // }

    // private function setModal($itemType): void
    // {
    //     switch ($itemType) {
    //         case 1:
    //             $this->modalData['dbModal'] = GenBlogLangArticle::class;
    //             $this->modalData['structure'] = getConstant('articleArrStructure');
    //             return;

    //         case 2:
    //             $this->modalData['dbModal'] = GenBlogLangCategory::class;
    //             $this->modalData['structure'] = getConstant('categoryArrStructure');
    //             return;

    //         case 3:
    //             $this->modalData['dbModal'] = GenBlogLangSubcategory::class;
    //             $this->modalData['structure'] = getConstant('subcategoryArrStructure');
    //             return;

    //         default:
    //             dd('wrong $itemtype!');
    //     }
    // }

    // private function handleModalData(array $value): void
    // {
    //     if ($value['operation'] !== getConstant('operation.3')) {
    //         $this->modalData['leftLanguages'] = $this->removeEmptyEntries($value['rowData']) ?? [];
    //         $this->getSideData('rightFormFields', $this->getData($value));
    //     }

    //     // $this->emit('initModalPlugins');
    // }

    // // -- Actiuni apelate de FrontEnd -- // 
    // public function resetModalFields(): void // listener JS handleDestroyPluginsMethods
    // {
    //     $this->reseFormFields();
    // }

    // public function useThisData(): void // BTN
    // {
    //     $this->modalData['rightFormFields'] = $this->modalData['leftFormFields'];
    // }

    // public function clearRightForm(): void // BTN
    // {
    //     $this->reseFormFields();
    // }

    // public function updated(string $propertyName): void
    // {
    //     $this->setRulesAndMessages();
    //     $this->validateOnly($propertyName, $this->rules);
    //     $this->emit('initModalPlugins');
    // }

    // public function updatedSelectedFormLanguage(string $rightLanguage): void
    // {
    //     if (checkPrefix('_' . $rightLanguage)) {
    //         $this->modalData['selectedFormLanguage'] = $rightLanguage;
    //         $this->enhanceFormData('right', $rightLanguage);
    //     } else {
    //         $this->resetProp('modalData.selectedFormLanguage');
    //     }
    // }

    // public function updatedModalDataChangingTheLanguage(string $leftLanguage): void
    // {
    //     if (checkPrefix('_' . $leftLanguage)) {
    //         $this->getSideData('leftFormFields', $this->getFormData($this->modalProps['rowData'][$leftLanguage]));
    //         // $this->enhanceFormData('left', $leftLanguage); // I have to use this just for Article
    //     } else {
    //         $this->resetLeftFormFields();
    //     }
    // }

    // public function updatedModalDataRightFormFieldsTitleValue(string $value): void
    // {
    //     $this->modalData['rightFormFields']['slug']['value'] = Str::slug($value);
    // }

    // public function create(): void
    // {
    //     // $this->emit('initModalPlugins');

    //     $this->setRulesAndMessages();
    //     $this->handleFormValidation();
    // }

    // public function update(): void
    // {
    //     // cand nu s-a schimbat nimic in datele din modal-ul de update
    //     if ($this->modalData['initFormData'] == $this->modalData['rightFormFields']) {
    //         dd('fara schimbare');
    //         $this->closeModal();
    //         return;
    //     }

    //     $this->setRulesAndMessages();
    //     $this->handleFormValidation();
    // }

    // public function delete(): void
    // {
    //     [
    //         'rowId' => $rowId,
    //         'rowData' => $rowData,
    //         'itemType' => $itemType,
    //     ] = $this->modalProps;

    //     $idsToDelete = $this->getKeys($rowData);

    //     empty($idsToDelete) && exit;

    //     $this->modalData['dbModal']::actionDelete($idsToDelete);
    //     $this->modalData['dbBase']::actionDelete($rowId);
    //     $this->modalData['dbStatus']::updateTime($itemType);

    //     $this->closeModal(true);
    // }

    // // ---------------- Metode Viitoare la care inca lucrez ---------------- //

    // // Cod pentru diferite input-uri ce trebuie implementat... 
    // private function enhanceFormData(string $side, string $language): void
    // {

    //     $categories = $this->handleSelectizeData(new GenBlogLangCategory, ['id', 'lang', 'title']);
    //     $subcategories = $this->handleSelectizeData(new GenBlogLangSubcategory, ['id', 'lang', 'title']);

    //     if ($side === 'left') {
    //         // $this->modalData['leftFormFields']['categories']['allOptions'] = $categories[$language] ?? [];
    //         // $this->modalData['leftFormFields']['subcategories']['allOptions'] = $subcategories[$language] ?? [];
    //     }

    //     if ($side === 'right') {
    //         // $this->modalData['rightFormFields']['categories']['allOptions'] = $categories[$language] ?? [];
    //         // $this->modalData['rightFormFields']['subcategories']['allOptions'] = $subcategories[$language] ?? [];
    //     }
    // }

    // private function handleSelectizeData(Model $dbTable, array $tableFilds): array
    // {
    //     $allFields = $dbTable::getAllEntries($tableFilds);

    //     foreach ($allFields as $value) {
    //         $arr[$value[$tableFilds[1]]][$value[$tableFilds[0]]] = $value[$tableFilds[2]];
    //     }

    //     return $arr;
    // }

    // // -------------------------------- Metode reutilizate ----------------------------- //

    // private function getData(array $value): array
    // {
    //     $rowData = $value['rowData'] ?? getConstant('EMPTY_ARRAY');
    //     $selectedLanguage = $value['selectedLanguage'] ?? getConstant('EMPTY_STRING');

    //     if (empty($rowData[$selectedLanguage])) {
    //         foreach (array_keys($this->modalData['structure']) as $key) {
    //             $arr[] = [$key => null];
    //         }

    //         return $arr;
    //     }

    //     return $this->getFormData($rowData[$selectedLanguage]);
    // }

    // private function getFormData(int $id)
    // {
    //     ['itemType' => $itemType] = $this->modalProps;
    //     return $this->modalData['dbModal']::getModalData($itemType, $id);
    // }

    // private function removeEmptyEntries(array|null $rowData): array
    // {
    //     $arr = [];

    //     foreach (config('app.supported_languages') as $key => $data) {
    //         if (!empty($rowData[$key])) {
    //             $arr[$key] = $data;
    //         }
    //     }

    //     return $arr;
    // }

    // private function resetLeftFormFields(): void
    // {
    //     $this->modalData['leftFormFields'] = $this->modalData['structure'];
    // }

    // private function getSideData(string $side, array $sideData): void
    // {
    //     foreach ($sideData as $key => $data) {
    //         if (!empty($this->modalData[$side][$key]['type'])) {
    //             $this->modalData[$side][$key]['value'] = $data;
    //         }
    //     }

    //     if ($side === 'rightFormFields') {
    //         $this->modalData['initFormData'] = $this->modalData[$side];
    //     }
    // }

    // private function setRulesAndMessages(): void
    // {
    //     $arr_keys = array_keys($this->modalData['rightFormFields']);

    //     foreach ($arr_keys as $rule) {
    //         $this->rules['modalData.rightFormFields.' . $rule . '.value'] = 'required';
    //         $this->messages['modalData.rightFormFields.' . $rule . '.value.required'] = 'The ' . str_replace("_", " ", $rule) . ' is required.';
    //     }
    // }

    // private function handleFormValidation(): void
    // {
    //     [
    //         'rowId' => $rowId,
    //         'rowData' => $rowData,
    //         'itemType' => $itemType,
    //         'selectedLanguage' => $selectedLanguage,
    //     ] = $this->modalProps;

    //     $rules = $this->rules;

    //     try {
    //         $this->validate($rules);
    //         $validatedData = $this->retrieveFormData($this->modalData['rightFormFields']);

    //         $updateArray = ['lang' => $selectedLanguage];

    //         if (empty($rowData)) {
    //             $newBaseEntry = $this->modalData['dbBase']::actionCreate(['type' => $itemType]);
    //             $updateArray['relation_data_id'] = $newBaseEntry->id;
    //         } else {
    //             $updateArray['relation_data_id'] = $rowId;
    //         }

    //         $this->modalData['dbModal']::actionCreateOrUpdate($updateArray, $validatedData);
    //         $this->modalData['dbStatus']::updateTime($itemType);

    //         $this->closeModal(true);
    //     } catch (\Illuminate\Validation\ValidationException $e) {
    //         // $errors = $e->validator->getMessageBag();
    //         // dd($errors) // to see the errors
    //         $this->validate($rules);
    //     }
    // }

    // private function retrieveFormData(array $data): array
    // {
    //     foreach ($data as $key => $value) {
    //         $arr[$key] = $value['value'];
    //     }

    //     if ($this->modalProps['operation'] !== getConstant('operation.0')) {
    //         $arr['relation_data_id'] = $this->modalProps['rowId'];
    //     }

    //     $arr['lang'] = $this->modalProps['selectedLanguage'] ?? $this->modalData['selectedFormLanguage'];

    //     return $arr;
    // }

    // private function closeModal(bool $emit = false): void // Reset + Table Update
    // {
    //     $this->show = !$this->show;
    //     $this->resetProp('modalData.changingTheLanguage');
       
    //     $emit && $this->emit('contentScheduleUpdates');
    // }

    // private function getKeys($inputArray)
    // {
    //     return array_values(array_filter($inputArray, function ($value) {
    //         return $value !== null;
    //     }));
    // }

    // private function resetProp(string $path): void
    // {
    //     $keys = explode('.', $path);

    //     if (count($keys) > 1) {
    //         $currentData = $this->{$keys[0]};
    //         $resetedData = $this->{$keys[0] . 'Init'};
    //         $key = $keys[1];

    //         if (is_array($currentData) && array_key_exists($key, $currentData) && is_array($resetedData) && array_key_exists($key, $resetedData)) {
    //             $this->{$keys[0]}[$key] = $this->{$keys[0] . 'Init'}[$key];
    //             return;
    //         }
    //         dd('Check if $path or KEY exists / is correct!');
    //     }
    //     dd('$path' . " don't contain the KEY!");
    // }

    // // public function resetNestedProp(string $path, string $initialDataVariable): void
    // // {
    // //     $keys = explode('.', $path);

    // //     if (count($keys) > 1) {
    // //         $searchedVariable = $keys[0];
    // //         $pathKeys = array_slice($keys, 1);

    // //         if (isset($searchedVariable) && count($pathKeys)) {
    // //             $valueToReset = $this->getValueFromPath($this->{$initialDataVariable}, $pathKeys);

    // //             if ($valueToReset !== 'WRONG_KEY_WAS_USED_FOR_THIS_VARIABLE') {
    // //                 $this->setValueByPath($this->{$searchedVariable}, $pathKeys, $valueToReset);
    // //                 return;
    // //             }
    // //         }
    // //         dd('Wrong $path!');
    // //     }
    // //     dd('Provide $path!');
    // // }

    // // private function getValueFromPath(array $array, array $path)
    // // {
    // //     // The simple way to do this: $this->{$variableName}[$key1][$key2]...[$keyN]
    // //     foreach ($path as $key) {
    // //         if (is_array($array) && array_key_exists($key, $array)) {
    // //             $array = &$array[$key];
    // //         } else {
    // //             return 'WRONG_KEY_WAS_USED_FOR_THIS_VARIABLE';
    // //         }
    // //     }

    // //     return $array;
    // // }

    // // private function setValueByPath(array &$array, array $path, $value)
    // // {
    // //     $currentArray = &$array;
    // //     foreach ($path as $key) {
    // //         $currentArray = &$currentArray[$key];
    // //     }
    // //     $currentArray = $value;
    // // }

    public function render(): View
    {
        return view('livewire.components.services-modal');
    }
}
