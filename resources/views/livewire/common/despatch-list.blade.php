<div>
    <x-slot name="header">Despatch</x-slot>

    <x-forms.m-panel>

        <!-- Top Controls --------------------------------------------------------------------------------------------->
        <x-forms.top-controls :show-filters="$showFilters"/>

        <!-- Header --------------------------------------------------------------------------------------------------->
        <x-forms.table :list="$list">
            <x-slot name="table_header">
                <x-table.header-serial wire:click.prevent="sortBy('vname')"/>
                <x-table.header-text wire:click.prevent="sortBy('vname')" center>Despatch No</x-table.header-text>
                <x-table.header-text wire:click.prevent="sortBy('vname')" center>Despatch</x-table.header-text>
                <x-table.header-action/>
            </x-slot>

            <!-- Table Body ------------------------------------------------------------------------------------------->
            <x-slot name="table_body">
                @forelse ($list as $index =>  $row)

                    <x-table.row>
                        <x-table.cell-text center>
                            {{ $index + 1 }}
                        </x-table.cell-text>

                        <x-table.cell-text>
                            {{ $row->vname}}
                        </x-table.cell-text>

                        <x-table.cell-text>
                            {{ $row->vdate}}
                        </x-table.cell-text>

                        <x-table.cell-action id="{{$row->id}}"/>
                    </x-table.row>

                @empty
                    <x-table.empty/>
                @endforelse
            </x-slot>

            <x-slot name="table_pagination">
                {{ $list->links() }}
            </x-slot>
        </x-forms.table>

        <x-modal.delete/>

        <!-- Create/ Edit Popup --------------------------------------------------------------------------------------->
        <x-forms.create :id="$vid">
            <div class="flex flex-col gap-3">
                <x-input.model-text wire:model="vname" :label="'Despatch No'"/>
                @error('vname')
                <span class="text-red-500">{{  $message }}</span>
                @enderror
                <x-input.model-date wire:model="vdate" :label="'Despatch date'"/>
            </div>
        </x-forms.create>

    </x-forms.m-panel>
</div>
