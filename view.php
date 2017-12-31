<?php

    require_once 'vendor/autoload.php';

    use App\classes\Student;

    Student::addition();

    use App\classes\Example;

    if(isset($_POST['btn'])){
       $result =  Example::hai($_POST);
    }
?>

<form action="" method="post">
    <table border="1">
        <tr>
            <th>Enter Your String</th>
            <td><input type="text" name="given_string" size="50"></td>
        </tr>
        <tr>
            <th>Total Number of Word</th>
            <td>
                <input type="text" name="total_word" size="50" value="
                <?php echo $result['word_length']  ?>">
            </td>
        </tr>
        <tr>
            <th>Total Number of Character</th>
            <td>
                <input type="text" name="total_character" size="50" value="
                <?php echo  $result['string_length'] ?>">
            </td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="submit"></td>
        </tr>
    </table>

</form>
