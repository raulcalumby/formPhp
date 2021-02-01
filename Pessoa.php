
<?php


class Pessoa
{

    public string $nome;
    public string $sobrenome;
    public string $email;
    public string $telefone;
    public string $profissao;

    public function __construct($setNome, $setSobrenome, $setEmail, $setTelefone, $setProfissao)
    {
        $this->nome = $setNome;
        $this->sobrenome = $setSobrenome;
        $this->email = $setEmail;
        $this->telefone = $setTelefone;
        $this->profissao = $setProfissao;
    }


    public function getNome()
    {

        return $this->nome;
    }
    public function getSobrenome()
    {

        return $this->sobrenome;
    }
    public function getEmail()
    {

        return $this->email;
    }
    public function getTelefone()
    {

        return $this->telefone;
    }
    public function getProfissao()
    {

        return $this->profissao;
    }

    public function exibeFormulario()
    {
        echo $this->nome . '<br>';
        echo $this->sobrenome . '<br>';
        echo  $this->email . '<br>';
        echo $this->telefone . '<br>';
        echo  $this->profissao;
    }
}


?>
