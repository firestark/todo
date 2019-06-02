<?php

use function compact as with;

status::matching ( 1006, function ( )
{
    session::flash ( 'message', 'Uncompleted todo.' );
    return redirect::back ( );
} );