$(document).ready(function () {
    $('.btn-oferta').on('click', function () {
      var $botao = $(this);
      Swal.fire({
        icon: 'success',
        title: 'Oferta selecionada',
        text: $botao.data('moto') + ' foi adicionada ao atendimento.',
        confirmButtonColor: '#dc3545'
      });
    });
  });