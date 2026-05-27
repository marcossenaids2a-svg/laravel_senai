$(document).ready(function () {
    $(".btn-comprar").on("click", function () {
        var $botao = $(this);
        var moto = $botao.data("moto") || "";
        var preco = $botao.data("preco") || "";
        var checkoutUrl = "/cadastro2?moto=" + encodeURIComponent(moto) + "&preco=" + encodeURIComponent(preco);

        if (typeof Swal === "undefined") {
            window.location.href = checkoutUrl;
            return;
        }

        Swal.fire({
            icon: "success",
            title: "Pedido iniciado",
            text: "Voce escolheu " + moto + ". Vamos para o checkout.",
            confirmButtonColor: "#dc3545",
            showConfirmButton: false,
            timer: 1100,
            timerProgressBar: true,
            allowOutsideClick: false,
            allowEscapeKey: false,
        }).then(function () {
            window.location.href = checkoutUrl;
        });
    });
});
