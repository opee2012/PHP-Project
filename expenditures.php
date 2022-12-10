<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $total =
        floatval($_SESSION['total_income']) - (
        floatval($_POST['rent']) +
        floatval($_POST['utilities']) +
        floatval($_POST['groceries']) +
        floatval($_POST['gas']) +
        floatval($_POST['debt']) +
        floatval($_POST['misc']));

    $_SESSION["total"] = $total;

    header("Location: total.php");
}

?>
<!DOCTYPE html>
<HTML lang="en">
<HEAD>
    <TITLE>PHP Sessions - Monthly Budget</TITLE>
</HEAD>
<BODY>
<H1>Monthly Expenditures</H1>
Enter the total amounts for the month of <?php echo date("F");?> for each category below.
<br><br>
<TABLE>
    <FORM method="POST" action="<?php echo $_SERVER["PHP_SELF"] ?>">
        <TR>
            <TD><label for="rent">Rent/Mortgage:</label></TD>
            <TD><input type="number" step="0.01" min="0" id="rent" name="rent"></TD>
        </TR><TR>
            <TD><label for="utilities">Utility Payments:</label></TD>
            <TD><input type="number" step="0.01" min="0" id="utilities" name="utilities"></TD>
        </TR><TR>
            <TD><label for="groceries">Groceries:</label></TD>
            <TD><input type="number" step="0.01" min="0" id="groceries" name="groceries"></TD>
        </TR><TR>
            <TD><label for="gas">Gas:</label></TD>
            <TD><input type="number" step="0.01" min="0" id="gas" name="gas"></TD>
        </TR><TR>
            <TD><label for="debt">Debt Payments:</label></TD>
            <TD><input type="number" step="0.01" min="0" id="debt" name="debt"></TD>
        </TR><TR>
            <TD><label for="misc">Miscellaneous:</label></TD>
            <TD><input type="number" step="0.01" min="0" id="misc" name="misc"></TD>
        </TR><TR>
            <TD><input type="submit" value="Submit">
                <input type="reset"></TD>
        </TR>
    </FORM>
</TABLE>
</BODY>
</HTML>