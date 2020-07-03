<?PHP 
include "MyGreeterClient.php";
class UnitTest{
	public function __construct()
	{
	
	}
	function test(){
		$greeting=new Client();
		echo $greeting->getGreeting();
	}
     
 } 
 $test=new UnitTest();
 $test->test();
 ?>
