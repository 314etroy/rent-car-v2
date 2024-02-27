<div>
    <x-modal>
        @if (!empty($modalProps))
            <x-slot name="modalHeader">
                <h5 class="modal-title" id="exampleModalLabel">
                    {{ !empty($modalProps['id']) ? 'Row ' . $modalProps['id'] . ' - ' : '' }}
                    @if ($modalProps['operation'] === getConstant('operation.0'))
                        <span>Create</span>
                    @endif
                    @if ($modalProps['operation'] === getConstant('operation.2'))
                        <span>Update</span>
                    @endif
                    @if ($modalProps['operation'] === getConstant('operation.3'))
                        <span>Delete</span>
                    @endif

                    <span> {{ ucfirst(config('constants.itemSingleType.' . $modalProps['itemType'])) }}</span>

                    @if (!empty($modalProps['selectedLanguage']) || $modalProps['operation'] === getConstant('operation.3'))
                        <span> - </span>
                    @endif

                    {{ !empty($modalProps['selectedLanguage']) ? strtoupper($modalProps['selectedLanguage'] ?? '') : ucfirst($modalProps['title'] ?? '') }}
                </h5>
            </x-slot>

            <x-slot name="modalBody">
                @if (empty($modalProps['selectedLanguage']) && $modalProps['operation'] !== getConstant('operation.3'))
                    @if (empty($modalData['selectedLanguage']))
                        <span>Selected a language: </span>
                    @else
                        <span>Select a language to access article fields:</span>
                    @endif
                    <select class="form-select" aria-label="Chose a language" wire:model="modalData.selectedFormLanguage"
                        style="width: 100%;">
                        <option value="" selected>Chose a language</option>
                        @foreach (config('app.supported_languages') as $key => $value)
                            <option value="{{ $key }}">{{ ucfirst($value) }}</option>
                        @endforeach
                    </select>
                @endif

                @if (
                    $modalProps['operation'] === getConstant('operation.0') ||
                        $modalProps['operation'] === getConstant('operation.2'))
                    <div class="row">
                        @if (empty($modalProps['selectedLanguage']))
                            <div class="col-12">
                                @forelse ($modalData['rightFormFields'] ?? [] as $key => $value)
                                    @include('gen_blog_core.common.inputSwitch', [
                                        'key' => $key,
                                        'type' => $value['type'] ?? '',
                                        'value' => $value['value'] ?? '',
                                        'allOptions' => isset($value['allOptions']) ? $value['allOptions'] : null,
                                        'whatToUse' => 'modalData.rightFormFields',
                                        'disableFormFilds' => empty($modalData['selectedFormLanguage']),
                                    ])
                                @empty
                                    <span>Form fields are not defined, contact us.</span>
                                @endforelse
                            </div>
                        @else
                            <div class="col-6">
                                <div>
                                    @if (!empty($modalData['changingTheLanguage']))
                                        <span>Change data selecting a language:</span>
                                    @else
                                        <span>Select a language to access article fields:</span>
                                    @endif
                                    <div class="d-flex justify-content-between">
                                        <select class="form-select w-100" aria-label="Chose a language"
                                            wire:model="modalData.changingTheLanguage">
                                            <option value="" selected>Chose a language</option>
                                            @foreach ($modalData['leftLanguages'] as $key => $value)
                                                <option value="{{ $key }}">{{ ucfirst($value) }}</option>
                                            @endforeach
                                        </select>
                                        @if (!empty($modalData['changingTheLanguage']))
                                            <button wire:click="useThisData" class="col-3 ml-2 btn btn-primary">Use
                                                This</button>
                                        @endif
                                    </div>
                                </div>
                                @forelse ($modalData['leftFormFields'] ?? [] as $key => $value)
                                    @include('gen_blog_core.common.inputSwitch', [
                                        'key' => $key,
                                        'type' => $value['type'] ?? '',
                                        'value' => $value['value'] ?? '',
                                        'allOptions' => isset($value['allOptions']) ? $value['allOptions'] : null,
                                        'whatToUse' => 'modalData.leftFormFields',
                                        'disableFormFilds' => true,
                                    ])
                                @empty
                                    <span>Form fields are not defined, contact us.</span>
                                @endforelse
                            </div>
                            <div class="col-6">
                                <span>&nbsp;</span>
                                <div class="form-select ">
                                    <button wire:click="clearRightForm" class="col-12 btn btn-success">Clear Right
                                        Form</button>
                                </div>

                                @forelse ($modalData['rightFormFields'] ?? [] as $key => $value)
                                    @include('gen_blog_core.common.inputSwitch', [
                                        'key' => $key,
                                        'type' => $value['type'] ?? '',
                                        'value' => $value['value'] ?? '',
                                        'allOptions' => isset($value['allOptions']) ? $value['allOptions'] : null,
                                        'whatToUse' => 'modalData.rightFormFields',
                                        'disableFormFilds' => false,
                                    ])
                                @empty
                                    <span>Form fields are not defined, contact us.</span>
                                @endforelse
                            </div>
                        @endif
                    </div>
                @endif

                @if ($modalProps['operation'] === getConstant('operation.3'))
                    <div class="form-group">
                        <p for="recipient-1" class="col-form-label">You are sure you want to delete all
                            <b>{{ ucfirst(getConstant('itemType.' . $modalProps['itemType'])) }}</b> translations?
                        </p>
                    </div>
                @endif
            </x-slot>

            <x-slot name="modalFooter">
                @if ($modalProps['operation'] === getConstant('operation.0'))
                    <button type="button" class="btn btn-primary" {{ false && 'disabled' }}
                        wire:click="create()">Create</button>
                @endif
                @if ($modalProps['operation'] === getConstant('operation.2'))
                    <button type="button" class="btn btn-primary" wire:click="update()">Update</button>
                @endif
                @if ($modalProps['operation'] === getConstant('operation.3'))
                    <button type="button" class="btn btn-danger" wire:click="delete()">Delete</button>
                @endif
            </x-slot>
        @endif
    </x-modal>
</div>

{{-- TO PUT THIS SCRIPT IN A ASSET->JS->FILE --}}
@push('js')
    <script>
        document.addEventListener('livewire:load', function() {
            Livewire.on('initModalPlugins', function() {
                handleDestroyPluginsMethods(true);
                // setTimeout(() => {
                //     handleShowPlguinsFields();
                // }, 50);
            })
        })

        // const handleShowPlguinsFields = () => {
        //     // Replace all select elements with class 'input-switch-select' with selectize instances
        //     $(".input-switch-select").selectize({
        //         plugins: ["remove_button", "autofill_disable"],
        //         delimiter: ",",
        //         persist: false,
        //         showAddOptionOnCreate: false,
        //     });

        //     // Replace all textarea elements with class 'ckeditor4-content' with CKEditor instances
        //     $(".ckeditor4-content").each(function() {
        //         CKEDITOR.replace(this);
        //     })
        // }

        const handleDestroyPluginsMethods = (reset) => {
            // // Destroy all selectize instances
            // $('.input-switch-select').each(function() {
            //     this.selectize && this.selectize.destroy();
            // })

            // // Destroy all CKEditor instances
            // $(Object.values(CKEDITOR.instances)).each(function() {
            //     this.destroy();
            // })

            // // Remove all CKEditor instance references
            // CKEDITOR.instances = {};

            if (!reset) {
                // Remove all modal instance references
                Livewire.emit('resetModalFields')
            }
        }

        const handleClick = () => handleDestroyPluginsMethods()

        document.addEventListener("click", function(e) {
            let t = document.querySelectorAll("#click-away");
            // Find the element by its inline styles (or any other selector)

            // Get the element with the class "modal-container"
            const modalContainer = document.querySelector('.modal-container');

            // Get the computed style of the element
            const computedStyle = window.getComputedStyle(modalContainer);

            for (let i = 0; i < t.length; i++) {
                if (!t[i].contains(e.target) && computedStyle.display !== 'none') {
                    handleDestroyPluginsMethods()
                }
            }

            // const domElement = 'div[style="position: absolute; width: 0px; height: 0px; overflow: hidden;"]';

            // Loop through the elements and remove them from the DOM
            // removeAutoGeneratedPluginInstances(domElement)

            // Loop through the elements and remove them from the DOM
            // removeAutoGeneratedPluginInstances('#cke_content_label')
        });

        // const removeAutoGeneratedPluginInstances = (elem) => {
        //     document.querySelectorAll(elem).forEach(function(element) {
        //         element.parentNode.removeChild(element);
        //     });
        // }
    </script>
@endpush
