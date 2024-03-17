<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email from a client at SurfCo</title>
</head>
<body>
    <h1>New Email from a Client - Surf Co</h1>
    <p>Hello, you've recieved a message from the user {{ $name }} </p>

    <h2>Message:</h2>
    <p>
    {{ $message }}
    </p>
    <h2>Email</h2>
    {{ $email }}
    <h2>Birthdate:</h2>
    <p>
    {{ $birthdate }}
    </p>
    <h2>Birth Place:</h2>
    <p>{{ $place }}
    </p>
    <h2>Phone</h2>
    <p>{{ $phone}}
    </p>
    <h2>Company</h2>
    <p>{{ $company}}
    </p>
    <h2>Message</h2>
    <p>{{ $message}}
    </p>
    
    
   

</body>
</html>