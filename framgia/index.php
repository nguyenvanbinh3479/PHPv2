<?php include 'class_lbr.php';?>
<?php include 'teacher.php'; ?>
<?php include 'students.php'; ?>
<?php

echo "<br> <br>main:<br><br>";

    $john = new person("binh",12,"nam","4556789");
    echo "name: ".$john->getName(). 
        "<br> age: ".$john->getAge(). 
        "<br> gender: ".$john->getGender().
        "<br> phone: ".$john->getphone();

    echo "<br> <br>students:<br>";
        
    $students = new students("quynh",12,"nu","9876543",'10');
    echo $students->getName(). 
        $students->getAge(). 
        $students->getGender().
        "<br> diem: ".$students->getdiem().
        $students->getphone();

    echo "<br> <br>teacher:<br>";

    $teacher = new teacher("hoa",22,"nam","23456789",'cntt');
    echo $teacher->getName(). 
        $teacher->getAge(). 
        $teacher->getGender().
        "<br> khoa: ".$teacher->getkhoa().
        $teacher->getphone();
?>