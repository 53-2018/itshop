


/* validation textarea */
function check(){
    var x = document.getElementById('comment_box').value
    debugger;
    if (x == null || x == "") {
      document.getElementById('comment_error').innerHTML = "Message box must be filled";
    return false
    }

/* validation email */

var b= document.getElementById("email").value;
debugger;

var r=/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;

/*if(!b.includes("@") && !b.includes("com") ){*/
if(!r.test(b)){ 
    /*alert("Wrong Email format!")*/
    document.getElementById('comment_error_email').innerHTML="Wrong email format";
    return false;
    
}

}
