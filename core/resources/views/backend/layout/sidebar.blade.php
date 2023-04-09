<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <div>
                <a href="{{ route('admin.home') }}">
                    @if (@$general->logo)
                    <img class="img-fluid mr-2 rounded-circle" src="{{ getFile('logo',@$general->logo) }}" alt="img" width="50%">
                    @else
                    <img class="img-fluid" src="{{ getFile('default', @$general->default_image) }}" alt="img"
                        width="15%">
                    @endif
                </a>
            </div>
            <a class="text-white" href="{{ route('admin.home') }}">{{ @$general->sitename }}
            </a>
        </div>

        <ul class="sidebar-menu">

            <li class="nav-item dropdown {{ menuActive('admin.home') }}">
                <a href="{{ route('admin.home') }}" class="nav-link "><i class="fas fa-fire"></i><span>{{
                        __('Dashboard') }}</span></a>
            </li>

            <li class="menu-header">{{ __('Email Settings') }}</li>
            <li class="nav-item dropdown {{ @$navEmailManagerActiveClass }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-envelope"></i>
                    <span>{{ __('Email Manager') }}</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ @$subNavEmailConfigActiveClass }}">
                        <a class="nav-link" href="{{ route('admin.email.config') }}">{{ __('Email Configure') }}</a>
                    </li>
                    <li class="{{ @$subNavEmailTemplatesActiveClass }}">
                        <a class="nav-link" href="{{ route('admin.email.templates') }}">{{ __('Email Templates') }}</a>
                    </li>
                </ul>
            </li>


            <li class="nav-item dropdown {{ @$subscriberActiveClass }}">
                <a href="{{ route('admin.sendEmail') }}" class="nav-link "><i class="fas fa-users"></i><span>{{ __('Send
                        Email') }}</span></a>
            </li>

            <li class="nav-item dropdown {{ @$bulkActiveClass }}">
                <a href="{{ route('admin.bulkEmail') }}" class="nav-link "><i class="fas fa-users"></i><span>{{ __('Send
                        Bulk Email') }}</span></a>
            </li>


            <li class="menu-header">{{ __('System Settings') }}</li>

            <li class="nav-item dropdown {{ @$navGeneralSettingsActiveClass }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-cog"></i>
                    <span>{{ __('General Settings') }}</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ @$subNavGeneralSettingsActiveClass }}">
                        <a class="nav-link" href="{{ route('admin.general.setting') }}">{{ __('General Settings') }}</a>
                    </li>

                    <li>
                        <a class="nav-link" href="{{ route('admin.general.cacheclear') }}">{{ __('Cache Clear') }}</a>
                    </li>
                </ul>
            </li>

        </ul>

    </aside>
</div>