let products = [
    {
        "type": "mobiles",
        "name": "Iphone 13",
        "price": 1000
    },
    {
        "type": "laptops",
        "name": "Macbook Air",
        "price": 500
    },
    {
        "type": "laptops",
        "name": "Acer 500",
        "price": 400
    },
    {
        "type": "headphones",
        "name": "Apple X3",
        "price": 1800
    },
    {
        "type": "mobiles",
        "name": "Huawei P30",
        "price": 5000
    },
    {
        "type": "mobiles",
        "name": "Iphone 11",
        "price": 7000
    },
    {
        "type": "laptops",
        "name": "Lenovo",
        "price": 630
    },
    {
        "type": "mobiles",
        "name": "Samsung s20",
        "price": 6000
    },

    {
        "type": "laptops",
        "name": "DELL ",
        "price": 7500
    },
];

//range slider
let rangeSlider = document.getElementById('range-slider');
let value = document.getElementById("value");
value.textContent = rangeSlider.value + "$";

rangeSlider.oninput = function(){
    let listProducts = '';
    value.textContent = this.value;
    value.textContent += " $";
    products.forEach(element => {
        if(element.price<=this.value){
            listProducts+="<div class='col-lg-4 d-flex flex-column'><h1>"+element.type+"</h1><br><p>"+element.name+"</p><br><p>"+element.price+"</p></div>";
        }
    });
    document.getElementById('product-list').innerHTML = listProducts;
}
