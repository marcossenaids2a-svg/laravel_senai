$(document).ready(function () {

    $("#btn_alterar").click(function () {
        $.ajax({
            type: "PUT",
            url: "../api/alterar_produto",
            data: {
                nome_produto: $("#nome_produto").val(),
                descricao_produto: $("#descricao_produto").val(),
                preco_produto: $("#preco_produto").val().toString().replace(',', '.'),
                quantidade_produto: $("#estoque_produto").val(),
                tipo_produto: $("#tipo_produto").val(),
                produto_id: $("#id_produto").val(),
            },
            dataType: "JSON",
            success: function (data) {
                console.log(data);
                if (data.erro == "n") {
                    swal.fire({
                        title: "Sucesso!",
                        text: "Produto alterado com sucesso!",
                        icon: "success",
                    });
                } else {
                    swal.fire({
                        title: "Erro!",
                        text: "deu ruim :(",
                        icon: "error",
                    });
                }
            },
        });

        $(btn_excluir).click(function () {
            $.ajax({
                type: "DELETE",
                url: "../api/excluir_produto",
                data: {
                    produto_id: $("#id_produto").val(),
                },
                dataType: "JSON",
                success: function (data) {
                    console.log(data);
                    if (data.erro == "n") {
                        swal.fire({
                            title: "Sucesso!",
                            text: "Produto excluído com sucesso!",
                            icon: "success",
                        });
                        window.location.href = "../listar_produto";
                    } else {
                        swal.fire({
                            title: "Erro!",
                            text: "deu ruim :(",
                            icon: "error",
                        });
                    }
                },
            });
        });
    });
});
