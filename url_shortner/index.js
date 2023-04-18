$("#ls-button").click(function () {

    var url = "process.php";
    var lurl = $('#longurl').val();
    $.ajax({
        type: "POST",
        url: url,
        data: { longurl: lurl },
        success: function (data) {
            if (data.status) {
                $("#error").html('');
                $("#success").html('<h5>Link is shorted successfully </h5><div class="alert alert-success" role="alert">http://localhost/url_shortner/' + data.shorted + '</div>')
            }
            else {
                $("#success").html('');
                $("#error").html('<div class="alert alert-danger " role="alert">' + data.msg + '</div>');
            }
            $('#longurl').val('');
        },
        dataType: 'json'
    });
});