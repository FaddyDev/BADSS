<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
class Model_login extends CI_Model {
public function __construct() { //Call the Model constructor 
parent::__construct();
 }
function login_checkpoint($category ,$username ,$password ) {
$sql = "SELECT * FROM users WHERE category='".$category."' AND username='".$username."' AND password='".$password."' ";
$query = $this->db->query($sql);
return $query->num_rows();
}

function login_checkpoint_student($username ,$password ) {
$sql = "SELECT * FROM personaldetails WHERE regno='".$username."' AND idno='".$password."' ";
$query = $this->db->query($sql);
return $query->num_rows();
}
}

/* End of file model_login.php */

/* Location: ./application/models/model_login.php */
?>
</body>
</html>
