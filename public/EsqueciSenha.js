document.getElementById('formRecuperar').addEventListener('submit', function (event) {
    event.preventDefault();
    const formData = new FormData(this);
    fetch(this.action, {
        method: 'POST',
        body: formData,
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]') ? document.querySelector('meta[name="csrf-token"]').getAttribute('content') : ''
        }
    }).then(response => {
        if (response.ok) {
            Swal.fire({ icon: 'success', title: 'Email enviado', text: 'Confira sua caixa de entrada.', confirmButtonColor: '#dc3545' });
        } else {
            Swal.fire({ icon: 'error', title: 'Erro', text: 'Ocorreu um erro.', confirmButtonColor: '#dc3545' });
        }
    });
});