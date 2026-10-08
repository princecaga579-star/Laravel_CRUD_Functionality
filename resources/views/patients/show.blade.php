<!DOCTYPE html>
<html>
<head>
    <title>Patient Details</title>
</head>
<body>

    <h1>Patient Details</h1>

    <p><strong>ID:</strong> {{ $patient->id }}</p>
    <p><strong>Name:</strong> {{ $patient->name }}</p>
    <p><strong>Age:</strong> {{ $patient->age }}</p>
    <p><strong>Gender:</strong> {{ $patient->gender }}</p>
    <p><strong>Phone:</strong> {{ $patient->phone }}</p>
    <p><strong>Address:</strong> {{ $patient->address }}</p>

    <br>

    <a href="{{ route('patients.edit', $patient->id) }}">
        Edit Patient
    </a>

    <br><br>

    <a href="{{ route('patients.index') }}">
        Back to Patient List
    </a>

</body>
</html>