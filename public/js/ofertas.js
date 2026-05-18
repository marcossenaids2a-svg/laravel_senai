document.querySelectorAll('.btn-oferta').forEach(function (botao) {
    botao.addEventListener('click', function () {
      Swal.fire({ icon: 'success', title: 'Oferta selecionada', text: botao.dataset.moto + ' foi adicionada ao atendimento.', confirmButtonColor: '#dc3545' });
    });
  });