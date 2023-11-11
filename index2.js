import * as MathUtil from "./math_util.js";

console.log(MathUtil.PI);

let circumference = getCircumference(10);
console.log(circumference);

let area = getArea(10);
console.log(area);

document.body.style.backgroundColor = "skyblue";

const title5 = document.getElementById("myTitle");
title5.style.backgroundColor = "#222222";
title5.style.color = "rgb(50, 200, 250)";

// let is variables that are limited to a block scope {}
// var is a variable that are limited to a function(){}
// condition ? exprIfTrue : exprIfFalse

/*

const myStuff = document.querySelector("#test");
const listItem = document.createElement("li");
listItem.textContent = "mango";
//myList.append(listItem);
//myList.preprend(listItem);
myList.insertBefore(listItem, myList.getElementsByTagName("li")[1]);





let fruits = document.getElementsByName("fruits"); // element selectors
console.log(fruits[0]);

// DOM = Document Object Model (API)
// An interface for changing content of a page

//await makes the async function wait

async function loadFile2(){

let fileReloaded2 = false;

if(fileReloaded2){
    return "File loaded"; }
else{
    throw "File NOT loaded"; }
}

async function startProcess(){
    try{
        let message = await locateFile();
        console.log(message);
        let message = await loadFile2();
        console.log(message);
        let message = await closeFile();
        console.log(message);
    }
    catch(error){
        console.log(error);
    }
}
startProcess();

// async = makes a function return a promise

function loadFile(){
let fileReloaded = true;

if(fileReloaded){
    return Promise.resolve("File loaded");
}
else{
    return Promise.reject("File NOT loaded");}
}
loadFile().then(value => console.log(value))
            .catch(error => console.log(error));


//promise = object that encaps the result of a operation
// the state is pending then fulfiled or rejected

const wait = time => new Promise(resolve => {
    setTimeout(resolve, time);
});
wait(3000).then(() => console.log("Thanks for waiting!"));

const promise = new Promise((resolve, reject ) => {
    let fileLoaded = true;
    if(fileLoaded){
        resolve("File loaded");
    }
    else{
        reject("File NOT loaded");
    }

});
promise.then(value => console.log(value)).catch(error => console.log(error));


// Map

const store = new Map([
    ["shirt", 20],
    ["pants", 30],
    ["socks", 5],
    ["shorts", 15]
]);

//store.get("shirt");
//store.set("hat", 40); // adds to the map
//store.delete("") // deletes to the map
//console.log(store.has("hat"));
//console.log(store.size);

store.forEach((value, key) => console.log(`${key} $${value}`));

const percent = (x, y) => x / y * 100;  // alternative to traditional function setup
console.log(`${percent(45, 50)}%`);

//array.reduce()

let reducethis =[5, 10, 15, 20, 25];
let reducetotal = reducethis.reduce(checkOut);

console.log(`The total is: $${total}`);

function checkOut(total, element){
    return total + element;
}

//array.filter()

let filterage = [20, 21, 18]
let candrink = filterage.filter(checkAge);

candrink.forEach(print);

function checkAge(element){
    return element >= 21;
}

//array.map() provides a callback for each array

let things = [1, 2, 3, 4];
let squares = numbers.map(square); 

squares.forEach(print);

function square(element){
    return Math.pow(element, 2);
}

//array.forEach()

let students = ["Mr", "Mrs", "Person"];
students.forEach(capitalize);
students.forEach(print);

function capitalize(element, index, array){
    array[index] = element[0].toUpperCase() + element.substring(1); }

function print(element){
    console.log(element);
}

// callback

sum(2, 3, displayConsole);

function sum(x, y, callback){
    let result = x + y;
    callback(result); //invoke callback }

function displayConsole(output){
    console.log(output); }


//rest parameters
// ...                   to pack arguments into an array

let a1 = 1;
let a2 = 2;
let a3 = 3;

console.log(sum(a1,a2,a3));

function sum(...numbers){ // pack into array
    let total = 0;
    for(let number of numbers){  // use the array
        total += number
    }
    return total  // return the total for sum
}

//spread operator
// ...          expand a array or string (unpack)
let class1 = ["One", "Two", "Three"];
let class2 = ["Four", "Five", "Six"];

class1.push(...class2);

//toLocaleString() 

let myNum = 123456.789;

//myNum = myNum.toLocaleString("en-US"); // US  
//myNum = myNum.toLocaleString("hi-IN"); // Hindi
//myNum = myNum.toLocaleString("de-DE"); // German


//myNum = myNum.toLocaleString("en-US",{style: "currency", currency: "USD"});
//myNum = myNum.toLocaleString("hi-IN",{style: "currency", currency: "INR"});
//myNum = myNum.toLocaleString("de-DE",{style: "currency", currency: "EUR"});

//myNum = myNum.toLocaleString(undefined,{style: "percent"});

myNum = myNum.toLocaleString(undefined,{style: "unit", unit: "celsius"});

let userName = "Zakk";
let stuff = 3;
let total = 73;

//console.log("Hello", userName); // Template using (")
//console.log("You have", items, "items in your cart");
//console.log("Your total is", total);

//console.log(`Hello ${userName}`);                       // Template literals using (`)
//console.log(`You have ${stuff} items in your cart`);
//console.log(`Your total is $${total}`);

let text = 
` Hello ${userName}
You have ${stuff} items in your cart
Your total is $${total}`;

console.log(text);

let age = window.prompt("How old are you");
console.log(typeof age);
age = Number(age);
console.log(typeof age); // convert to int
age += 1;
console.log ("Happy Birthday! You are", age, "years old");

let x = Math.floor(Math.random() * 6) + 1; // Math functions 

// Math.round(x);  Math.floor(x); Math.ceil(x); Math.pow(x, 2); Math.sqrt(x); Math.abs(x); Math.max(x,y,z); Math.min(x,y,z); x = Math.PI;

let fullname = "Test Kid";
let first;
let last;

//first = fullname.slice(0, 4);
//last = fullname.slice(5);

first = fullname.slice(0, fullname.indexOf(" "));
last = fullname.slice(fullname.indexOf(" ") + 1);

console.log(first);
console.log(last);

let symbol = window.prompt("Enter a symbol to use");
let rows = window.prompt("Number of rows?: ")
let columns = window.prompt("Number of columns?: "

for(let i = 1; i <= rows; i+=1){
    for(let j = 1; j <= columns; j+=1){
        document.getElementById("myRectangle").innerHTML += symbol;
    }
    document.getElementById("myRectangle").innerHTML += "<br>";
}

*/


