@component('mail::message')
# Hi {{Auth::user()->name}},

Thank You For Your Order! 

@php

@endphp

@component('mail::table')
| Product       | Price         | Quantity   | Subtotal  |
| ------------- |:-------------:|:----------:|----------:|
@foreach($items as $key => $value)
| {{$value->name}} | ${{ number_format($value->price,2) }} | {{$value->quantity}} |  ${{number_format($value->price * $value->quantity,2)}} |
@endforeach
|    |    |            Subtotal| ${{ number_format($payment->total,2)}}	     |
|    |    |            Shipping| ${{ number_format($payment->shipping,2)}}   |
|    |    |         Grand Total| ${{ number_format($payment->grand_total,2)}}|
@endcomponent

Thanks,<br>
{{ get_setting_field('company') }}
@endcomponent
