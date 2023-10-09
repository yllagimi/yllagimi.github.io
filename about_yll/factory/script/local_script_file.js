//alert("Hello from the other side!");

//var fName = prompt("What's your name there fella?");
//alert("Well howdy " + fName + ". Pleased to meetcha.");



////function foodquery() {
//var foodName = document.getElementById("USDAnumber").value;
//alert("So you wanted " + foodName + " checked out ey?");
//}

function ndbnoquery() {
    var api = "https://api.nal.usda.gov/ndb/V2/reports?ndbno=";
    var ndbno = document.getElementById("ndbno").value;
    var type = "&type=b";  //Report type: [b]asic or [f]ull or [s]tats//
    var format = "&format=json"; 
    var apiKey = "&api_key=17ZmHsEWaGtddNT26PffzyykXP1vVMX6i0CFpnCi";
    var requestURL = api + ndbno + type + format + apiKey;
//    alert ("So you want to get info and go here:" + requestURL);
}


var header = document.querySelector('header');
var section = document.querySelector('section');
var requestURL = 'https://api.nal.usda.gov/ndb/V2/reports?ndbno=45093253&type=b&format=json&api_key=17ZmHsEWaGtddNT26PffzyykXP1vVMX6i0CFpnCi';

var request = new XMLHttpRequest();
request.open('GET', requestURL);
request.responseType = 'json';
request.send();

request.onload = function(){
    var foodDesc = request.response;
    populateHeader (foodDesc);
    showFoods(foodDesc);
}

function populateHeader(jsonObj) {
    var myH1 = document.createElement('h1');
    myH1.textContent = jsonObj['foods[0].food[0].desc [0].name'];
    header.appendChild(myH1);
    var myPara = document.createElement('p');
    myPara.textContent = 'USADA ID: ' + jsonObj['foods[0].food[0].desc[0].ndbno'] + ' // Calories: ' + jsonObj['foods[0].food[0].nutrients[0].value'];
    header.appendChild(myPara);
}