$('body').on('change', '#event_main', function () {


    $event_main = $('#event_main option:selected').val();
//    alert($index);
//    alert($event_id);
    $.ajax({
        type: 'post',
        url: 'selectevent.php',
        data: {
            event_main: $event_main,
            context: "fetch_event_from_event_type"
        },
        success: function (response)
        {
            console.log(response);
            $get_s = response.split(",");
            $push_str = "";
            $push_str = "<option value='-1' disabled hidden selected>Select Event</option>";
            for (var i = 0; i < $get_s.length; i++)
            {
                $split = $get_s[i].split(':');
                $push_str += '<option value=' + $split[0] + '>' + $split[1].toUpperCase(); + "</option>";
            }
            $('#package').html($push_str);
        }
    });

});
