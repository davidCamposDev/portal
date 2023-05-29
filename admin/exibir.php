<?php
require('validacao_adm.php');
require('../conexao.php');
require('index_adm.php');

$select_quarto = mysqli_query($mysqli, "SELECT * FROM quarto ORDER BY cod_quarto ASC");

if (mysqli_num_rows($select_quarto) > 0) {
    $dados_quarto = mysqli_fetch_assoc($select_quarto);
} else {
    echo "<script> alert('NÃO EXISTEM QUARTOS CADASTRADOS!'); </script>";
    echo "<script> window.location.href='index_adm.php'; </script>";
}

?>

<div>
    <h1>QUARTOS CADASTRADOS</h1>

    <table class="table">
        <thead>
            <tr class="tabela_cabecalho">
                <th>CÓDIGO DO QUARTO</th>
                <th>TIPO DO QUARTO</th>
                <th>DESCRIÇÃO</th>
                <th>SERVIÇOS</th>
                <th>ENDEREÇO</th>
                <th>PREÇO</th>
                <th>IMAGEM</th>
                <th colspan="2">Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($dados_quarto) { ?>
                <tr>
                    <td><?php echo $dados_quarto['cod_quarto']; ?></td>
                    <td><?php echo $dados_quarto['tipo_quarto']; ?></td>
                    <td><?php echo $dados_quarto['descricao']; ?></td>
                    <td><?php echo $dados_quarto['servicos']; ?></td>
                    <td>
                        <?php echo $dados_quarto['rua'] ?? ""; ?><br>
                        <?php echo $dados_quarto['bairro'] ?? ""; ?><br>
                        <?php echo $dados_quarto['cidade'] ?? ""; ?>
                    </td>
                    <td><?php echo $dados_quarto['preco']; ?></td>
                    <td>
                        <?php
                        $img_quarto = $dados_quarto['img_quarto'];
                        $caminho_imagem = '../imagens/quartos_up/' . $img_quarto;
                        ?>
                        <img src="<?php echo $caminho_imagem; ?>" alt="Imagem do Quarto" width="100">
                    </td>
                    <td>
                        <a href="editar.php?cod_quarto=<?php echo $dados_quarto['cod_quarto']; ?>">
                            <img src="../imagens/editar.png" class="img-fluid" width="50" title="Editar">
                        </a>
                    </td>
                    <td>
                        <a href="javascript:func()" onclick="confirmar_exclusao('<?php echo $dados_quarto['cod_quarto']; ?>')">
                            <img src="../imagens/excluir.png" class="img-fluid" width="50" title="Excluir">
                        </a>
                    </td>
                </tr>
            <?php $dados_quarto = mysqli_fetch_assoc($select_quarto);
            } ?>
        </tbody>
    </table>
</div>

</body>

</html>
