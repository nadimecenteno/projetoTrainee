<?php

require_once "../../../DataBase/Connection.php";
require_once "../../../Models/Company.php";
require_once "../../../Controllers/CompanyController.php";

?>
<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['method'])) {
        $method = $_POST['method'];
        if($method == "store") {
            $retorno = CompanyController::store($_POST['name'], $_POST['federation']);
            if($retorno == 11){?>
                <html>
                    <script>
                        alert("Já existe uma empresa cadastrada com esse nome.");
                        window.location.href = "/Treinamento Ecompjr/Views/admin/dashboard.php";
                    </script>
                </html>
            <?php }
            if($retorno == 22){?>
                <html>
                    <script>
                        alert("Empresa cadastrada com sucesso!");
                        window.location.href = "/Treinamento Ecompjr/Views/admin/dashboard.php";
                    </script>
                </html>
            <?php }
        }
    }
?>
