$(".titulo").attr("contentEditable", true);
$(".footer").attr("contentEditable", true);

$(".btn-editar").on('click', function() {

    var titulo = $(".titulo").text();
    var footer = $(".footer").text();
    var id = $(".id").text();

    /*console.log(titulo);
    console.log(footer);*/


    $.ajax({
        type: 'post',
        url: 'editar',
        data: {
            '_token': $('input[name=_token').val(),
            // '_token': '{{csrf_token()}}'
            'titulo': titulo,
            'footer': footer

        },
        success: function(data) {
            window.location.reload();
        },


    });

})