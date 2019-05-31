@extends ( 'page' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => '/' ] )
@endsection

@section ( 'content' )

    
    
    @include ( 'partials.link.fab', [ 'action' => 'add', 'link' => '#' ] )
@endsection