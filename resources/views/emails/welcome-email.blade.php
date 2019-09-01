@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => ''])
WELCOME USER 
@endcomponent

Thanks,<br>
{{ config('INSTAGRAM') }}
@endcomponent


