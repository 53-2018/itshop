


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
/* filters for Shop Page*/
let articles=[
  {type:"air conditoners", price:40,color:"white",size:"m"},
  {type:"air conditoners", price:40,color:"black",size:"l"},
  {type:"laptops", price:100},
  {type:"laptops", price:500},
  {type:"televisions", price:500,color:"black"},
  {type:"televisions", price:1000,color:"black"},
  {type:"air conditoners", price:40,color:"black",size:"s"},
];

for (let i = 0; i < articles.length; i++) {
 if(articles[i].type=="televisions"){
  
}
}
