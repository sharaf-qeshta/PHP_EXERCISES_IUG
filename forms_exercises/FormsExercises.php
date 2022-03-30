<?php
/**
For the following features, determine appropriate HTTP method (GET or POST)
تسجيل مساق جديد post
post إضافة طالب جديد للجامعة
get عرض سجل الدرجات
post نشـر منشور على فيسبوك
post فتح صفحة على إنستغرام
استعراض الستوري على إنستغرام get
إرسال رسالة لمدرس المساق على الموودل post
 */


/**
    Create a form to add student, with the following inputs:
    Name, email, phone, gender (radio button), nationality (dropdown list), have a file in archive (checkbox)
    And make necessary form handling and validation
 */
function dealWithRegisterForm()
{
    if (isset($_POST["display_name"], $_POST["email"]
    , $_POST["phone_number"], $_POST["gender"], $_POST["nationality"]
    , $_POST["have_file"]))
    {
        echo "<h1> Name: " . $_POST["display_name"] . "</h1>";
        echo "<h1> Email: " . $_POST["email"] . "</h1>";
        echo "<h1> Phone Number: " . $_POST["phone_number"] . "</h1>";
        echo "<h1> Gender: " . $_POST["gender"] . "</h1>";
        echo "<h1> Nationality: " . $_POST["nationality"] . "</h1>";
        echo "<h1> Have File In Archive: " . $_POST["have_file"] . "</h1>";
    }


}

dealWithRegisterForm(); // works fine


/**
    Write a PHP code to validation uploaded file with the following requirements:
    File is only image
    Size of file is less than 1 MG
 */

function dealWithFileUpload()
{
        // File is only image
        if (getimagesize($_FILES["uploadedFile"]["tmp_name"]) !== false)
            echo "<h1> " . $_FILES["uploadedFile"]["name"] . " is an image" . "</h1>";
        else
            echo "<h1> " . $_FILES["uploadedFile"]["name"] . " is not an image" . "</h1>";

        // Size of file is less than 1 MG (i think you mean megabyte)
        if ($_FILES["uploadedFile"]["size"] <=  1024000)
            echo "<h1> " . $_FILES["uploadedFile"]["name"] . " size is "
                . ($_FILES["uploadedFile"]["size"] / 1000000) . "MB and its ok" . "</h1>";
        else
            echo "<h1> " . $_FILES["uploadedFile"]["name"] . " size is "
                . ($_FILES["uploadedFile"]["size"] / 1000000)
                . "MB and is not ok because it exceeds the limit 1MB" . "</h1>";

}

dealWithFileUpload();