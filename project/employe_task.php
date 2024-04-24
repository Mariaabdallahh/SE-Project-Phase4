<!DOCTYPE html>
<html>


<head>






<!--USED THE COLON (12 COL IN A ROW FROM BOOTSTRAP)-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/><!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.min.css"
  rel="stylesheet"
/><!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.umd.min.js"
></script>

<style>
    .bg-dangr{
        BACKGROUND-COLOR: WHITE !important;
    }
    </STYLE>






</head>
<body>
<section class="vh-100" style="background-color: #000">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-12 col-xl-10">

        <div class="card">


        <div class="card-header p-3">
            <h5 class="mb-0" ><i></i>MARKETING</h5>
          </div>
          <div class="card-header p-3">
            <h5 class="mb-0"><i class="fas fa-tasks me-2"></i>Task List</h5>
          </div>
          <div class="card-body" data-mdb-perfect-scrollbar="true" style="position: relative; height: 400px">

            <table class="table mb-0">
              <thead>
                <tr>
                  <th scope="col">Team Member</th>
                  <th scope="col">Title</th>
                  <th scope="col">Tasks</th>
                  <th scope="col">Deadline</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>




  <?php
// Build SELECT query
$query3 = "SELECT * FROM tasks WHERE department='marketing' and states='to do'";

$database = mysqli_connect("localhost", "root", "", "theater");

if (!$database) {
    die("Could not connect to database");
}

$result3 = mysqli_query($database, $query3);

// Fetching the result rows as associative arrays
while ($row3 = mysqli_fetch_assoc($result3)) {
    echo '
  




    
    <tr class="fw-normal">
    <th>
  
      <span class="ms-2">'. $row3['email'].'</span>
    </th>
    <td class="align-middle">
      <span>'.$row3['task_title'].'</span>
    </td>
    <td class="align-middle">
      <span>'.$row3['task'].'</span>
    </td>
    <td class="align-middle">
    <span>'.$row3['deadline'].'</span>
  </td>
    <td class="align-middle">
      <h6 class="mb-0"><span class="badge bg-danger">High priority</span></h6>
    </td>
    <td class="align-middle">

    <form action="task_checker.php" method="POST">
    <input type="hidden" name="id" id="id" value="'.$row3['id'].'">
    <input type="hidden" name="action1" id="action1" value="complete">
    <button type="submit" class="badge bg-dangr" title="Done" style="color:green;background-color:#fff"><strong>COMPLETE</strong></button>
</form>
<br>
<form action="task_checker.php" method="POST">
<input type="hidden" name="id" id="id" value="'.$row3['id'].'">
    <input type="hidden" name="action2" id="action2" value="postpone">
    <button type="submit" class="badge bg-dangr" title="Done" style="color:red;background-color:#fff"><strong>POSTPONE</strong></button>
</form>

    </td>
  </tr>';
}

// Close database connection
mysqli_close($database);
?>










                
              </tbody>
            </table>




          </div>
          <div class="card-footer text-end p-3">
          
          <a href="main.php" menu-close class="sidebar-link"
              >
            <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary">log out</button></a>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

</body>
</html>