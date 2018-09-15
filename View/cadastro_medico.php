<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro </title>
        <link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
        <link rel="shortcut icon" href="img/favicon.ico" />
        <script type="text/javascript" src="js/script.js"></script>
    </head>
    <body>
        <h1> Cadastre-se </h1>
            <br />
            <form method="post" name="frmCadastro">
                <table>
                    <tr>
                        <td>CPF:</td>
                        <td><input type="text" name="txtCpf" onkeydown="javascript: fMasc( this, mCPF );" maxlength="14" placeholder="Digite seu CPF" autocomplete="off"/></td>
                            <script type="text/javascript">
                            function fMasc(objeto,mascara) {
                               	obj=objeto
                                masc=mascara
                                setTimeout("fMascEx()",1)
                            }
                            function mCPF(txtCpf){
				txtCpf=txtCpf.replace(/\D/g,"")
				txtCpf=txtCpf.replace(/(\d{3})(\d)/,"$1.$2")
				txtCpf=txtCpf.replace(/(\d{3})(\d)/,"$1.$2")
				txtCpf=txtCpf.replace(/(\d{3})(\d{1,2})$/,"$1-$2")
				return txtCpf
                            }
                            function fMascEx() {
				obj.value=masc(obj.value)
                            }                            
                            </script>
                                                    
                        <td>Data de Nascimento:</td>
                        <td><input type="text" name="txtDtNasc" onkeydown="javascript: fMasc( this, mDtNasc );" placeholder="00/00/0000" maxlength="10" autocomplete="off" /></td>
                            <script type="text/javascript">
                            function fMasc(objeto,mascara) {
                               	obj=objeto
                                masc=mascara
                                setTimeout("fMascEx()",1)
                            }
                            function mDtNasc(txtDtNasc){
				txtDtNasc=txtDtNasc.replace(/\D/g,"")
				txtDtNasc=txtDtNasc.replace(/(\d{2})(\d)/,"$1/$2")
                                txtDtNasc=txtDtNasc.replace(/(\d{2})(\d)/,"$1/$2")
				return txtDtNasc
                            }
                            function fMascEx() {
				obj.value=masc(obj.value)
                            }                            
                            </script>
                    </tr>
                    <tr>
                        <td>Nome:</td>
                        <td><input type="text" name="txtNome" placeholder="Digite seu nome completo" size="80" autocomplete="off"/></td>
                    </tr>
                    <tr>
                    <tr>
                        <td>Sexo:</td>
                        <td>
                            <select name="slSexo">
                                <option value="m">Masculino</option>
                                <option value="f">Feminino</option>
                            </select> 
                        </td>
                    </tr>
                    <tr>
                        <td>CRM:</td>
                        <td><input type="text" name="txtCrm" placeholder="Digite o CRM" autocomplete="off"></td>
                        
                        <td>Especialidade:</td>
                        <td>
                            <select name="slEspecialidade">
                                <option> Selecione</option>
                                <option value="acupuntura">Acupuntura</option>
                                <option value="alergia">Alergia e Imunologia</option>
                                <option value="anestesiologia">Anestesiologia</option>
                                <option value="angiologia">Angiologia</option>
                                <option value="cancerologia">Cancerologia</option>
                                <option value="cardiologia">Cardiologia</option>
                                <option value="cirurgiaCardio">Cirurgia Cardiovascular</option>
                                <option value="cirurgiaMao">Cirurgia da Mão</option>
                                <option value="cirurgiaMao">Cirurgia da Mão</option>
                                <option value="cirurgiaCabeca">Cirurgia de Cabeça e Pescoço</option>
                                <option value="cirurgiaApareDigest">Cirurgia do Aparelho Digestivo</option>
                                <option value="cirurgiaGeral">Cirurgia Geral</option>
                                <option value="cirurgiaPediatrica">Cirurgia Pediátrica</option>
                                <option value="cirurgiaPlastica">Cirurgia Plástica</option>
                                <option value="cirurgiaToracica">Cirurgia Torácica</option>
                                <option value="cirurgiaVascular">Cirurgia Vascular</option>
                                <option value="clinica">Clínica Médica</option>
                                <option value="coloproctologia">Coloproctologia</option>
                                <option value="dermatologia">Dermatologia</option>
                                <option value="endocrinologia">Endocrinologia e Metabologia</option>
                                <option value="endoscopia">Endoscopia</option>
                                <option value="gastroenterologia">Gastroenterologia</option>
                                <option value="genetica">Genética Médica</option>
                                <option value="geriatria">Geriatria</option>
                                <option value="ginecologia">Ginecologia e Obstetrícia</option>
                                <option value="hematologia">Hematologia e Hemoterapia</option>
                                <option value="homeopatia">Homeopatia</option>
                                <option value="infectologia">Infectologia</option>
                                <option value="mastologia">Mastologia</option>
                                <option value="medicinaFamilia">Medicina de Família e Comunidade</option>
                                <option value="medicinaEmergencia">Medicina de Emergência</option>
                                <option value="medicinaTrabalho">Medicina do Trabalho</option>
                                <option value="medicinaEsportiva">Medicina Esportiva</option>
                                <option value="medicinaFisica">Medicina Física e Reabilitação</option>
                                <option value="medicinaIntensiva">Medicina Intensiva</option>
                                <option value="medicinaLegal">Medicina Legal e Perícia Médica</option>
                                <option value="medicinaEmergencia">Medicina de Emergência</option>
                                <option value="medicinaNuclear">Medicina Nuclear</option>
                                <option value="medicinaPreventiva">Medicina Preventiva e Social</option>
                                <option value="medicinaNefrologia">Nefrologia</option>
                                <option value="neurocirurgia">Neurocirurgia</option>
                                <option value="neurologia">Neurologia</option>
                                <option value="nutrologia">Nutrologia</option>
                                <option value="obstetricia">Obstetrícia</option>
                                <option value="oftalmologia">Oftalmologia</option>
                                <option value="ortopedia">Ortopedia e Traumatologia</option>
                                <option value="otorrino">Otorrinolaringologia</option>
                                <option value="patologia">Patologia</option>
                                <option value="patologiaClinica">Patologia Clínica/Medicina Laboratorial</option>
                                <option value="pediatria">Pediatria</option>
                                <option value="pneumologia">Pneumologia</option>
                                <option value="psiquiatria">Psiquiatria</option>
                                <option value="radiologia">Radiologia</option>
                                <option value="radioterapia">Radioterapia</option>
                                <option value="reumato">Reumatologia</option>
                                <option value="urologia">Urologia</option>
                            </select>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>CEP</td>
                        <td><input type="text" name="txtCep" onkeydown="javascript: fMasc( this, mCEP );" maxlength="9" placeholder="Digite o CEP" autocomplete="off"/></td>
                            <script type="text/javascript">
                            function fMasc(objeto,mascara) {
                               	obj=objeto
                                masc=mascara
                                setTimeout("fMascEx()",1)
                            }
                            function mCEP(txtCep){
				txtCep=txtCep.replace(/\D/g,"")
				txtCep=txtCep.replace(/(\d{5})(\d{3})$/,"$1-$2")
				return txtCep
                            }
                            function fMascEx() {
				obj.value=masc(obj.value)
                            }                            
                            </script>
                        
                        <td>Logradouro:</td>
                        <td><input type="text" name="txtLogradouro" placeholder="Rua, Av, Quadra..." size="60" autocomplete="off"/></td>
                    </tr>
                    <tr>
                        <td>Complemento:</td>
                        <td><input type="text" name="txtComplemento" placeholder="Lote, Casa, Ap..." autocomplete="off"/></td>
                    
                        <td>Bairro:</td>
                        <td><input type="text" name="txtBairro" placeholder="Digite o bairro" autocomplete="off"/></td>
                    </tr>
                    <tr>
                        <td>Cidade:</td>
                        <td><input type="text" name="txtCidade" placeholder="Digite a cidade" autocomplete="off"></td>
                        
                        <td>UF:</td>
                        <td>
                            <select name="slUF">
                                <option> Selecione   </option>
                                <option value="AC">AC</option>
                                <option value="AL">AL</option>
                                <option value="AM">AM</option>
                                <option value="AP">AP</option>
                                <option value="BA">BA</option>
                                <option value="CE">CE</option>
                                <option value="DF">DF</option>
                                <option value="ES">ES</option>
                                <option value="GO">GO</option>
                                <option value="MA">MA</option>
                                <option value="MG">MG</option>
                                <option value="MS">MS</option>
                                <option value="MT">MT</option>
                                <option value="PA">PA</option>
                                <option value="PB">PB</option>
                                <option value="PE">PE</option>
                                <option value="PI">PI</option>
                                <option value="PR">PR</option>
                                <option value="RJ">RJ</option>
                                <option value="RN">RN</option>
                                <option value="RO">RO</option>
                                <option value="RR">RR</option>
                                <option value="RS">RS</option>
                                <option value="SC">SC</option>
                                <option value="SE">SE</option>
                                <option value="SP">SP</option>
                                <option value="TO">TO</option>
                            </select>
                    </tr>
                    <tr>
                        <td>Celular:</td>
                        <td><input type="text" name="txtCelular" placeholder="(XX)XXXXX-XXXX" size="14" autocomplete="off"></td>
                        
                        <td>Alternativo:</td>
                        <td><input type="text" name="txtAlternativo" placeholder="(XX)XXXXX-XXXX" size="14" autocomplete="off"></td>
                    </tr>

                        <td>E-mail:</td>
                        <td><input type="text" name="txtEmail" placeholder="Digite seu e-mail" size="80" autocomplete="off" /></td>
                    </tr>
                    <tr>
                        <td>Confirme o E-mail:</td>
                        <td><input type="text" name="txtConfEmail" placeholder="Confirme seu e-mail" size="80" autocomplete="off" /></td>
                    </tr>
                    <tr>
                        <td>Senha:</td>
                        <td><input onKeyUp="validarSenha('txtPass', 'txtPassAccept', 'resultadoCadastro');" type="password" id="txtPass" name="txtPass" placeholder="*********" autocomplete="off" /></td>
                    </tr>
                    <tr>
                        <td>Confirme a senha:</td>
                        <td><input type="password" onKeyUp="validarSenha('txtPass', 'txtPassAccept', 'resultadoCadastro');" id="txtPassAccept" name="txtPassAccept" placeholder="*********" autocomplete="off" /></td>
                    </tr>
                    <tr>
                        <td colspan="2"><p id="resultadoCadastro" style="font-weight: bold;">&nbsp;</p></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" name="btnSubmit" value="Cadastrar" class="btnSubmit" /> <a href="index.php">Voltar</a>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>