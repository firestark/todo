@extends ( 'master' )

@section ( 'page' )
    <div id="app">
        <header class="mdc-top-app-bar mdc-top-app-bar--fixed">
            <div class="mdc-top-app-bar__row">
                <section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
                    @yield ( 'navigation' )
                    
                    <span class="mdc-top-app-bar__title">
                        @yield ( 'title' )
                    </span>
                </section>

                <section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-end" role="toolbar">                
                    
                    {{-- @include ( 'partials.theme-switcher' ) --}}
                    {{-- @include ( 'partials.logout' ) --}}

                </section>
            </div>
        </header>

        <div id="page">
            <nav id="rail-navigation">
                <ul>
                    <li>
                        <a href="/" class="{{ ( request::uri ( ) === '/' ) ? 'active' : '' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M12,2A7,7 0 0,0 5,9C5,11.38 6.19,13.47 8,14.74V17A1,1 0 0,0 9,18H15A1,1 0 0,0 16,17V14.74C17.81,13.47 19,11.38 19,9A7,7 0 0,0 12,2M9,21A1,1 0 0,0 10,22H14A1,1 0 0,0 15,21V20H9V21Z" />
                            </svg>
                            <span>Todos</span>
                        </a>
                    </li>
                    <li>
                        <a href="/tasks/" class="{{ ( request::uri ( ) === '/tasks/' ) ? 'active' : '' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="none" d="M0 0h24v24H0V0z"/>
                                <path d="M19 3h-4.18C14.4 1.84 13.3 1 12 1s-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm1 14H8c-.55 0-1-.45-1-1s.45-1 1-1h5c.55 0 1 .45 1 1s-.45 1-1 1zm3-4H8c-.55 0-1-.45-1-1s.45-1 1-1h8c.55 0 1 .45 1 1s-.45 1-1 1zm0-4H8c-.55 0-1-.45-1-1s.45-1 1-1h8c.55 0 1 .45 1 1s-.45 1-1 1z"/>
                            </svg>
                            <span>Tasks</span>  
                        </a>
                    </li>
                    <li>
                        <a href="/apps/" class="{{ ( request::uri ( ) === '/apps/' ) ? 'active' : '' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="none" d="M0 0h24v24H0V0z"/>
                                <path d="M4 8h4V4H4v4zm6 12h4v-4h-4v4zm-6 0h4v-4H4v4zm0-6h4v-4H4v4zm6 0h4v-4h-4v4zm6-10v4h4V4h-4zm-6 4h4V4h-4v4zm6 6h4v-4h-4v4zm0 6h4v-4h-4v4z"/>
                            </svg>
                            <span>Apps</span>
                        </a>
                    </li>
                </ul>
            </nav>
            
            <main>
                @yield ( 'content' )
            </main>
        </div>

        <footer id="bottom-navigation" class="mdc-elevation--z2">
            <div class="mdc-tab-bar" role="tablist">
                <div class="mdc-tab-scroller">
                    <div class="mdc-tab-scroller__scroll-area">
                        <div class="mdc-tab-scroller__scroll-content">
                            
                            <a href="{{ request::uri ( ) === '/' ? '#' : '/' }}" class="mdc-tab mdc-tab--stacked {{  ( request::uri ( ) === '/' ) ? 'mdc-tab--active' : '' }}" role="tab" aria-selected="true" tabindex="0">
                                <span class="mdc-tab__content">
                                    <span class="mdc-tab__icon" aria-hidden="true">
                                        @if ( request::uri ( ) === '/' )
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24">
                                                <path d="M12,2A7,7 0 0,0 5,9C5,11.38 6.19,13.47 8,14.74V17A1,1 0 0,0 9,18H15A1,1 0 0,0 16,17V14.74C17.81,13.47 19,11.38 19,9A7,7 0 0,0 12,2M9,21A1,1 0 0,0 10,22H14A1,1 0 0,0 15,21V20H9V21Z" />
                                            </svg>
                                        @else
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                <path d="M9 21c0 .55.45 1 1 1h4c.55 0 1-.45 1-1v-1H9v1zm3-19C8.14 2 5 5.14 5 9c0 2.38 1.19 4.47 3 5.74V17c0 .55.45 1 1 1h6c.55 0 1-.45 1-1v-2.26c1.81-1.27 3-3.36 3-5.74 0-3.86-3.14-7-7-7zm2.85 11.1l-.85.6V16h-4v-2.3l-.85-.6C7.8 12.16 7 10.63 7 9c0-2.76 2.24-5 5-5s5 2.24 5 5c0 1.63-.8 3.16-2.15 4.1z"/>
                                            </svg>
                                        @endif
                                    </span>
                                    <span class="mdc-tab__text-label">Todos</span>
                                </span>
                                <span class="mdc-tab-indicator {{ ( request::uri ( ) === '/' ) ? 'mdc-tab-indicator--active' : '' }}">
                                    <span class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span>
                                </span>
                                <span class="mdc-tab__ripple"></span>
                            </a>

                            <a href="{{ request::uri ( ) === '/tasks/' ? '#' : '/tasks/' }}" class="mdc-tab mdc-tab--stacked {{ ( substr ( request::uri ( ), 0, 7 ) === '/tasks/' ) ? 'mdc-tab--active' : '' }}" role="tab" aria-selected="true" tabindex="0">
                                <span class="mdc-tab__content">
                                    <span class="mdc-tab__icon" aria-hidden="true">
                                        @if (  substr ( request::uri ( ), 0, 7 ) === '/tasks/' )
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                <path d="M0 0h24v24H0z" fill="none"/>
                                                <path d="M19 3h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm2 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/>
                                            </svg>
                                        @else
                                            <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 0h24v24H0z" fill="none"/>
                                                <path d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.9 2 2 2zm6-6v-5c0-3.07-1.63-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.64 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2zm-2 1H8v-6c0-2.48 1.51-4.5 4-4.5s4 2.02 4 4.5v6z"/>
                                            </svg>
                                        @endif
                                    </span>
                                    <span class="mdc-tab__text-label">Reminders</span>
                                </span>
                                <span class="mdc-tab-indicator {{ ( substr ( request::uri ( ), 0, 7 ) === '/tasks/' ) ? 'mdc-tab-indicator--active' : '' }}">
                                    <span class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span>
                                </span>
                                <span class="mdc-tab__ripple"></span>
                            </a>

                            <a href="{{ request::uri ( ) === '/completed' ? '#' : '/completed' }}" class="mdc-tab mdc-tab--stacked {{ ( request::uri ( ) === '/completed' ) ? 'mdc-tab--active' : '' }}" role="tab" aria-selected="true" tabindex="0">
                                <span class="mdc-tab__content">
                                    <span class="mdc-tab__icon" aria-hidden="true">
                                        @if (  request::uri ( ) === '/completed' )
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                <path d="M0 0h24v24H0z" fill="none"/>
                                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                                            </svg>
                                        @else
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                <path fill="none" d="M0 0h24v24H0V0zm0 0h24v24H0V0z"/>
                                                <path d="M16.59 7.58L10 14.17l-3.59-3.58L5 12l5 5 8-8zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"/>
                                            </svg>
                                        @endif
                                    </span>
                                    <span class="mdc-tab__text-label">Completed</span>
                                </span>
                                <span class="mdc-tab-indicator {{ ( request::uri ( ) === '/completed' ) ? 'mdc-tab-indicator--active' : '' }}">
                                    <span class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span>
                                </span>
                                <span class="mdc-tab__ripple"></span>
                            </a>

                            <a href="{{ request::uri ( ) === '/apps/' ? '#' : '/apps/' }}" class="mdc-tab mdc-tab--stacked {{ ( substr ( request::uri ( ), 0, 6 ) === '/apps/' ) ? 'mdc-tab--active' : '' }}" role="tab" aria-selected="true" tabindex="0">
                                <span class="mdc-tab__content">
                                    <span class="mdc-tab__icon" aria-hidden="true">
                                        @if (  substr ( request::uri ( ), 0, 6 ) === '/apps/' )
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                <path d="M0 0h24v24H0z" fill="none"/>
                                                <path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z"/>
                                            </svg>
                                        @else
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                <path d="M0 0h24v24H0z" fill="none"/>
                                                <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/>
                                            </svg>
                                        @endif
                                    </span>
                                    <span class="mdc-tab__text-label">Apps</span>
                                </span>
                                <span class="mdc-tab-indicator {{ ( substr ( request::uri ( ), 0, 6 ) === '/apps/' ) ? 'mdc-tab-indicator--active' : '' }}">
                                    <span class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span>
                                </span>
                                <span class="mdc-tab__ripple"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection


@section ( 'mdc-js' )
    <script>
        const topAppBar = mdc.topAppBar.MDCTopAppBar.attachTo ( document.querySelector ( '.mdc-top-app-bar' ) );
        mdc.tabBar.MDCTabBar.attachTo ( document.querySelector ( '.mdc-tab-bar' ) );
    </script>
@endsection