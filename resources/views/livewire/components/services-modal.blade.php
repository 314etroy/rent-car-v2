<div>
    <x-generic-modal>
        <x-slot name="modalHeader">
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                Editeaza serviciu:
            </h3>
        </x-slot>

        <x-slot name="modalBody">
            <div class="p-6">
                <label for="title-edit-additionalServices-label">
                    <span>
                        Title
                    </span>

                </label>
                <input type="text" id="title-edit-additionalServices-label" name="title-edit-additionalServices"
                    placeholder="Adauga titlu" wire:model.live="rawData.service.title"
                    class="w-full text-gray-700 border border-slate-200 rounded py-3 px-4 mb-4 leading-tight focus:outline-none">
                <label for="description-edit-additionalServices-label">
                    <span>
                        Description
                    </span>

                </label>

                <textarea id="description-edit-additionalServices-label" name="description-edit-additionalServices" rows="5"
                    placeholder="Adauga o descriere" wire:model.live="rawData.service.description"
                    class="w-full text-gray-700 border border-slate-200 rounded py-3 px-4 mb-4 leading-tight focus:outline-none"></textarea>
                <label for="price-edit-additionalServices-label">
                    <span>
                        Price
                    </span>

                </label>
                <input type="text" id="price-edit-additionalServices-label" name="price-edit-additionalServices"
                    placeholder="Adauga pret" wire:model.live="rawData.service.price"
                    class="w-full text-gray-700 border border-slate-200 rounded py-3 px-4 mb-4 leading-tight focus:outline-none">
            </div>
        </x-slot>

        <x-slot name="modalFooter">
            <div
                class="flex justify-end items-center p-6 space-x-3 rtl:space-x-reverse border-t border-gray-200 rounded-b dark:border-gray-600">
                <button
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Editeaza</button>
            </div>
        </x-slot>
    </x-generic-modal>
</div>
