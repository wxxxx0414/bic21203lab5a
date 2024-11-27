<!DOCTYPE html>
<html lang="en">
<head><title>Lab 5a Q2</title></head>
<body>
    <?php 
        $students = [
            [
                'name' => 'Alice',
                'program' => 'BIP',
                'age' => 21
            ],
            [
                'name' => 'Bob',
                'program' => 'BIS',
                'age' => 20
            ],
            [
                'name' => 'Raju',
                'program' => 'BIT',
                'age' => 22
            ],
        ];
    ?>
    <table border="1">
        <tr>
            <td>Name</td>
            <td>Program</td> 
            <td>Age</td>
        </tr>
        <?php
            foreach ($students as $student)
            {
                echo "<tr>";
                echo "<td>" . $student['name'] . "</td>";
                echo "<td>" . $student['program'] . "</td>";
                echo "<td>" . $student['age'] . "</td>";
                echo "</tr>";
            }
        ?>
    </table>   
</body>
</html>