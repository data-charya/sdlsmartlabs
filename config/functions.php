<?php 

//Clean String Values
function clean($string) {
    return htmlentities($string);
}


//Check file extension
function checkFileExtension($ext)
{
    if ($ext == 'jpg' || $ext == 'jpeg' || $ext == 'gif' || $ext == 'png') {
        $pass = (int)1;
    } else {
        $pass = (int)0;
    }
    return (int)$pass;
}

//Compress the Image
function compressImage($source, $destination, $quality) {
    $imgInfo = getimagesize($source);
    $mime = $imginfo['mime'];

    switch($mime) {
        case 'image/jpeg':
            $image = imagecreatefromjpeg($source);
            break;
        case 'image/png':
            $image = imagecreatefrompng($source);
            break;
        case 'image/gif':
            $image = imagecreatefromgif($source);
            break;
        default:
            $image = imagecreatefromjpeg($source);
    }

    imagejpeg($image,$destination,$quality);

    return $destination;
}

//Insert into blog
function insert_into_blog() {
    global $con;
    if($_SERVER['REQUEST_METHOD']=='POST') {
        $author = clean($_POST['Author']);
        $title = clean($_POST['Title']);
        $_content = clean($_POST['Content']);
        $date = clean($_POST['Date']);

        $target = "../uploads/".time().".jpg";
        $image = time().".jpg";
        $compressedImage = compressImage($_FILES["image"]["tmp_name"],$target,75);

        $ext = substr(strrchr($_FILES['image']['name'], "."), 1);
        $fileAccepted = checkFileExtension($ext);
        $fileSize = $_FILES['image']['size'];
        
        $content = str_replace("\r\n","<br>",$_content);
        $content = mysqli_real_escape_string($con, $content);
        
        if($fileAccepted==1 && $fileSize < 5000000 ){
            if ($compressedImage) {
                $sql = "INSERT INTO blog(`Author`,`Title`,`Image`,`Content`,`Date`,`Status`) VALUES('$author','$title','$image','$content','$date',3)";
                $query = Query($sql);
                confirm($query);
                header('location:manageblog.php#manage');
            }else{
                $msg = "<p class='error'>Faiiled to upload image</p>";
                echo $msg;
            }
        }else{
            $msg = "<p class='error'>File is more than 5MB or Inacceptable Extension/p>";
        }
        
    }
}

//Global variable to count number of uploaded blogs to website
$num_up1 = 0;
$num_up2 = 0;

//Display Blogs
function display() {
    global $num_up1;
    global $num_up2;
    $sql = "SELECT * FROM blog ORDER BY BlogID DESC";
    $query = Query($sql);
    confirm($query);
    while($row = fetch_data($query)) {
        echo "<tr>";
        echo "<td><img src='../uploads/".$row['image']."' height='100px' width='150'></td>";
        echo "<td>".$row['Author']."</td>";
        echo "<td>".pretty_date($row['Date'])."</td>";
        echo "<td><b>".$row['Title']."</b>
              <br>".$row['Content']."
              <br>
              <form method='POST'>
                <button class='btn-up' name='edit' type='Submit' value='".$row['BlogID']."'>
                    <i class='fa fa-edit'></i>
                </button>
              </form>
              </td>";
        echo "<td align='center'>
                    <form method='POST'>
                        <button class='btn-up' onclick='return confirm(`Are you sure want to delete this blog? This action is irreversible`);' name='delete' type='Submit' value='".$row['BlogID']."'>
                            <i class='fa fa-trash'></i>
                        </button>
                    </form>
                </td>";             
        if($row['Status'] == 1){
            $num_up1  = $num_up1 + 1;
            echo "<form method='POST'>
                    <td align='center'>
                        <button class='btn-up' onclick='return confirm(`Are you sure want to remove this pinned blog? It will still be present in Latest News`);' name='remove' type='Submit' value='".$row['BlogID']."'>
                            <i class='fa fa-thumb-tack'></i>
                        </button>
                        <br><br>
                        <button class='btn-down' onclick='return confirm(`Are you sure want to add this blog to the slider?`);' name='upload2' type='Submit' value='".$row['BlogID']."'>
                            <i class='fa fa-arrow-up'></i>
                        </button>
                        <br><br>
                        <button class='btn-up' onclick='return confirm(`Are you sure want to remove this blog from the website?`);' name='remove1' type='Submit' value='".$row['BlogID']."'>
                            <i class='fa fa-plus'></i>
                        </button>
                    </td></form>";
        } else if($row['Status'] == 2){
            $num_up2  = $num_up2 + 1;
            echo "<form method='POST'>
                    <td align='center'>
                        <button class='btn-down' onclick='return confirm(`Are you sure want to pin this blog to the website?`);' name='upload1' type='Submit' value='".$row['BlogID']."'>
                            <i class='fa fa-thumb-tack'></i>
                        </button>
                        <br><br>
                        <button class='btn-up' onclick='return confirm(`Are you sure want to remove this blog from the slider?`);' name='remove' type='Submit' value='".$row['BlogID']."'>
                            <i class='fa fa-arrow-up'></i>
                        </button>
                        <br><br>
                        <button class='btn-up' onclick='return confirm(`Are you sure want to remove this blog from the website?`);' name='remove1' type='Submit' value='".$row['BlogID']."'>
                            <i class='fa fa-plus'></i>
                        </button>
                    </td></form>";
        } else if($row['Status'] == 3){
            echo "<form method='POST'>
                    <td align='center'>
                        <button class='btn-down' onclick='return confirm(`Are you sure want to pin this blog to the website?`);' name='upload1' type='Submit' value='".$row['BlogID']."'>
                            <i class='fa fa-thumb-tack'></i>
                        </button>
                        <br><br>
                        <button class='btn-down' onclick='return confirm(`Are you sure want to add this blog to the slider?`);' name='upload2' type='Submit' value='".$row['BlogID']."'>
                            <i class='fa fa-arrow-up'></i>
                        </button>
                        <br><br>
                        <button class='btn-up' onclick='return confirm(`Are you sure want to remove this blog from the website?`);' name='remove1' type='Submit' value='".$row['BlogID']."'>
                            <i class='fa fa-plus'></i>
                        </button>
                    </td></form>";
        } else {
            echo "<form method='POST'>
            <td align='center'>
                <button class='btn-down' onclick='return confirm(`Are you sure want to pin this blog to the website?`);' name='upload1' type='Submit' value='".$row['BlogID']."'>
                    <i class='fa fa-thumb-tack'></i>
                </button>
                <br><br>
                <button class='btn-down' onclick='return confirm(`Are you sure want to add this blog to the slider?`);' name='upload2' type='Submit' value='".$row['BlogID']."'>
                    <i class='fa fa-arrow-up'></i>
                </button>
                <br><br>
                <button class='btn-down' onclick='return confirm(`Are you sure want to upload this blog to the website ?`);' name='upload3' type='Submit' value='".$row['BlogID']."'>
                    <i class='fa fa-plus'></i>
                </button>
                </td></form>";
        }
        
        echo "</tr>";
    }
}

//Update Row in Managing:
function update_row() {
    global $num_up1;
    global $num_up2;

    if(isset($_POST['edit'])) {
        $_SESSION['edit']= $_POST['edit'];
        header('location:editblog.php');
    }

    if(isset($_POST['delete'])) {
        $id = (int)$_POST['delete'];
        $sql1 = "SELECT image FROM blog WHERE BlogID='$id'";
        $query1 = Query($sql1);
        confirm($query1);
        $row = fetch_data($query1);
        $file_pointer = "../uploads/".$row['image'];
        echo $file_pointer;

        if (!unlink($file_pointer)) {  
            echo ("$file_pointer cannot be deleted due to an error");  
        }  
        else {  
            echo ("$file_pointer has been deleted");  
            $sql = "DELETE FROM blog WHERE BlogID='$id'";
            $query = Query($sql);
            confirm($query);
            header("location:manageblog.php#manage"); 
        }  
  
    }
    
    if(isset($_POST['upload1'])) {
        if($num_up1 <=2 ) {
            $id = (int)$_POST['upload1'];
            $sql = "UPDATE blog SET Status=1 WHERE BlogID='$id'";
            $query=Query($sql);
            confirm($query);
            header("location:manageblog.php#manage"); 
        } else {
            echo "<script>
            function callAlert() {
              alert('Sorry, only 3 blogs can be pinned!');
            }
            callAlert();
            </script>";
            header("refresh: 0"); 
        }
    }

    if(isset($_POST['upload2'])) {
            if($num_up2 + $num_up1<=5) {
                $id = (int)$_POST['upload2'];
                $sql = "UPDATE blog SET Status=2 WHERE BlogID='$id'";
                $query=Query($sql);
                confirm($query);
                header("location:manageblog.php#manage"); 

            } else {
                echo "<script>
                function callAlert() {
                alert('Sorry, only 6 blogs can be uploaded in the slider!');
                }
                callAlert();
                </script>";
                header("refresh: 0"); 
            }
    }

    if(isset($_POST['upload3'])) {
        $id = (int)$_POST['upload3'];
        $sql = "UPDATE blog SET Status=3 WHERE BlogID='$id'";
        $query=Query($sql);
        confirm($query);
        header("location:manageblog.php#manage"); 
    }
    

    if(isset($_POST['remove'])) {
        $id = (int)$_POST['remove'];
        $sql = "UPDATE blog SET Status=3 WHERE BlogID='$id'";
        $query=Query($sql);
        confirm($query);
        header("location:manageblog.php#manage"); 
    }

    if(isset($_POST['remove1'])) {
        $id = (int)$_POST['remove1'];
        $sql = "UPDATE blog SET Status=0 WHERE BlogID='$id'";
        $query=Query($sql);
        confirm($query);
        header("location:manageblog.php#manage"); 
    }

}

//Summary Report 
function summary_report() {
    
    $sql = "SELECT * FROM blog WHERE Status=1 ORDER BY BlogID DESC";
    $query = Query($sql);
    confirm($sql);
    $num = count_rows($query);
    if($num == 0) {
        echo '<p class="error">Alert! No blogs are pinned to the slider!</p>';
    } else {
        echo '<h4>Pinned Blogs are: </h4>';
        echo '<ol>';
        while($row = fetch_data($query)) {
            echo '<li>'.$row['Title'].' by '.$row['Author'].' on '.pretty_date($row['Date']).'</li>';
        }
        echo '</ol>';
    }
    
    $sql = "SELECT * FROM blog WHERE Status=2 ORDER BY BlogID DESC";
    $query = Query($sql);
    confirm($sql);
    $num = count_rows($query);

    if($num == 0) {
        echo '<p class="error">Alert! No non-pinned blogs are added!</p>';
    } else {
        echo '<h4>Other Slider Blogs are: </h4>';
        echo '<ol>';
        while($row = fetch_data($query)) {
            echo '<li>'.$row['Title'].' by '.$row['Author'].' on '.pretty_date($row['Date']).'</li>';
        }
        echo "</ol>";
        
    }
}

//Number of Blogs
function num_of_blogs() {
    global $con;
    $sql = "SELECT * FROM blog WHERE Status!=0";
    $query = Query($sql);
    confirm($query);
    $row = mysqli_num_rows($query) ;
    return (int)$row;
}

//User Validation
function user_validation() {
    if($_SERVER['REQUEST_METHOD']=='POST') {
        $username = clean($_POST['Username']);
        $password = clean($_POST['Password']);

        $sql = "SELECT * FROM admins WHERE username='$username'";
        $query = Query($sql);
        confirm($query);
        $row = fetch_data($query);
        
        if(password_verify($password,$row['password'])) {
            $_SESSION['username']=$username;
            header('location:dashboard.php');   
        } else {
            echo '<p class="error">Invalid Username/Password!</p>';
        }
    }
}

//Redirect if already logged in 
function checkIn() {
    if(isset($_SESSION['username'])) {
        header('location:dashboard.php');
    }
}

function editCheckOut() {
    if(!isset($_SESSION['edit'])) {
        header('location:manageblog.php');
    }
}

//Redirect if not logged in 
function checkOut() {
    if(!isset($_SESSION['username'])) {
        header('location:login.php');
    }
}

//Pretty Date Function
function pretty_date($string) {
    $result = date_day($string);

    if($result=='1'){
        $result = $result."<sup>st</sup> ";
    } elseif ($result == '2') {
        $result = $result."<sup>nd</sup> ";
    } elseif($result == '3') {
        $result = $result."<sup>rd</sup> ";
    } else {
        $result = $result."<sup>th</sup> ";
    }

    $result = $result.date_month($string).", ".date_year($string); 

    return $result;
}

//Display less than 15 words
function content($string) {
    $count = 0;
    $result = '';
    $word = 0;
    $limit = 15;

    for($i = 0; $i < strlen($string); $i = $i + 1) {
        $word = $word + 1;
        if($string[$i]==' ') {
            $count = $count + 1;
            if($word > 6) {
                $limit = 10;
            }
        }
        if($count == $limit) {
            break;
        }
        $result = $result.$string[$i];
    }
    return $result."...";
}

//Count number of Uploaded blogs
function count_upblog($num) {
    $sql = "SELECT * FROM blog WHERE Status=$num";
    $query = Query($sql);
    confirm($query);
    return count_rows($query);
}

function title($string){
    $count = 0;
    $result = '';
    $word = 0;
    $limit = 15;

    for($i = 0; $i < strlen($string); $i = $i + 1) {
        $count = $count + 1;
        if($string[$i]==' ') {
            $count = $count + 1;
            if($word > 6) {
                $limit = 10;
            }
        }
        if($count == $limit) {
            break;
        }
        $result = $result.$string[$i];
    }
    return $result."...";
}

//Display the blogs chosen on index.php
function main_display($num) {
    $sql = "SELECT * FROM blog WHERE Status=$num ORDER BY BlogID DESC";
    $query = Query($sql);
    confirm($query);
    while($row = fetch_data($query)) {
        echo '
          <div class="swiper-slide">
            <div class="imgBx">
              <img src="uploads/'.$row['image'].'">
              <div class="blog-date">
                '.date_day($row['Date']).'<br>'.date_month($row['Date']).'
              </div>
            </div>
            <div class="details">
              <h2>'.$row['Title'].'</h2>
              <p>'.content($row['Content']).'
              </p>
              <form method="POST" style="padding-top: 20px;">
                <button type="submit" name="readmore" value="'.$row['BlogID'].'">Read More</button>
              </form>      
              
            </div>
          </div>';
        open_blog();
    }
    
}

function open_blog() {
    if(isset($_POST["readmore"])) {
        $id = clean($_POST['readmore']);
        $_SESSION['readmore'] = $id;
        header('location: blog/blogpost.php');
    }
}

function date_day($string) {
    $result = '';
    for($i = 8; $i < 10; $i = $i + 1) {
        if($string[$i]!='0' || $i!=8) {
        $result = $result.$string[$i];
        }
    }
    return $result;
}

function date_month($string) {
    $result = '';
    $month = '';
    for($i = 5; $i < 7; $i = $i + 1) {
        $month = $month.$string[$i];
    }

    if($month == '01'){
        $result = $result."January";
    } else if($month == '02'){
        $result = $result."February";
    } else if($month == '03'){
        $result = $result."March";
    } else if($month == '04'){
        $result = $result."April";
    } else if($month == '05'){
        $result = $result."May";
    } else if($month == '06'){
        $result = $result."June";
    } else if($month == '07'){
        $result = $result."July";
    } else if($month == '08'){
        $result = $result."August";
    } else if($month == '09'){
        $result = $result."September";
    } else if($month == '10'){
        $result = $result."October";
    } else if($month == '11'){
        $result = $result."November";
    } else if($month == '12'){
        $result = $result."December";
    }

    return $result;
}

function date_year($string) {
    $result = '';
    for($i = 0; $i < 4; $i = $i + 1) {
        $result = $result.$string[$i];
    }
    return $result;
}

//Display the blogs on blogextend.php
function blog_display($num, $id) {
    $sql = "SELECT * FROM blog WHERE BlogID='$id'";
    $query = Query($sql);
    confirm($query);
    $row = fetch_data($query);
    if($num == 1) {
        return $row['Title'];
    } else if($num == 2) {
        return $row['Author'];
    } else if($num == 3) {
        return pretty_date($row['Date']);
    } else if($num == 4) {
        return $row['Content'];
    } else if($num == 5) {
        return $row['image'];
    }
}


//Contact Us Page Messages
function message_contact() {
    global $con;
    if(isset($_POST['send'])) {
        $fullName = clean($_POST['name']);
        $email = clean($_POST['email']);
        $subject = clean($_POST['subject']);
        $message = clean($_POST['message']);

        $content = mysqli_real_escape_string($con, $message);
        
        $sql = "INSERT INTO messages(`Full Name`,`Email`,`Subject`,`Message`,`Status`) VALUES('$fullName','$email','$subject','$content',0)";
        $query = Query($sql);
        confirm($sql);
        header('location:index.php#contact');
    }
}

//Display function in manage messages
function message_display() {
    $sql = "SELECT * FROM messages ORDER BY Status ASC, ContactID DESC";
    $query = Query($sql);
    confirm($query);

    while($row = fetch_data($query)) {
        echo '<tr>
                <td align="center">'.$row['Full Name'].'</td>
                
                <td align="center">'.$row['Email'].' 
                    <button class="btn-down" onclick="CopyToClipboard(`'.$row['Email'].'`)"><i class="fa fa-copy"></i></button>
                </td>
                <td><b>Sub: '.$row['Subject'].'</b><br>'.$row['Message'].'</td>';
                if($row['Status'] == 0) {
                    echo '<td align="center">
                            <form method="POST">
                            <button class="btn-down" name="markasread" type="Submit" value="'.$row['ContactID'].'">
                                <i class="fa fa-check"></i>
                            </button>
                            </form>
                         </td>';
                } else {
                    echo '<td align="center">
                            <form method="POST">
                            <button class="btn-up" name="markasunread" type="Submit" value="'.$row['ContactID'].'">
                                <i class="fa fa-times"></i>
                            </button>
                            </form>
                         </td>';
                }
        echo '</tr>';
    }
}

//Number of unread Messages
function count_mess() {
    $sql = "SELECT * FROM messages WHERE Status='0'";
    $query = Query($sql);
    confirm($query);
    $num = count_rows($query);
    if($num > 0) {
        return $num." new messages | SDL SMARTLABS";
    } else {
        return "SDL SMARTLABS";
    }
    
}
//Mark as Read and Unread
function readunread() {
    if(isset($_POST['markasread'])) {
        $id = clean($_POST['markasread']);
        $sql = "UPDATE messages SET Status='1' WHERE ContactID='$id'";
        $query = Query($sql);
        confirm($query);
        header('location:managemessage.php#view');
    }

    if(isset($_POST['markasunread'])) {
        $id = clean($_POST['markasunread']);
        $sql = "UPDATE messages SET Status='0' WHERE ContactID='$id'";
        $query = Query($sql);
        confirm($query);
        header('location:managemessage.php#view');
    }
}

//Functions to retrieve components
function valedit($num) {
    $id= $_SESSION['edit'];
    $sql = "SELECT * FROM blog WHERE BlogID='$id'";
    $query = Query($sql);
    confirm($query);
    $row = fetch_data($query);
    if($num == 1) {
        echo $row['Title'];
    } else if($num == 2) {
        echo $row['Author'];
    } else if($num == 3) {
        echo $row['Date'];
    } else if($num == 4) {
        $content = str_replace("<br>", "\r\n",$row['Content']);
        echo $content;
    }

}

//Function to make changes to editblog.php
function editblog() {
    global $con;
    $id= $_SESSION['edit'];
    if(isset($_POST['submitblog'])) {
        $author = clean($_POST['Author']);
        $title = clean($_POST['Title']);
        $_content = clean($_POST['Content']);
        $date = clean($_POST['Date']);
        
        $content = str_replace("\r\n","<br>",$_content);
        $content = mysqli_real_escape_string($con, $content);
        

        $sql = "UPDATE blog SET Author='$author', Title='$title', Date='$date',Content='$content' WHERE BlogID='$id'";
        $query = Query($sql);
        confirm($query);
        unset($_SESSION['edit']);
        header('location:manageblog.php#manage');
    }

    if(isset($_POST['goback'])) {
        unset($_SESSION['edit']);
        header('location:manageblog.php#manage');
    }
}

//Function to count the number of messages
function count_message() {
    $sql = "SELECT * FROM messages";
    $query = Query($sql);
    confirm($query);
    return count_rows($query);
}


//Function to display current details
function user_details($num, $username) {
    $sql = "SELECT * FROM admins WHERE username='$username'";
    $query = Query($sql);
    confirm($query);
    $row = fetch_data($query);
    if($num == 1) {
        return $row['username'];
    } else if($num == 2) {
        return $row['First Name'].' '.$row['Last Name'];
    } else if($num == 3) {
        return $row['Email'];
    } else if($num == 4) {
        return $row['Phone No'];
    } 
}
?>

