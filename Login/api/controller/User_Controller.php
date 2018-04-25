<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');

class User_Controller extends Base_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		echo "xin chao day la api user";
	}

	public function Login()
	{
		$json = [];
		echo '{';
		echo "\"user\":";

		if (isset($_POST['email']) && isset($_POST['password'])) {
			$email = $_POST['email'];
			$password = $_POST['password'];

			$this->model->load('User');
			$result = $this->model->User->login($email, $password);

			http_response_code(200);
			array_push($json, array(
				'id' => $result->id,
				'infor' => array(
					'email' => $result->email,
					'password' => $result->password
					),
				'role' => $result->role,
				'status' => $result->status
				)
			);
		}

		echo json_encode($json);

		echo '}';
	}

}

/* End of file User_Controller.php */
/* Location: ./application/controllers/User_Controller.php */