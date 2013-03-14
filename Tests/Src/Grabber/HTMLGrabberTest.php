<? 

namespace Grabber;

//Test autoload setup
require_once ('../Bootstrap.php');
	
	
class DbAccessTest extends \PHPUnit_Extensions_Database_TestCase {


public function HTMLgrabberConnectText() {	
		$result = new HTMLGrabber('http://google.com');
		$this->assertNotEmpty($result);
	}

?>