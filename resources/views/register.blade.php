<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form action="welcome.html" method="POST">
        <p>First name:</p>
        <input type="text" name="first_name" id="">
        <p>Last name:</p>
        <input type="text" name="last_name" id="">
        <p>Gender:</p>
        <input type="radio" name="gender" id="">Male<br>
        <input type="radio" name="gender" id="">Female<br>
        <input type="radio" name="gender" id="">Other<br>
        <p>Nationality</p>
        <select name="nationality" id="">
            <option value="Indonesian">Indonesian</option>
            <option value="Singaporean">Singaporean</option>
            <option value="Malaysian">Malaysian</option>
            <option value="Australian">Australian</option>
        </select><br>
        <p>Language Spoken:</p>
        <input type="checkbox" name="language" id="">Bahasa Indonesia <br>
        <input type="checkbox" name="language" id="">English <br>
        <input type="checkbox" name="language" id="">Other <br>
        <p>Bio:</p>
        <textarea name="bio" id="" cols="30" rows="10"></textarea><br>
        <input type="submit" value="Sign Up">
    </form>
</body>
</html>