<?php

use Tymon\JWTAuth\Facades\JWTAuth;

$user = App\Models\User::find(123123);
//var_dump($user->id);
$token = JWTAuth::fromUser($user);
?>
<div class="notification">
    <div class="content">
        <button type="button" class="btn btn-primary" id="get_metadata"> Get Metadata for Orders</button>
        <p id="token" hidden>{{$token}}</p>
        {{--<button type="button" class="btn btn-primary" id="show_metadata"> Show Order</button>--}}
        <p></p>
    </div>

    <div id="response" class="content">
        <h2>Orders:</h2>
    </div>

</div>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>
    var $token = $('#token').text();
    console.log('test metadata script');

    $('#get_metadata').on('click', function () {
        $.ajax({
            url: "/backend/api/metadata/Orders",
            type: 'GET',
            dataType: 'json',
            contentType: 'application/json; charset=utf-8',
            success: function (result) {
                var res = result.data;
                console.log(res.orders);
                showMetadata(res.orders);
            },
            error: function (error) {
                $('#response').append('Error:' + error);
            }
        });
    });

    var $result = $('#response');

    function showMetadata(metadata) {
        var fields = metadata.fields;
        var relations = metadata.relations;
        for (var field in fields) {
            // console.log(field);
            if (fields.hasOwnProperty(field)) {
                if (fields[field].type != 'relation') {
                    $result.append(inputText(field, fields[field].label));
                } else {
                    $result.append(showRelation(relations[field], field));
                }

            }
        }
    }

    function inputText(field, label) {
        var $input = '<div class="form-group col-sm-12">\n' +
            '  <label for="' + field + '">' + label + ':</label>\n' +
            '  <input type="text" class="form-control" id="' + field + '">\n' +
            '</div>';
        return $input;
    }

    function showRelation(relation, label) {
        var $relationDiv = '';
        var $options = '';

        $.ajax({
            url: "/backend/api" + relation.path,
            type: 'GET',
            dataType: 'json',
            headers: {
                'Authorization': 'Bearer ' + $token
            },
            contentType: 'application/json; charset=utf-8',
            success: function (result) {
                var res = result.data;

                for (var item in res) {
                    $options += '<option>' + JSON.stringify(res[item]) + '</option> \n';
                }
                $('#' + label).append($options);

            },
            error: function (error) {
                console.log('Error:' + error);
            }
        });

        $relationDiv += '<div class="form-group col-sm-12">\n' +
            '      <label for="' + label + '">Select ' + label + ':</label>\n' +
            '      <select class="form-control" id="' + label + '">\n' +
            '      </select>\n' +
            '    </div>';

        return $relationDiv
    }

</script>
