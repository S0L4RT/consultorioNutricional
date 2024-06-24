<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600;700&display=swap" rel="stylesheet">
    <title>Document</title>
    <link rel="stylesheet" href="styleCli.css">
</head>

<body>
    <header>
        <img src="https://cdn4.iconfinder.com/data/icons/wellness-tech-fill-wellbeing-performance/512/Meal_application_tracking-256.png" alt="logo">
        
        <h1>Consultorio Dra. Adriana Melo</h1><br>
    </header>
    <main>
        <div class="container">
            <h1 class="titulo">Calculadora IMC</h1>
            <div class="tudo">
                <form action="cliente.php" method="POST">
                    <label for="nome">Nome:</label>
                    <input type="string" id="nome" name="nome" required placeholder="Insira o nome" class="input">
                    <br><br>
                    <label for="peso">Ano de nascimento:</label>
                    <input type="number" id="anoNasc" name="anoNasc" step="1.0" maxlength="4" placeholder="Insira o ano de nascimento" class="input">
                    <br><br>
                    <label for="peso">Peso(kg):</label>
                    <input type="number" id="peso" name="peso" step="0.1" required placeholder="Insira o peso" class="input">
                    <br><br>
                    <label for="altura">Altura(m):</label>
                    <input type="number" id="altura" name="altura" step="0.01" required placeholder="Insira a altura" class="input">
                    <br><br>
                    <input type="submit" value="Calcular" class="botao" id="btnCalc">
                    <input type="reset" value="Limpar" class="botao" id="btnLimp">
                    <a id="btnVoltar" href="index.php" class="botao">Voltar</a>
                </form>
                <div class="resposta">
                    <?php
                    require '../backend/Consultorio.php';
                    $cliente = new Consultorio();
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if (isset($_POST['peso']) && isset($_POST['altura']) && isset($_POST['nome']) && isset($_POST['anoNasc'])) {
                            $peso = $_POST['peso'];
                            $altura = $_POST['altura'];
                            $nome = $_POST['nome'];
                            $anoNasc = $_POST['anoNasc'];

                            $erro = empty($peso) || empty($altura) || empty($nome) || empty($anoNasc) ? "todos ps campos são obrigatórios" : ((!is_numeric($altura) || $peso <= 0 || $altura <= 0 || $anoNasc <= 0) ?
                                    "Por favor, insira valores válidos para o peso e altura" : "");
                            if ($erro) {
                                echo $erro;
                            } else {
                                $cliente->setNome($nome);
                                $cliente->setAnoNasc($anoNasc);
                                $cliente->setPeso($peso);
                                $cliente->setAltura($altura);
                                $cliente->calcularIdade($anoNasc);
                                $cliente->calcularImc($peso, $altura);
                                $cliente->imprimirResultado();
                            }
                        } else {
                            echo "Formulário não enviado corretamente";
                        }
                    }
                    ?>
                </div>
            </div>
    </main>
    <footer>
        Copyright Arthur Maciel da Rosa
    </footer>
</body>

</html>
