<?php

  function checkInput($value, $type = 'email'){
    switch($type){
      case 'email':
        $pattern = '#^[a-z][a-z0-9_\.]{4,31}@[a-z0-9]{2,}(\.[a-z0-9]{2,4}){1,2}$#';
      break;
      case 'username':
        $pattern = '#^[a-z][a-z0-9_\.\s]{4,31}$#';
      break;
      case 'password':
        $pattern = '#^(?=.*\d)(?=.*[A-Z])(?=.*\W).{8,100}$#';
      break;
      case 'website':
        $pattern = '#^(https?://(www\.)?|(www\.))[a-z0-9\-]{3,}(\.[a-z]{2,4}){1,2}$#';
      break;
    }
    $flag = preg_match($pattern, $value);
    return $flag;
  }

  // function checkEmail($value){
  //   $pattern = '#^[a-z][a-z0-9_\.]{4,31}@[a-z0-9]{2,}(\.[a-z0-9]{2,4}){1,2}$#';
  //   $flag= false;
  //   if(preg_match($pattern, $value)==true){
  //     $flag = true;
  //   }
  //   return $flag;
  // }

  // function checkUsername($value){
  //   $pattern = '#^[a-z][a-z0-9_\.\s]{4,31}$#';
  //   $flag = false;
  //   if(preg_match($pattern, $value)==true){
  //     $flag = true;
  //   }
  //   return $flag;
  // }

  // function checkPassword($value){
  //   $pattern = '#^(?=.*\d)(?=.*[A-Z])(?=.*\W).{8,8}$#';
  //   $flag = false;
  //   if(preg_match($pattern, $value)==true){
  //     $flag = true;
  //   }
  //   return $flag;
  // }

  // function checkWebsite($value){
  //   $pattern = '#^(https?://(www\.)?|(www\.))[a-z0-9\-]{3,}(\.[a-z]{2,4}){1,2}$#';
  //   $flag = false;
  //   if(preg_match($pattern, $value)==true){
  //     $flag = true;
  //   }
  //   return $flag;
  // }


