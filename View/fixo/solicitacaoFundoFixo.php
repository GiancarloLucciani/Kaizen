<div class="x_content">

    <form class="form-horizontal form-label-left" novalidate method="POST" action="index.php?Controller=FundoFixo&Action=salvar">
        <span class="section">Solicitação para fundo fixo</span>

        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="empresa">Empresa <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <select id="empresa" name="empresa" class="select2_single form-control" tabindex="-1"required="required">
                    <option > </option>
                    <?php
                    $empresa = new EmpresaController();
                    $arrayEm = $empresa->listar();
                    foreach ($arrayEm as $key => $valueEm) {
                        echo '<option>' . $valueEm['descricao'] . '</option>';
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="colaborador">Colaborador <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <select id="colaborador" name="colaborador" class="select2_single form-control" tabindex="-1"required="required">
                    <option > </option>
                    //<?php
                    $col = new ColaboradorController();
                    $arrayCol = $col->listar();
                    foreach ($arrayCol as $key => $valueCol) {
                        echo '<option>' . $valueCol['nome'] . '</option>';
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="centro_custo">Departamento <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <select id="centro_custo" name="centro_custo" class="select2_single form-control" tabindex="-1"required="required">
                    <option> </option>
                    <?php
                    $centroCusto = new CentroDeCustoController();
                    $array = $centroCusto->listar();
                    foreach ($array as $key => $value) {
                        echo '<option>' . $value['id'] . ' - ' . $value['descricao'] . '</option>';
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="datesolicitacao">Data de Solicitação <span class="required">*</span>
            </label>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <input type="text" id="dataind" name="datesolicitacao" data-validate-linked="datesolicitacao" class="form-control col-md-7 col-xs-12">
            </div>
        </div>
        <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="valor">Valor <span class="required">*</span>
            </label>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <input type="text" id="valor" name="valor" data-validate-linked="valor" required="required" class="form-control col-md-7 col-xs-12">
            </div>
        </div>
        <div class="ln_solid"></div>
        <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
                <button id="send" type="submit" class="btn btn-success">Salvar</button>
            </div>
        </div>
    </form>
</div>
