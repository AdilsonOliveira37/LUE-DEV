// Arquivo JS da página HOME
var frm = $('.form-horizontal');

    frm.submit(function (e) {

        e.preventDefault();

        $.ajax({
            type: frm.attr('method'),
            url: frm.attr('action'),
            data: frm.serialize(),
            success: function (data) {
                alert(data);
                $('#nomeInput').val("");
                $('#emailInput').val("");
                $('#assuntoInput').val("");
                $('#msgInput').val("");
            },
            error: function (data) {
                alert('Ops! Parece que ocorreu um erro');
                alert(data);
            },
        });
    });
