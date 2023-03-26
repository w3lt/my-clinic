<?php
class Doctors extends Controller
{
    public function __construct()
    {
        if (isLoggedIn()) {
            redirect('pages/index');
        }
        $this->loadModel('Doctor');
    }
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $loginInfo = [
                "email" => $_POST['email'],
                "password" => $_POST['password'],
                "email_error" => false,
                "password_error" => false
            ];
            $email = $loginInfo['email'];
            if ($this->model->findDoctorbyEmail($email)) {
                $password = $loginInfo['password'];
                if ($this->model->login($email, $password)) {
                    $result = $this->model->login($email, $password);
                    $this->createDoctorSession(compact('result')['result']);
                } else {
                    echo "Wrong password, try again";
                    $loginInfo['password_error'] = true;
                    $this->render("/doctor/login", $data = []);
                }
            } else {
                echo "Wrong email or user not exists";
                $loginInfo['email_error'] = true;
                $this->render("/doctor/login", $data = []);
            }

        } else {
            $this->render("/doctor/login", $data = []);
        }
    }

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $accountInfo = [
                "name" => $_POST['name'],
                "email" => $_POST['email'],
                "password" => password_hash($_POST['password'], PASSWORD_DEFAULT),
                "gender" => $_POST['gender'] == 'male',
                "specialist" => $_POST['specialist'],
                "create_at" => getdate()
            ];
            if ($this->model->create($accountInfo)) {
                redirect('doctors/login');
            }
        } else {
            $this->render("/doctor/register", $data = []);
        }
    }

    public function logout()
    {
        session_destroy();
        unset($_SESSION['doctor_id']);
        redirect('doctors/login');
    }
    function createDoctorSession($doctor)
    {
        $_SESSION['doctor_id'] = $doctor['id'];
        $_SESSION['doctor_name'] = $doctor['name'];
        $_SESSION['doctor_email'] = $doctor['email'];
        redirect('pages/index');
    }
}
?>