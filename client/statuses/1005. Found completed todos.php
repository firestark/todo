<?php

use function compact as with;

status::matching ( 1005, function ( array $todos )
{
    return view::make ( 'todos.list.completed', with ( 'todos' ) );
} );