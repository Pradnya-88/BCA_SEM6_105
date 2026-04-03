<?php
$result = "";

if(isset($_POST['submit'])) {
    $input = $_POST['numbers']; // e.g. 10,20,30
    $arr = explode(",", $input);

    $max = $arr[0];

    for($i = 1; $i < count($arr); $i++) {
        if($arr[$i] > $max) {
            $max = $arr[$i];
        }
    }

    $result = "Biggest number is: " . $max;
}
?>

<form method="post">
    Enter numbers (comma separated): 
    <input type="text" name="numbers" value="<?php if(isset($_POST['numbers'])) echo $_POST['numbers']; ?>">
    <input type="submit" name="submit" value="Find">
</form>

<br>

<?php
echo $result;
?>