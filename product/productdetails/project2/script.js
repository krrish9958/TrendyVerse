// Main Slider (Home Page)
let counter = 1;
setInterval(() => {
    document.getElementById('radio' + counter).checked = true;
    counter++;
    if(counter>4){
        counter = 1;
    }
}, 3000);
const product = document.querySelector('.product');

// Image Gallery (Single products page)
const mainImg = document.getElementById("main-img");
const smallImg = document.getElementsByClassName("small-img");

smallImg[0].addEventListener("click", () =>{
    mainImg.src = smallImg[0].src;
})
smallImg[1].addEventListener("click", () =>{
    mainImg.src = smallImg[1].src;
})
smallImg[2].addEventListener("click", () =>{
    mainImg.src = smallImg[2].src;
})
smallImg[3].addEventListener("click", () =>{
    mainImg.src = smallImg[3].src;
})

// Responsive nav bar
function menuFunc(){
    const items = document.getElementById("items-res");
    if(items.style.display === "block"){
        items.style.display = "none";
    }
    else{
        items.style.display = "block";
    }
}

// Order placed
function orderPlaced(){
    alert("Your Order has been placed successfully!");

}


