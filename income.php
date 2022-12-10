<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $total =
        floatval($_SESSION['last_month']) +
        floatval($_POST['paycheck']) +
        floatval($_POST['cash_deposit']) +
        floatval($_POST['investments']) +
        floatval($_POST['other']);

    $_SESSION["total_income"] = $total;

    header("Location: expenditures.php");
}

?>
<!DOCTYPE html>
<HTML lang="en">
<HEAD>
    <TITLE>PHP Sessions - Monthly Budget</TITLE>
</HEAD>
<BODY>
<H1>Monthly Income</H1>
Enter the total amounts for the month of <?php echo date("F");?> for each category below.
<br><br>
<TABLE>
    <FORM method="POST" action="<?php echo $_SERVER["PHP_SELF"] ?>">
        <TR>
            <TD><label for="paycheck">Paychecks:</label></TD>
            <TD><input type="number" step="0.01" min="0" id="paycheck" name="paycheck"></TD>
        </TR><TR>
            <TD><label for="cash_deposit">Cash Deposits:</label></TD>
            <TD><input type="text" step="0.01" min="0" id="cash_deposit" name="cash_deposit"></TD>
        </TR><TR>
            <TD><label for="investments">Investments:</label></TD>
            <TD><input type="text" step="0.01" min="0" id="investments" name="investments"></TD>
        </TR><TR>
            <TD><label for="other">Other Income:</label></TD>
            <TD><input type="text" step="0.01" min="0" id="other" name="other"></TD>
        </TR><TR>
            <TD><input type="submit" value="Submit">
            <input type="reset"></TD>
        </TR>
    </FORM>
</TABLE>
</BODY>
</HTML>