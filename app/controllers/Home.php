<?php

<<<<<<< HEAD
use Controller;

class Home extends Controller
{
    // Index of the home page (localhost/home(/index))
    public function index($param1 = '', $param2 = '', $param3 = '')
    {
        // Initialize Alunos model
        $test = $this->model('Alunos');

        // Call function from the model
        $testData = $test->getAlunosFunction();

        $this->view('home/index', [
            'test' => $testData,
            'parameters' => [$param1, $param2, $param3],
        ]);
    }
}

?>
=======
    public function index($param1= '', $param2= '', $param3= '') {
        $this->view('home/index');
    } 
    public function form(){
        echo "esse e seu formulario";
    }
    public function cadastro(){
        echo "voce foi cadastrado";
    }
}
?>
>>>>>>> origin/master
