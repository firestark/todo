<?php

route::get ( '/', function ( )
{
    return view::make ( 'notes' );
} );