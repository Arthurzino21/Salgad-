function validarCPF(cpf){

cpf = cpf.replace(/\D/g,'');

if(cpf.length != 11){

alert("CPF inválido");

return false;

}

return true;

}