<?php 
  require_once("config.php");
  $status_code="";
  if(isset($_POST['form_submit']))
    {
      $loanamount=trim($_POST['loanamount']);
      $income=trim($_POST['income']);
      $purposeloan=trim($_POST['purposeloan']);
      $loanmonths=trim($_POST['loanmonths']);
      $name=trim($_POST['name']);
      $fname=trim($_POST['fname']);
      $mname=trim($_POST['mname']);
      $email=trim($_POST['email']);
      $birthdate=trim($_POST['birthdate']);
      $phone=trim($_POST['phone']);
      $pcn=trim($_POST['pcn']);
      $acn=trim($_POST['acn']);
      $vcn=trim($_POST['vcn']);
      $ban=trim($_POST['ban']);
      $ifsc=trim($_POST['ifsc']);
      $bnb=trim($_POST['bnb']);
      $gender=trim($_POST['gender']);
      $category=trim($_POST['category']);
      $Qualification=trim($_POST['Qualification']);
      $martialstatus=trim($_POST['martialstatus']);
      $spname=trim($_POST['spname']);
      $houseno=trim($_POST['houseno']);
      $street=trim($_POST['street']);
      $city=trim($_POST['city']);
      $state=trim($_POST['state']);
      $pin=trim($_POST['pin']);
      $shopname=trim($_POST['shopname']);
      $tlnumber=trim($_POST['tlnumber']);
      $btype=trim($_POST['btype']);
      $baddress=trim($_POST['baddress']);
      $bmobilen=trim($_POST['bmobilen']);
      $bemailid=trim($_POST['bemailid']);
      $declaration=trim($_POST['declaration']);
      $reg_no='LOANAP'.rand(99,10).time();
      
      $folder = "uploads/";

            //Pan Card 
          $pcnimage_file=$_FILES['pcimage']['name'];
          $pan_file = $_FILES['pcimage']['tmp_name'];
          $pcpath = $folder . $pcnimage_file; 
          $target_file=$folder.basename($pcnimage_file);
            $file_name_array = explode(".", $pcnimage_file);
          $extension = end($file_name_array);
          $pan_new_image_name = 'pan_'.rand() . '.' . $extension;

          //Aadhaar Card 
          $acnimage_file=$_FILES['acimage']['name'];
          $aadhaar_file = $_FILES['acimage']['tmp_name'];
          $aapath = $folder . $acnimage_file; 
          $target_file=$folder.basename($acnimage_file);
            $file_name_array = explode(".", $acnimage_file);
          $extension = end($file_name_array);
          $aadhaar_new_image_name = 'aadhaar_'.rand() . '.' . $extension;

          //Voter Card 
          $vcnimage_file=$_FILES['vimage']['name'];
          $voter_file = $_FILES['vimage']['tmp_name'];
          $vcnpath = $folder . $vcnimage_file; 
          $target_file=$folder.basename($vcnimage_file);
            $file_name_array = explode(".", $vcnimage_file);
          $extension = end($file_name_array);
          $voter_new_image_name = 'voter_'.rand() . '.' . $extension;

          //Bank Pass Card 
          $bpnimage_file=$_FILES['bpimage']['name'];
          $bankp_file = $_FILES['bpimage']['tmp_name'];
          $bpnpath = $folder . $bpnimage_file; 
          $target_file=$folder.basename($bpnimage_file);
            $file_name_array = explode(".", $bpnimage_file);
          $extension = end($file_name_array);
          $bankp_new_image_name = 'bank_'.rand() . '.' . $extension;

          //trad Lince Card 
          $trlnimage_file=$_FILES['trlimage']['name'];
          $tred_file = $_FILES['trlimage']['tmp_name'];
          $trlnpath = $folder . $trlnimage_file; 
          $target_file=$folder.basename($trlnimage_file);
            $file_name_array = explode(".", $trlnimage_file);
          $extension = end($file_name_array);
          $treadl_new_image_name = 'photo_'.rand() . '.' . $extension;

          //Shope Pic  Card 
          $shopimage_file=$_FILES['spoimage']['name'];
          $shop_file = $_FILES['spoimage']['tmp_name'];
          $shoppath = $folder . $shopimage_file; 
          $target_file=$folder.basename($shopimage_file);
            $file_name_array = explode(".", $shopimage_file);
          $extension = end($file_name_array);
          $shop_new_image_name = 'photo_'.rand() . '.' . $extension;

          //Your Photo Card 
          $ypimage_file=$_FILES['ypimage']['name'];
          $your_file = $_FILES['ypimage']['tmp_name'];
          $yrpath = $folder . $ypimage_file; 
          $target_file=$folder.basename($ypimage_file);
            $file_name_array = explode(".", $ypimage_file);
          $extension = end($file_name_array);
          $your_pnew_image_name = 'photo_'.rand() . '.' . $extension;

          //Sign 
          $simage_file=$_FILES['simage']['name'];
          $sing_file = $_FILES['simage']['tmp_name'];
          $spath = $folder . $simage_file; 
          $starget_file=$folder.basename($simage_file);
          $file_name_array = explode(".", $simage_file);
          $extension = end($file_name_array);
          $snew_image_name = 'sign_'.rand() . '.' . $extension;

          if($pan_file!='')
          {
          move_uploaded_file($pan_file,  $folder . $pan_new_image_name);
          }
          if($aadhaar_file!='')
          {
          move_uploaded_file($aadhaar_file,  $folder . $aadhaar_new_image_name);
          }
          if($voter_file!='')
          {
          move_uploaded_file($voter_file,  $folder . $voter_new_image_name);
          }
          if($bankp_file!='')
          {
          move_uploaded_file($bankp_file,  $folder . $bankp_new_image_name);
          }
          if($tred_file!='')
          {
          move_uploaded_file($tred_file,  $folder . $treadl_new_image_name);
          }
          if($shop_file!='')
          {
          move_uploaded_file($shop_file,  $folder . $shop_new_image_name);
          }
          if($your_file!='')
          {
          move_uploaded_file($your_file,  $folder . $your_pnew_image_name);
          }
          if($sing_file!='')
          {
          move_uploaded_file($sing_file, $folder . $snew_image_name); 
          }

      $sql="INSERT into loan_apply(loanmonths, purposeloan, income, loanamount, name, fname, mname, email, birthdate, phone, pcn, acn, vcn, ban, ifsc, bnb, gender, Qualification, martialstatus,  category, spname, houseno, street, city, state, pin, shopname, tlnumber, btype, baddress, bmobilen, bemailid, declaration, reg_no, pcimage, acimage, vimage, bpimage, trlimage, spoimage, ypimage, simage) 
            VALUES(:loanmonths,:purposeloan,:income,:loanamount,:name,:fname,:mname,:email,:birthdate,:phone,:pcn,:acn,:vcn,:ban,:ifsc,:bnb,:gender,:Qualification,:martialstatus,:category,:spname,:houseno,:street,:city,:state,:pin,:shopname,:tlnumber,:btype,:baddress,:bmobilen,:bemailid, :declaration,:reg_no,:pcimage,:acimage,:vimage,:bpimage,:trlimage,:spoimage,:ypimage,:simage)";
          
      $stmt = $db->prepare($sql);
          $stmt->bindParam(':loanamount', $loanamount, PDO::PARAM_STR);
          $stmt->bindParam(':income', $income, PDO::PARAM_STR);
          $stmt->bindParam(':purposeloan', $purposeloan, PDO::PARAM_STR);
          $stmt->bindParam(':loanmonths', $loanmonths, PDO::PARAM_STR);
          $stmt->bindParam(':name', $name, PDO::PARAM_STR);
          $stmt->bindParam(':fname', $fname, PDO::PARAM_STR);
          $stmt->bindParam(':mname', $mname, PDO::PARAM_STR);
          $stmt->bindParam(':email', $email, PDO::PARAM_STR);
          $stmt->bindParam(':birthdate', $birthdate, PDO::PARAM_STR);
          $stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
          $stmt->bindParam(':pcn', $pcn, PDO::PARAM_STR);
          $stmt->bindParam(':acn', $acn, PDO::PARAM_STR);
          $stmt->bindParam(':vcn', $vcn, PDO::PARAM_STR);
          $stmt->bindParam(':ban', $ban, PDO::PARAM_STR);
          $stmt->bindParam(':ifsc', $ifsc, PDO::PARAM_STR);
          $stmt->bindParam(':bnb', $bnb, PDO::PARAM_STR);
          $stmt->bindParam(':gender', $gender, PDO::PARAM_STR);          
          $stmt->bindParam(':category', $category, PDO::PARAM_STR);
          $stmt->bindParam(':Qualification', $Qualification, PDO::PARAM_STR);
          $stmt->bindParam(':martialstatus', $martialstatus, PDO::PARAM_STR);
          $stmt->bindParam(':spname', $spname, PDO::PARAM_STR);
          $stmt->bindParam(':houseno', $houseno, PDO::PARAM_STR);
          $stmt->bindParam(':street', $street, PDO::PARAM_STR);
          $stmt->bindParam(':city', $city, PDO::PARAM_STR);
          $stmt->bindParam(':state', $state, PDO::PARAM_STR);
          $stmt->bindParam(':pin', $pin, PDO::PARAM_STR);
          $stmt->bindParam(':shopname', $shopname, PDO::PARAM_STR);
          $stmt->bindParam(':tlnumber', $tlnumber, PDO::PARAM_STR);
          $stmt->bindParam(':btype', $btype, PDO::PARAM_STR);
          $stmt->bindParam(':baddress', $baddress, PDO::PARAM_STR);
          $stmt->bindParam(':bmobilen', $bmobilen, PDO::PARAM_STR);
          $stmt->bindParam(':bemailid', $bemailid, PDO::PARAM_STR);
          $stmt->bindParam(':declaration', $declaration, PDO::PARAM_STR);
          $stmt->bindParam(':reg_no', $reg_no, PDO::PARAM_STR);
              $stmt->bindParam(':pcimage', $pan_new_image_name, PDO::PARAM_STR);
              $stmt->bindParam(':acimage', $aadhaar_new_image_name, PDO::PARAM_STR);
              $stmt->bindParam(':vimage', $voter_new_image_name, PDO::PARAM_STR);
              $stmt->bindParam(':bpimage', $bankp_new_image_name, PDO::PARAM_STR);
              $stmt->bindParam(':trlimage', $treadl_new_image_name, PDO::PARAM_STR);
              $stmt->bindParam(':spoimage', $shop_new_image_name, PDO::PARAM_STR);
              $stmt->bindParam(':ypimage', $your_pnew_image_name, PDO::PARAM_STR);
            $stmt->bindParam(':simage', $snew_image_name, PDO::PARAM_STR);
            $stmt->execute();
          $last_id_new = $db->lastInsertId();

          if($last_id_new!='')
          {
            header("location:preview.php?id=".$reg_no);
          }
          else 
          {
            echo 'Something went wrong';
          }          
    }

?>