<div>
  <x-section title="{{ __('messages.Stagelaravel') }}">
    <x-lesson-section :items="[
      ['text' => __('messages.Whatlaravel'), 'route' => route('index')],
      ['text' => __('messages.Settinglaravel'), 'route' => route('index')],
      ['text' => __('messages.Understandinglaravel'), 'route' => route('index')],
      ['text' => __('messages.Handlinglaravel'), 'route' => route('index')],
      ['text' => __('messages.Createlaravel'), 'route' => route('index')],
      ['text' => __('messages.Usinglaravel'), 'route' => route('index')],
    ]"/>
  </x-section>

  <x-section title="{{ __('messages.Stagelarvel') }}">
    <x-lesson-section :items="[
      ['text' => __('messages.ORMlaravel'), 'route' => route('index')],
      ['text' => __('messages.AuthenticationLARAVEL'), 'route' => route('index')],
      ['text' => __('messages.registrationlaravel'), 'route' => route('index')],
      ['text' => __('messages.Filelaravel'), 'route' => route('index')],
      ['text' => __('messages.Sendinglaravel'), 'route' => route('index')],
    ]"/>
  </x-section>

  <x-section title="{{ __('messages.Advancedlaravel') }}">
    <x-lesson-section :items="[
      ['text' => __('messages.RESTfullaravel'), 'route' => route('index')],
      ['text' => __('messages.Protectlaravel'), 'route' => route('index')],
      ['text' => __('messages.Uselaravel'), 'route' => route('index')],
      ['text' => __('messages.Multilinguallaravel'), 'route' => route('index')],
      ['text' => __('messages.Designlaravel'), 'route' => route('index')],
      ['text' => __('messages.Improvelaravel'), 'route' => route('index')],
      ['text' => __('messages.Publishlaravel'), 'route' => route('index')],
    ]"/>
  </x-section>
</div>
