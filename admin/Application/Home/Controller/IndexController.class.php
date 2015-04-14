<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
      $this->display("admin");
    }
    public function admin_index(){
	    $username = $_POST['username'];
		$password = $_POST['pwd'];
		//echo 'username:'.$username;
		//echo 'password:'.$password;
		//$admin_url = 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/admin_index.php';
		if(isset($_POST['submit'])){
			if($username=="admin" && $password=="admin") {
				 $this->display();
			}
		}
    }
}