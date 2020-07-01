<!DOCTYPE html>
<html>
<head>
    <title>Buat Account Baru!</title>
</head>
<body>
<h1>Buat Account Baru!</h1>
<h2>Sign Up Form</h2>
<form action="/welcome" method="POST">
    @csrf
    <p><label for="fname">First Name:</label></p>
    <input type="text" name="firstname">
    <p><label for="lname">Last Name:</label></p>
    <input type="text" name="lastname">
    <p><label for="gender">Gender:</label></p>
    <input type="radio" name="gender">Male<br />
    <input type="radio" name="gender">Female<br />
    <input type="radio" name="gender">Other<br />
    <p><label for="nationality">Nationality:</label></p>
    <select id="nationalities" name="nationalities">
        <option value="indonesian">Indonesian</option>
        <option value="singaporean">Singaporean</option>
        <option value="malaysian">Malaysian</option>
        <option value="australian">Australian</option>
    </select>
    <p><label for="language">Language Spoken:</label></p>
    <input type="checkbox" name="language">Bahasa Indonesia<br />
    <input type="checkbox" name="language">English<br />
    <input type="checkbox" name="language">Other<br />
    <p><label for="bio">Bio:</label></p>
    <textarea name="bio" id="bio" rows="10" cols="30"></textarea>
    <br>
    <input type="submit" name="signup" id="signup" value="Sign Up">
</form>
</body>
</html>