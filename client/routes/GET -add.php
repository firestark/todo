<?php

route::get ( '/add', function ( )
{
    return view::make ( 'notes.add' );
} );