<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Clean Contact Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="{{ asset('contact-form/css/normalize.css') }}"/>
    <link rel="stylesheet" href="{{ asset('contact-form/css/style.css') }}"/>
</head>

<body>
<div class="container">
    <div class="row header">
        <h1>CONTACT US &nbsp;</h1>
        <h3>Fill out the form below to learn more!</h3>
    </div>
    <div class="row body">
        <form action="{{ url('contact') }}" method="post">
            {{ method_field('post') }}
            {{ csrf_field() }}
            <ul>

                <li>
                    <p class="left">
                        <label for="first_name">First Name</label>
                        <input type="text" name="first_name" placeholder="John"/>
                    </p>
                    <p class="pull-right">
                        <label for="last_name">Last Name</label>
                        <input type="text" name="last_name" placeholder="Smith"/>
                    </p>
                </li>

                <li>
                    <p>
                        <label for="email">Email <span class="req">*</span></label>
                        <input type="email" name="email" placeholder="john.smith@gmail.com"/>
                    </p>
                </li>
                <li>
                    <div class="divider"></div>
                </li>
                <li>
                    <label for="message">Message</label>
                    <textarea cols="46" rows="3" name="message"></textarea>
                </li>

                <li>
                    <input class="btn btn-submit" type="submit" value="Submit"/>
                    <small>or press <strong>Enter</strong></small>
                </li>

            </ul>
        </form>
    </div>
</div>

</body>
</html>