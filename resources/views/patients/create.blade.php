<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Patient - Patient Appointment System</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f4f7fb;
            color: #1f2937;
        }

        .navbar {
            background: #2563eb;
            color: white;
            padding: 20px 50px;
        }

        .navbar h2 {
            font-size: 22px;
        }

        .container {
            max-width: 700px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .back {
            color: #2563eb;
            text-decoration: none;
            font-weight: bold;
        }

        .title {
            margin: 20px 0;
        }

        .title h1 {
            font-size: 30px;
        }

        .title p {
            color: #6b7280;
            margin-top: 6px;
        }

        .card {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 7px;
            font-weight: bold;
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #d1d5db;
            border-radius: 7px;
            font-size: 15px;
        }

        input:focus,
        select:focus,
        textarea:focus {
            outline: none;
            border-color: #2563eb;
        }

        textarea {
            min-height: 100px;
            resize: vertical;
        }

        .error {
            background: #fee2e2;
            color: #b91c1c;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .error ul {
            margin-left: 20px;
        }

        .buttons {
            display: flex;
            gap: 10px;
            margin-top: 25px;
        }

        .save-btn {
            background: #2563eb;
            color: white;
            border: none;
            padding: 12px 22px;
            border-radius: 7px;
            font-weight: bold;
            cursor: pointer;
        }

        .save-btn:hover {
            background: #1d4ed8;
        }

        .cancel-btn {
            background: #e5e7eb;
            color: #374151;
            text-decoration: none;
            padding: 12px 22px;
            border-radius: 7px;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <div class="navbar">
        <h2>🏥 Patient Appointment System</h2>
    </div>

    <div class="container">

        <a href="{{ route('patients.index') }}" class="back">
            ← Back to Patients
        </a>

        <div class="title">
            <h1>Add New Patient</h1>
            <p>Enter the patient's information below.</p>
        </div>

        <div class="card">

            @if ($errors->any())
                <div class="error">
                    <strong>Please fix the following:</strong>

                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('patients.store') }}" method="POST">

                @csrf

                <div class="form-group">
                    <label>Name</label>
                    <input
                        type="text"
                        name="name"
                        value="{{ old('name') }}"
                        placeholder="Enter patient name"
                        required>
                </div>

                <div class="form-group">
                    <label>Age</label>
                    <input
                        type="number"
                        name="age"
                        value="{{ old('age') }}"
                        placeholder="Enter age"
                        min="1"
                        required>
                </div>

                <div class="form-group">
                    <label>Gender</label>

                    <select name="gender" required>
                        <option value="">Select Gender</option>

                        <option value="Male"
                            {{ old('gender') == 'Male' ? 'selected' : '' }}>
                            Male
                        </option>

                        <option value="Female"
                            {{ old('gender') == 'Female' ? 'selected' : '' }}>
                            Female
                        </option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Phone</label>

                    <input
                        type="text"
                        name="phone"
                        value="{{ old('phone') }}"
                        placeholder="Enter phone number"
                        required>
                </div>

                <div class="form-group">
                    <label>Address</label>

                    <textarea
                        name="address"
                        placeholder="Enter patient's address"
                        required>{{ old('address') }}</textarea>
                </div>

                <div class="buttons">
                    <button type="submit" class="save-btn">
                        ✓ Save Patient
                    </button>

                    <a href="{{ route('patients.index') }}"
                       class="cancel-btn">
                        Cancel
                    </a>
                </div>

            </form>

        </div>

    </div>

</body>
</html>