$(document).ready(function () {
  var $form = $('#formCadastro');

  if (!$form.length) {
    return;
  }

  $form.on('submit', function () {
    Swal.fire({
      icon: 'success',
      title: 'Cadastro enviado',
      text: 'Sua conta foi criada para teste.',
      confirmButtonColor: '#dc3545'
    });
  });
});
