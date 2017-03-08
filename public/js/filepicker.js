var client = filestack.init('ARVjvVcQ0Q4W4E5DTEbzAz');

function showPicker() {
    client.pick({}).then(function (result) {
        var data = {
            password: $('.password').val(),
            data: result.filesUploaded
        };
        $.ajax({
            url: '/file/store',
            method: 'POST',
            data: data,
            success: function (data) {
                location.reload();
            },
            error: function () {
                console.log('We did not succeed!');
            }
        });
    });
}
