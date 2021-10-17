<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<div class="menu-container">
  <a href="pp.html">Home</a>
  <a href="contact.html">Contact</a>

</div>
<div class="banner-container">
  <img src="image/banner.jpg">
</div>
<div class="paragraph-container">
  <p>Hello world!!</p>
  <h1>This is header 1</h1>
  <h2>This is header 2</h2>
  <h3>This is header 3</h3>
  <h4>This is header 4</h4>
  <h5>This is header 5</h5>
  <h6>This is header 6</h6>

</div>
<div class="table-container">
  <table border="1">
    <thead>
    <th>1</th>
    <th>2</th>
    <th>3</th>
    </thead>
    <tbody>
    <tr>
      <td>column 1</td>
      <td>column 2</td>
      <td rowspan="2">column 3</td>
    </tr>
    <tr>
      <td>column 1</td>
      <td>column 2</td>
      <!-- <td>column 3</td>-->
    </tr>
    <tr>
      <td colspan="3">column 1</td>
      <td>trttrtr</td>
      <td>fdff</td>

    </tr>
    </tbody>
  </table>
</div>
<div class="form-container">
  <form action="save.php" method="post">
    <table>
      <tr>
        <td>Student name</td>
        <td><input name="studentName" type="text" placeholder="Enter Stdent Name"></td>
      </tr>
      <tr>
        <td>Student Id</td>
        <td><input name="studentId" type="text" placeholder="Enter Student ID"></td>

      </tr>
      <tr>
        <td>Gender</td>
        <td>
          <select name="gender" id="gender">
            <option>Male</option>
            <option>Female</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>Password</td>
        <td>
          <input required type="password" name="password">
        </td>
      </tr>
      <tr>
        <td></td>
        <td>
          <input type="submit" name="submit" value="Submit">
        </td>
      </tr>
    </table>
  </form>

</div>

</body>
</html