<?php

use function compact as with;

status::matching ( 1002, function ( todo $todo )
{
    return view::make ( 'todos.edit', with ( 'todo' ) );
} );