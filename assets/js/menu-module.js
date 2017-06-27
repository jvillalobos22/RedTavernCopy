/*******************************************************************************
 *
 * menu-module.js
 *
 * Author: Juan Villalobos | @juanlobos22 | juanvillalobos.me
 *
 * This script will create a single page menu that allows the user to see each
 * menu by clicking a button in the menu sidebar. The button will populate the
 * page with the proper menu which can be edited from the dashboard.
 *
 ******************************************************************************/

var createClickHandler = function(arr, menu) {
    return function() {
        // remove current menu
        removeCurrentMenu();
        // populate new menu
        setTimeout(populateMenu(arr), 6000);
        // set new active link
        setActiveLink(menu);
    };
}

// removes current menu
function removeCurrentMenu() {
    var myNode = document.getElementById("dkMenuDisplay");

    while (myNode.firstChild) {
        myNode.removeChild(myNode.firstChild);
    }
}

// sets class of proper link to active
function setActiveLink(menu) {
    // Grab Menu Links
    var BrunchClicker = document.getElementById('brunchLink');
    var DinnerClicker = document.getElementById('dinnerLink');
    var HappyClicker = document.getElementById('happyLink');
    var WineClicker = document.getElementById('wineLink');
    // Remove any currently set classes.
    BrunchClicker.className = '';
    DinnerClicker.className = '';
    HappyClicker.className = '';
    WineClicker.className = '';
    // Add active class to proper link
    switch(menu) {
        case 'brunch':
            BrunchClicker.className = 'active';
            break;
        case 'dinner':
            DinnerClicker.className = 'active';
            break;
        case 'happyhour':
            HappyClicker.className = 'active';
            break;
        case 'wine':
            WineClicker.className = 'active';
            break;
        default:
            console.log('Whoops. This is embarassing. Somehow, you are trying to set the active link for a menu that doesn\'t exist');
    }
}

window.onload = function() {
    // Creat Arrays for each Menu
    var brunchArry = [];
    var dinnerArry = [];
    var happyArry = [];
    var wineArry = [];

    // Fill Arrays for each Menu
    brunchArry = brunch.posts;
    dinnerArry = dinner.posts;
    happyArry = happyhour.posts;
    wineArry = wine.posts;

    // Grab Menu Links
    var BrunchClicker = document.getElementById('brunchLink');
    var DinnerClicker = document.getElementById('dinnerLink');
    var HappyClicker = document.getElementById('happyLink');
    var WineClicker = document.getElementById('wineLink');

    // Assign Arrays to Proper Click Handler
    BrunchClicker.onclick = createClickHandler(brunchArry, 'brunch');
    DinnerClicker.onclick = createClickHandler(dinnerArry, 'dinner');
    HappyClicker.onclick = createClickHandler(happyArry, 'happyhour');
    WineClicker.onclick = createClickHandler(wineArry, 'wine');

    // Populate Initial Menu
    populateMenu(brunchArry);

    // Set Active Link
    setActiveLink('brunch');
}

function populateMenu(menuArr) {
    // grab the container node
    var menuDisplay = document.getElementById('dkMenuDisplay');

    for(var i = 0; i < menuArr.length; i++) {
        // Create Elements
        var menuSection = document.createElement('div');
        var menuItemsDiv = document.createElement('div');
        var horizRule = document.createElement('hr');
        var menuTitle = document.createElement('h2');
        // Add Classes
        menuItemsDiv.className += ' dk_menuitems';
        horizRule.className += ' dk_redhr';
        menuSection.className += ' dk_menusection animated bounceInRight';
        // Add Content to Elements
        menuTitle.innerHTML = menuArr[i].post_title;
        menuItemsDiv.innerHTML = menuArr[i].post_content;
        // Append to containing div
        menuSection.appendChild(menuTitle);
        menuSection.appendChild(horizRule);
        menuSection.appendChild(menuItemsDiv);
        // Append to page
        menuDisplay.appendChild(menuSection);
    }
}