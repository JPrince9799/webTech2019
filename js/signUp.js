//This is a regular expression variable
// var u_nameregEx = /^(?=.{4,20}$)(?:[a-zA-Z\d]+(?:(?:\.|-|_)[a-zA-Z\d])*)+$/;


//This is a function that checks the database
//to ensure that the username that the user
//is entering is not already taken.

//This is a function also that checks to make sure that the password that is entered
//in the password field, match the second password.
//This allows the user to be sure of their entry
// function verification() {

    //prevent the button from doing the default action
    // event.preventDefault();

    //create a variable to get the username of that is entered
    // var uname = document.getElementById('userName').value;

    // //create a variable and get the password that was initially entered
    // var init_pword = document.getElementById('passWord').value;

    // //create a variable and get the second password that was entered
    // var verif_pword = document.getElementById('vpassWord').value;

    // //variable to test that the username is valid
    // var testUsername = u_nameregEx.test(uname);


    // //if the username is valid
    // if (testUsername) {

    //     document.getElementById('displayUsername').innerHTML = "Username is Valid";

    // }
    // //if the username is invalid
    // else {

    //     document.getElementById('displayUsername').innerHTML = "Username is Invalid or Empty";

    // }

    // //this decision structure is to find out if the passwords match
    // //this checks to make sure both field are not empty
    // if ((init_pword == null) || (verif_pword == null)) {

    //     document.getElementById('displayPassword').innerHTML = "Please enter a password";

    // }
    // //this checks if the two passwords are the same
    // else if (init_pword == verif_pword) {
    //     document.getElementById('displayPassword').innerHTML = "Passwords Match!";

    // }
    // //if the passwords are not the same the alert is shown
    // else {
    //     document.getElementById('displayPassword').innerHTML = "Passwords do not match!";

    // }

//}


// $(document).ready(function() {

//     event.preventDefault();

//     //jQuery methods go here... 
//     $("#submit").onclick(function() {

//         //grab the text field
//         var name = $('#fname').val();

//         var uname = $('#userName').val();

//         var email = $('#E_mail').val();

//         var init_pword = $('#passWord').val();

//         var v_pword = $('#vpassWord').val();

//         //Ajax code
//         $.post("signupProcess.php", {

//                 f_name: name
//                 u_name: uname
//                 mail: email
//                 p_word: init_pword

//             },
//             function(data, status) {

//                 //display data in the html span
//                 //$('#displayPassword').html(data);
//                 alert("Request Sent!");

//             });

//     });

// });