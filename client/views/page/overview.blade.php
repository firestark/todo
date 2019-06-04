@extends ( 'master' )

@section ( 'page' )
    <div id="app">
        <aside class="mdc-drawer mdc-elevation--z2">
            <div class="mdc-drawer__content">
                <nav class="mdc-list">
                    <a class="mdc-list-item {{ ( request::uri ( ) === '/' ) ? 'mdc-list-item--activated' : '' }}" href="/">
                        @if ( request::uri ( ) === '/' )
                            <svg class="mdc-list-item__graphic" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M19 3H4.99c-1.11 0-1.98.89-1.98 2L3 19c0 1.1.88 2 1.99 2H19c1.1 0 2-.9 2-2V5c0-1.11-.9-2-2-2zm0 12h-4c0 1.66-1.35 3-3 3s-3-1.34-3-3H4.99V5H19v10z"/>
                                <path fill="none" d="M0 0h24v24H0V0z"/>
                            </svg>
                        @else
                            <svg class="mdc-list-item__graphic" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="none" d="M0 0h24v24H0V0z"/>
                                <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5v-3h3.56c.69 1.19 1.97 2 3.45 2s2.75-.81 3.45-2H19v3zm0-5h-4.99c0 1.1-.9 2-2 2s-2-.9-2-2H5V5h14v9z"/>
                            </svg>
                        @endif
                        <span class="mdc-list-item__text">Inbox</span>
                    </a>
                    <a class="mdc-list-item {{ ( request::uri ( ) === '/completed' ) ? 'mdc-list-item--activated' : '' }}" href="/completed">
                        @if (  request::uri ( ) === '/completed' )
                            <svg class="mdc-list-item__graphic" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M0 0h24v24H0z" fill="none"/>
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                            </svg>
                        @else
                            <svg class="mdc-list-item__graphic" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="none" d="M0 0h24v24H0V0zm0 0h24v24H0V0z"/>
                                <path d="M16.59 7.58L10 14.17l-3.59-3.58L5 12l5 5 8-8zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"/>
                            </svg>
                        @endif

                        <span class="mdc-list-item__text">Done</span>
                    </a>
                    <a class="mdc-list-item {{ ( request::uri ( ) === '/settings' ) ? 'mdc-list-item--activated' : '' }}" href="/settings">
                        @if ( request::uri ( ) === '/settings' )
                            <svg class="mdc-list-item__graphic" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                <path fill="none" d="M0 0h20v20H0V0z"/>
                                <path d="M15.95 10.78c.03-.25.05-.51.05-.78s-.02-.53-.06-.78l1.69-1.32c.15-.12.19-.34.1-.51l-1.6-2.77c-.1-.18-.31-.24-.49-.18l-1.99.8c-.42-.32-.86-.58-1.35-.78L12 2.34c-.03-.2-.2-.34-.4-.34H8.4c-.2 0-.36.14-.39.34l-.3 2.12c-.49.2-.94.47-1.35.78l-1.99-.8c-.18-.07-.39 0-.49.18l-1.6 2.77c-.1.18-.06.39.1.51l1.69 1.32c-.04.25-.07.52-.07.78s.02.53.06.78L2.37 12.1c-.15.12-.19.34-.1.51l1.6 2.77c.1.18.31.24.49.18l1.99-.8c.42.32.86.58 1.35.78l.3 2.12c.04.2.2.34.4.34h3.2c.2 0 .37-.14.39-.34l.3-2.12c.49-.2.94-.47 1.35-.78l1.99.8c.18.07.39 0 .49-.18l1.6-2.77c.1-.18.06-.39-.1-.51l-1.67-1.32zM10 13c-1.65 0-3-1.35-3-3s1.35-3 3-3 3 1.35 3 3-1.35 3-3 3z"/>
                            </svg>
                        @else
                            <svg class="mdc-list-item__graphic" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="none" d="M0 0h24v24H0V0z"/>
                                <path d="M19.43 12.98c.04-.32.07-.64.07-.98 0-.34-.03-.66-.07-.98l2.11-1.65c.19-.15.24-.42.12-.64l-2-3.46c-.09-.16-.26-.25-.44-.25-.06 0-.12.01-.17.03l-2.49 1c-.52-.4-1.08-.73-1.69-.98l-.38-2.65C14.46 2.18 14.25 2 14 2h-4c-.25 0-.46.18-.49.42l-.38 2.65c-.61.25-1.17.59-1.69.98l-2.49-1c-.06-.02-.12-.03-.18-.03-.17 0-.34.09-.43.25l-2 3.46c-.13.22-.07.49.12.64l2.11 1.65c-.04.32-.07.65-.07.98 0 .33.03.66.07.98l-2.11 1.65c-.19.15-.24.42-.12.64l2 3.46c.09.16.26.25.44.25.06 0 .12-.01.17-.03l2.49-1c.52.4 1.08.73 1.69.98l.38 2.65c.03.24.24.42.49.42h4c.25 0 .46-.18.49-.42l.38-2.65c.61-.25 1.17-.59 1.69-.98l2.49 1c.06.02.12.03.18.03.17 0 .34-.09.43-.25l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.65zm-1.98-1.71c.04.31.05.52.05.73 0 .21-.02.43-.05.73l-.14 1.13.89.7 1.08.84-.7 1.21-1.27-.51-1.04-.42-.9.68c-.43.32-.84.56-1.25.73l-1.06.43-.16 1.13-.2 1.35h-1.4l-.19-1.35-.16-1.13-1.06-.43c-.43-.18-.83-.41-1.23-.71l-.91-.7-1.06.43-1.27.51-.7-1.21 1.08-.84.89-.7-.14-1.13c-.03-.31-.05-.54-.05-.74s.02-.43.05-.73l.14-1.13-.89-.7-1.08-.84.7-1.21 1.27.51 1.04.42.9-.68c.43-.32.84-.56 1.25-.73l1.06-.43.16-1.13.2-1.35h1.39l.19 1.35.16 1.13 1.06.43c.43.18.83.41 1.23.71l.91.7 1.06-.43 1.27-.51.7 1.21-1.07.85-.89.7.14 1.13zM12 8c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 6c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z"/>
                            </svg>
                        @endif
                        <span class="mdc-list-item__text">Settings</span>
                    </a>
                </nav>
            </div>
        </aside>
        
        <div id="page">
            <header class="mdc-top-app-bar mdc-top-app-bar--fixed">
                <div style="position: absolute; left: 0; right: 0; text-align: center;">
                    <svg id="logo" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 183 354" style="enable-background:new 0 0 183 354;" xml:space="preserve">
                        <style type="text/css">
                            .st0{fill:#E91E63;}
                        </style>
                        <title>logo_pink</title>
                        <path class="st0" d="M117.1,21.5c26.7,24.8,28.6,64.8,6.4,88.6c-11.5,12.3-24.2,23.6-32.4,38.6c-13.2,24.1-10.5,48.8-2.6,73.6
                            c1.4,4.5,3.7,4.4,6.2,0.9c15.6-20.9,35.4-38,51.5-58.5c16.8-21.3,21.9-45.1,15.6-71.4c-0.3-1.3-0.2-2.8,0.5-4
                            c11.1,17.6,15,36.9,13.3,57.4c-3.2,38.9-24.3,68.6-49.4,96.3c-6.8,7.5-13.7,15-20.1,22.8c-16.2,19.7-28.6,41-26.5,68.4
                            c-1.7-0.4-2.9-0.4-3.4-0.9c-20.2-25.7-36.3-53.6-46.1-84.9c-10.5-33.9-3.5-65.3,13.7-95.2c11.6-20.3,26.2-38.5,40.4-56.9
                            c3.7-4.8,7.5-9.6,11-14.5C107.6,64.4,120.1,47.1,117.1,21.5z"/>
                        <path class="st0" d="M170.3,200.8c3.2,32.9-1.4,63.5-23.8,88.9c-10.5,11.8-21.9,22.9-34.1,33c-8.8,7.4-16.7,15.5-20.7,27.3
                            c-8.3-15.4-5-41.9,6.8-59.9c6.9-10.5,15.3-19.7,23.8-28.8C139.7,242.4,159.8,225.6,170.3,200.8z"/>
                        <path class="st0" d="M102.4,8.3c7.9,11.8,7.4,24,3.5,36.5c-6.1,19.5-18.9,34.9-31.8,50c-24.4,28.5-48.4,57.3-60,94
                            c-0.3,0.9-1.2,1.5-2.8,3.4c-2.9-9.7-2-18.5-0.7-27.2c4.7-31.3,21.3-56.4,41.7-79.5c6.9-7.8,14-15.6,21.2-23.1
                            C88.4,47.2,100.8,30.9,102.4,8.3z"/>
                        <path class="st0" d="M99,182c0.2-16.9,5.8-31.6,17-44.8c11.7-13.8,26.3-25.2,35.3-41.6c3,18.3,0,35.2-12.3,49.3
                            c-11.8,13.4-24.6,25.8-37,38.6L99,182z"/>
                    </svg>
                    <h1 class="mdc-typography--headline6" style="margin-top: 24px;">Todo</h1>
                </div>
                <div class="mdc-top-app-bar__row">
                    <section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
                        @yield ( 'navigation' )                        
                    </section>                    

                    <section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-end" role="toolbar">                
                        
                        @yield ( 'top-app-bar--actions' )

                    </section>
                </div>
                <div class="mdc-top-app-bar__row">
                </div>
            </header>

            
            <main>
                @yield ( 'content' )
            </main>

            <footer id="bottom-navigation" class="mdc-elevation--z2">
                <div class="mdc-tab-bar" role="tablist">
                    <div class="mdc-tab-scroller">
                        <div class="mdc-tab-scroller__scroll-area">
                            <div class="mdc-tab-scroller__scroll-content">
                                
                                <a href="{{ request::uri ( ) === '/' ? '#' : '/' }}" class="mdc-tab mdc-tab--stacked {{  ( request::uri ( ) === '/' ) ? 'mdc-tab--active' : '' }}" role="tab" aria-selected="true" tabindex="0">
                                    <span class="mdc-tab__content">
                                        <span class="mdc-tab__icon" aria-hidden="true">
                                            @if ( request::uri ( ) === '/' )
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <path d="M19 3H4.99c-1.11 0-1.98.89-1.98 2L3 19c0 1.1.88 2 1.99 2H19c1.1 0 2-.9 2-2V5c0-1.11-.9-2-2-2zm0 12h-4c0 1.66-1.35 3-3 3s-3-1.34-3-3H4.99V5H19v10z"/>
                                                    <path fill="none" d="M0 0h24v24H0V0z"/>
                                                </svg>
                                            @else
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <path fill="none" d="M0 0h24v24H0V0z"/>
                                                    <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5v-3h3.56c.69 1.19 1.97 2 3.45 2s2.75-.81 3.45-2H19v3zm0-5h-4.99c0 1.1-.9 2-2 2s-2-.9-2-2H5V5h14v9z"/>
                                                </svg>
                                            @endif
                                        </span>
                                        <span class="mdc-tab__text-label">Inbox</span>
                                    </span>
                                    <span class="mdc-tab-indicator {{ ( request::uri ( ) === '/' ) ? 'mdc-tab-indicator--active' : '' }}">
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
                                        <span class="mdc-tab__text-label">Done</span>
                                    </span>
                                    <span class="mdc-tab-indicator {{ ( request::uri ( ) === '/completed' ) ? 'mdc-tab-indicator--active' : '' }}">
                                        <span class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span>
                                    </span>
                                    <span class="mdc-tab__ripple"></span>
                                </a>

                                <a href="{{ request::uri ( ) === '/settings' ? '#' : '/settings' }}" class="mdc-tab mdc-tab--stacked {{ ( request::uri ( ) === '/settings' ) ? 'mdc-tab--active' : '' }}" role="tab" aria-selected="true" tabindex="0">
                                    <span class="mdc-tab__content">
                                        <span class="mdc-tab__icon" aria-hidden="true">
                                            @if ( request::uri ( ) === '/settings' )
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                                    <path fill="none" d="M0 0h20v20H0V0z"/>
                                                    <path d="M15.95 10.78c.03-.25.05-.51.05-.78s-.02-.53-.06-.78l1.69-1.32c.15-.12.19-.34.1-.51l-1.6-2.77c-.1-.18-.31-.24-.49-.18l-1.99.8c-.42-.32-.86-.58-1.35-.78L12 2.34c-.03-.2-.2-.34-.4-.34H8.4c-.2 0-.36.14-.39.34l-.3 2.12c-.49.2-.94.47-1.35.78l-1.99-.8c-.18-.07-.39 0-.49.18l-1.6 2.77c-.1.18-.06.39.1.51l1.69 1.32c-.04.25-.07.52-.07.78s.02.53.06.78L2.37 12.1c-.15.12-.19.34-.1.51l1.6 2.77c.1.18.31.24.49.18l1.99-.8c.42.32.86.58 1.35.78l.3 2.12c.04.2.2.34.4.34h3.2c.2 0 .37-.14.39-.34l.3-2.12c.49-.2.94-.47 1.35-.78l1.99.8c.18.07.39 0 .49-.18l1.6-2.77c.1-.18.06-.39-.1-.51l-1.67-1.32zM10 13c-1.65 0-3-1.35-3-3s1.35-3 3-3 3 1.35 3 3-1.35 3-3 3z"/>
                                                </svg>
                                            @else
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <path fill="none" d="M0 0h24v24H0V0z"/>
                                                    <path d="M19.43 12.98c.04-.32.07-.64.07-.98 0-.34-.03-.66-.07-.98l2.11-1.65c.19-.15.24-.42.12-.64l-2-3.46c-.09-.16-.26-.25-.44-.25-.06 0-.12.01-.17.03l-2.49 1c-.52-.4-1.08-.73-1.69-.98l-.38-2.65C14.46 2.18 14.25 2 14 2h-4c-.25 0-.46.18-.49.42l-.38 2.65c-.61.25-1.17.59-1.69.98l-2.49-1c-.06-.02-.12-.03-.18-.03-.17 0-.34.09-.43.25l-2 3.46c-.13.22-.07.49.12.64l2.11 1.65c-.04.32-.07.65-.07.98 0 .33.03.66.07.98l-2.11 1.65c-.19.15-.24.42-.12.64l2 3.46c.09.16.26.25.44.25.06 0 .12-.01.17-.03l2.49-1c.52.4 1.08.73 1.69.98l.38 2.65c.03.24.24.42.49.42h4c.25 0 .46-.18.49-.42l.38-2.65c.61-.25 1.17-.59 1.69-.98l2.49 1c.06.02.12.03.18.03.17 0 .34-.09.43-.25l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.65zm-1.98-1.71c.04.31.05.52.05.73 0 .21-.02.43-.05.73l-.14 1.13.89.7 1.08.84-.7 1.21-1.27-.51-1.04-.42-.9.68c-.43.32-.84.56-1.25.73l-1.06.43-.16 1.13-.2 1.35h-1.4l-.19-1.35-.16-1.13-1.06-.43c-.43-.18-.83-.41-1.23-.71l-.91-.7-1.06.43-1.27.51-.7-1.21 1.08-.84.89-.7-.14-1.13c-.03-.31-.05-.54-.05-.74s.02-.43.05-.73l.14-1.13-.89-.7-1.08-.84.7-1.21 1.27.51 1.04.42.9-.68c.43-.32.84-.56 1.25-.73l1.06-.43.16-1.13.2-1.35h1.39l.19 1.35.16 1.13 1.06.43c.43.18.83.41 1.23.71l.91.7 1.06-.43 1.27-.51.7 1.21-1.07.85-.89.7.14 1.13zM12 8c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 6c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z"/>
                                                </svg>
                                            @endif
                                        </span>
                                        <span class="mdc-tab__text-label">Settings</span>
                                    </span>
                                    <span class="mdc-tab-indicator {{ ( request::uri ( ) === '/settings' ) ? 'mdc-tab-indicator--active' : '' }}">
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
    </div>
@endsection


@section ( 'js' )
    <script>
        const topAppBar = mdc.topAppBar.MDCTopAppBar.attachTo ( document.querySelector ( '.mdc-top-app-bar' ) );
        mdc.tabBar.MDCTabBar.attachTo ( document.querySelector ( '.mdc-tab-bar' ) );

        const list = mdc.list.MDCList.attachTo ( document.querySelector ( '.mdc-list' ) );
        const listItemRipples = list.listElements.map ( ( listItemEl ) => mdc.ripple.MDCRipple.attachTo ( listItemEl ) );
    </script>
@endsection