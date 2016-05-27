<!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de Veículo</title>
    </head>
    <body>
        <form id="form_cadastro" name="form_cadastro" action="veiculo/cadastrar" method="post">
            <label for="lbl_codigo">Código: </label>
            <input type="text" readonly id="ipt_codigo" name="ipt_codigo" disabled></input>
            <br/>
            <label for="lbl_tipo">Tipo: </label>
            <select id="slc_tipo" name="slc_tipo" required>
                <option value="">Selecione</option>
                <option value="0">Automóvel</option>
                <option value="1">Motocicleta</option>
            </select>
            <br/>
            <label for="lbl_marca">Marca: </label>
            <select id="slc_marca" name="slc_marca" required>
                <option value="">Selecione</option>
                <option value="0">Ford</option>
                <option value="1">Hyundai</option>
            </select>
            <br/>
            <label for="lbl_modelo">Modelo: </label>
            <select id="slc_modelo" name="slc_modelo" required>
                <option value="">Selecione</option>
                <option value="0">New Fiesta</option>
                <option value="1">i30</option>
            </select>
            <br>
            <label for="lbl_ano">Ano: </label>
            <input type="number" id="ipt_ano" name="ipt_ano"></input>
            <br>
            <label for="lbl_cor">Cor: </label>
            <input type="text" id="ipt_cor" name="ipt_cor"></input>
            <br>
            <label for="lbl_placa">Placa: </label>
            <input type="text" id="ipt_placa" name="ipt_placa"></input>
            <br>
            <label for="lbl_renavan">Renavan: </label>
            <input type="text" id="ipt_renavan" name="ipt_renavan"></input>
            <br>
            <label for="lbl_chassi">Chassi: </label>
            <input type="text" id="ipt_chassi" name="ipt_chassi"></input>
            <br>
            <button type="submit" id="btn_salvar" name="btn_salvar">Salvar</button>
            <button type="cancel" id="btn_cancelar" name="btn_cancelar">Cancelar</button>
        </form>
    </body>
</html>