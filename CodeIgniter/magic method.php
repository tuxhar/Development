Magic Method=>this method call when an event occur
1)autoload=if you wanna create object of classes which is in other file
function __autoload($className){
    include_once('classess/$className.php');	
}
