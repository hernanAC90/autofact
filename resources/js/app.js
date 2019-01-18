
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


$(document).ready(function () {
    $('#send-questions').on('click',function (e) {
        e.preventDefault();
        var form = $('#form-questions');
        var formData = form.serializeArray();
        formData.splice(0,1);

        $.ajax({
            type: "POST",
            url: "/questions",
            data: formData,
            dataType: "json",
            success:function(data) {
                $('#myModal').modal('toggle')
                $('#message').html(data.message);
                $('#myModal').on('hidden.bs.modal', function () {
                   window.location.reload();
                });
            }
        });
    });
});