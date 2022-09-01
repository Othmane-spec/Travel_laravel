@component('mail::message')
    # Contact Us

    The body of your message.

    @component('mail::button', ['url' => 'http://127.0.0.1:8000/contact'])
        Visit Contact
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
