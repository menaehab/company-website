<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
        <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    <nav class="vertnav navbar navbar-light">
        <!-- nav bar -->
        <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
                <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120"
                    xml:space="preserve">
                    <g>
                        <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                        <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                        <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                    </g>
                </svg>
            </a>
        </div>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <x-tab-component href="{{ route('admin.index') }}" icon="fe-home"
                name="{{ __('keywords.home') }}"></x-tab-component>
            <p class="text-muted nav-heading mt-4 mb-1">
                <span>{{ __('keywords.components') }}</span>
            </p>
            <ul class="navbar-nav flex-fill w-100 mb-2">
                <x-tab-component href="{{ route('admin.services.index') }}" icon="fe-codesandbox"
                    name="{{ __('keywords.services') }}"></x-tab-component>
                <x-tab-component href="{{ route('admin.features.index') }}" icon="fe-star"
                    name="{{ __('keywords.features') }}"></x-tab-component>
                <x-tab-component href="{{ route('admin.messages.index') }}" icon="fe-message-square"
                    name="{{ __('keywords.messages') }}"></x-tab-component>
                <x-tab-component href="{{ route('admin.subscribers.index') }}" icon="fe-tag"
                    name="{{ __('keywords.subscribers') }}"></x-tab-component>
                <x-tab-component href="{{ route('admin.testmonials.index') }}" icon="fe-smile"
                    name="{{ __('keywords.testmonials') }}"></x-tab-component>
                <x-tab-component href="{{ route('admin.teams.index') }}" icon="fe-users"
                    name="{{ __('keywords.teams') }}"></x-tab-component>
                <x-tab-component href="{{ route('admin.settings.index') }}" icon="fe-settings"
                    name="{{ __('keywords.settings') }}"></x-tab-component>
            </ul>
    </nav>
</aside>
