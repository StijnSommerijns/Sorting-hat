var girls = ["assets/images/avatars/girl1.jpg","assets/images/avatars/girl2.jpg", "assets/images/avatars/girl3.jpg", "assets/images/avatars/girl4.jpg", "assets/images/avatars/girl5.jpg", "assets/images/avatars/girl6.jpg"];
var guys = ["assets/images/avatars/guy1.jpg","assets/images/avatars/guy2.jpg", "assets/images/avatars/guy3.jpg", "assets/images/avatars/guy4.jpg", "assets/images/avatars/guy5.jpg", "assets/images/avatars/guy6.jpg"];
var other = ["assets/images/avatars/other.png"];
var profile = document.querySelector("#profile-pic");
var random = Math.floor(Math.random() * 6);
var gender = document.querySelector("#profile-gender");

var profilePic = document.createElement("img");
if (gender.innerHTML == "Male") {
    profilePic.src = guys[random];
}
else if (gender.innerHTML == "Female") {
    profilePic.src = girls[random];
}
else {
    profilePic.src = other[0];
}
profilePic.classList.add("profile-picture");
profile.appendChild(profilePic);


function showHat(hatName){
    var hat = document.querySelector("#" + hatName + "-hat"); //`#\${hatName}-hat`
    hat.classList.remove("hat-image-hidden");
    hat.classList.add("hat-image-visible");
};

function hideHat(hatName){
    var hat = document.querySelector("#" + hatName + "-hat");
    hat.classList.remove("hat-image-visible");
    hat.classList.add("hat-image-hidden");
};

// var gryfElement = document.querySelector("#action-gryf");
// gryfElement.addEventListener("mouseover", function(){
//     gryfHat.classList.remove("hat-image-hidden");
//     gryfHat.classList.add("hat-image-visible");
// });
// gryfElement.addEventListener("mouseout", function(){
//     gryfHat.classList.remove("hat-image-visible");
//     gryfHat.classList.add("hat-image-hidden");
// });