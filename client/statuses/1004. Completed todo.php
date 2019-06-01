<?php

status::matching ( 1004, function ( )
{
    session::flash ( 'message', 'Todo completed.' );
    return redirect::back ( );
} );