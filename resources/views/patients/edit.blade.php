<!DOCTYPE html>
<html>
<head>
    <title>Edit Patient</title>
</head>
<body>

    <h1>Edit Patient</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('patients.update', $patient->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Name:</label><br>
        <input type="text" name="name" value="{{ old('name', $patient->name) }}" required>
        <br><br>

        <label>Age:</label><br>
        <input type="number" name="age" value="{{ old('age', $patient->age) }}" required>
        <br><br>

        <label>Gender:</label><br>
        <select name="gender" required>
            <option value="Male" {{ old('gender', $patient->gender) == 'Male' ? 'selected' : '' }}>
                Male
            </option>

            <option value="Female" {{ old('gender', $patient->gender) == 'Female' ? 'selected' : '' }}>
                Female
            </option>
        </select>
        <br><br>

        <label>Phone:</label><br>
        <input type="text" name="phone" value="{{ old('phone', $patient->phone) }}" required>
        <br><br>

        <label>Address:</label><br>
        <textarea name="address" required>{{ old('address', $patient->address) }}</textarea>
        <br><br>

        <button type="submit">Update Patient</button>
    </form>

    <br>

    <a href="{{ route('patients.index') }}">Back to Patient List</a>

</body>
</html>