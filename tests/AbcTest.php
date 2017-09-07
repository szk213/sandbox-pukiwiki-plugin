<?php
require_once(dirname(__FILE__)."/../src/Abc.php");

class AbcTest extends \Codeception\TestCase\Test
{
    use \Codeception\Specify;
    public $abc;

    public function testValidation()
    {
        $this->beforeSpecify(function() {
            // echo "test1";
            $this->abc = new Abc();
        });
        $this->afterSpecify(function() {
            // echo "test2";
        });

        // $this->abc = new Abc();
        $this->specify("username is required", function() {
            // $this->assertEquals($this->abc->returnAbc(), 'a default value');
            verify($this->abc->returnAbc())->equals('a default value');
        });
    }
}
?>  