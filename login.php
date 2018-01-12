<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="input/css/bootstrap.min.css">
    <link rel="stylesheet" href="input/css/admin.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
    <h1>Form login</h1>
        <form action="inde2x.php" method='get'>
            <div class="row">
                <input class='form-control mt-2' type="text" name='mail' placeholder='Email'>
            </div>
            <div class="row">
                <input class='form-control mt-2' type="text" name='pass' placeholder='password'>
            </div>
            <div id ='name' class="row col-md-3 col-md-offset-4">
                <input class='form-control mt-2' type="submit" value='submit'>
            </div>
        </form>
    </div>
</body>
</html>