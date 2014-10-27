<?php 

class Samples {
    public $publicVar       = 'public value';
    protected $protectedVar = 'protected value';
    private $privateVar     = 'private value';
    
    public function run($param1, $param2, $param3) {
        return $param1 . '-' . $param2 . '-' . $param3; 
    }

    public function mult($num1, $num2) {
        return $num1 * $num2;
    }
    
    public function stats($name, $count) {
        return $name . ' - ' . $count;
    }
}

$samples = new Samples();
$samples->run('val1', 'val2', 'val3');

for ($i = 1; $i <= 10; $i++) {
    $samples->mult(rand(1, 10), rand(11, 20));
}

$names = array('New York', 'San Francisco', 'London', 'Los Angeles', 'Yosemite');
for ($i = 0; $i < 5; $i++) {
    $samples->stats($names[$i], rand(1, 1000));
}

?>