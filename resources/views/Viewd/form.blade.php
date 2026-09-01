<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Account Baru</title>
</head>
<body>

    <h2>Buat Account Baru</h2>
    <h3>Sign Up Form</h3>

    <form action="{{ route('form.store') }}" method="POST">
        @csrf
        <label for="first_name">First name :</label><br>
        <input type="text" id="first_name" name="first_name"><br><br>

        <label for="last_name">Last name :</label><br>
        <input type="text" id="last_name" name="last_name"><br><br>

        <label>Gender</label><br>
        <input type="radio" id="male" name="gender" value="Male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="Female">
        <label for="female">Female</label><br><br>

        <label for="nationality">Nationality</label><br>
        <select id="nationality" name="nationality">
            <option value="indonesia" selected>Indonesia</option>
            <option value="other">Lainnya</option>
        </select><br><br>

        <label>Language Spoken</label><br>
        <input type="checkbox" id="lang_id" name="language" value="Bahasa Indonesia">
        <label for="lang_id">Bahasa Indonesia</label><br>
        <input type="checkbox" id="lang_en" name="language" value="English">
        <label for="lang_en">English</label><br>
        <input type="checkbox" id="lang_other" name="language" value="Other">
        <label for="lang_other">Other</label><br><br>

        <label for="bio">Bio</label><br>
        <textarea id="bio" name="bio" rows="6" cols="30"></textarea><br><br>

        <button type="submit">Sign Up</button>
    </form>

</body>
</html>