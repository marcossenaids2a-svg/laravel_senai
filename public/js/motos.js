document.querySelectorAll('.btn-comprar').forEach(function (botao) {
    botao.addEventListener('click', function () {
      Swal.fire({ icon: 'success', title: 'Pedido iniciado', text: 'Voce escolheu ' + botao.dataset.moto + '.', confirmButtonColor: '#dc3545' });
    });
  });