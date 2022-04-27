


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
  {name:'air conditoners', price:40,color:"white",size:"m"},
  {name:'air conditoners', price:50,color:"black",size:"l"},
  {name:'laptops', price:100},
  {name:'laptops', price:500},
  {name:'televisions', price:500,color:"black"},
  {name:'televisions', price:1000,color:"black"},
  {name:'air conditoners', price:40,color:"black",size:"s"},
];
let allArticles=[];

for (let i = 0; i < articles.length; i++) {
 if(articles[i].price>40){

allArticles.push(articles[i]);

console.log(allArticles);
  
}
}
