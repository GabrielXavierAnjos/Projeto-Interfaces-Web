function validacao(){
    if(document.form.nome.value==""){
      alert("Por favor preencha o campo Nome.");
      document.form.nome.focus();
      return false;
  }
  if (document.form.email.value=="" || document.form.email.value.indexOf('@')== -1 || document.form.email.value.indexOf('.')==-1) {
    alert("Por favor digite o e-mail válido.");
    document.form.email.focus();
    return false;

  }
}
