<!-- bjj competition 
group of people, randomly generate matches 1 vs 1
your logic should make sure that the same person doesn't face himself -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="functions.php" method="GET">
        <input type="text" name="user_info" placeholder="Full Name">
        <select name="bracket">
            <!-- <label>Choose category</label> -->
                <option value="66">66 KG</option>
                <option value="77">77 KG</option>
                <option value="88">88 KG</option>
        </select>
        <button type="submit" name="fight">Fight</button>
    </form>
    
    
</body>
</html>



<!-- 1) sign up : full name, bracket
2) asign an opponent 
asign the user to a weight bracket
pick randomly from weight bracket excluding the user-->
