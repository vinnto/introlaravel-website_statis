<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register Page</title>
</head>

<body>
    <h3>Buat Account Baru!</h3>
    <h4>Sign Up Form</h4>
    <form action="{{ route('welcome') }}" method="post">
        @csrf
        <label>
            First Name:
            <br><br>
            <input type="text" name="first_name" />
        </label>
        <br /><br />
        <label>
            Last Name:
            <br /><br>
            <input type="text" name="last_name" />
        </label>
        <br /><br />

        <label>Gender:</label>
        <br /><br />
        <input type="radio" value="male" /> Male
        <br />
        <input type="radio" value="female" /> Female
        <br />
        <input type="radio" value="other" /> Other <br /><br />
        <label>Nationality:</label>
        <br /><br />
        <select>
            <option value="indonesia">Indonesia</option>
            <option value="malaysia">Malaysia</option>
            <option value="singapure">Singapure</option>
        </select>
        <br /><br />
        <label>Language Spoken :</label>
        <br /><br />
        <input type="checkbox" value="indonesia" /> Bahasa Indonesia
        <br />
        <input type="checkbox" value="english" /> English
        <br />
        <input type="checkbox" value="other" /> Other <br /><br />
        <label>Bio :</label>
        <br /><br />
        <textarea name="" id="" cols="30" rows="10"></textarea>
        <br />
        <input type="submit" name="submit" value="Submit" />
    </form>
</body>

</html>
