document.addEventListener('DOMContentLoaded', function () {
  const form = document.getElementById('formCadastro');

  if (!form) {
    return;
  }

  form.addEventListener('submit', function () {
    Swal.fire({
      icon: 'success',
      title: 'Cadastro enviado',
      text: 'Sua conta foi criada para teste.',
      confirmButtonColor: '#dc3545'
    });
  });
});
