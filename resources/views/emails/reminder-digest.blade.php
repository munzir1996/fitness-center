@component('mail::message')
# You have some reminders to follow up. Below are the details

The body of your message
@component('mail::button', ['url' => ''])
|Reminder|Lead name|Phone|
|:-------|:--------|:----|
@foreach ($reminders as $reminder)
|{{$reminder['reminder']}}|{{$reminder['lead']['name']}}|{{$reminder['lead']['phone']}}|
@endforeach
@endcomponent
Thanks,<br>
{{config('app.name')}}
@endcomponent
