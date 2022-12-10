<?php session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_unset();

    header("Location: index.php");
}
?>
<!DOCTYPE html>
<HTML lang="en">
<HEAD>
    <TITLE>PHP Sessions - Monthly Budget</TITLE>
</HEAD>
<BODY>
<H1>Total Balance</H1>
<H4>Your total balance for <?php echo date("F");?> is <?php echo $_SESSION['total'] ;?>!</H4>
Would you like to try again?
<FORM method="POST" action="<?php echo $_SERVER["PHP_SELF"] ?>">
    <input type="submit" value="Yes">
</FORM>
</BODY>
</HTML>