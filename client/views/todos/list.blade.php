@extends ( 'page.overview' )

@section ( 'content' )
    
    <ul class="mdc-list mdc-list--linked">
        @foreach ( $todos as $todo )
            <li class="mdc-list-item">
                <a href="/{{ $todo->id }}">
                    {{ $todo->description }}
                </a>
            </li>
        @endforeach
    </ul>
    
    @include ( 'partials.link.fab', [ 'action' => 'add', 'link' => '/add' ] )
@endsection

@section ( 'js' )
    @parent
    
    <script>
        const list = mdc.list.MDCList.attachTo ( document.querySelector ( '.mdc-list' ) );
        const listItemRipples = list.listElements.map ( ( listItemEl ) => mdc.ripple.MDCRipple.attachTo ( listItemEl ) );
    </script>
@endsection