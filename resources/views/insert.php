<?php
@$v = is_numeric ($_POST['acesso']) ? true : false;
if($v == true){

    include('acesso/conexao.php');
    include('acesso/funcoes.php');
    $ip = AspasBanco($_SERVER['REMOTE_ADDR']);

    @$nome = AspasBanco($_POST['nome']);
    @$email = AspasBanco($_POST['email']);
    @$contato = limpa($_POST['contato']);
    @$acesso = limpa($_POST['acesso']);
    @$user = md5(limpa($_POST['acesso']));
    @$senha = md5($_POST['senha']);
    @$plano = limpa($_POST['plano']);

    if (!empty($user) and !empty($email) and !empty($contato) and !empty($senha)) {
        $sql = mysqli_query($conexao, "SELECT cpf FROM user WHERE cpf='$acesso'") or die (mysqli_error($conexao)); 
        if (mysqli_num_rows($sql) == 0) {
            try {
                mysqli_query($conexao, "INSERT INTO user (nome,cpf,email,contato,acesso_crp,senha_crp,plano,datacadastro,usuariocad,situacao,ip) 
                VALUES ('$nome','$acesso','$email','$contato','$user','$senha','$plano',NOW(),'cadastro site','$plano','$ip')") or die (mysqli_error($conexao));

                echo '<a href="acesso/"><button class="btn btn-success btn-block btn-flat" style="background:##32CD32">Cadastro realizado com sucesso!  <br />Por favor realizar login <br />
                Clique aqui para Login</button></a>';

            } catch (Exception $e) {
                echo '<a href="index.html">
                            <button class="btn btn-danger btn-block btn-flat" style="background:#FF0000">Cadastro já realizado! <br />Por favor realizar login <br />
                    Clique aqui para Login
                </button></a>';
            }
        } else {
            echo '<a href="acesso/"><button class="btn btn-danger btn-block btn-flat" style="background:#FF0000">Cadastro já realizado!  <br />Por favor realizar login <br />
            Clique aqui para Login</button></a>';
        }
    } else {
        echo '<button class="btn btn-danger btn-block btn-flat" style="background:#FF0000">Preencher campos obrigatórios!!</button>';
    }
}else{
    echo "<script>location.href='index.html';</script>";
}


