<!DOCTYPE html>
<html>
<head>
    <title>Laravel Relationships</title>
</head>
<body>
    <h1>User Relationships</h1>
    
    <h2>User Profile (One-to-One)</h2>
    <p>Name: {{ $userData->name }}</p>
    <p>Phone: {{ $userData->profile->phone }}</p>
    <p>Bio: {{ $userData->profile->bio }}</p>

    <h2>User Posts (One-to-Many)</h2>
    @foreach($userData->posts as $post)
        <div>
            <h3>{{ $post->title }}</h3>
            <p>{{ $post->content }}</p>
        </div>
    @endforeach

    <h2>User Roles (Many-to-Many)</h2>
    @foreach($userData->roles as $role)
        <p>Role: {{ $role->name }}</p>
    @endforeach
</body>
</html>