<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>
    

<form>

<p>Hobby</p>
<input type="checkbox" name="checkbox1" value="basketball"  > Basketball </input> <br>

<input type="checkbox" name="checkbox1" value="swimming"  > Swimming </input> <br>
<input type="checkbox" name="checkbox1" value="running"  > Running </input> <br>
<input type="checkbox" name="checkbox1" value="reading"  > Reading </input> <br>
<input type="checkbox" name="checkbox1" value="sleeping"  > Sleeping </input> <br>

<input type="hidden" value="hiddenvalue"></input>

<p>Image</p>
<img src="sinaglahi.PNG" width = "100" heiht="100"> </img>

<p>Gender</p>
<input type="radio" name="sex" value="Male">Male</input>
<input type="radio" name="sex" value="Female">Female</input>
<input type="radio" name="sex" value="lgbt+">LGBTQ+</input> <br>

<br>
<p>Barangays</p>
<select name="barangays">
    <option value="">--Select a barangay--</option>
    <option value="ZoneI">Zone I</option>
    <option value="ZoneII">Zone II</option>
    <option value="ZoneIII">Zone III</option>
    <option value="ZoneIV">Zone VI</option>
    <option value="ZoneV">Zone V</option>
    <option value="ZoneVII">Zone VII</option>
    <option value="Magsaysay">Magsaysay</option>
</select>

<br>

<input type="text" name="firstname" placeholder="Enter your firstname"></input> <br>
<textarea  name="message" placeholder="Enter your message" rows=4></textarea><br>


<p>File Upload</p>
<input type="file" name="upload"> </input> <br>


<input type="Reset"></input>
<input type="submit" value="Proceed"></input>

</form>
</body>
</html>