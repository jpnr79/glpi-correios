<?php
echo '<form method="post" action="process.php">';
echo '<label for="cep">CEP:</label>';
echo '<input type="text" id="cep" name="cep" maxlength="8" required>';
echo '<label for="address">Endereço:</label>';
echo '<input type="text" id="address" name="address" readonly>';
echo '<label for="neighborhood">Bairro:</label>';
echo '<input type="text" id="neighborhood" name="neighborhood" readonly>';
echo '<label for="city">Cidade:</label>';
echo '<input type="text" id="city" name="city" readonly>';
echo '<label for="state">Estado:</label>';
echo '<input type="text" id="state" name="state" readonly>';
echo '<button type="submit">Salvar</button>';
echo '</form>';
?>
