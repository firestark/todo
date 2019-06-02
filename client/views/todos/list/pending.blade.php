@extends ( 'page.overview' )

@section ( 'content' )
    <ul class="mdc-list mdc-list--two-line mdc-list--avatar-list mdc-list--highlight mdc-list--linked">
        @foreach ( $todos as $todo )
            <li class="mdc-list-item">
                <a href="/{{ $todo->id }}/complete" 
                    class="mdc-list-item__graphic" 
                    aria-hidden="true">
                    
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="none" d="M0 0h24v24H0V0z"/>
                        <path d="M9 16.17L5.53 12.7c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.18 4.18c.39.39 1.02.39 1.41 0L20.29 7.71c.39-.39.39-1.02 0-1.41-.39-.39-1.02-.39-1.41 0L9 16.17z"/>
                    </svg>
                </a>


                <a href="/{{ $todo->id }}" style="position: relative">
                    <span class="mdc-list-item__text" style="width: 100%; display: grid; padding-right: 16px;">
                        <span class="mdc-list-item__primary-text">{{ $todo->description }}</span>
                        <span class="mdc-list-item__secondary-text">Created at {{  date ( 'M d, Y ', $todo->createdAt ) }}</span>
                    </span>
                </a>

                <a href="/{{ $todo->id }}/remove" class="mdc-list-item__meta" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z"/>
                        <path d="M0 0h24v24H0z" fill="none"/>
                    </svg>
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