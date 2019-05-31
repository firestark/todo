@extends ( 'master' )

@section ( 'style' )
    <style>
        .mdc-fab {
            bottom: 28px;
        }
    </style>
@endsection

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
                    
                </section>
            </div>
            <div class="mdc-top-app-bar__row">
                <section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start" style="padding: 0; align-items: flex-end;">
                    @yield ( 'tab-bar' )
                </section>
            </div>
        </header>

        <div id="page">            
            <main>
                @yield ( 'content' )
            </main>
        </div>

        <footer class="mdc-bottom-app-bar">
            <div class="mdc-bottom-app-bar__row">
                <section class="mdc-bottom-app-bar__section mdc-bottom-app-bar__section--align-start">
                    <svg class="mdc-bottom-app-bar__action-item" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="none" d="M0 0h24v24H0V0zm0 0h24v24H0V0z"/>
                        <path d="M16.59 7.58L10 14.17l-3.59-3.58L5 12l5 5 8-8zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"/>
                    </svg>
                    <svg class="mdc-bottom-app-bar__action-item" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="none" d="M0 0h24v24H0V0z"/>
                        <path d="M16 9v10H8V9h8m-1.5-6h-5l-1 1H5v2h14V4h-3.5l-1-1zM18 7H6v12c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7z"/>
                    </svg>
                </section>

                <section class="mdc-bottom-app-bar__section mdc-bottom-app-bar__section--align-end">
                </section>
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