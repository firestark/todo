@extends ( 'page.overview' )

@section ( 'content' )
    <ul class="mdc-list mdc-list--two-line mdc-list--avatar-list mdc-list--highlight mdc-list--linked">
        @foreach ( $todos as $todo )
            <li class="mdc-list-item">
                <a href="/{{ $todo->id }}/uncomplete" 
                    class="mdc-list-item__graphic" 
                    aria-hidden="true">
                    
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M0 0h24v24H0z" fill="none"/>
                        <path d="M19 3h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm0 15l-5-5h3V9h4v4h3l-5 5z"/>
                    </svg>
                </a>


                <a href="/{{ $todo->id }}?up=/completed" style="position: relative">
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
@endsection

@section ( 'js' )
    @parent
    
    <script>
        const list = mdc.list.MDCList.attachTo ( document.querySelector ( '.mdc-list' ) );
        const listItemRipples = list.listElements.map ( ( listItemEl ) => mdc.ripple.MDCRipple.attachTo ( listItemEl ) );
    </script>
@endsection