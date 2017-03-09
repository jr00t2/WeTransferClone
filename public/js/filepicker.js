var client = filestack.init(api_key);

function upload() {
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
function copyToClipboard(ele) {
    event.preventDefault();
    ele.prev().select();
    var copied = false;
    try {
        copied = document.execCommand('copy');
    }
    catch(ex) {
        copied = false;
    }

    if(copied)
    {
        $('.copied-text').css('display', 'block');
    }
}

