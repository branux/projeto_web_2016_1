
$(document).ready( function() {

   /* Executa a requisição quando o campo CEP perder o foco */
   $('#cep').blur(function(){



           /* Configura a requisição AJAX */
           $.ajax({
                url : 'controller/cep/consultar_cep.php', /* URL que será chamada */ 
                type : 'POST', /* Tipo da requisição */ 
                data: 'cep=' + $('#cep').val(), /* dado que será enviado via POST */
                dataType: 'json', /* Tipo de transmissão */
                success: function(data){
                  //alert(data.ibge.substring(0, 2));
                    if(data.ibge > 0){
                        $('#logradouro').val(data.logradouro);
                        $('#bairro').val(data.bairro);
                        $('#cidade').val(data.ibge);
                        $('#estado').val(data.ibge.substring(0, 2));
                        $('#numero').focus();
                    }else{

                        $('#rua').val("");
                        $('#bairro').val("");
                        $('#cidade').val("");
                        $('#estado').val("");
 
                        $('#rua').focus();

                    }
                }
           });   
   return false;    
   })
});