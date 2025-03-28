<?php

    $mensagem = '';
    if(isset($_GET['status'])) {
        switch ($_GET['status']) {
            case 'sucess':
                $mensagem = '<div class="alert alert-success">Ação executada com sucesso!</div>';
                break;
            case 'error':
                $mensagem = '<div class="alert alert-danger">Ação não executada!</div>';
        }
    }

    $resultados = '';
    foreach($vagas as $vaga) {
        $resultados .= '<tr>
                            <td>'.$vaga->id.'</td>
                            <td>'.$vaga->titulo.'</td>
                            <td>'.$vaga->descricao.'</td>
                            <td>'.($vaga->ativo == 's' ? 'Ativo' : 'Inativo').'</td>
                            <td>'.date('d/m/Y à\s H:1:s'.strtotime($vaga->data)).'</td>
                            <td>
                                <a href="editar.php?id='.$vaga->id.'">
                                    <button type="button" class="btn btn-primary">Editar</button>
                                </a>
                                <a href="excluir.php?id='.$vaga->id.'">
                                    <button type="button" class="btn btn-danger">Excluir</button>
                                </a>
                            </td>
                        </tr>';
    }

    $resultados = strlen($resultados) ? $resultados : ' <tr>
                                                            <td colspan="6" class="text-center">
                                                                <strong>Nenhuma vaga encontrada.</strong>
                                                            </td>
                                                        </tr>';

?>
<main>

    <?=$mensagem?>

    <selection>
        <a href="cadastrar.php">
            <button class="btn btn-success">Nova vaga</button>
        </a>
    </selection>

    <section>
        <table class='table bg-light text-dark mt-3'>
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Título</td>
                    <td>Descrição</td>
                    <td>Status</td>
                    <td>Data</td>
                    <td>Ações</td>
                </tr>
            </thead>
            <tbody>
                <?=$resultados?>
            </tbody>
        </table>
    </section>

</main>