<?php

namespace todo;

use todo;

interface manager
{
    function has ( todo $todo ) : bool;
    
    function hasTodoWithDescription ( string $description ) : bool;

    function add ( todo $todo );

    function all ( ) : array;

    function find ( todo $todo ) : todo;

    function remove ( todo $todo );

    function complete ( todo $todo );
}