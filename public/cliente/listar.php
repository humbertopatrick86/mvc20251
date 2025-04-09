<a href="/mvc20251/cliente/formulario">Cadastrar</a>
<table>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Endereco</th>
        <th>Ações</th>
</tr>
<?php
 foreach( $parametro as $p){
    ?>
    <tr>
        <td><?= $p["id"] ?></td>
        <td><?= $p["nome"] ?></td>
        <td><?= $p["endereco"] ?></td>
        <td><a href="/mvc20251/cliente/formularioalterar?id=<?= $p["id"] ?>">Alterar</a></td>
    </tr>
    
    <?php
 }

?>
    
</table>