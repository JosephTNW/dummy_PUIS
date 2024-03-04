@php
    $userId = 123; // Replace with the actual user ID

    // Simulated user info based on the passed ID
    $user = [
        'id' => $userId,
        'name' => 'John Doe',
        'email' => 'johndoe@example.com',
        // Add more user properties as needed
    ];

    // Return user data as an array for API communications
    $userDataForApi = [
        'userID' => $user['userID'],
        'name' => $user['name'],
        'email' => $user['email'],
        'gpa' => $user['gpa'], 
        'major' => $user['major'],
        'minor' => $user['minor'],
        'graduationYear' => $user['graduationYear'],
        'bio' => $user['bio'] 
        // Add more user properties as needed
    ];

    return $userDataForApi;
@endphp
