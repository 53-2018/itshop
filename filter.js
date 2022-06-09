let checkedBrands = [];
for (let i = 0; i < brands.length; i++) 
{
     checkedBrands.push(Number(brands[i].id_brand));
}
displayProducts(checkedBrands,1);
checkedBrands=[];

function brandListChange(brandId) {

    if (document.getElementById('brand-'+ brandId).checked) 
    {
        checkedBrands.push(brandId);
    } else 
    {
        checkedBrands = checkedBrands.filter(function(e) { return e != brandId });
    }
    displayProducts(checkedBrands,1);
}



let checkedManufacturers = [];
for (let i = 0; i < manufacturers.length; i++) 
{
     checkedManufacturers.push(Number(manufacturers[i].id_manufacturer));
}
displayProducts(checkedManufacturers,2);
checkedManufacturers=[];

function manufactListChange(manufactId) {

    if (document.getElementById('manufacturer-'+ manufactId).checked) 
    {
        checkedManufacturers.push(manufactId);
    } else 
    {
        checkedManufacturers = checkedManufacturers.filter(function(e) { return e != manufactId });
    }
    displayProducts(checkedManufacturers,2);
}

function displayProducts(checked, type)
{
    document.getElementById('article-cards').innerHTML = '';
    for (let i = 0; i < products.length; i++)
    { 
        if ((checked.includes(Number(products[i].id_brand)) && type==1) ||  (checked.includes(Number(products[i].id_manufacturer)) && type==2)) 
        {
            document.getElementById('article-cards').innerHTML +=
            `
            <div class="shop-card ${products[i].name_type}">
                <img src="../image/${products[i].image}" alt="slikaa" class="card-img">
                <div>
                    <p style="color:red">${products[i].name_type}</p>
                    <h4>${products[i].name_manufacturer} ${products[i].name_brand}</h4>
                    <p>${products[i].name}</p>
                    <img src="../image/rating.png" class="rating-img">
                    <p><span>${products[i].price}$</span></p>
                    <a href='../functionality/controller.php?action=addToOrder&id_product=${products[i].id}&price=${products[i].price}'> Add to orders </a>
                </div>
            </div>
            `;
        }
    }
}

function showAllProduct()
{
    document.getElementById('article-cards').innerHTML = '';
    for (let i = 0; i < products.length; i++)
    { 
        document.getElementById('article-cards').innerHTML +=
        `
        <div class="shop-card ${products[i].name_type}">
            <img src="../image/${products[i].image}" class="card-img">
            <div>
                <p style="color:red">${products[i].name_type}</p>
                <h4>${products[i].name_manufacturer} ${products[i].name_brand}</h4>
                <p>${products[i].name}</p>
                <img src="../image/rating.png" class="rating-img">
                <p><span>${products[i].price}$</span></p>
                <a href='../functionality/functionality/controller.php?action=addToOrder&id_product=${products[i].id}'> Add to orders </a>
            </div>
        </div>
        `;
    }
}

let checkedCategories = [];
function categoriesListChange(categoryId)
{
    if (document.getElementById('categories-'+ categoryId).checked) 
    {
        checkedCategories.push(categoryId);
    } else 
    {
        checkedCategories = checkedCategories.filter(function(e) { return e != categoryId });
    }
    showByCategories(checkedCategories);
    console.log(checkedCategories);
}

function showByCategories(category)
{
    document.getElementById('article-cards').innerHTML = '';
    for (let i = 0; i < products.length; i++)
    { 
        for(let j=0; j<category.length; j++)
        {
            if(products[i].id_type==category[j])
            {
                document.getElementById('article-cards').innerHTML +=
                `
                <div class="shop-card ${products[i].name_type}">
                    <img src="../image/${products[i].image}" alt="" class="card-img">
                    <div>
                        <p style="color:red">${products[i].name_type}</p>
                        <h4>${products[i].name_manufacturer} ${products[i].name_brand}</h4>
                        <p>${products[i].name}</p>
                        <img src="../image/rating.png" alt="" class="rating-img">
                        <p><span>${products[i].price}$</span></p>
                        <a href='../functionality/functionality/controller.php?action=addToOrder&id_product=${products[i].id}'> Add to orders </a>
                    </div>
                </div>
                `;
            }
        }
    } 
}
function filterByPrice()
{
    let priceMin=document.getElementById('price-min').value;
    let priceMax=document.getElementById('price-max').value;

    document.getElementById("price-from").value=priceMin;
    document.getElementById("price-to").value=priceMax;
}
function showByPrice()
{
    let priceMin=Number(document.getElementById('price-min').value);
    let priceMax=Number(document.getElementById('price-max').value);

    document.getElementById('article-cards').innerHTML = '';
    for (let i = 0; i < products.length; i++)
    { 
        if((products[i].price>=priceMin) && (products[i].price<=priceMax))
        {
            document.getElementById('article-cards').innerHTML +=
            `
            <div class="shop-card ${products[i].name_type}">
                <img src="../image/${products[i].image}" alt="" class="card-img">
                <div>
                    <p style="color:red">${products[i].name_type}</p>
                    <h4>${products[i].name_manufacturer} ${products[i].name_brand}</h4>
                    <p>${products[i].name}</p>
                    <img src="../image/rating.png" alt="" class="rating-img">
                    <p><span>${products[i].price}$</span></p>
                    <a href='../functionality/functionality/controller.php?action=addToOrder&id_product=${products[i].id}'> Add to orders </a>
                </div>
            </div>
            `;
        }
    }}

function showSearched()
{
    let search=document.getElementById('search-bar').value;
    search=search.toLowerCase();
    let tmp=0;
    document.getElementById('article-cards').innerHTML = '';
    for (let i = 0; i < products.length; i++)
    { 
        if(products[i].name.toLowerCase().includes(search) ||
        products[i].name_type.toLowerCase().includes(search)|| 
        products[i].name_brand.toLowerCase().includes(search))
        {
            tmp+=1;
            document.getElementById('article-cards').innerHTML +=
            `
            <div class="shop-card ${products[i].name_type}">
                <img src="../image/${products[i].image}" alt="" class="card-img">
                <div>
                    <p style="color:red">${products[i].name_type}</p>
                    <h4>${products[i].name_manufacturer} ${products[i].name_brand}</h4>
                    <p>${products[i].name}</p>
                    <img src="../image/rating.png" alt="" class="rating-img">
                    <p><span>${products[i].price}$</span></p>
                    <a href='../functionality/functionality/controller.php?action=addToOrder&id_product=${products[i].id}'> Add to orders </a>
                </div>
            </div>
            `;
        }
    }
    if(tmp==0)
    document.getElementById('article-cards').innerHTML +="Nemaa artikala za zadatu pretragu!";

}
