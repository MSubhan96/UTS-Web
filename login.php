<?php

class login

	protected $user;
	protected $pass;
	
	public function__construct($user, $pass)
	{
		$this->username = $user;
		$this->password = $pass;
	}
	
	public function petugas ()
	{
	if ($this->username == "luthfi"	 && $this->pass == 1328)
	{
		header ("location:Admin.php");
	}
	else if ($this->username == "yudha"	 && $this->pass == 1328)
	{
		header ("location:Admin.php");
	}
	else if ($this->username == "subhan"	 && $this->pass == 1328)
	{
		header ("location:Admin.php");
	}

	}
	
?>