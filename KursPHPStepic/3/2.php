<?php
/*trait Command {
    function run() {
        echo "Executing a command\n";
    }
}
trait Marathon {
    function run() {
        echo "Running a marathon\n";
    }
}
class Person {
    use Command, Marathon {
        Command::run as runCommand;
        Marathon::run insteadof Command;
    }
}
$person = new Person();
$person->runCommand();
$person->run();
*/?>
<?php
/*abstract class Component {
    abstract function printOutput();
}

interface exampleInterface {
    public function default_function();
}
class ImageComponent extends Component {
    public function printOutput()
    {
        echo "Pretty picture\n";       // TODO: Implement printOutput() method.
    }
}

class InterExample implements exampleInterface {
    public function default_function()
    {
        echo "Default function\n";    // TODO: Implement default_function() method.
    }
}
$object = new ImageComponent();
$object->printOutput();

$object2 = new InterExample();
$object2->default_function();
*/?>

<?php
/*trait Sortable {
    abstract function uniqueId();
    function compareById($object) {
        return ($object->uniqueId() < $this->uniqueId()) ? -1 : 1;
    }
}

class Bird {
    use Sortable;
    function uniqueId()
    {
        return 2;    // TODO: Implement uniqueId() method.
    }
}

class Car {
    use Sortable;
    public function uniqueId()
    {
        return 10;   // TODO: Implement uniqueId() method.
    }
}

$bird = new Bird();
$car = new Car();
$comparison = $bird->compareById($car);
echo $comparison;
?>
<?php
/*class Person {
    public $name = '';
    function getName() {
        return $this->name;
    }
}
$anonymous = new class(){
    function getName()
    {
        return "Data warehousing"; // TODO: Change the autogenerated stub
    }
};

?>
echo $anonymous->getName();*/
?>
<?php
/*    class Person {

    }
    class Employee extends Person {

    }
    echo class_exists("Person") . "\n";
    $classes = get_declared_classes();
    var_dump($classes);
    echo in_array("Employee" , (array)$classes) . "\n";
*/?>

<?php
/*class Person {
    private $name = '';

    public function getName(): string {
        return $this->name;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }
}

class Employee extends Person {
    private $salary = 0;
    public $yob = 0;
    public function getSalary(): int {
        return $this->salary;
    }
    public function setSalary(int $salary): void {
        $this->salary = $salary;
    }
}
var_dump(get_class_methods("Employee")); // od parametrow
var_dump(get_class_vars(Employee::class));
var_dump(get_class_vars("Employee")); // od pol
*/?>

<?php
/*class A {
    public $name = '';
    public $secondName = '';

    public function setName(string $name): void {
        $this->name = $name;
    }
    public function getName(): string {
        return $this->name;
    }

}
class B extends A {}
$obj = new B;
echo  get_parent_class($obj) . "\n";
echo get_parent_class(B::class) . "\n";

$var = new A();
$var->setName('Kajetan');
$var->secondName = "Frackowiak";
var_dump(get_class_vars("A"));
var_dump(get_object_vars($var));
*/?>

<?php
/*    class Log {
        private $fh;
        function __construct($filename) {
            $this->filename = $filename;
            $this->open();
        }
        function open() {
            $this->fh = fopen($this->filename, 'a') or die("Can't open {$this->filename}");
        }
        function write($note) {
            fwrite($this->fh, "{$note}\n");
        }
        function read() {
            return join('', file($this->filename));
        }
        function __wakeup(): void
        {
            $this->filename = 'persistent_log';   // TODO: Implement __wakeup() method.
            $this->open();
        }
        function __sleep(): array
        {
            fclose($this->fh);   // TODO: Implement __sleep() method.
            return ["filename" => $this->filename];
        }
    }
*/?>
<?php
interface Movable {
    public function moveUp():void;
    public function moveDown():void;
    public function moveLeft():void;
    public function moveRight():void;
}

class MovablePoint implements Movable {
    private $x;
    private $y;
    private $xSpeed;
    private $ySpeed;
    public function __construct($x, $y, $xSpeed, $ySpeed)
    {
        $this->x = $x;
        $this->y = $y;
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }
    public function __toString(): string
    {
        return "x: " . $this->x . ", y: " . $this->y . "\n";// TODO: Implement __toString() method.
    }

    public function moveUp(): void
    {
         echo $this->y  += $this->ySpeed; // TODO: Implement moveUp() method.
        echo "\tMove up\n";
    }
    public function moveDown(): void
    {
        echo $this->y -= $this->ySpeed;// TODO: Implement moveDown() method.
        echo "\tMove down\n";
    }
    public function moveLeft(): void
    {
        echo $this->x -= $this->xSpeed;// TODO: Implement moveDown() method.
        echo "\tMove left\n";
    }
    public function moveRight(): void
    {
        echo $this->x += $this->xSpeed;// TODO: Implement moveRight() method.
        echo "\tMove right\n";
    }
}

$point = new MovablePoint(1,3,5,8);
echo $point . "\n\n";

$point->moveUp();
$point->moveRight();
$point->moveDown();
$point->moveLeft();
?>
