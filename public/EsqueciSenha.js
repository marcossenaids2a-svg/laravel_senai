$(document).ready(function () {
    var $form = $('#formRecuperar');

    $form.on('submit', function (event) {
        event.preventDefault();
        var formData = new FormData(this);
        var csrfToken = $('meta[name="csrf-token"]').attr('content') || '';

        fetch(this.action, {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': csrfToken
            }
        }).then(function (response) {
            if (response.ok) {
                Swal.fire({ icon: 'success', title: 'Email enviado', text: 'Confira sua caixa de entrada.', confirmButtonColor: '#dc3545' });
            } else {
                Swal.fire({ icon: 'error', title: 'Erro', text: 'Ocorreu um erro.', confirmButtonColor: '#dc3545' });
            }
        });
    });
});