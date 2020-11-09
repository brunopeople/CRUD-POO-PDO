<div class="col-md-offset-4 col-md-4">
    <fieldset>
        <legend>Os Cargos</legend>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID:</th>
                    <th>Nome:</th>
                    <th>Açãoes:</th>
                </tr>
            </thead>
        <tbody>
            <?php foreach ($cargo->findAll() as $key => $value): ?>
                <tr>
                    <td><?=$value->id; ?></td>
                    <td><?=$value->nome; ?></td> 
                        <td>
                            <a href='?acao=editar_cargo&id=<?=$value->id; ?>'
                                class="btn btn-warning btn-circle">
                                <i class="fa fa-pencial"></i>
                            </a>

                            <a href='?acao=deletar_cargos&id=<?= $value->id; ?>'
                                class="btn btn-danger btn-circle">
                                <i class="fa fa-trash-o"></i>
                            </a>
                        </td>
            <?php endforeach; ?>
                </tr>
        </tbody>
      </table>
    </fieldset>
</div>