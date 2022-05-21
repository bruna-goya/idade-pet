<?php

    if(isset($_POST['calculate']) && !empty($_POST['calculate'])) {
        $pet = $_POST['pet-type'];
        $age = $_POST['age'];
        $agePet = '';

        if($pet == 'gato') {
            switch($age) {
                case 1: 
                    $agePet = '1 mês';
                    break;
                case 2:
                    $agePet = '1 mês e meio';
                    break;
                case 3: 
                    $agePet = '2 meses';
                    break;
                case 4: 
                    $agePet = '2 meses e meio';
                    break;
                case 5: 
                    $agePet = '3 meses';
                    break;
                case 5:
                    $agePet = '3 meses e meio';
                    break;
                case 6:
                    $agePet = '4 meses';
                    break;
                case 7: 
                    $agePet = '4 meses e meio';
                    break;
                case 8:
                    $agePet = '5 meses';
                    break;
                case 9: 
                    $agePet = '6 meses';
                    break;
                case 10: 
                    $agePet = '7 meses';
                    break;
                case 11: 
                    $agePet = '8 meses';
                    break;
                case 12:
                    $agePet = '9 meses';
                    break;
                case 13:
                    $agePet = '10 meses';
                    break;
                case 14: 
                    $agePet = '11 meses';
                    break;
                case 15:
                    $agePet = '1 ano';
                    break;
            }
        }else if($pet == 'cachorro'){
            switch($age) {
                case 1: 
                    $agePet = '1 mês';
                    break;
                case 2:
                    $agePet = '2 meses';
                    break;
                case 3:
                    $agePet = '3 meses';
                    break;
                case 4:
                    $agePet = '3 meses e meio';
                    break;
                case 5: 
                    $agePet = '4 meses';
                    break;
                case 6:
                    $agePet = '4 meses e meio';
                    break;
                case 7:
                    $agePet = '5 meses';
                    break;
                case 8:
                    $agePet = '5 meses e meio';
                    break;
                case 9:
                    $agePet = '5 meses e meio';
                    break;
                case 10:
                    $agePet = '6 meses';
                    break;
                case 11:
                    $agePet = '6 meses e meio';
                    break;
                case 12: 
                    $agePet = '6 meses e meio';
                    break;
                case 13:
                    $agePet = '7 meses';
                    break;
                case 14:
                    $agePet = '7 meses e meio';
                    break;
                case 15:
                    $agePet = '7 meses e meio';
                    break;
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Idade do pet</title>
</head>
<body>
    <div class="general">
        <div class="form">
            <form class="form-pet" action="validate/idade_pet.php" method="post">
                <div class="texto-form">
                    <div class="titulo-form">Idade do pet</div>
                    <div class="subtitulo-form">Descubra qual a idade do seu pet</div>
                </div>

                <div class="label-group">
                    <label for="pet-type" class="label-simples">Seu pet</label>
                    <input type="text" name="pet-tpe" id="pet-type" class="input-geral" placeholder="<?= $pet ?>" disabled>
                </div>

                <div class="label-group">
                    <label for="age" class="label-simples">Idade em anos humanos</label>
                    <input type="number" class="input-geral" size="15" maxlength="2" placeholder="<?= $age ?>" disabled>
                </div>

                <div class="label-group">
                    <label for="agePet" class="label-simples">Idade do seu pet</label>
                    <input type="text" name="agePet" id="agePet" class="input-geral" placeholder="<?= $agePet ?>" disabled>
                </div>

                <div class="btn-group">
                    <a href="../index.html" class="btn-form btn-reset">Voltar</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>