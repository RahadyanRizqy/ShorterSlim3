<div>
    <label for="dataPath">Enter Data Path:</label>
    <input type="text" id="dataPath" value="/mysite" style="width: 100%;" />
</div>

<div style="margin-top: 10px;">
    <button id="fetchDataBtn">Fetch Data</button>
</div>

<div style="margin-top: 20px;">
    <textarea id="output" rows="10" style="width: 100%;"></textarea>
</div>

<script>
$(document).ready(function() {
    $('#fetchDataBtn').click(function() {
        var hostname = window.location.hostname;
        var dataPath = $('#dataPath').val().trim();
        var dataUrl = 'http://' + hostname + dataPath;

        $.ajax({
            url: dataUrl,
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                $('#output').val((data, null, 4));
            },
            error: function(xhr, status, error) {
                $('#output').val('Error: ' + status + ' - ' + error);
            }
        });
    });
});
</script>
