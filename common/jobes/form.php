<?php 
  require_once("config.php");
  if(isset($_POST['form_submit']))
    {
      $name=trim($_POST['name']);
      $fname=trim($_POST['fname']);
      $mname=trim($_POST['mname']);
      $email=trim($_POST['email']);
      $birthdate=trim($_POST['birthdate']);
      $mobile=trim($_POST['mobile']);
      $pancard=trim($_POST['pancard']);
      $aadhaarcard=trim($_POST['aadhaarcard']);
      $bankcnumber=trim($_POST['bankcnumber']);
      $ifsc=trim($_POST['ifsc']);
      $bankbranch=trim($_POST['bankbranch']);
      $gender=trim($_POST['gender']);
      $qualification=trim($_POST['qualification']);
      $martialstatus=trim($_POST['martialstatus']);
      $category=trim($_POST['category']);
      $spname=trim($_POST['spname']);
      $houseno=trim($_POST['houseno']);
      $street=trim($_POST['street']);
      $city=trim($_POST['city']);
      $state=trim($_POST['state']);
      $pincode=trim($_POST['pincode']);
      $jobes=trim($_POST['jobes']);
      $declaration=trim($_POST['declaration']);
      $reg_no='NFLOAN'.rand(99,10).time();
      $folder = "uploads/";

            //Photo 
          $image_file=$_FILES['image']['name'];
          $file = $_FILES['image']['tmp_name'];
          $path = $folder . $image_file; 
          $target_file=$folder.basename($image_file);
            $file_name_array = explode(".", $image_file);
          $extension = end($file_name_array);
          $new_image_name = 'photo_'.rand() . '.' . $extension;

          //Sign 
          $simage_file=$_FILES['simage']['name'];
          $sfile = $_FILES['simage']['tmp_name'];
          $spath = $folder . $simage_file; 
          $starget_file=$folder.basename($simage_file);
          $file_name_array = explode(".", $simage_file);
          $extension = end($file_name_array);
          $snew_image_name = 'sign_'.rand() . '.' . $extension;


          if($file!='')
          {
          move_uploaded_file($file,  $folder . $new_image_name); 
          }
          if($sfile!='')
          {
          move_uploaded_file($sfile, $folder . $snew_image_name); 
          }

      $sql="INSERT into jobe_registrations(name,fname, mname, email, birthdate, mobile, pancard, aadhaarcard, bankcnumber, ifsc, bankbranch, gender, qualification, martialstatus,category, spname, houseno, street, city, state, pincode,jobes,declaration,reg_no,image,sign) 
            VALUES(:name,:fname, :mname, :email, :birthdate, :mobile, :pancard, :aadhaarcard, :bankcnumber, :ifsc, :bankbranch, :gender, :qualification, :martialstatus,:category, :spname, :houseno, :street, :city, :state, :pincode,:jobes,:declaration,:reg_no,:image,:sign)";
          
      $stmt = $db->prepare($sql);
          $stmt->bindParam(':name', $name, PDO::PARAM_STR);
          $stmt->bindParam(':fname', $fname, PDO::PARAM_STR);
          $stmt->bindParam(':mname', $mname, PDO::PARAM_STR);
          $stmt->bindParam(':email', $email, PDO::PARAM_STR);
          $stmt->bindParam(':birthdate', $birthdate, PDO::PARAM_STR);
          $stmt->bindParam(':mobile', $mobile, PDO::PARAM_STR);
          $stmt->bindParam(':pancard', $pancard, PDO::PARAM_STR);
          $stmt->bindParam(':aadhaarcard', $aadhaarcard, PDO::PARAM_STR);
          $stmt->bindParam(':bankcnumber', $bankcnumber, PDO::PARAM_STR);
          $stmt->bindParam(':ifsc', $ifsc, PDO::PARAM_STR);
          $stmt->bindParam(':bankbranch', $bankbranch, PDO::PARAM_STR);
          $stmt->bindParam(':gender', $gender, PDO::PARAM_STR);
          $stmt->bindParam(':qualification', $qualification, PDO::PARAM_STR);
          $stmt->bindParam(':martialstatus', $martialstatus, PDO::PARAM_STR);
          $stmt->bindParam(':category', $category, PDO::PARAM_STR);
          $stmt->bindParam(':spname', $spname, PDO::PARAM_STR);
          $stmt->bindParam(':houseno', $houseno, PDO::PARAM_STR);
          $stmt->bindParam(':street', $street, PDO::PARAM_STR);
          $stmt->bindParam(':city', $city, PDO::PARAM_STR);
          $stmt->bindParam(':state', $state, PDO::PARAM_STR);
          $stmt->bindParam(':pincode', $pincode, PDO::PARAM_STR);
          $stmt->bindParam(':jobes', $jobes, PDO::PARAM_STR);
          $stmt->bindParam(':declaration', $declaration, PDO::PARAM_STR);
          $stmt->bindParam(':reg_no', $reg_no, PDO::PARAM_STR);
              $stmt->bindParam(':image', $new_image_name, PDO::PARAM_STR);
            $stmt->bindParam(':sign', $snew_image_name, PDO::PARAM_STR);
          $stmt->execute();
          $last_id = $db->lastInsertId();
          if($last_id!='')
          {
            header("location:preview.php?id=".$reg_no);
          }
          else 
          {
            echo 'Something went wrong';
          }
    }

?>