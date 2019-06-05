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
        <div></div>
        <div id="page">
            <header class="mdc-top-app-bar mdc-top-app-bar--fixed">
                <div class="mdc-top-app-bar__row">
                    <section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
                        @yield ( 'navigation' )    
                        <span class="mdc-top-app-bar__title" id="title-center">
                            @yield ( 'title' )
                        </span>                    
                    </section>

                    <section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-end" role="toolbar">                
                        
                        @yield ( 'top-app-bar--actions' )
                        @include ( 'partials.avatar' )
                    </section>
                </div>
            </header>

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