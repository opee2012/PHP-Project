<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['last_month'] = $_POST['last_month'];

    header("Location: income.php");
}

?>
<!DOCTYPE html>
<HTML lang="en">
<HEAD>
    <TITLE>PHP Sessions - Monthly Budget</TITLE>
</HEAD>
<BODY>
<H1>Budget Report</H1>

This simple site will calculate your remaining balance for the month of <?php echo date("F");?>. To start,
<br>
enter in <?php echo date("F", strtotime("last month")); ?>'s balance and then we will move on to <?php echo date("F");?>'s income and expenditures.
<br><br>

<TABLE>
    <FORM method="POST" action="<?php echo $_SERVER["PHP_SELF"] ?>">
        <TR>
            <TD><label for="last_month">Enter <?php echo date("F", strtotime("last month")); ?>'s Balance:</label></TD>
            <TD><input type="number" step="0.01" min="0" id="last_month" name="last_month"></TD>
        </TR>
        <TR>
            <TD><input type="submit" value="Submit">
                <input type="reset"></TD>
        </TR>
    </FORM>
</TABLE>
</BODY>
</HTML>