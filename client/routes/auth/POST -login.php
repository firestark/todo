<?php

use firestark\user;
use firestark\user\manager;

route::post ( '/login', function ( )
{
    $user = app::make ( user::class );
    
    if ( ! users::has ( $user ) )
    {
        session::flash ( 'message', 'Invalid credentials' );
        return redirect::back ( );
    }

    guard::stamp ( $user->credentials );
    session::flash ( 'message', 'Logged in.' );
    return redirect::to ( session::get ( 'intended', '/' ) );
} );