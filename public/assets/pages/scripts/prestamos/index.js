$(document).ready(function () {
    $('.libro-devolucion').on('click', function (event) {
        event.preventDefault();
        const url = $(this).attr('href');
        const data = {
            _token: $('input[name=_token]').val(),
            _method: 'put'
        }
        ajaxRequest(data, url);
    });

    function ajaxRequest(data, url) {
        $.ajax({
            url: url,
            type: 'POST',
            data: data,
            success: function (respuesta) {
                
            },
            error: function () {

            }
        });
    }
});
