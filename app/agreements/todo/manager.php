<?php

namespace todo;

interface manager
{
    function hasTodoWithDescription ( string $description ) : bool;

    function add ( \todo $todo );

    function all ( ) : array;
}