<?php 
include('includes/db.php');
session_start();

if(isset($_POST['save_push_data']))
{
    $title = $_POST['title'];
    $domain = $_POST['domain'];
    $tags = $_POST['tags'];
    $created = $_POST['created'];

    $data = [
        'title' => $title,
        'domain' => $domain,
        'tags' => $tags,
        'created' => $created,
    ];

   $ref = "links/";
   $postdata = $database->getReference($ref)->push($data);

   if($postdata){
        $_SESSION['status'] = "Data Inserted Successfully";
        header("Location: index.php");
    }else{
        $_SESSION['status'] = "Data Not Inserted. Something Went Wrong.!";
        header("Location: index.php");
    }

}
if(isset($_POST['update_data']))
{
    $token = $_POST['ref_token'];

    $title = $_POST['title'];
    $domain = $_POST['domain'];
    $tags = $_POST['tags'];
    $created = $_POST['created'];

    $data = [
        'title' => $title,
        'domain' => $domain,
        'tags' => $tags,
        'created' => $created,
    ];
    $ref = "links/".$token;
    $postdata = $database->getReference($ref)->update($data);

    if($postdata){
        $_SESSION['status'] = "Data Updated Successfully";
        header("Location: index.php");
    }else{
        $_SESSION['status'] = "Data Not Updated. Something Went Wrong.!";
        header("Location: index.php");
    }
}

if(isset($_POST['delete_data']))
{
    $token = $_POST['ref_token_delete'];

    $ref = "links/".$token;
    $postdata = $database->getReference($ref)->remove($data);

    if($postdata){
        $_SESSION['status'] = "Data Deleted Successfully";
        header("Location: index.php");
    }else{
        $_SESSION['status'] = "Data Not Deleted. Something Went Wrong.!";
        header("Location: index.php");
    }
}