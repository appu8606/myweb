<?php

class Database {

    const server='localhost';
    const user='root';
    const password='qwerty';
    const database='company';

    function __construct()
	{

        $this->link = mysqli_connect(Database::server,Database::user, Database::password);
		if (!$this->link)
        {
		 	echo "error";
            die ('Could not connect: ' . mysql_error());

        }
        if (!mysqli_select_db($this->link,Database::database))  
		{
			echo 'Could not select database';
			exit;
		}
	}

	function __destruct()
	{
		mysqli_close($this->link);
	}
	public $link;

}
?>