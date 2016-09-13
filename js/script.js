$('#form').bind('submit', function (e) {
    e.preventDefault();
    data = $(this).serialize();

    $.ajax({
        type: 'POST',
        url: 'php/imc.php',
        data: data,
        dataType: 'json',
        success: function (json) {
            $('.resultado').text(json.resultado);
        },
        error: function (xhr, status, text) {
            console.log("erro");
            console.log(xhr);
            console.log(status);
            console.log(text);
        }
    });
});
