<!DOCTYPE html >
<html>

<head>
    <title>
        INFO
    </title>
</head>
<form method=post action="arrayy.php">
    <fieldset id="field">
        <legend>Personal Information:</legend>
        <center>
            <input type="number" placeholder="enter any number here" name="number">&nbsp;
            <?php
$a= $_REQUEST['number'];
echo $a;
?>
            <input type="submit" name="submit">&nbsp;
        </center>
    </fieldset>
</form>

</html>
