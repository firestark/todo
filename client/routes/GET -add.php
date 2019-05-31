<?php

route::get ( '/add', function ( )
{
    return view::make ( 'todos.add' );
} );