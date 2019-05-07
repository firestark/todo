<?php

namespace todo;

interface manager
{
    function hasTodoWithDescription ( \todo $todo ) : bool;

    function add ( \todo $todo );
}