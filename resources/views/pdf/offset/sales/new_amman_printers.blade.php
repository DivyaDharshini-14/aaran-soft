!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Printing Sales Inovice DC</title>
    <style type="text/css">
        * {
            font-family: Verdana, Arial, sans-serif, Helvetica, Times;
        }
        table {
            width: 100%;
            border: 1px solid darkgray;
            border-collapse: collapse;
        }
        .table-1{
            border: none;
        }

        .page-break {
            page-break-after: always;
        }
        /* company logo , name and address  */
        .comp-name {
            font-size: 40px;
            font-weight: bold;
            line-height: 1;
            font-family: sans-serif;
        }
        .comp-details {
            font-size: 12px;
            line-height: .5;
            text-align: center;
        }
        .comp-logo {
            position: fixed;
            margin-left: 20px;
        }

        /*  company Invoice header, address, no. and date.    */
        .table-2 {
            border-top: none;
            border-bottom: none;
        }
        .inv-header {
            background-color: dimgray;
            text-align: center;
            color: white;
            font-size: 18px;
            font-weight: bold;
            border-right: none;
        }
        .inv-copy {
            font-size: 15px;
            padding: 0;
            padding-right: 10px;
            text-align: right;
            border-left: none;

        }
        .inv-contactName {
            font-size: 12px;
            font-weight: bold;
            line-height: 1.5;
            padding-left: 20px;
            padding-top: 5px;
            display: block;
        }
        .inv-address .inv-contactAddress{
            font-size: 12px;
            line-height: .3;
            padding-left: 30px;
        }
        .inv-date {
            width: 250px;
            border-left: .5px solid darkgray;
            padding-left: 10px;
            font-weight: bold;
            line-height: .5;
        }
        .inv-date .inv-po {
            font-weight: bold;
            font-size: 12px;
        }

        /* Invoice table data and Total */
        .inv-tableHeader {
            background-color: transparent;
            font-size: 10px;
            line-height: 1.5;
            margin-bottom: 15px;
            border-bottom: 1px solid darkgray;
        }
        /* table data condition one */
        .inv-tableData1 {
            font-size: 11px;
            text-align: justify-all;
            vertical-align: top;
        }
        .inv-tableData1 > td {
            height: 25px;
            padding-left: 5px;
        }
        .inv-tableData1 .items-r {
            text-align: right;
        }
        .inv-tableData1 .items-l {
            text-align: left;

        }
        .inv-tableData1 .items-c {
            text-align: center;
        }

        /* table data condition two  */
        .inv-tableData2 {
            font-size: 11px;
            text-align: justify-all;
            vertical-align: top;
        }
        .inv-tableData2 > td {
            height: 40px;
            padding-left: 5px;
        }
        .inv-tableData2 .items-r {
            text-align: right;
        }
        .inv-tableData2 .items-l, .inv-tableTotal .items-l {
            text-align: left;
        }
        .inv-tableData2 .items-c {
            text-align: center;
        }


        .inv-tableHeader > th, .inv-tableData1 > td, .inv-tableData2 > td, .inv-tableSpace > td {
            border-right: 1px solid darkgray;
        }

        /* spacing */
        .inv-tableSpace {
            line-height: 2.5;
        }

        .inv-tableTotal, .total-r {
            border: 1px solid darkgray;
            font-size: 12px;
            line-height: 1.5;
            text-align: right;
        }

        /* Description and Total table */
        .description-1 {
            font-size: 10px;
            line-height: 1.5;
        }
        .description-2 {
            font-size: 10px;
            font-weight: bold;

        }
        .bankDetails {
            font-size: 10px;
            font-weight: bold;
            padding-left: 5px;
        }
        .total-col-1 {

            font-size: 12px;
            text-align: left;
            border: 1px solid dimgray;
            line-height: 2;
            border-right: none;
            border-top: none;
            padding: 3px;
        }
        .total-col-2 {
            font-size: 12px;
            text-align: right;
            border: 1px solid dimgray;
            line-height: 2;
            border-top: none;
            border-left: none;
        }
        .amount {
            border-top: 1px solid dimgray;
            line-height: 1.5;
        }
        .rupees {
            font-size: 12px;
            padding-left: 3px;
        }

        /* Signature */
        .sign-col1 {
            vertical-align: top;
            height: 65px;
            font-size: 12px;
            padding-left: 5px;
            border-top: 1px solid dimgray;
        }
        .sign-col2 {
            font-size: 12px;
            text-align: center;
        }
        .pageBreak {
            font-size: 10px;
            text-align: center;
            padding-top: 5px;
        }

    </style>
</head>
<body>

{{--Original Copy --}}
{{--/* company logo , name and address  */--}}
    <table class="table-1">
        <tr>
            <td>
                <img src="{{ public_path('/storage/'.$cmp->get('logo'))}}" alt="company logo" width="100px" class="comp-logo"/>
                {{--  if you change the image width,then change the inline width of 3rd col(td - empty div) to be same as well --}}
            </td>
            <td class="comp-details">
                <span class="comp-name">{{$cmp->get('company_name')}}</span>
                <span class="comp-address">
                    <p>{{$cmp->get('address_1')}}, {{$cmp->get('address_2')}}</p>
                    <p>{{$cmp->get('contact')}} - {{$cmp->get('email')}}</p>
                    <p>{{$cmp->get('gstin')}}</p>
                </span>
            </td>
            <td><div style="width: 90px; height: auto;"></div></td> {{-- td - empty div  --}}
        </tr>
    </table>
{{--/*  company Invoice header, address, no. and date.    */--}}
    <table class="table-2">
        <tr class="inv-header">
            <td style="width: 250px"></td>
            <td >INVOICE</td>
            <td style="width: 250px" class="inv-copy">Original copy</td>
        </tr>
        <tr style=>
            <td colspan="2" class="inv-address">
                <span class="inv-contactName">M/s.{{$obj->contact_name}}</span>
                <p class="inv-contactAddress">{{$billing_address->get('address_1')}}</p>
                <p class="inv-contactAddress">{{$billing_address->get('address_2')}}</p>
                <p class="inv-contactAddress">{{$billing_address->get('address_3')}}</p>
                <p class="inv-contactAddress">{{$billing_address->get('gstcell')}}</p>
            </td>
            <td class="inv-date">
                    <p>Invoice no:&nbsp;&nbsp;{{$obj->invoice_no}}</p>
                    <p>Date:&nbsp;&nbsp;{{$obj->invoice_date ?date('d-m-Y', strtotime($obj->invoice_date)):''}}</p>
            </td>
        </tr>
    </table>
{{--  /* Invoice table data and Total */ --}}
    <table class="table-3" width="100%">
        <tr class="inv-tableHeader">
            <th width="4.33%">S.No</th>
            <th width="6.33%">P.No</th>
            <th width="6.33%">Dc.No</th>
            <th width="8.33%">HSN Code</th>
            <th width="auto">Particulars</th>
            <th width="4.33%">Quantity</th>
            <th width="8.33%">Price</th>
            <th width="8.33%">Taxable Amnt</th>
            <th width="4.33%">%</th>
            <th width="16.66">GST</th>
            <th width="16.66">sub Total</th>
        </tr>
        @php
            $gstPercent = 0;
        @endphp
        @foreach($list as $index => $row)
            @if(strlen($row['po_no'])<=8 && strlen($row['product_name']) && strlen($row['description'])<=35)
                <tr class="inv-tableData1">
                    <td class="items-c">{{$index+1}} </td>
                    <td class="items-l">{{$row['po_no']}}</td>
                    <td class="items-c">{{$row['dc_no']}} </td>
                    <td class="items-c">{{$row['hsncode']}}</td>
                    <td class="items-l" style="">
                        @if($row['description'])
                            {{$row['product_name'].' - '.$row['description']}}
                        @else
                            {{$row['product_name']}}
                        @endif
                    </td>
                    <td class="items-c">{{$row['qty']+0}}</td>
                    <td class="items-r">{{number_format($row['price'],2,'.','')}}</td>
                    <td class="items-r">{{number_format($row['qty']*$row['price'],2,'.','')}}</td>
                    <td class="items-c">{{$row['gst_percent']*2}}</td>
                    <td class="items-r">{{number_format($row['gst_amount'],2,'.','')}}</td>
                    <td class="items-r">{{number_format($row['sub_total'],2,'.','')}}</td>
                </tr>
            @else
                <tr class="inv-tableData2">
                    <td class="items-c">{{$index+1}} </td>
                    <td class="items-c">{{$row['hsncode']}}</td>
                    <td class="items-l" style="">
                        @if($row['description'])
                            {{$row['product_name'].' - '.$row['description']}}
                        @else
                            {{$row['product_name']}}
                        @endif
                    </td>
                    <td class="items-c">{{$row['size_name']}}</td>
                    <td class="items-c">{{$row['colour_name']}} </td>
                    <td class="items-c">{{$row['qty']+0}}</td>
                    <td class="items-r">&nbsp;{{number_format($row['price'],2,'.','')}}</td>
                    <td class="items-r">&nbsp;{{number_format($row['qty']*$row['price'],2,'.','')}}</td>
                    <td class="items-c">{{$row['gst_percent']*2}}</td>
                    <td class="items-r">&nbsp;{{number_format($row['gst_amount'],2,'.','')}}</td>
                    <td class="items-r">&nbsp;{{number_format($row['sub_total'],2,'.','')}}</td>
                </tr>
            @endif
            @php
                $gstPercent = $row['gst_percent'];
            @endphp

        @endforeach

        {{-- Spacing  --}}
        @for($i = 0; $i < 9-$list->count(); $i++)
            <tr class="inv-tableSpace">

                <td >&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
        @endfor


        <tr class="inv-tableTotal">
            <td colspan="2" class="items-l">E&OE</td>
            <td colspan="3" class="total-r" style="border-left: none; text-align: right;">Total&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td style="text-align: center" class="total-r">{{$obj->total_qty+0}}</td>
            <td class="total-r"></td>
            <td class="total-r">{{number_format($obj->total_taxable,2,'.','')}}</td>
            <td colspan="2" class="total-r">{{number_format($obj->total_gst,2,'.','')}}</td>
            <td class="total-r">{{number_format($obj->grand_total-$obj->additional,2,'.','')}}</td>
        </tr>

        @if($obj->sales_type==0)
{{--        SGST and CGST Description and total gst and grand total--}}
            <tr>
                <td rowspan="2" colspan="6" class="description-1">
                            <span>We hereby certify that our registration under the GST Act 2017 is in force on
                                the date on which sale of the goods specified in this invoice is made by us
                                and the transaction of sale is covered by this invoice has been effected by
                                us in the regular course of our business. All the Disputes are subject to
                                Tirupur Jurisdiction Only.
                            </span>
                </td>
                <td class="total-col-1" colspan="2">Taxable Value</td>
                <td class="total-col-2" colspan="3">{{number_format($obj->total_taxable,2,'.','')}}</td>
            </tr>
            <tr>
                <td class="total-col-1" colspan="2">CGST&nbsp;@&nbsp;{{$gstPercent}}%</td>
                <td class="total-col-2" colspan="3">{{number_format($obj->total_gst/2,2,'.','')}}</td>
            </tr>
            <tr>
                <td colspan="6" class="description-2">
                    <div>* Goods once sold cannot be return back or exchanged</div>
                    <div>* Seller cannot be responsible for any damage/mistakes.</div>
                </td>
                <td class="total-col-1" colspan="2">SGST&nbsp;@&nbsp;{{$gstPercent}}%</td>
                <td class="total-col-2" colspan="3">{{number_format($obj->total_gst/2,2,'.','')}}</td>
            </tr>
            <tr>
                <td colspan="6"><div></div></td>
                <td class="total-col-1" colspan="2">Total GST</td>
                <td class="total-col-2" colspan="3">{{number_format($obj->total_gst,2,'.','')}}</td>
            </tr>
            <tr>
                <td class="bankDetails" rowspan="2" colspan="3" width="100px">
                    <div>ACCOUNT NO</div>
                    <div>IFSC CODE</div>
                    <div>BANK NAME</div>
                    <div>BRANCH </div>
                </td>
                <td rowspan="2" colspan="3" class="bankDetails">
                    <div>:&nbsp;{{$cmp->get('acc_no')}}</div>
                    <div>:&nbsp;{{$cmp->get('ifsc_code')}}</div>
                    <div>:&nbsp;{{$cmp->get('bank')}}</div>
                    <div>:&nbsp;{{$cmp->get('branch')}}</div>
                </td>
                @if($obj->additional!=0)
                    <td  class="total-col-1" colspan="2">Add&nbsp;:&nbsp;{{ $obj->ledger_name }}
                    </td>
                    <td  class="total-col-2" colspan="3">{{ number_format($obj->additional,2,'.','') }}</td>
                @else
                    <td class="total-col-1" colspan="2">&nbsp;</td>
                    <td  class="total-col-2" colspan="3">&nbsp;</td>
                @endif
            </tr>
            <tr>
                <td class="total-col-1" colspan="2">Round Off</td>
                <td class="total-col-2" colspan="3">{{number_format($obj->round_off,2,'.','')}}</td>
            </tr>
            <tr class="amount">
                <td colspan="6">
                    <div class="rupees">Amount (in words)</div>
                    <div class="rupees"><b>{{$rupees}}Only</b></div>
                </td>
                <td class="total-col-1 total" colspan="2"><b>GRAND TOTAL</b></td>
                <td class="total-col-2 total" colspan="3"><b>{{number_format($obj->grand_total,2,'.','')}}</b></td>
            </tr>
        @else
            <tr>
                <td rowspan="2" colspan="6" class="description-1">
                    <span>We hereby certify that our registration under the GST Act 2017 is in force on
                        the date on which sale of the goods specified in this invoice is made by us
                        and the transaction of sale is covered by this invoice has been effected by
                        us in the regular course of our business. All the Disputes are subject to
                        Tirupur Jurisdiction Only.
                    </span>
                </td>
                <td class="total-col-1" colspan="2">Taxable Value</td>
                <td class="total-col-2" colspan="3">{{number_format($obj->total_taxable,2,'.','')}}</td>
            </tr>
            <tr>
                <td class="total-col-1" colspan="2"><div></div></td>
                <td class="total-col-2" colspan="3"><div></div></td>
            </tr>
            <tr>
                <td colspan="6" class="description-2">
                    <div>* Goods once sold cannot be return back or exchanged</div>
                    <div>* Seller cannot be responsible for any damage/mistakes.</div>
                </td>
                <td class="total-col-1" colspan="2">IGST&nbsp;@&nbsp;{{$gstPercent*2}}%</td>
                <td class="total-col-2" colspan="3">{{number_format($obj->total_gst,2,'.','')}}</td>
            </tr>
            <tr>
                <td colspan="6"><div></div></td>
                <td class="total-col-1" colspan="2">Total GST</td>
                <td class="total-col-2" colspan="3">{{number_format($obj->total_gst,2,'.','')}}</td>
            </tr>
            <tr>
                <td class="bankDetails" rowspan="2" colspan="3" width="100px">
                    <div>ACCOUNT NO</div>
                    <div>IFSC CODE</div>
                    <div>BANK NAME</div>
                    <div>BRANCH </div>
                </td>
                <td rowspan="2" colspan="3" class="bankDetails">
                    <div>:&nbsp;{{$cmp->get('acc_no')}}</div>
                    <div>:&nbsp;{{$cmp->get('ifsc_code')}}</div>
                    <div>:&nbsp;{{$cmp->get('bank')}}</div>
                    <div>:&nbsp;{{$cmp->get('branch')}}</div>
                </td>
                @if($obj->additional!=0)
                    <td  class="total-col-1" colspan="2">Add&nbsp;:&nbsp;{{ $obj->ledger_name }}
                    </td>
                    <td  class="total-col-2" colspan="3">{{ number_format($obj->additional,2,'.','') }}</td>
                @else
                    <td class="total-col-1" colspan="2">&nbsp;</td>
                    <td  class="total-col-2" colspan="3">&nbsp;</td>
                @endif
            </tr>
            <tr>
                <td class="total-col-1" colspan="2">Round Off</td>
                <td class="total-col-2" colspan="3">{{number_format($obj->round_off,2,'.','')}}</td>
            </tr>
            <tr class="amount">
                <td colspan="6">
                    <div class="rupees">Amount (in words)</div>
                    <div class="rupees"><b>{{$rupees}}Only</b></div>
                </td>
                <td class="total-col-1 total" colspan="2"><b>GRAND TOTAL</b></td>
                <td class="total-col-2 total" colspan="3"><b>{{number_format($obj->grand_total,2,'.','')}}</b></td>
            </tr>
        @endif
        <tr >
            <td colspan="7" class="sign-col1"  >Receiver Sign</td>
            <td colspan="4"  class="sign-col2" width="250px"  style="vertical-align: top">for&nbsp;<b>{{$cmp->get('company_name')}}</b></td>
        </tr>
        <tr>
            <td colspan="7"><div></div></td>
            <td colspan="4" class="sign-col2">Authorized Signatory</td>
        </tr>
    </table>
    <div class="pageBreak">This is a Computer generated Invoice</div>

<div class="page-break"></div>

{{-- Duplicate Copy --}}
{{--/* company logo , name and address  */--}}
<table class="table-1">
    <tr>
        <td>
            <img style="position: fixed;margin-left: 20px;padding-top: 5px;height: 100px;width: auto;" src="{{ public_path('/storage/'.$cmp->get('logo'))}}" alt="company logo" width="90px" class="comp-logo"/>
            {{--  if you change the image width,then change the inline width of 3rd col(td - empty div) to be same as well --}}
        </td>
        <td class="comp-details">
            <span class="comp-name">{{$cmp->get('company_name')}}</span>
            <span class="comp-address">
                    <p>{{$cmp->get('address_1')}}, {{$cmp->get('address_2')}}</p>
                    <p>{{$cmp->get('contact')}} - {{$cmp->get('email')}}</p>
                    <p>{{$cmp->get('gstin')}}</p>
                </span>
        </td>
        <td><div style="width: 90px; height: auto;"></div></td> {{-- td - empty div  --}}
    </tr>
</table>
{{--/*  company Invoice header, address, no. and date.    */--}}
<table class="table-2">
    <tr class="inv-header">
        <td style="width: 250px"></td>
        <td >INVOICE</td>
        <td style="width: 250px" class="inv-copy">Duplicate copy</td>
    </tr>
    <tr style=>
        <td colspan="2" class="inv-address">
            <span class="inv-contactName">M/s.{{$obj->contact_name}}</span>
            <p class="inv-contactAddress">{{$billing_address->get('address_1')}}</p>
            <p class="inv-contactAddress">{{$billing_address->get('address_2')}}</p>
            <p class="inv-contactAddress">{{$billing_address->get('address_3')}}</p>
            <p class="inv-contactAddress">{{$billing_address->get('gstcell')}}</p>
        </td>
        <td class="inv-date">
            <p>Invoice no:&nbsp;&nbsp;{{$obj->invoice_no}}</p>
            <p>Date:&nbsp;&nbsp;{{$obj->invoice_date ?date('d-m-Y', strtotime($obj->invoice_date)):''}}</p>
        </td>
    </tr>
</table>
{{--  /* Invoice table data and Total */ --}}
<table class="table-3" width="100%">
    <tr class="inv-tableHeader">
        <th width="4.33%">S.No</th>
        <th width="6.33%">P.No</th>
        <th width="6.33%">Dc.No</th>
        <th width="8.33%">HSN Code</th>
        <th width="auto">Particulars</th>
        <th width="4.33%">Quantity</th>
        <th width="8.33%">Price</th>
        <th width="8.33%">Taxable Amnt</th>
        <th width="4.33%">%</th>
        <th width="16.66">GST</th>
        <th width="16.66">sub Total</th>
    </tr>
    @php
        $gstPercent = 0;
    @endphp
    @foreach($list as $index => $row)
        @if(strlen($row['po_no'])<=8 && strlen($row['product_name']) && strlen($row['description'])<=35)
            <tr class="inv-tableData1">
                <td class="items-c">{{$index+1}} </td>
                <td class="items-l">{{$row['po_no']}}</td>
                <td class="items-c">{{$row['dc_no']}} </td>
                <td class="items-c">{{$row['hsncode']}}</td>
                <td class="items-l" style="">
                    @if($row['description'])
                        {{$row['product_name'].' - '.$row['description']}}
                    @else
                        {{$row['product_name']}}
                    @endif
                </td>
                <td class="items-c">{{$row['qty']+0}}</td>
                <td class="items-r">{{number_format($row['price'],2,'.','')}}</td>
                <td class="items-r">{{number_format($row['qty']*$row['price'],2,'.','')}}</td>
                <td class="items-c">{{$row['gst_percent']*2}}</td>
                <td class="items-r">{{number_format($row['gst_amount'],2,'.','')}}</td>
                <td class="items-r">{{number_format($row['sub_total'],2,'.','')}}</td>
            </tr>
        @else
            <tr class="inv-tableData2">
                <td class="items-c">{{$index+1}} </td>
                <td class="items-c">{{$row['hsncode']}}</td>
                <td class="items-l" style="">
                    @if($row['description'])
                        {{$row['product_name'].' - '.$row['description']}}
                    @else
                        {{$row['product_name']}}
                    @endif
                </td>
                <td class="items-c">{{$row['size_name']}}</td>
                <td class="items-c">{{$row['colour_name']}} </td>
                <td class="items-c">{{$row['qty']+0}}</td>
                <td class="items-r">&nbsp;{{number_format($row['price'],2,'.','')}}</td>
                <td class="items-r">&nbsp;{{number_format($row['qty']*$row['price'],2,'.','')}}</td>
                <td class="items-c">{{$row['gst_percent']*2}}</td>
                <td class="items-r">&nbsp;{{number_format($row['gst_amount'],2,'.','')}}</td>
                <td class="items-r">&nbsp;{{number_format($row['sub_total'],2,'.','')}}</td>
            </tr>
        @endif
        @php
            $gstPercent = $row['gst_percent'];
        @endphp

    @endforeach

    {{-- Spacing  --}}
    @for($i = 0; $i < 9-$list->count(); $i++)
        <tr class="inv-tableSpace">

            <td >&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
    @endfor


    <tr class="inv-tableTotal">
        <td colspan="2" class="items-l">E&OE</td>
        <td colspan="3" class="total-r" style="border-left: none; text-align: right;">Total&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td style="text-align: center" class="total-r">{{$obj->total_qty+0}}</td>
        <td class="total-r"></td>
        <td class="total-r">{{number_format($obj->total_taxable,2,'.','')}}</td>
        <td colspan="2" class="total-r">{{number_format($obj->total_gst,2,'.','')}}</td>
        <td class="total-r">{{number_format($obj->grand_total-$obj->additional,2,'.','')}}</td>
    </tr>

    @if($obj->sales_type==0)
        {{--        SGST and CGST Description and total gst and grand total--}}
        <tr>
            <td rowspan="2" colspan="6" class="description-1">
                            <span>We hereby certify that our registration under the GST Act 2017 is in force on
                                the date on which sale of the goods specified in this invoice is made by us
                                and the transaction of sale is covered by this invoice has been effected by
                                us in the regular course of our business. All the Disputes are subject to
                                Tirupur Jurisdiction Only.
                            </span>
            </td>
            <td class="total-col-1" colspan="2">Taxable Value</td>
            <td class="total-col-2" colspan="3">{{number_format($obj->total_taxable,2,'.','')}}</td>
        </tr>
        <tr>
            <td class="total-col-1" colspan="2">CGST&nbsp;@&nbsp;{{$gstPercent}}%</td>
            <td class="total-col-2" colspan="3">{{number_format($obj->total_gst/2,2,'.','')}}</td>
        </tr>
        <tr>
            <td colspan="6" class="description-2">
                <div>* Goods once sold cannot be return back or exchanged</div>
                <div>* Seller cannot be responsible for any damage/mistakes.</div>
            </td>
            <td class="total-col-1" colspan="2">SGST&nbsp;@&nbsp;{{$gstPercent}}%</td>
            <td class="total-col-2" colspan="3">{{number_format($obj->total_gst/2,2,'.','')}}</td>
        </tr>
        <tr>
            <td colspan="6"><div></div></td>
            <td class="total-col-1" colspan="2">Total GST</td>
            <td class="total-col-2" colspan="3">{{number_format($obj->total_gst,2,'.','')}}</td>
        </tr>
        <tr>
            <td class="bankDetails" rowspan="2" colspan="3" width="100px">
                <div>ACCOUNT NO</div>
                <div>IFSC CODE</div>
                <div>BANK NAME</div>
                <div>BRANCH </div>
            </td>
            <td rowspan="2" colspan="3" class="bankDetails">
                <div>:&nbsp;{{$cmp->get('acc_no')}}</div>
                <div>:&nbsp;{{$cmp->get('ifsc_code')}}</div>
                <div>:&nbsp;{{$cmp->get('bank')}}</div>
                <div>:&nbsp;{{$cmp->get('branch')}}</div>
            </td>
            @if($obj->additional!=0)
                <td  class="total-col-1" colspan="2">Add&nbsp;:&nbsp;{{ $obj->ledger_name }}
                </td>
                <td  class="total-col-2" colspan="3">{{ number_format($obj->additional,2,'.','') }}</td>
            @else
                <td class="total-col-1" colspan="2">&nbsp;</td>
                <td  class="total-col-2" colspan="3">&nbsp;</td>
            @endif
        </tr>
        <tr>
            <td class="total-col-1" colspan="2">Round Off</td>
            <td class="total-col-2" colspan="3">{{number_format($obj->round_off,2,'.','')}}</td>
        </tr>
        <tr class="amount">
            <td colspan="6">
                <div class="rupees">Amount (in words)</div>
                <div class="rupees"><b>{{$rupees}}Only</b></div>
            </td>
            <td class="total-col-1 total" colspan="2"><b>GRAND TOTAL</b></td>
            <td class="total-col-2 total" colspan="3"><b>{{number_format($obj->grand_total,2,'.','')}}</b></td>
        </tr>
    @else
        <tr>
            <td rowspan="2" colspan="6" class="description-1">
                    <span>We hereby certify that our registration under the GST Act 2017 is in force on
                        the date on which sale of the goods specified in this invoice is made by us
                        and the transaction of sale is covered by this invoice has been effected by
                        us in the regular course of our business. All the Disputes are subject to
                        Tirupur Jurisdiction Only.
                    </span>
            </td>
            <td class="total-col-1" colspan="2">Taxable Value</td>
            <td class="total-col-2" colspan="3">{{number_format($obj->total_taxable,2,'.','')}}</td>
        </tr>
        <tr>
            <td class="total-col-1" colspan="2"><div></div></td>
            <td class="total-col-2" colspan="3"><div></div></td>
        </tr>
        <tr>
            <td colspan="6" class="description-2">
                <div>* Goods once sold cannot be return back or exchanged</div>
                <div>* Seller cannot be responsible for any damage/mistakes.</div>
            </td>
            <td class="total-col-1" colspan="2">IGST&nbsp;@&nbsp;{{$gstPercent*2}}%</td>
            <td class="total-col-2" colspan="3">{{number_format($obj->total_gst,2,'.','')}}</td>
        </tr>
        <tr>
            <td colspan="6"><div></div></td>
            <td class="total-col-1" colspan="2">Total GST</td>
            <td class="total-col-2" colspan="3">{{number_format($obj->total_gst,2,'.','')}}</td>
        </tr>
        <tr>
            <td class="bankDetails" rowspan="2" colspan="3" width="100px">
                <div>ACCOUNT NO</div>
                <div>IFSC CODE</div>
                <div>BANK NAME</div>
                <div>BRANCH </div>
            </td>
            <td rowspan="2" colspan="3" class="bankDetails">
                <div>:&nbsp;{{$cmp->get('acc_no')}}</div>
                <div>:&nbsp;{{$cmp->get('ifsc_code')}}</div>
                <div>:&nbsp;{{$cmp->get('bank')}}</div>
                <div>:&nbsp;{{$cmp->get('branch')}}</div>
            </td>
            @if($obj->additional!=0)
                <td  class="total-col-1" colspan="2">Add&nbsp;:&nbsp;{{ $obj->ledger_name }}
                </td>
                <td  class="total-col-2" colspan="3">{{ number_format($obj->additional,2,'.','') }}</td>
            @else
                <td class="total-col-1" colspan="2">&nbsp;</td>
                <td  class="total-col-2" colspan="3">&nbsp;</td>
            @endif
        </tr>
        <tr>
            <td class="total-col-1" colspan="2">Round Off</td>
            <td class="total-col-2" colspan="3">{{number_format($obj->round_off,2,'.','')}}</td>
        </tr>
        <tr class="amount">
            <td colspan="6">
                <div class="rupees">Amount (in words)</div>
                <div class="rupees"><b>{{$rupees}}Only</b></div>
            </td>
            <td class="total-col-1 total" colspan="2"><b>GRAND TOTAL</b></td>
            <td class="total-col-2 total" colspan="3"><b>{{number_format($obj->grand_total,2,'.','')}}</b></td>
        </tr>
    @endif
    <tr >
        <td colspan="7" class="sign-col1"  >Receiver Sign</td>
        <td colspan="4"  class="sign-col2" width="250px"  style="vertical-align: top">for&nbsp;<b>{{$cmp->get('company_name')}}</b></td>
    </tr>
    <tr>
        <td colspan="7"><div></div></td>
        <td colspan="4" class="sign-col2">Authorized Signatory</td>
    </tr>
</table>
<div class="pageBreak">This is a Computer generated Invoice</div>

<div class="page-break"></div>

{{-- Office Copy --}}
{{--/* company logo , name and address  */--}}
<table class="table-1">
    <tr>
        <td>
            <img style="position: fixed;margin-left: 20px;padding-top: 5px;height: 100px;width: auto;" src="{{ public_path('/storage/'.$cmp->get('logo'))}}" alt="company logo" width="90px" class="comp-logo"/>
            {{--  if you change the image width,then change the inline width of 3rd col(td - empty div) to be same as well --}}
        </td>
        <td class="comp-details">
            <span class="comp-name">{{$cmp->get('company_name')}}</span>
            <span class="comp-address">
                    <p>{{$cmp->get('address_1')}}, {{$cmp->get('address_2')}}</p>
                    <p>{{$cmp->get('contact')}} - {{$cmp->get('email')}}</p>
                    <p>{{$cmp->get('gstin')}}</p>
                </span>
        </td>
        <td><div style="width: 90px; height: auto;"></div></td> {{-- td - empty div  --}}
    </tr>
</table>
{{--/*  company Invoice header, address, no. and date.    */--}}
<table class="table-2">
    <tr class="inv-header">
        <td style="width: 250px"></td>
        <td >INVOICE</td>
        <td style="width: 250px" class="inv-copy">Office copy</td>
    </tr>
    <tr style=>
        <td colspan="2" class="inv-address">
            <span class="inv-contactName">M/s.{{$obj->contact_name}}</span>
            <p class="inv-contactAddress">{{$billing_address->get('address_1')}}</p>
            <p class="inv-contactAddress">{{$billing_address->get('address_2')}}</p>
            <p class="inv-contactAddress">{{$billing_address->get('address_3')}}</p>
            <p class="inv-contactAddress">{{$billing_address->get('gstcell')}}</p>
        </td>
        <td class="inv-date">
            <p>Invoice no:&nbsp;&nbsp;{{$obj->invoice_no}}</p>
            <p>Date:&nbsp;&nbsp;{{$obj->invoice_date ?date('d-m-Y', strtotime($obj->invoice_date)):''}}</p>
        </td>
    </tr>
</table>
{{--  /* Invoice table data and Total */ --}}
<table class="table-3" width="100%">
    <tr class="inv-tableHeader">
        <th width="4.33%">S.No</th>
        <th width="6.33%">P.No</th>
        <th width="6.33%">Dc.No</th>
        <th width="8.33%">HSN Code</th>
        <th width="auto">Particulars</th>
        <th width="4.33%">Quantity</th>
        <th width="8.33%">Price</th>
        <th width="8.33%">Taxable Amnt</th>
        <th width="4.33%">%</th>
        <th width="16.66">GST</th>
        <th width="16.66">sub Total</th>
    </tr>
    @php
        $gstPercent = 0;
    @endphp
    @foreach($list as $index => $row)
        @if(strlen($row['po_no'])<=8 && strlen($row['product_name']) && strlen($row['description'])<=35)
            <tr class="inv-tableData1">
                <td class="items-c">{{$index+1}} </td>
                <td class="items-l">{{$row['po_no']}}</td>
                <td class="items-c">{{$row['dc_no']}} </td>
                <td class="items-c">{{$row['hsncode']}}</td>
                <td class="items-l" style="">
                    @if($row['description'])
                        {{$row['product_name'].' - '.$row['description']}}
                    @else
                        {{$row['product_name']}}
                    @endif
                </td>
                <td class="items-c">{{$row['qty']+0}}</td>
                <td class="items-r">{{number_format($row['price'],2,'.','')}}</td>
                <td class="items-r">{{number_format($row['qty']*$row['price'],2,'.','')}}</td>
                <td class="items-c">{{$row['gst_percent']*2}}</td>
                <td class="items-r">{{number_format($row['gst_amount'],2,'.','')}}</td>
                <td class="items-r">{{number_format($row['sub_total'],2,'.','')}}</td>
            </tr>
        @else
            <tr class="inv-tableData2">
                <td class="items-c">{{$index+1}} </td>
                <td class="items-c">{{$row['hsncode']}}</td>
                <td class="items-l" style="">
                    @if($row['description'])
                        {{$row['product_name'].' - '.$row['description']}}
                    @else
                        {{$row['product_name']}}
                    @endif
                </td>
                <td class="items-c">{{$row['size_name']}}</td>
                <td class="items-c">{{$row['colour_name']}} </td>
                <td class="items-c">{{$row['qty']+0}}</td>
                <td class="items-r">&nbsp;{{number_format($row['price'],2,'.','')}}</td>
                <td class="items-r">&nbsp;{{number_format($row['qty']*$row['price'],2,'.','')}}</td>
                <td class="items-c">{{$row['gst_percent']*2}}</td>
                <td class="items-r">&nbsp;{{number_format($row['gst_amount'],2,'.','')}}</td>
                <td class="items-r">&nbsp;{{number_format($row['sub_total'],2,'.','')}}</td>
            </tr>
        @endif
        @php
            $gstPercent = $row['gst_percent'];
        @endphp

    @endforeach

    {{-- Spacing  --}}
    @for($i = 0; $i < 9-$list->count(); $i++)
        <tr class="inv-tableSpace">

            <td >&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
    @endfor


    <tr class="inv-tableTotal">
        <td colspan="2" class="items-l">E&OE</td>
        <td colspan="3" class="total-r" style="border-left: none; text-align: right;">Total&nbsp;&nbsp;&nbsp;&nbsp;</td>
        <td style="text-align: center" class="total-r">{{$obj->total_qty+0}}</td>
        <td class="total-r"></td>
        <td class="total-r">{{number_format($obj->total_taxable,2,'.','')}}</td>
        <td colspan="2" class="total-r">{{number_format($obj->total_gst,2,'.','')}}</td>
        <td class="total-r">{{number_format($obj->grand_total-$obj->additional,2,'.','')}}</td>
    </tr>

    @if($obj->sales_type==0)
        {{--        SGST and CGST Description and total gst and grand total--}}
        <tr>
            <td rowspan="2" colspan="6" class="description-1">
                            <span>We hereby certify that our registration under the GST Act 2017 is in force on
                                the date on which sale of the goods specified in this invoice is made by us
                                and the transaction of sale is covered by this invoice has been effected by
                                us in the regular course of our business. All the Disputes are subject to
                                Tirupur Jurisdiction Only.
                            </span>
            </td>
            <td class="total-col-1" colspan="2">Taxable Value</td>
            <td class="total-col-2" colspan="3">{{number_format($obj->total_taxable,2,'.','')}}</td>
        </tr>
        <tr>
            <td class="total-col-1" colspan="2">CGST&nbsp;@&nbsp;{{$gstPercent}}%</td>
            <td class="total-col-2" colspan="3">{{number_format($obj->total_gst/2,2,'.','')}}</td>
        </tr>
        <tr>
            <td colspan="6" class="description-2">
                <div>* Goods once sold cannot be return back or exchanged</div>
                <div>* Seller cannot be responsible for any damage/mistakes.</div>
            </td>
            <td class="total-col-1" colspan="2">SGST&nbsp;@&nbsp;{{$gstPercent}}%</td>
            <td class="total-col-2" colspan="3">{{number_format($obj->total_gst/2,2,'.','')}}</td>
        </tr>
        <tr>
            <td colspan="6"><div></div></td>
            <td class="total-col-1" colspan="2">Total GST</td>
            <td class="total-col-2" colspan="3">{{number_format($obj->total_gst,2,'.','')}}</td>
        </tr>
        <tr>
            <td class="bankDetails" rowspan="2" colspan="3" width="100px">
                <div>ACCOUNT NO</div>
                <div>IFSC CODE</div>
                <div>BANK NAME</div>
                <div>BRANCH </div>
            </td>
            <td rowspan="2" colspan="3" class="bankDetails">
                <div>:&nbsp;{{$cmp->get('acc_no')}}</div>
                <div>:&nbsp;{{$cmp->get('ifsc_code')}}</div>
                <div>:&nbsp;{{$cmp->get('bank')}}</div>
                <div>:&nbsp;{{$cmp->get('branch')}}</div>
            </td>
            @if($obj->additional!=0)
                <td  class="total-col-1" colspan="2">Add&nbsp;:&nbsp;{{ $obj->ledger_name }}
                </td>
                <td  class="total-col-2" colspan="3">{{ number_format($obj->additional,2,'.','') }}</td>
            @else
                <td class="total-col-1" colspan="2">&nbsp;</td>
                <td  class="total-col-2" colspan="3">&nbsp;</td>
            @endif
        </tr>
        <tr>
            <td class="total-col-1" colspan="2">Round Off</td>
            <td class="total-col-2" colspan="3">{{number_format($obj->round_off,2,'.','')}}</td>
        </tr>
        <tr class="amount">
            <td colspan="6">
                <div class="rupees">Amount (in words)</div>
                <div class="rupees"><b>{{$rupees}}Only</b></div>
            </td>
            <td class="total-col-1 total" colspan="2"><b>GRAND TOTAL</b></td>
            <td class="total-col-2 total" colspan="3"><b>{{number_format($obj->grand_total,2,'.','')}}</b></td>
        </tr>
    @else
        <tr>
            <td rowspan="2" colspan="6" class="description-1">
                    <span>We hereby certify that our registration under the GST Act 2017 is in force on
                        the date on which sale of the goods specified in this invoice is made by us
                        and the transaction of sale is covered by this invoice has been effected by
                        us in the regular course of our business. All the Disputes are subject to
                        Tirupur Jurisdiction Only.
                    </span>
            </td>
            <td class="total-col-1" colspan="2">Taxable Value</td>
            <td class="total-col-2" colspan="3">{{number_format($obj->total_taxable,2,'.','')}}</td>
        </tr>
        <tr>
            <td class="total-col-1" colspan="2"><div></div></td>
            <td class="total-col-2" colspan="3"><div></div></td>
        </tr>
        <tr>
            <td colspan="6" class="description-2">
                <div>* Goods once sold cannot be return back or exchanged</div>
                <div>* Seller cannot be responsible for any damage/mistakes.</div>
            </td>
            <td class="total-col-1" colspan="2">IGST&nbsp;@&nbsp;{{$gstPercent*2}}%</td>
            <td class="total-col-2" colspan="3">{{number_format($obj->total_gst,2,'.','')}}</td>
        </tr>
        <tr>
            <td colspan="6"><div></div></td>
            <td class="total-col-1" colspan="2">Total GST</td>
            <td class="total-col-2" colspan="3">{{number_format($obj->total_gst,2,'.','')}}</td>
        </tr>
        <tr>
            <td class="bankDetails" rowspan="2" colspan="3" width="100px">
                <div>ACCOUNT NO</div>
                <div>IFSC CODE</div>
                <div>BANK NAME</div>
                <div>BRANCH </div>
            </td>
            <td rowspan="2" colspan="3" class="bankDetails">
                <div>:&nbsp;{{$cmp->get('acc_no')}}</div>
                <div>:&nbsp;{{$cmp->get('ifsc_code')}}</div>
                <div>:&nbsp;{{$cmp->get('bank')}}</div>
                <div>:&nbsp;{{$cmp->get('branch')}}</div>
            </td>
            @if($obj->additional!=0)
                <td  class="total-col-1" colspan="2">Add&nbsp;:&nbsp;{{ $obj->ledger_name }}
                </td>
                <td  class="total-col-2" colspan="3">{{ number_format($obj->additional,2,'.','') }}</td>
            @else
                <td class="total-col-1" colspan="2">&nbsp;</td>
                <td  class="total-col-2" colspan="3">&nbsp;</td>
            @endif
        </tr>
        <tr>
            <td class="total-col-1" colspan="2">Round Off</td>
            <td class="total-col-2" colspan="3">{{number_format($obj->round_off,2,'.','')}}</td>
        </tr>
        <tr class="amount">
            <td colspan="6">
                <div class="rupees">Amount (in words)</div>
                <div class="rupees"><b>{{$rupees}}Only</b></div>
            </td>
            <td class="total-col-1 total" colspan="2"><b>GRAND TOTAL</b></td>
            <td class="total-col-2 total" colspan="3"><b>{{number_format($obj->grand_total,2,'.','')}}</b></td>
        </tr>
    @endif
    <tr >
        <td colspan="7" class="sign-col1"  >Receiver Sign</td>
        <td colspan="4"  class="sign-col2" width="250px"  style="vertical-align: top">for&nbsp;<b>{{$cmp->get('company_name')}}</b></td>
    </tr>
    <tr>
        <td colspan="7"><div></div></td>
        <td colspan="4" class="sign-col2">Authorized Signatory</td>
    </tr>
</table>
<div class="pageBreak">This is a Computer generated Invoice</div>
</body>
</html>
