function verifyLogin(username,password){
    string = "username="+username+
            "&password="+password;


    $.ajax({
        type: "POST",
        url: "php/users/selectUser.php",
        data: string,
        success: function (r) {
            if (r == 1) {
                window.location="index.html";
            } else {

                alert("Incorrect User or Password...")

            }

        }
    });

}



function insertImage(fileName) {
    string = "name="+fileName;


    $.ajax({
        type: "POST",
        url: "php/users/insertFile.php",
        data: string,
        success: function (r) {
            if (r == 1) {
                alert("Added image successfully");
                $("#ChImageContact").load('panel.php');
                $("#ChImageIndex").load('panel.php');
            } else {
                alert("There was no file...");

            }

        }
    });


}