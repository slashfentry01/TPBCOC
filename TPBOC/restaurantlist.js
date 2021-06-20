
var restaurantlist_array = [];
var restaurant_array = [];

//function to call restaurantDB search API
function search() {
    //Retrieve search term from Restaurant.html of element with id= searchTerm
    var searchTerm = document.getElementById('searchTerm').value;
    //Create a GET Request to the URL ‘searchRestaurant/name’
    var request = new XMLHttpRequest();
    request.open("GET", "/restaurantSearch/" + searchTerm, true);
    request.setRequestHeader("Content-Type", "application/json");
    //On retrieved of data from backend, initialize the value into restaurant_array and call the function 
    request.onload = function () {
        //retrieve response from API and parse the data into restaurant_array (intialized in app.js)
        restaurant_array = JSON.parse(request.responseText);
        //call displaySearchRestaurant function
        displaySearchRestaurant();
    };
    request.send();
}



//function to display search restaurant using data from restaurant_array
function displaySearchRestaurant() {
    //retrieve empty table element from Restaurant.html
    
    var table = document.getElementById('restaurantliststuff');
    //empty the table if there are any existing restaurants showing
    table.innerHTML = '';
    //loop through all restaurant information inside restaurant_array
    for (var i = 0; i < restaurant_array.length; i++) {
        //Call function formHTMLforDisplay and parse in each restaurant from array
        var cell = formHTMLlistforDisplay(restaurant_array[i]);
        //Insert the HTML into restaurantTable div innerHTML
        //DOM manipulation to insert HTML into Restaurant.html
        table.insertAdjacentHTML('beforeend', cell);
    }
}



//filter function, using various routes with different sort and filter combinations
function filter() { 
    var filter = new Object();
    var sort = new Object();

    //the var radios are to allow users to uncheck radio boxes by holding down crtl while clicking
    var radios = document.getElementsByName('cuisine_type');
for(i=0; i<radios.length; i++ ) {
    radios[i].onclick = function(e) {
        if(e.ctrlKey) {
            this.checked = false;
        }
    }
}
var radios2 = document.getElementsByName('dining_type');
for(i=0; i<radios.length; i++ ) {
    radios2[i].onclick = function(e) {
        if(e.ctrlKey) {
            this.checked = false;
        }
    }
}
var radios3 = document.getElementsByName('avgrating');
for(i=0; i<radios.length; i++ ) {
    radios3[i].onclick = function(e) {
        if(e.ctrlKey) {
            this.checked = false;
        }
    }
}

    filter.cuisine_type = '';
    filter.dining_type = '';
    sort.sortby = '';
    //each if else statment is to account for a possible combination of filter and sort, and to get the route accordingly
   if ((document.querySelector('input[name="cuisine_type"]:checked'))&&(document.querySelector('input[name="dining_type"]:checked'))&&(document.querySelector('input[id="arasc"]:checked'))){
        filter.cuisine_type = document.querySelector('input[name="cuisine_type"]:checked').value;
        sort.sortby = document.querySelector('input[id="arasc"]:checked').value;
        filter.dining_type = document.querySelector('input[name="dining_type"]:checked').value;

        var request = new XMLHttpRequest();
    request.open("GET", "/restaurantfilter2/" + filter.cuisine_type  + '_' + filter.dining_type + '_' + sort.sortby, true);
    request.setRequestHeader("Content-Type", "application/json");
    request.onload = function () {
        restaurantlist_array = JSON.parse(request.responseText);
        displayfiltersortRestaurant();
    };
        
    }
    else if ((document.querySelector('input[name="cuisine_type"]:checked'))&&(document.querySelector('input[name="dining_type"]:checked'))&& document.querySelector('input[id="nameasc"]:checked')){
        filter.cuisine_type = document.querySelector('input[name="cuisine_type"]:checked').value;
        sort.sortby = document.querySelector('input[id="nameasc"]:checked').value;
        filter.dining_type = document.querySelector('input[name="dining_type"]:checked').value;

        var request = new XMLHttpRequest();
    request.open("GET", "/restaurantfilter3/" + filter.cuisine_type  + '_' + filter.dining_type + '_' + sort.sortby, true);
    request.setRequestHeader("Content-Type", "application/json");
    request.onload = function () {
... (335 lines left)
Collapse
js.txt
18 KB
﻿
var restaurantlist_array = [];
var restaurant_array = [];

//function to call restaurantDB search API
function search() {
    //Retrieve search term from Restaurant.html of element with id= searchTerm
    var searchTerm = document.getElementById('searchTerm').value;
    //Create a GET Request to the URL ‘searchRestaurant/name’
    var request = new XMLHttpRequest();
    request.open("GET", "/restaurantSearch/" + searchTerm, true);
    request.setRequestHeader("Content-Type", "application/json");
    //On retrieved of data from backend, initialize the value into restaurant_array and call the function 
    request.onload = function () {
        //retrieve response from API and parse the data into restaurant_array (intialized in app.js)
        restaurant_array = JSON.parse(request.responseText);
        //call displaySearchRestaurant function
        displaySearchRestaurant();
    };
    request.send();
}



//function to display search restaurant using data from restaurant_array
function displaySearchRestaurant() {
    //retrieve empty table element from Restaurant.html
    
    var table = document.getElementById('restaurantliststuff');
    //empty the table if there are any existing restaurants showing
    table.innerHTML = '';
    //loop through all restaurant information inside restaurant_array
    for (var i = 0; i < restaurant_array.length; i++) {
        //Call function formHTMLforDisplay and parse in each restaurant from array
        var cell = formHTMLlistforDisplay(restaurant_array[i]);
        //Insert the HTML into restaurantTable div innerHTML
        //DOM manipulation to insert HTML into Restaurant.html
        table.insertAdjacentHTML('beforeend', cell);
    }
}



//filter function, using various routes with different sort and filter combinations
function filter() { 
    var filter = new Object();
    var sort = new Object();

    //the var radios are to allow users to uncheck radio boxes by holding down crtl while clicking
    var radios = document.getElementsByName('cuisine_type');
for(i=0; i<radios.length; i++ ) {
    radios[i].onclick = function(e) {
        if(e.ctrlKey) {
            this.checked = false;
        }
    }
}
var radios2 = document.getElementsByName('dining_type');
for(i=0; i<radios.length; i++ ) {
    radios2[i].onclick = function(e) {
        if(e.ctrlKey) {
            this.checked = false;
        }
    }
}
var radios3 = document.getElementsByName('avgrating');
for(i=0; i<radios.length; i++ ) {
    radios3[i].onclick = function(e) {
        if(e.ctrlKey) {
            this.checked = false;
        }
    }
}

    filter.cuisine_type = '';
    filter.dining_type = '';
    sort.sortby = '';
    //each if else statment is to account for a possible combination of filter and sort, and to get the route accordingly
   if ((document.querySelector('input[name="cuisine_type"]:checked'))&&(document.querySelector('input[name="dining_type"]:checked'))&&(document.querySelector('input[id="arasc"]:checked'))){
        filter.cuisine_type = document.querySelector('input[name="cuisine_type"]:checked').value;
        sort.sortby = document.querySelector('input[id="arasc"]:checked').value;
        filter.dining_type = document.querySelector('input[name="dining_type"]:checked').value;

        var request = new XMLHttpRequest();
    request.open("GET", "/restaurantfilter2/" + filter.cuisine_type  + '_' + filter.dining_type + '_' + sort.sortby, true);
    request.setRequestHeader("Content-Type", "application/json");
    request.onload = function () {
        restaurantlist_array = JSON.parse(request.responseText);
        displayfiltersortRestaurant();
    };
        
    }
    else if ((document.querySelector('input[name="cuisine_type"]:checked'))&&(document.querySelector('input[name="dining_type"]:checked'))&& document.querySelector('input[id="nameasc"]:checked')){
        filter.cuisine_type = document.querySelector('input[name="cuisine_type"]:checked').value;
        sort.sortby = document.querySelector('input[id="nameasc"]:checked').value;
        filter.dining_type = document.querySelector('input[name="dining_type"]:checked').value;

        var request = new XMLHttpRequest();
    request.open("GET", "/restaurantfilter3/" + filter.cuisine_type  + '_' + filter.dining_type + '_' + sort.sortby, true);
    request.setRequestHeader("Content-Type", "application/json");
    request.onload = function () {
        restaurantlist_array = JSON.parse(request.responseText);
        displayfiltersortRestaurant();
    };
        
    }
    else if ((document.querySelector('input[name="cuisine_type"]:checked'))&&(document.querySelector('input[name="dining_type"]:checked'))&& document.querySelector('input[id="trasc"]:checked')){
        filter.cuisine_type = document.querySelector('input[name="cuisine_type"]:checked').value;
        sort.sortby = document.querySelector('input[id="trasc"]:checked').value;
        filter.dining_type = document.querySelector('input[name="dining_type"]:checked').value;

        var request = new XMLHttpRequest();
    request.open("GET", "/restaurantfilter8/" + filter.cuisine_type  + '_' + filter.dining_type + '_' + sort.sortby, true);
    request.setRequestHeader("Content-Type", "application/json");
    request.onload = function () {
        restaurantlist_array = JSON.parse(request.responseText);
        displayfiltersortRestaurant();
    };
        
    }
   
    else if ((document.querySelector('input[name="dining_type"]:checked') ) && (document.querySelector('input[name="cuisine_type"]:checked'))){
        filter.dining_type = document.querySelector('input[name="dining_type"]:checked').value;
        filter.cuisine_type = document.querySelector('input[name="cuisine_type"]:checked').value;

        var request = new XMLHttpRequest();
    request.open("GET", "/restaurantfilter1/" + filter.cuisine_type  + '_' + filter.dining_type, true);
    request.setRequestHeader("Content-Type", "application/json");
    request.onload = function () {
        restaurantlist_array = JSON.parse(request.responseText);
        displayfiltersortRestaurant();
    };
       
    }

    else if ((document.querySelector('input[name="cuisine_type"]:checked')) && (document.querySelector('input[id="nameasc"]:checked'))){
        filter.cuisine_type = document.querySelector('input[name="cuisine_type"]:checked').value;
        sort.sortby = document.querySelector('input[id="nameasc"]:checked').value;

    
        var request = new XMLHttpRequest();
    request.open("GET", "/restaurantfilter4/" + filter.cuisine_type  + '_' + sort.sortby, true);
    request.setRequestHeader("Content-Type", "application/json");
    request.onload = function () {
        restaurantlist_array = JSON.parse(request.responseText);
        displayfiltersortRestaurant();
    };
       
    }
    else if ((document.querySelector('input[name="cuisine_type"]:checked')) && (document.querySelector('input[id="trasc"]:checked'))){
        filter.cuisine_type = document.querySelector('input[name="cuisine_type"]:checked').value;
        sort.sortby = document.querySelector('input[id="trasc"]:checked').value;

    
        var request = new XMLHttpRequest();
    request.open("GET", "/restaurantfilter10/" + filter.cuisine_type  + '_' + sort.sortby, true);
    request.setRequestHeader("Content-Type", "application/json");
    request.onload = function () {
        restaurantlist_array = JSON.parse(request.responseText);
        displayfiltersortRestaurant();
    };
       
    }
    else if ((document.querySelector('input[name="dining_type"]:checked')) && (document.querySelector('input[id="trasc"]:checked'))){
        filter.dining_type = document.querySelector('input[name="dining_type"]:checked').value;
        sort.sortby = document.querySelector('input[id="trasc"]:checked').value;

    
        var request = new XMLHttpRequest();
    request.open("GET", "/restaurantfilter9/" + filter.dining_type  + '_' + sort.sortby, true);
    request.setRequestHeader("Content-Type", "application/json");
    request.onload = function () {
        restaurantlist_array = JSON.parse(request.responseText);
        displayfiltersortRestaurant();
    };
       
    }

    else if ((document.querySelector('input[name="cuisine_type"]:checked')) && (document.querySelector('input[id="arasc"]:checked'))){
        filter.cuisine_type = document.querySelector('input[name="cuisine_type"]:checked').value;
        sort.sortby = document.querySelector('input[id="arasc"]:checked').value;

    
        var request = new XMLHttpRequest();
    request.open("GET", "/restaurantfilter5/" + filter.cuisine_type  + '_' + sort.sortby, true);
    request.setRequestHeader("Content-Type", "application/json");
    request.onload = function () {
        restaurantlist_array = JSON.parse(request.responseText);
        displayfiltersortRestaurant();
    };
       
    }
    else if ((document.querySelector('input[name="dining_type"]:checked')) && (document.querySelector('input[id="nameasc"]:checked'))){
        filter.dining_type = document.querySelector('input[name="dining_type"]:checked').value;
        sort.sortby = document.querySelector('input[id="nameasc"]:checked').value;

    
        var request = new XMLHttpRequest();
    request.open("GET", "/restaurantfilter6/" + filter.dining_type  + '_' + sort.sortby, true);
    request.setRequestHeader("Content-Type", "application/json");
    request.onload = function () {
        restaurantlist_array = JSON.parse(request.responseText);
        displayfiltersortRestaurant();
    };
       
    }
    else if ((document.querySelector('input[name="dining_type"]:checked')) && (document.querySelector('input[id="arasc"]:checked'))){
        filter.dining_type = document.querySelector('input[name="dining_type"]:checked').value;
        sort.sortby = document.querySelector('input[id="arasc"]:checked').value;

    
        var request = new XMLHttpRequest();
    request.open("GET", "/restaurantfilter7/" + filter.dining_type  + '_' + sort.sortby, true);
    request.setRequestHeader("Content-Type", "application/json");
    request.onload = function () {
        restaurantlist_array = JSON.parse(request.responseText);
        displayfiltersortRestaurant();
    };
       
    }
    else if (document.querySelector('input[name="dining_type"]:checked')){
        filter.dining_type = document.querySelector('input[name="dining_type"]:checked').value;


        var request = new XMLHttpRequest();
    request.open("GET", "/restaurantfilter1/" + filter.cuisine_type  + '_' + filter.dining_type, true);
    request.setRequestHeader("Content-Type", "application/json");
    request.onload = function () {
        restaurantlist_array = JSON.parse(request.responseText);
        displayfiltersortRestaurant();
    };
       
    }
    else if (document.querySelector('input[name="cuisine_type"]:checked')){
        filter.cuisine_type = document.querySelector('input[name="cuisine_type"]:checked').value;


        var request = new XMLHttpRequest();
    request.open("GET", "/restaurantfilter1/" + filter.cuisine_type  + '_' + filter.dining_type, true);
    request.setRequestHeader("Content-Type", "application/json");
    request.onload = function () {
        restaurantlist_array = JSON.parse(request.responseText);
        displayfiltersortRestaurant();
    };
       
    }
    
    
    
   
    
    request.send();
}



 //sort function, for just sorting
function sort() {
    var sortalone = new Object();
    sortalone.sortby = '';
   
    if (document.querySelector('input[id="arasc"]:checked')){
        sortalone.sortby =  document.querySelector('input[id="arasc"]:checked').value;
        var request = new XMLHttpRequest();
        request.open("GET", "/restaurantsByRatingDSC/" + '_' + sortalone.sortby, true);
        request.setRequestHeader("Content-Type", "application/json");
        request.onload = function () {
            restaurantlist_array = JSON.parse(request.responseText);
            displayfiltersortRestaurant();
        };
        request.send();
    }
    else if  (document.querySelector('input[id="trasc"]:checked')){
        sortalone.sortby =  document.querySelector('input[id="trasc"]:checked').value;
        var request = new XMLHttpRequest();
        request.open("GET", "/restaurantsByTotalReviewsDSC/" + '_' + sortalone.sortby, true);
        request.setRequestHeader("Content-Type", "application/json");
        request.onload = function () {
            restaurantlist_array = JSON.parse(request.responseText);
            displayfiltersortRestaurant();
        };
        request.send();
    }
    else if  (document.querySelector('input[id="nameasc"]:checked')){
        sortalone.sortby =  document.querySelector('input[id="nameasc"]:checked').value;
        var request = new XMLHttpRequest();
        request.open("GET", "/restaurantsByNameDSC/" + sortalone.sortby + '_' , true);
        request.setRequestHeader("Content-Type", "application/json");
        request.onload = function () {
            restaurantlist_array = JSON.parse(request.responseText);
            displayfiltersortRestaurant();
        };
        request.send();
    }
    
}
      
    



//html to display the sorted and filtered restaurants
function displayfiltersortRestaurant() {
    var table = document.getElementById('restaurantliststuff');
    table.innerHTML = '';
    for (var i = 0; i < restaurantlist_array.length; i++) {
        var cell = formHTMLlistforDisplay(restaurantlist_array[i]);
        table.insertAdjacentHTML('beforeEnd', cell);
    }
}

//idk when i put this, i don't think it does anything but if i forget to check sorry
function formHTMLlistforDisplay(restaurant) {
    var resID = "/restaurant_page.html?restaurant_id=" + restaurant.restaurant_id;
    var name = restaurant.restaurant_name;
    var image =restaurant.restaurant_image;
    var cuisine = restaurant.cuisine_type;
    var dining = restaurant.dining_type;
    var rating = restaurant.average_rating;
    var reviews = restaurant.total_reviews;
    
    var cell =
    '<div class="col-4" style="margin-top: 103px;" >'+
        
        
    ' <div class="card" style="border: 2px white;"  >'+
       
 
     
       
  
      ' <img class="card-img-top" src="'+ image +'" alt="Card image cap" style="width: 100%; height: auto; ">'+
     
      
      ' <div class="card-body">'+
       
         
         '<h4 class="card-title"><a>'+ name +'</a></h4>'+
             '<div>'+
               ''+ rating +' Average Rating'+
   '<totalrevs style="padding-left: 10px; font-size: 15px;">'+ reviews +' Total Reviews</totalrevs>'+
  ' </div>'+
   '<div class="row justify-content-center" style="margin-top: 1em; margin-bottom: 1em;">'+
   '<div class="card" style="margin-right: 1em; height: 50%;">'+
     '<div class="card-body">'+cuisine+'</div>'+
   '</div>'+
   '<div class="card">'+
     '<div class="card-body">'+dining+'</div>'
   '</div>'+
 '</div>'+
             '<!-- Button -->'+
           '  <a href="'+ resID +'" class="btn btn-primary">View More..</a>'+
     
       '</div>'+
     
     '</div>'+
     
           '</div>'
    return cell;
}

function getRestaurantlistData() {
    var request = new XMLHttpRequest();

    request.open('GET', '/restaurants', true);
    request.setRequestHeader("Content-Type", "application/json");

    request.onload = function () {
        restaurantlist_array = JSON.parse(request.responseText);

        displayRestaurantlist();

    };

    request.send();
}
//the html for non-sorted/filter restaurants
function displayRestaurantlist() {
    var table = document.getElementById("restaurantliststuff");
    var restaurantCount = 0;
    var message = "";
    console.log(restaurantlist_array);

    table.innerHTML = "";
    var totalRestaurantHome = restaurantlist_array.length;
    for (var count = 0; count < totalRestaurantHome; count++) {
        var resID = "/restaurant_page.html?restaurant_id=" + restaurantlist_array[count].restaurant_id;
            var name = restaurantlist_array[count].restaurant_name;
            var image =restaurantlist_array[count].restaurant_image;
            var cuisine = restaurantlist_array[count].cuisine_type;
            var dining = restaurantlist_array[count].dining_type;
            var cell = 
            '<div class="col-4" style="margin-top: 103px;" >'+
        
        
   ' <div class="card" style="border: 2px white;"  >'+
      

    
      '<a href="'+resID+'" >'+
 
     ' <img class="card-img-top" src="'+ image +'" alt="Card image cap" style="width: 100%; height: auto; ">'+
    '</a>'+
     
     ' <div class="card-body">'+
      
        
        '<h4 class="card-title"><a>'+ name +'</a></h4>'+
            '<div>'+
              '<span class="fa fa-star checked"></span>'+
  '<span class="fa fa-star checked"></span>'+
  '<span class="fa fa-star checked"></span>'+
  '<span class="fa fa-star checked"></span>'+
  '<span class="fa fa-star checked"></span>'+
  '<totalrevs style="padding-left: 10px; font-size: 15px;">1,357 Total Reviews</totalrevs>'+
 ' </div>'+
  '<div class="row justify-content-center" style="margin-top: 1em; margin-bottom: 1em;">'+
  '<div class="card" style="margin-right: 1em; height: 50%;">'+
    '<div class="card-body">'+cuisine+'</div>'+
  '</div>'+
  '<div class="card">'+
    '<div class="card-body">'+dining+'</div>'
  '</div>'+
'</div>'+
        
         
    
      '</div>'+
    
    '</div>'+
    
          '</div>'
            table.insertAdjacentHTML('beforeend', cell);
        }
    
}