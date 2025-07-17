<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support Request Submitted</title>
</head>
<body>
    <h2>New Support Request</h2>
    <p><strong>Name:</strong> {{ $supportRequest->name }}</p>
    <p><strong>Email:</strong> {{ $supportRequest->email }}</p>
    <p><strong>Phone:</strong> {{ $supportRequest->phone }}</p>
    <p><strong>Model Number:</strong> {{ $supportRequest->model_number }}</p>
    <p><strong>Description:</strong> {{ $supportRequest->describe_the_issue }}</p>
    <p><strong>Issue:</strong> {{ $issueName }}</p>
    <p><strong>Brand:</strong> {{ $brandName }}</p>
    <p><strong>Category:</strong> {{ $categoryName }}</p>
</body>
</html>
