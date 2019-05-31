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
        $this->todos [ ] = $todo;
        $this->write ( );
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

    private function write ( )
	{
		file_put_contents ( $this->file, serialize ( $this->todos ) );
    }

    private function check ( todo $todo )
    {
        if ( ! isset ( $this->todos [ $todo->id ] ) )
            throw new \exception ( "A todo with id: {$todo->id} does not exist." );
    }
}