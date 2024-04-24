<!DOCTYPE html>
<html>


<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="Cascading_Style_Sheets.css">
<script src="Java_Script.js"></script>

<style>
    .hidden {
    display: none;
}

    </style>

</head>



    <body>
  





        <div class="container">

            <div class="user-profile-area">
             <div class="task-manager">task manager</div>
             <div class="side-wrapper">
              <div class="user-profile">
               <img src="https://assets.codepen.io/3364143/Screen+Shot+2020-08-01+at+12.24.16.png" alt="" class="user-photo">
       
               <?php

if (isset($_COOKIE["login_email"])) {
    $query = "SELECT * FROM account WHERE email LIKE '%" . $_COOKIE["login_email"] . "%'";

    $database = mysqli_connect("localhost", "root", "", "theater");

    if (!$database) {
        die("Could not connect to database");
    }

    $result = mysqli_query($database, $query);

    if (!$result) {
        die("Could not execute query!");
    }

    // Fetching the associative array instead of a numeric array
    $row = mysqli_fetch_assoc($result);

    // Check if a row was found
    
        // Display name, last name, and email
        echo '
        <div class="user-name">' . $row["name"] . " " . $row["last_name"] . '</div>
        <div class="user-mail">' . $row["email"] . '</div>';
 

    mysqli_close($database); // Close the database connection
}
?>









              </div>

              
              <div class="progress-status"></div>
              <div class="progress">
               <div class="progress-bar"></div>
              </div>
              <div class="task-status">
               


               <?php

$query1 = "SELECT count(*) FROM tasks ";
$query2 = "SELECT count(*) FROM tasks  WHERE states='to do'";

$database = mysqli_connect("localhost", "root", "", "theater");

if (!$database) {
    die("Could not connect to database");
}

$result1 = mysqli_query($database, $query1);
$result2 = mysqli_query($database, $query2);

// Fetching the result rows as associative arrays
$row1 = mysqli_fetch_assoc($result1);
$row2 = mysqli_fetch_assoc($result2);

echo '<div class="task-stat">
        <div class="task-number">' . $row2['count(*)'] . '</div>
        <div class="task-condition">to do</div>
        <div class="task-tasks">tasks</div>
       </div>
       
       <div class="task-stat">
        <div class="task-number">' . $row1['count(*)'] . '</div>
        <div class="task-condition">All</div>
        <div class="task-tasks"> tasks </div>
       </div>';

mysqli_close($database); // Close the database connection
?>

              
              </div>
             </div>
             <div class="side-wrapper">
              <div class="project-title">Projects</div>
              <div class="project-name">
               <div class="project-department">Marketing</div>
               <div class="project-department">Design</div>
               <div class="project-department">Development</div>
               <div class="project-department">Management</div>
              </div>
             </div>
             <div class="side-wrapper">
              <div class="project-title">Team</div>
              <div class="team-member">

               <img src="https://images.unsplash.com/flagged/photo-1574282893982-ff1675ba4900?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1000&q=80" alt="" class="members">
               <img src="https://assets.codepen.io/3364143/Screen+Shot+2020-08-01+at+12.24.16.png" alt="" class="members">
               <img src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60" alt="" class="members">
               <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&auto=format&fit=crop&w=998&q=80" alt="" class="members">
               <img src="https://images.unsplash.com/photo-1541647376583-8934aaf3448a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=934&q=80" alt="" class="members">
              </div>
             </div>
            </div>


            <div class="main-area">
            
             <div class="main-container">
              <div class="inbox-container">
               <div class="inbox">
                <div class="msg msg-department anim-y">
                 Marketing
                 <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 492 492">
                  <path d="M484.13 124.99l-16.11-16.23a26.72 26.72 0 00-19.04-7.86c-7.2 0-13.96 2.79-19.03 7.86L246.1 292.6 62.06 108.55c-5.07-5.06-11.82-7.85-19.03-7.85s-13.97 2.79-19.04 7.85L7.87 124.68a26.94 26.94 0 000 38.06l219.14 219.93c5.06 5.06 11.81 8.63 19.08 8.63h.09c7.2 0 13.96-3.57 19.02-8.63l218.93-219.33A27.18 27.18 0 00492 144.1c0-7.2-2.8-14.06-7.87-19.12z"></path>
                 </svg>
                </div>



                <?php
// Build SELECT query
$query3 = "SELECT * FROM tasks WHERE department='marketing'";

$database = mysqli_connect("localhost", "root", "", "theater");

if (!$database) {
    die("Could not connect to database");
}

$result3 = mysqli_query($database, $query3);

// Fetching the result rows as associative arrays
while ($row3 = mysqli_fetch_assoc($result3)) {
    echo '
    <div class="msg selected-bg anim-y">
        <input type="checkbox" name="msg" id="mail3" class="mail-choice" checked>
        <label for="mail3"></label>
        <div class="msg-content">
            <div class="msg-title">' . $row3['task_title'] . '</div>
            <div class="msg-date">' . $row3['creation_date'] . '</div>
            
        </div>
        <img src="https://assets.codepen.io/3364143/Screen+Shot+2020-08-01+at+12.24.16.png" alt="" class="members mail-members">
    </div>';
}

// Close database connection
mysqli_close($database);
?>






















               
                
               </div>
               <div class="add-task" onclick="toggleMailDetail()">
    <button class="add-button">Add task</button>
</div>



               
              </div>
              
              <div id="mailDetail" class="mail-detail hidden">
               <div class="mail-detail-header">
                <div class="mail-detail-profile">
                 <img src="https://assets.codepen.io/3364143/Screen+Shot+2020-08-01+at+12.24.16.png" alt="" class="members inbox-detail" />
                 <div class="mail-detail-name"></div>
                </div>
                <div class="mail-icons">
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2">
                  <path d="M3 6h18M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2M10 11v6M14 11v6" /></svg>
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                  <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2" />
                  <circle cx="12" cy="7" r="4" /></svg>
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tag">
                  <path d="M20.59 13.41l-7.17 7.17a2 2 0 01-2.83 0L2 12V2h10l8.59 8.59a2 2 0 010 2.82zM7 7h.01" /></svg>
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square">
                  <path d="M9 11l3 3L22 4" />
                  <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11" /></svg>
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-paperclip">
                  <path d="M21.44 11.05l-9.19 9.19a6 6 0 01-8.49-8.49l9.19-9.19a4 4 0 015.66 5.66l-9.2 9.19a2 2 0 01-2.83-2.83l8.49-8.48" /></svg>
                </div>
               </div>






               <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" target="_self" autocomplete="on">
               <div class="mail-contents">
                <div class="mail-contents-subject">
                 <input type="checkbox" name="msg" id="mail20" class="mail-choice" checked>
                 <label for="mail20"></label>
                 <div class="mail-contents-title">Write an a task</div>
                </div>
                <br>
                <P><input type="text" name="title" id="title " style="border:none ;color:black;" placeholder=" Title:" required></P>
                <P><input type="text" name="email" id="email"style="border:none ;color:black;" placeholder=" Email to:" required></P>
                <select name="deparement" id="deparement" style="border:none ;color:grey; "required>
  <option value="">    Kindly select a deparement</option>
  <option value="Marketing">Marketing</option>
  <option value="Development">Development</option>
  <option value="Management">Management</option>
  <option value="Design">Design</option>
 
</select>
<P><input type="date" name="end_date" id="end_date"style="border:none ;color:grey; padding-left:5px;padding-top:5px;" placeholder=" Want to be complite by:" required></P>

                <div class="mail">
                 <div class="mail-time">
                  
                   <circle cx="12" cy="12" r="10" />
                   <path d="M12 6v6l4 2" /></svg>
          
                 </div>
                 <div class="mail-inside" style="color:white;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce accumsan commodo lectus gravida dictum. Aliquam a dui eu arcu hendrerit porta sed in velit. Fusce eu semper magna. Aenean porta facilisis neque, ac dignissim magna vestibulum eu. Etiam id ligula eget neque placerat ultricies in sed neque. Nam vitae rutrum est. Etiam non condimentum ante, eu consequat orci. Aliquam a dui eu arcu hendrerit porta sed in velit. Fusce eu semper magna.</div>
                 <div class="mail-assign">
                  <div class="assignee">
                
                   <span class="assign-date">25 april, 2024</span>
                  </div>
                  <div class="assignee">
                  <strong> </strong> created task.
                  
                   <span class="assign-date"></span>
                  </div>
                  <div class="assignee">
                  <strong></strong> added to Marketing.
                   <span class="assign-date"></span>
                  </div>
                 </div>
                 
                 <div class="mail-doc">
                  <div class="mail-doc-wrapper">
                  
                   
                   
                   <div class="mail-doc-detail">
                    
                   </div>
                  </div>
                 
                 </div>
                </div>
               </div>
           








            
   
        
       
               <div class="mail-textarea">
        <input type="text" name="comment" id="comment" placeholder="Write a comment..." required>
        <div class="textarea-icons">
            <button type="submit" class="send-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send">
                    <path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z" />
                </svg>
            </button>
        </div>
    </div>
        </form>





<script>
    function toggleMailDetail() {
        var mailDetail = document.getElementById("mailDetail");
        mailDetail.classList.toggle("hidden");
    }
</script>

<?php

// Ensure that the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Extract data from the POST request
    $title = $_POST['title'];
    $email = $_POST['email'];
    $department = $_POST['deparement'];
    $end_date = $_POST['end_date'];
    $TEXTS=$_POST['comment'];
    // Call the insert function with the provided data
    insert($title, $email, $department, $end_date,$TEXTS);
}

// Define the insert function
function insert($title, $email, $department, $end_date, $TEXTS) {
    // Database connection
    $database = mysqli_connect("localhost", "root", "", "theater");

    // Check if the connection was successful
    if (!$database) {
        die("Could not connect to database");
    }

    // Escape input data to prevent SQL injection
    $escaped_title = mysqli_real_escape_string($database, $title);
    $escaped_email = mysqli_real_escape_string($database, $email);
    $escaped_department = mysqli_real_escape_string($database, $department);
    $escaped_end_date = mysqli_real_escape_string($database, $end_date);
    $escaped_Ccoment = mysqli_real_escape_string($database, $TEXTS);

    // Build the SQL query to insert data into the 'tasks' table
    $query = "INSERT INTO tasks (email, task_title, task, states, department,deadline) 
              VALUES ('$escaped_email', '$escaped_title', '$escaped_Ccoment','to do', '$escaped_department','$escaped_end_date')";

    // Execute the query
    $result = mysqli_query($database, $query);

    // Check if the query was successful
    if ($result) {
       
    } else {
        echo "Error: " . mysqli_error($database);
    }

    // Close the database connection
    mysqli_close($database);
}
?>





              <div class="calendar-container">
               <div class="calender-tab anim-y">
                <div class="week-month">
                 <button class=" button active">Week</button>
                 <button class=" button button-month">Month</button>
                </div>
                <div class="month-change">
                 <div class="current-month">October</div>
                 <div class="current-year">2020</div>
                </div>
                <div class="week-month">
                 <button class=" button button-weekends">Weekends</button>
                 <button class=" button button-task active">Add task</button>
                </div>
               </div>
               <div class="calendar-wrapper anim-y">
                <div class="calendar">
                 <div class="days">Monday</div>
                 <div class="days">Tuesday</div>
                 <div class="days">Wednesday</div>
                 <div class="days">Thursday</div>
                 <div class="days">Friday</div>
                 <div class="days">Saturday</div>
                 <div class="days">Sunday</div>
                 <div class="day not-work">31</div>
                 <div class="day project-market">1
                  <div class="hover-title">Marketing</div>
                  <div class="project-detail">Sales report from last month</div>
                  <div class="project-detail">Prepare offers for clients</div>
                  <div class="popup-check">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/>
                   </svg>
                  </div>
                 </div>
                 <div class="day">2</div>
                 <div class="day project-design">3
                  <div class="project-detail design">Create 3 illustrations for blog post about design trends</div>
                 </div>
                 <div class="day">4</div>
                 <div class="day">5</div>
                 <div class="day">6</div>
                 <div class="day project-develop">7
                  <div class="project-detail develop">Take part in course about future design trends and new technologies</div>
                 </div>
                 <div class="day">8</div>
                 <div class="day">9</div>
                 <div class="day">10</div>
                 <div class="day">11</div>
                 <div class="day">12</div>
                 <div class="day">13</div>
                 <div class="day">14</div>
                 <div class="day project-market">15
                  <div class="hover-title">Marketing</div>
                  <div class="project-detail">Write an article about design trends</div>
                  <div class="popup-check">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/>
                   </svg>
                  </div>
                 </div>
                 <div class="day">16</div>
                 <div class="day project-market">17
                  <div class="hover-title">Marketing</div>
                  <div class="project-detail">Create AdWords campaign</div>
                  <div class="project-detail">Send newsletter to clients</div>
                  <div class="popup-check">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/>
                   </svg>
                  </div>
                 </div>
                 <div class="day">18</div>
                 <div class="day">19</div>
                 <div class="day">20</div>
                 <div class="day">21</div>
                 <div class="day">22</div>
                  <div class="day project-finance">23
                   <div class="hover-title">Management</div>
                  <div class="project-detail finance">Redesign project ui interface for clients and get feedback</div>
                  <div class="popup-check">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/>
                   </svg>
                  </div>
                 </div>
                 <div class="day">24</div>
                 <div class="day">25</div>
                 <div class="day">26</div>
                 <div class="day">27</div>
                 <div class="day">28</div>
                 <div class="day">29</div>
                 <div class="day">30</div>
                 <div class="day not-work">1</div>
                 <div class="day not-work">2</div>
                 <div class="day not-work">3</div>
                 <div class="day not-work">4</div>
                </div>
               </div>
              </div>
             </div>
            </div>
           </div>
    </body>

</html>