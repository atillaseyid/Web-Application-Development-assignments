<!DOCTYPE html>
<html>
<head>
   <title>Atilla Seyid 6/2</title>
   </head>
   <body>
   <form method='POST'>
   <h2>Interest calculator</h2>

 <label for="amount">Amount</label><br/>
 <input type="number" name="amount">
 <br/>
 <input type="radio" name="currency" value="HUF">
 <label for="HUF">HUF</label>
 <input type="radio" name="currency" value="USD">
 <label for="USD">USD</label><br/>
 <label for="interestRate">Interest rate</label><br>
 <input type="number" name="interestRate" step="0.1"><br>
 <label for="period">Period of time</label><br>
    <select name="period">
     <option value="1">1 month</option>
     <option value="3">3 months</option>
     <option value="6">6 months</option>
     <option value="12">12 months</option>
    </select><br/>
 <input type="submit" name="submit" value="Calculate">
 </form>
<?php
    $tags = $_POST['tags'];
    $tagsArray = explode(",", $tags);

    $amount = $_POST['amount'];
    $currency = $_POST['currency'];
    $interestRate = $_POST['interestRate'];
    $period = $_POST['period'];

    if(isset($_POST['submit']) && $amount!=null && $currency!=null &&$interestRate!=null)
    {
        $result = round($amount * pow(1 + ($interestRate/100),($period/12)), 2);
        echo "$result $currency";
    }
?>
</body>
</html>