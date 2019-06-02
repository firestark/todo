<?php

class flatfileTodoManager implements todo\manager
{
    private $todos = [ ];
    private $file = '';

    function __construct ( string $file, array $todos )
    {
        $this->file = $file;
        $this->todos = $todos;
    }

    function add ( todo $todo )
    {
        $this->todos [ $todo->id ] = $todo;
        $this->write ( );
    }

    function has ( todo $todo ) : bool
    {
        return isset ( $this->todos [ $todo->id ] );
    }

    function hasTodoWithDescription ( string $description ) : bool
    {
        foreach ( $this->todos as $todo )
            if ( $todo->description === $description )
                return true;
        
        return false;
    }

    function all ( ) : array
    {
        return $this->todos;
    }

    function completed ( ) : array
    {
        foreach ( $this->todos as $todo )
            if ( $todo->completed )
                $completed [ ] = $todo;
        
        return $completed ?? [ ];
    }

    function pending ( ) : array
    {
        foreach ( $this->todos as $todo )
            if ( ! $todo->completed )
                $pending [ ] = $todo;
        
        return $pending ?? [ ];
    }

    function find ( todo $todo ) : todo
    {
        return $this->todos [ $todo->id ];
    }

    function remove ( todo $todo )
    {
        unset ( $this->todos [ $todo->id ] );
        $this->write ( );
    }

    function complete ( todo $todo )
    {
        $this->todos [ $todo->id ]->completed = true;
        $this->write ( );
    }

    function uncomplete ( todo $todo )
    {
        $this->todos [ $todo->id ]->completed = false;
        $this->write ( );
    }

    private function write ( )
	{
		file_put_contents ( $this->file, serialize ( $this->todos ) );
    }
}