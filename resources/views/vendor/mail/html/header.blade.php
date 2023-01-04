<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo">
@else
{{-- $slot --}}
<img src="{{ asset('/storage/settings/'.get_setting_field('logo')) }}" class="logo" alt="{{ get_setting_field('company') }}">
<br>
{{ get_setting_field('company') }}
@endif
</a>
</td>
</tr>
