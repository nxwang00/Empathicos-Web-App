@component('mail::message')
# Hi {{ config('app.name') }},

# Hare are the contact details:
Name: {{$contact->name}} <br>
Email: {{$contact->email}} <br>
Message: {{$contact->message}} <br>

Thanks,<br>
{{ get_setting_field('company') }}
@endcomponent
