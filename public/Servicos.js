 document.querySelectorAll('.btn-servico').forEach(function (botao) {
    botao.addEventListener('click', function () {
      Swal.fire({ icon: 'success', title: 'Servico agendado', text: botao.dataset.servico + ' foi selecionado.', confirmButtonColor: '#dc3545' });
    });
  });