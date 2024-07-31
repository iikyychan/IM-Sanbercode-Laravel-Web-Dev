<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Akun Baru</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form action="index" method="post">
        <label>First Name</label> <br />
        <input type="text" name="First Name" required placeholder="Masukan Nama Pertama"> <br/> 
        <br />
        <label>Last Name</label> <br />
        <input type="text" name="Last Name" required placeholder="Masukan Nama Terakhir"> <br />
        <br />
        <label>Gender :</label> <br />
        <input type="radio" value="1" name="wn"> Male <br />
        <input type="radio" value="2" name="wn"> Female <br />
        <input type="radio" value="3" name="wn"> Other <br />
        <br />
        <label>Nationality</label> <br />
        <select name="Nationality">
            <option value="1">Indonesia</option>
            <option value="2">Inggris</option>
            <option value="3">Other</option>
        </select>
        <br />
        <br />  
        <label>Language Spoken</label> <br />
        <input type="checkbox" value="1" name="Skill"> Indonesia <br />
        <input type="checkbox" value="2" name="Skill"> Inggris <br />
        <input type="checkbox" value="3" name="Skill"> Other <br />
        <br />
        <br />
        <label>Bio</label> <br />
        <textarea name="Bio" id="" rows="5" cols="10"></textarea>
        <br />

        <input type="submit" value="Sign Up" />
    </form>
    <a href="/">Kembali</a>
</body>
</html>