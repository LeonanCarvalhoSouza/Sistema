VMasker(document.querySelector("#cpf")).maskPattern("999.999.999-99");
VMasker(document.querySelector("#dataNascimento")).maskPattern("99/99/9999");

function getRoot()
{
	var root="http://"+document.location.hostname+"/Meu_Site/";
	return root;
}

//Ajax do formulario de cadastro
$("#formCadastro").on("submit",function(event){
	event.preventDefault();
	var dados=$(this).serialize();

	$.ajax({
		url: getRoot()+'controller/controllerCadastro',
		type: 'post',
		dataType: 'json',
		data: dados,
		success: function(response){
			$('.retornoCad').empty();
			if(response.retorno != 'success'){
				getCaptcha();
				$.each(response.erros,function(key,value){
					$('.retornoCad').append(value+'<br>');

				});
			}else{
				$('.retornoCad').append('Dados inseridos com sucesso!');
			}
		}
	});
});