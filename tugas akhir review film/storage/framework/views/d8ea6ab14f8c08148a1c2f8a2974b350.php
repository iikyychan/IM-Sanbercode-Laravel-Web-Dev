<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form Sanberbook</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h2>Sign Up Form</h2>
    <form method="POST" action="/welcome">
        <?php echo csrf_field(); ?>
        <fieldset>
            <label for="fnama">First Name: <input id="fname" name="fname" type="text" required> </label>
            <label for="lnama">Last Name: <input id="lname" name="lname" type="text" required></label>
        </fieldset>
        <fieldset>
            <label>Gender :</label>
            <label for="male"><input id="male" name="gender" type="radio" value="male">Male</label>
            <label for="female"><input id="female" name="gender" type="radio" value="female">Female</label>
            <label for="other"><input id="other" name="gender" type="radio" value="other">Other</label>
        </fieldset>
        <fieldset>
        <label>Nationality : </label>
            <label for="nationality">
                <select id="nationality" name="nationality">
                    <option name="indonesian">Indonesian</option>
                    <option name="singaporean">Singaporean</option>
                    <option name="thai">Thai</option>
                    <option name="malay">Malay</option>
                    <option name="Cambodia">Cambodia</option>
                    <option name="vietnamese">Vietnamese</option>
                    <option name="philipine">Philiphines</option>
                    <option name="Other">Other</option>
                </select>
            </label>
        </fieldset>
        <fieldset>
            <label>Languange Spoken : </label>
        </fieldset>
        <fieldset>
            <label for="bahasa indonesia"><input type="checkbox" id="bahasa indonesia" name="lang" value="bahasa indonesia">Bahasa Indonesia</label>
            <label for="english"><input type="checkbox" id="english" name="lang" value="english">English</label>
            <label for="other"><input type="checkbox" id="other" name="lang" value="other">Other</label>
        </fieldset>
        <fieldset>
            <label>Bio : </label>
        </fieldset>
        <fieldset>
        <textarea name="bio" rows=10 cols="50"></textarea>
        </fieldset>
        <input type="submit" value="Sign Up">
    </form>
      
    <style>
        label {
            display: block;
        }

        fieldset{
            border: none;
            padding-left:0;
        }
        
        label input[type="text"] {
            display: block;
            margin-bottom: 1em;
            margin-top: 1em;
        }

        label input[type="radio"] {
            margin-right:1em;
            margin-top: 0px;
            margin-bottom: 0px;
        }

        label input[type="checkbox"] {
            margin-right:1em;
        }

        select {
            margin-top:1em;
        }
    </style>
</body>
</html><?php /**PATH D:\Belajar\Laravel\Sanbercode\Tugas 6\IM-Sanbercode-Laravel-Web-Dev\tugas12\resources\views/page/form.blade.php ENDPATH**/ ?>