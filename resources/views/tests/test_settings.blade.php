<div class="notification">
    <?php
    use Tymon\JWTAuth\Facades\JWTAuth;

    $user = App\Models\User::find(123123);
    var_dump($user->id);
    $token = JWTAuth::fromUser($user);
    ?>
    <div class="content">
        <button type="button" class="btn btn-primary" id="apply_settings"> Apply bg color settings</button>
        <p id="token">{{$token}}</p>

        <button type="button" class="btn btn-primary" id="save_settings"> Save settings</button>
        <input type="text" id="bg_setting">

        <p></p>
    </div>

    <div id="response" class="content">
        Test Div
    </div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    console.log('test settings script');
    var $test = $('#response');

    $('#apply_settings').on('click', function () {
        console.log('apply');
        var $token = $('#token').text();
        $.ajax({
            url: "/backend/api/user/settings/test_div_bg_class",
            type: 'GET',
            dataType: 'json',
            headers: {
                'Authorization': 'Bearer ' + $token//'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEyMzEyMywiaXNzIjoiaHR0cDovL2JhY2suZGV2IiwiaWF0IjoxNTA5NTQ3NDI1LCJleHAiOjE1MTAxNTIyMjUsIm5iZiI6MTUwOTU0NzQyNSwianRpIjoiVFJ1R2hNYktxUk5SNUIxRyJ9.rm-ZTrTp5ooLFo5KxdwyLmPau9XrwLvph1sIY3K4sBk'
            },
            contentType: 'application/json; charset=utf-8',
            success: function (result) {
                console.log(result.data.test_div_bg_class);
                var settedClass = result.data.test_div_bg_class;

                $test.removeClass(function (index, className) {
                    return (className.match(/(^|\s)bg-\S+/g) || []).join(' ');
                });

                $test.addClass(settedClass);

                $test.text('Settings Applied: ' + settedClass);

            },
            error: function (error) {
                $('#response').append('Error:' + error);
            }
        });
    });

    $('#save_settings').on('click', function () {
        console.log('save new setting: ' + $newSetting);
        var $newSetting = $('#bg_setting').val();
        var $token = $('#token').text();

        $.ajax({
            url: "/backend/api/user/settings",
            type: 'POST',
            dataType: "json",
            data: JSON.stringify({
                'test_div_bg_class': $newSetting,
            }),
            headers: {
                'Authorization': 'Bearer ' + $token//'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEyMzEyMywiaXNzIjoiaHR0cDovL2JhY2suZGV2IiwiaWF0IjoxNTA5NTQ3NDI1LCJleHAiOjE1MTAxNTIyMjUsIm5iZiI6MTUwOTU0NzQyNSwianRpIjoiVFJ1R2hNYktxUk5SNUIxRyJ9.rm-ZTrTp5ooLFo5KxdwyLmPau9XrwLvph1sIY3K4sBk'
            },
            contentType: 'application/json; charset=utf-8',
            success: function (result) {
                console.log(result.data);
            },
            error: function (error) {
                console.log('Error:' + error);
            }
        });
    });


</script>

<style>
    .bg-red {
        background: red;
    }

    .bg-green {
        background: green;
    }

    .bg-yellow {
        background: yellow;
    }

</style>
