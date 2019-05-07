<?php

app::share ( 'todos file', function ( )
{
    return __DIR__ . '/../storage/db/files/todos.data';
} );