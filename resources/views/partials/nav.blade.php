
<nav class="custom-wrapper" id="menu">
    <div class="pure-menu"></div>
    <ul class="container-flex list-unstyled">

        <li>
            <a href="{{ route('pages.home') }}" class="pure-menu-link c-gris-2 text-uppercase {{ setActiveRoute('pages.home')}}">{{ __('Home')}}</a>
        </li>
        <li>
            <a href="{{ route('pages.about') }}" class="pure-menu-link c-gris-2 text-uppercase {{ setActiveRoute('pages.about')}}">{{ __('About')}}</a>
        </li>
        <li>
            <a href="{{ route('pages.archive') }}" class="pure-menu-link c-gris-2 text-uppercase {{ setActiveRoute('pages.archive')}}">{{__('Archive')}}</a>
        </li>
        <li>
            <a href="{{ route('pages.contact') }}" class="pure-menu-link c-gris-2 text-uppercase {{ setActiveRoute('pages.contact') }}">{{ __('Contact')}}</a>
        </li>
    </ul>
</nav>
