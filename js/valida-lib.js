function iniciaMascaras(){
	$(".valida[val-tipo='data']").mask("99/99/9999");
	$(".valida[val-tipo='telefone']").mask("(99) 99999999?9",{placeholder:" "});
	$(".valida[val-tipo='cep']").mask("99999-999");
	$(".valida[val-tipo='cpf']").mask("999.999.999-99");
	$(".valida[val-tipo='reais']").maskMoney();
}

iniciaMascaras();

function setarComoInvalido(e){
	e.addClass('validacao-erro');
	e.tooltip({title: 'Valor inválido!', trigger: 'manual'});
	e.tooltip('show');
	e.focus();
}

function setarComoValido(e){
	e.removeClass('validacao-erro');
	e.tooltip('destroy');
}

function validar (entrada){
	var tipo = entrada.attr('val-tipo');
	var valor = entrada.val();
	var obg = entrada.attr('val-obg');
	
	if(obg==='s'){
		if(valor!='')
		setarComoValido(entrada);
		else
		setarComoInvalido(entrada);
	}
	
	if(valor!=''){
		if (tipo==='palavra'){
			if(valor.indexOf(' ')!=-1){
				setarComoInvalido(entrada);
				}else{
				setarComoValido(entrada);
			}
		}else
		if (tipo==='inteiro'){
			if(Math.floor(valor) == valor && $.isNumeric(valor)){
				setarComoValido(entrada);
				}else{
				setarComoInvalido(entrada);
			}
		}else
		if (tipo==='decimal'){
			if(valor.isNumeric){
				setarComoValido(entrada);
				}else{
			setarComoInvalido(entrada);
			}
		}
		
	}
}

$('.valida').bind('change paste keyup', function() {
	validar($(this));
});

$('.valida-form').submit(function () {
	var erro = false;
	$('.valida').each(function() {
		validar($(this));
		if($(this).hasClass('validacao-erro')){
			erro = true;
			return false;
		}
	});
	if(erro){
		event.preventDefault();
		}else{
	}
});

function validarCPF(cpf) {  
	cpf = cpf.replace(/[^\d]+/g,'');    
	if(cpf == '') return false; 
	// Elimina CPFs invalidos conhecidos    
	if (cpf.length != 11 || 
	cpf == "00000000000" || 
	cpf == "11111111111" || 
	cpf == "22222222222" || 
	cpf == "33333333333" || 
	cpf == "44444444444" || 
	cpf == "55555555555" || 
	cpf == "66666666666" || 
	cpf == "77777777777" || 
	cpf == "88888888888" || 
	cpf == "99999999999")
	return false;       
	// Valida 1o digito 
	add = 0;    
	for (i=0; i < 9; i ++)       
	add += parseInt(cpf.charAt(i)) * (10 - i);  
	rev = 11 - (add % 11);  
	if (rev == 10 || rev == 11)     
	rev = 0;    
	if (rev != parseInt(cpf.charAt(9)))     
	return false;       
	// Valida 2o digito 
	add = 0;    
	for (i = 0; i < 10; i ++)        
	add += parseInt(cpf.charAt(i)) * (11 - i);  
	rev = 11 - (add % 11);  
	if (rev == 10 || rev == 11) 
	rev = 0;    
	if (rev != parseInt(cpf.charAt(10)))
	return false;       
	return true;   
}	