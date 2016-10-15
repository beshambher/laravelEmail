<!DOCTYPE html>
<html>
<body>
<div style="width: 80%; padding: 10%; background: #fcf8e3;">
    <div>
        <h1 style="font-size: large; font-weight: bold;">Thank You :)</h1>
    </div>
    <br/>
    <div style="margin: 1%;">
        <h3>Hi <strong>{{ $user['first_name'].' '.$user['last_name'] }}!</strong></h3>
        <p style="font-size: 14px; text-align: justify; padding-left: 2%;">
        We have received your message.
            <br/><br/>
            <span style="margin: 2%; color: darkgray;">
                "<i>
                    {{ $user['message'] }}
                </i>"
            </span>
            <br/><br/>
            We will get back to you within 24 hours.
        </p>
    </div>
</div>

</body>
</html>````