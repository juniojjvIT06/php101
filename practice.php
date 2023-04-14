<form method="POST">
    <label for="amount">Enter amount in pesos: </label>
    <input type="number" name="amount" id="amount" required>
    <br><br>
    <input type="submit" value="Submit">
</form>
<?php
if(isset($_POST['amount'])){
    $amount = $_POST['amount'];
    $notes = array(1000, 500, 100, 50, 20, 10, 5, 1);
    $noteCounter = array(0, 0, 0, 0, 0, 0, 0, 0);
    
    for($i=0;$i<count($notes);$i++){
        if($amount >= $notes[$i]){
            $noteCounter[$i] = (int)($amount / $notes[$i]);
            $amount = $amount - $noteCounter[$i] * $notes[$i];
        }
    }
    echo "<br><br><label>Smallest bills and coins for " . $_POST['amount'] . " pesos: </label><br><br>";
    for($i=0;$i<count($notes);$i++){
        if($noteCounter[$i] != 0){
            echo "<input type='text' value='".$noteCounter[$i]."' readonly> x <input type='text' value='".$notes[$i]." Peso bill/coin' readonly><br>";
        }
    }
}
?>



