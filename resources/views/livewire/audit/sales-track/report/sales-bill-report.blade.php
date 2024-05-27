<div>
    <x-slot name="header">Sales Bill Report</x-slot>
{{--        @if($this->track_id)--}}

{{--            {{dd($list)}}--}}
{{--        @endif--}}


    <x-forms.m-panel>

        <div class="flex justify-between gap-5 w-full">
            <div class="w-full">
                <x-input.model-select wire:model.live="salesTrack_id" wire:change="getList" :label="'Track'">
                    <option>Choose....</option>
                    @foreach($salesTracks as $salesTrack)
                        <option value="{{$salesTrack->id}}">
                            {{ $salesTrack->vname }}
                        </option>
                    @endforeach
                </x-input.model-select>
            </div>

            <div class="w-full">
                <x-input.model-select wire:model.live="track_id" wire:change="getList" :label="'Track'">
                    <option>Choose....</option>
                    @foreach($tracks as $track)
                        <option value="{{$track->id}}">
                            {{$track->salesTrack->vname.' - '.\App\Enums\Months::tryFrom($track->smonth->month)->getName().'-'.$track->smonth->year }}
                        </option>
                    @endforeach
                </x-input.model-select>
            </div>

            <div class="w-full">
                <x-input.model-select wire:model.live="trackItem_id" wire:change="getList" :label="'Sales From'">
                    <option>Choose....</option>
                    @foreach($trackItems as $item)
                        <option value="{{$item->id}}">{{$item->client->vname}}</option>
                    @endforeach
                </x-input.model-select>
            </div>

            <x-input.model-date wire:model.live="start_date" :label="'From'"/>

            <x-input.model-date wire:model.live="end_date" :label="'To'"/>

        </div>

        <x-forms.table>
            <x-slot name="table_header">
                <x-table.header-text center>Invoice No</x-table.header-text>
                <x-table.header-text left>Invoice Date</x-table.header-text>
                <x-table.header-text center>Bill To</x-table.header-text>
                <x-table.header-text center>Product</x-table.header-text>
                <x-table.header-text center>Description</x-table.header-text>
                <x-table.header-text center>Colour</x-table.header-text>
                <x-table.header-text center>Hsn Code</x-table.header-text>
                <x-table.header-text center>Qty</x-table.header-text>
                <x-table.header-text center>Price</x-table.header-text>
                <x-table.header-text>Taxable Value</x-table.header-text>
                <x-table.header-text>Tax Value</x-table.header-text>
                <x-table.header-text>Grand Total</x-table.header-text>
            </x-slot>

            <x-slot name="table_body">

                <tr>
                    <x-table.cell-text colspan="13" class="h-[0.1rem] text-xs">
                        &nbsp;
                    </x-table.cell-text>
                </tr>

                @forelse ($list as $index =>  $row)

                    <tr class="bg-lime-100">

                        <x-table.cell-text center>
                            <div>
                                {{ \Aaran\Audit\Models\Client::getName($row->sales_from) ?? '' }}
                            </div>
                        </x-table.cell-text>

                        <x-table.cell-text right colspan="10">
                            &nbsp;
                        </x-table.cell-text>

                        <x-table.cell-text right>
                            @forelse($trackReport as $trackreport)
                                {{$row->id.$trackreport->sales_bill_id}}
                            <input type="checkbox" @if($row->vno===$trackreport->vno && $row->sales_from===$trackreport->client_id)  checked @endif class="text-green-600">
                                @empty
                            <input wire:click="getChecked({{$row->id}})"   type="checkbox" class="text-green-600">
                            @endforelse
                        </x-table.cell-text>

                    </tr>

                    <tr>

                        <x-table.cell-text center>
                            <div class="text-purple-500 font-semibold text-lg">
                            {{ $row->vno }}
                            </div>
                        </x-table.cell-text>

                        <x-table.cell-text center>
                            <div class="text-purple-500 font-semibold text-lg">
                            {{date('d-m-Y', strtotime($row->vdate))}}
                            </div>
                        </x-table.cell-text>

                        <x-table.cell-text center>
                            <div class="text-purple-500 font-semibold text-lg">
                            {{ $row->client->vname ??'' }}
                            </div>
                        </x-table.cell-text>

                        <x-table.cell-text center colspan="4">
                            &nbsp;
                        </x-table.cell-text>

                        <x-table.cell-text center>
                            <div class="text-purple-500 font-semibold text-lg">
                            {{ $row->total_qty }}
                            </div>
                        </x-table.cell-text>

                        <x-table.cell-text center>
                            &nbsp;
                        </x-table.cell-text>

                        <x-table.cell-text right>
                            <div class="text-purple-500 font-semibold text-lg">
                            {{ $row->taxable+0 }}
                            </div>
                        </x-table.cell-text>

                        <x-table.cell-text right>
                            <div class="text-purple-500 font-semibold text-lg">
                            {{ $row->gst+0 }}
                            </div>
                        </x-table.cell-text>

                        <x-table.cell-text right>
                            <div class="text-purple-500 font-semibold text-lg">
                            {{ $row->grand_total+0 }}
                            </div>
                        </x-table.cell-text>


                        @forelse ($salesBillitem as $index =>  $items)

                            @if($row->vno === $items->vno)
                                <x-table.row>
                                    <x-table.cell-text colspan="3">
                                        &nbsp;
                                    </x-table.cell-text>


                                    <x-table.cell-text center>
                                        {{ $items->product->vname??'' }}
                                    </x-table.cell-text>

                                    <x-table.cell-text center>
                                        <div class="text-gray-500 text-sm">
                                        {{ $items->description }}
                                        </div>
                                    </x-table.cell-text>

                                    <x-table.cell-text center>
                                        {{ $items->colour->vname }}
                                    </x-table.cell-text>

                                    <x-table.cell-text center>
                                        {{ $items->hsncode->vname }}
                                    </x-table.cell-text>

                                    <x-table.cell-text center>
                                        {{ $items->qty+0 }}
                                    </x-table.cell-text>

                                    <x-table.cell-text center>
                                        {{ $items->price+0 }}
                                    </x-table.cell-text>

                                    <x-table.cell-text right>
                                        {{ $items->qty*$items->price }}
                                    </x-table.cell-text>

                                    <x-table.cell-text right>
                                        {{ $items->qty * $items->price * $items->product->gst_percent/100 }}
                                    </x-table.cell-text>

                                    {{--                                <x-table.cell-text right>--}}
                                    {{--                                    {{ $items->qty * $items->price+($items->qty * $items->price * $items->product->gst_percent/100) }}--}}
                                    {{--                                </x-table.cell-text>--}}
                                </x-table.row>
                            @endif
                        @empty
                        @endforelse

                    </tr>
                @empty
                    <x-table.empty/>
                @endforelse


            </x-slot>

        </x-forms.table>

    </x-forms.m-panel>
</div>