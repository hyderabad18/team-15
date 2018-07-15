<?php
class csv extends mysqli
{
public function __construct()
{
parent::__construct("localhost","root","","csv");
if($this->connect_error)
{
echo "fail to connect db:".$this->connect_error;
}
}
public function import($file)
{
$file=fopen($file,'r');
while($row=fgetcsv($file))
{
	$value="'".implode("','",$row)."'";
	$q="insert into file(name,email,pno)values(".$value.")";
	if($this->query($q))
	{
		$this->state_csv=true;
	}
	else
	{
		$this->state_csv=false;
		echo $this->error;
	}
}
}
}
?>