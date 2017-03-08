
<script>
    var client = filestack.init('ARVjvVcQ0Q4W4E5DTEbzAz');
    function showPicker() {
        client.pick({
        }).then(function(result) {
            console.log(JSON.stringify(result.filesUploaded))
        });
    }
</script>
<input type="button" value="Upload" onclick="showPicker()" />
