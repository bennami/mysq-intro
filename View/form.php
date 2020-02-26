<?php


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css"
          rel="stylesheet"/>
    <title>MySQL</title>
</head>
<body>
<div  class="container">
    <h1>Form to test MySQL</h1>

    <form action="?page=student" method="post">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>ID:</label>
                <input type="text"  name="id" class="form-control"/>
            </div>
            <div></div>
        </div>

        <fieldset>
            <legend>Information</legend>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label >First name:</label>
                    <input type="text" name="first_name" class="form-control"required>
                </div>
                <div class="form-group col-md-6">
                    <label >Last name:</label>
                    <input type="text"  name="last_name" class="form-control"required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control "required>
                </div>
                <div class="form-group col-md-6">
                    <label>Linkedin</label>
                    <input type="text"  name="linkedin" class="form-control required">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Github</label>
                    <input type="text" name="github" class="form-control required">
                </div>
                <div class="form-group col-md-6">
                    <label>Email</label>
                    <input type="text"  name="email" class="form-control required">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="preferred_language" > Choose language here

                        <select name="preferred_language">
                            <option value="brazillian">brazillian</option>
                            <option value="chinese">chinese</option>
                            <option value="darija-arabic">darija-arabic</option>
                            <option value="french">french</option>
                            <option value="japanese">japanese</option>
                            <option value="spanish">spanish</option>
                        </select>
                    </label>
                    <!-- <input type="text" name="preferred_language" class="form-control required">-->
                </div>
                <div class="form-group col-md-6">
                    <label>Avatar</label>
                    <input type="text" name="avatar" class="form-control required">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Video</label>
                    <input type="text" name="video" class="form-control required">
                </div>
                <div class="form-group col-md-6">
                    <label>Quote</label>
                    <input type="text" name="quote" class="form-control required">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Quote Author</label>
                    <input type="text" name="quote_author" class="form-control required">
                </div>
                <div class="form-group col-md-6">
                    <label> Created at: </label>
                    <input type="text" name="created_at" class="form-control required">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </fieldset>


</div>

<style>
    footer, table{
        text-align: center;
    }

    table{
        margin: auto;
    }
</style>
</body>
</html>
