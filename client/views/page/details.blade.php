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
        </header>

        <div id="page">            
            <main>
                @yield ( 'content' )
            </main>

            @yield ( 'bottom-app-bar' )
        </div>
    </div>
@endsection


@section ( 'mdc-js' )
    <script>
        const topAppBar = mdc.topAppBar.MDCTopAppBar.attachTo ( document.querySelector ( '.mdc-top-app-bar' ) );
        mdc.tabBar.MDCTabBar.attachTo ( document.querySelector ( '.mdc-tab-bar' ) );
    </script>
@endsection