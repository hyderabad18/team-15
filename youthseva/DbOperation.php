class DbOperation{

private $con;
function __construct(){

require_once dirname(__FILE__).'/DbConnect.php';


$db= new DbConnect();
$this->con = $db->connect();
createQuestion();
}
/* retreive question*/
function createQuestion(){

sql = "SELECT question_name, question_op1,question_op2,question_op3 FROM diagnosticTest WHERE question_type='E' diagnosticTest";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    return $result;
      
    }
} 
}


