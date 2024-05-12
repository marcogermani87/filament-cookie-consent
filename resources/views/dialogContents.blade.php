<div class="js-cookie-consent cookie-consent {{ $pluginConfig['position'] === 'end' ? 'fixed bottom-0 left-0' : 'relative left-0 top-0' }} z-50 w-full p-4 bg-white border-t border-gray-200 shadow md:p-6 dark:bg-gray-800 dark:border-gray-600">
    <div class="flex justify-center flex-row">
        <div class="basis-3/4 max-w-7xl">
            {!! trans('cookie-consent::texts.message') !!}
        </div>
        <div class="basis-1/4 mx-3">
            <x-filament::button
                size="{{ $pluginConfig['consent_button']['size'] }}"
                color="{{ $pluginConfig['consent_button']['color'] }}"
                class="js-cookie-consent-agree cookie-consent__agree"
            >
                {{ trans('cookie-consent::texts.agree') }}
            </x-filament::button>
            @if($pluginConfig['privacy_policy_button']['enabled'])
                <x-filament::button
                    size="{{ $pluginConfig['privacy_policy_button']['size'] }}"
                    href="{{ url($pluginConfig['privacy_policy_button']['href']) }}"
                    target="{{ $pluginConfig['privacy_policy_button']['target'] }}"
                    tag="a"
                    color="{{ $pluginConfig['privacy_policy_button']['color'] }}"
                >
                    {{ trans('filament-cookie-consent::filament-cookie-consent.privacy_policy_button') }}
                </x-filament::button>
            @endif
        </div>
    </div>
</div>
