let openShopping = document.querySelector('.shopping');
let closeShopping = document.querySelector('.closeShopping');
let list = document.querySelector('.list');
let listCard = document.querySelector('.listCard');
let body = document.querySelector('body');
let total = document.querySelector('.total');
let quantity = document.querySelector('.quantity');

openShopping.addEventListener('click', ()=>{
    body.classList.add('active');
})
closeShopping.addEventListener('click', ()=>{
    body.classList.remove('active');
})
let products = [
    {
        id: 1,
        name: 'ELECTRIC',
        image: '1.PNG',
        price: 120000
    },
     {
        id: 2,
        name: 'PRODUCT NAME 5',
        image: '1.JPG',
        price: 130000
    },
     {
        id: 3,
        name: 'PRODUCT NAME 5',
        image: '1.JPG',
        price: 140000
    },
     {
        id: 4,
        name: 'ELECTRONIC 4',
        image: 'ELECTRONIC 2.JPG',
        price: 150000
    },
     {
        id: 5,
        name: 'PRODUCT NAME 5',
        image: '1.PNG',
        price: 160000
    },
     {
        id: 6,
        name: 'ELECTRIC',
        image: '1.PNG',
        price: 170000
    },
];
let listCards = [];
function initApp(){
    products.forEach((value, hey)=>{
        let newDiv = document.createElement('div');
        newDiv.classList.add('item');
        newDiv.innerHTML = `
            <img src="images/${value.image}"/>
            <div class="tittle">${value.name}</div>
            <div class="price">${value.price.toLocaleString()}</div>
            <button onclick="addToCard(${key})">Add To Card</button>
        `;
        list.appendChild(newDiv);
    })
}
initApp();