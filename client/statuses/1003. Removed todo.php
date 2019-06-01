<?php

use function compact as with;

status::matching ( 1003, function ( todo $todo )
{
    session::flash ( 'message', 'todo removed' );
    return redirect::back ( );
} );