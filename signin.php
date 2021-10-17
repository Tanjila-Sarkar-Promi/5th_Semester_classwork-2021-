<?php
include 'header.php';
?>
<form method="post" action="save1.php">
    <table>
        <tr>
            <td> Student Name</td>
            <td>
                <input name="studentName" placeholder="Enter student name" id="studentName">
            </td>
        </tr>
        <tr>
            <td>Student Id</td>
            <td>
                <input name="studentId" placeholder="Enter Student Id" id="studentId">
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="submitButton" value="Save">
            </td>
        </tr>
    </table>
</form>

<?php
include 'footer.php';
?>
