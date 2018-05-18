<!DOCTYPE html>
<html>
    <head>
    <titile></titile>
</head>
<body>
    <ul>
        @foreach($contacts as $contact)
        <li>{{ $contact->body }}</li>
        @endforeach
    </ul>
</body>
</html>