@component('mail::message')
# Hi {{$invitation->name}},

{{$invitation->message}}

@component('mail::button', ['url' => route('invitation.accept',['id' => base64url_encode($invitation->id)])])
Accept Invitation
@endcomponent

Thanks,<br>
{{ get_setting_field('company') }}
@endcomponent
