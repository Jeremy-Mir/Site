$(document).ready(function () {
    $("form").submit(function () {
        var formID = $(this).attr('id');
        var formNm = $('#' + formID);
        $.ajax({
            type: "POST",
            url: 'email.php',
            data: formNm.serialize(),
            beforeSend: function () {
                $('#result').html('<p style="text-align:center">Отправка...</p>');
            },
            success: function (data) {
                alert("Сообщение отправлено")
            },
            error: function (jqXHR, text, error) {
                $('#result').html(error);
                
            }
        });
        return false;
    });
});
