var buttonElement = document.querySelector(".action-button");
var form = document.getElementById("form");
var firstname = document.querySelector("#firstname");
var lastname = document.querySelector("#lastname");
var age = document.querySelector("#age");
var gender = document.querySelector("#gender");
var food = document.querySelector("#food");
var radios = document.getElementsByName("type");
var error = "";
var errorcounter = 0;
var validForm = 0;
var register = document.querySelector("#register");
var header = document.querySelector(".header");

buttonElement.addEventListener("click", function(){
        if (firstname.value == "") {
                error = "Please fill in your firstname";
                firstname.classList.remove("input");
                firstname.classList.add("input-error");
                document.querySelector("#error-firstname").innerHTML = error;
        }
        else {
                firstname.classList.remove("input-error");
                firstname.classList.add("input");
                document.querySelector("#error-firstname").innerHTML = "";
                validForm++;
        }
        if (lastname.value == "") {
                error = "Please fill in your lastname";
                lastname.classList.remove("input");
                lastname.classList.add("input-error");
                document.querySelector("#error-lastname").innerHTML = error;
        }
        else {
                lastname.classList.remove("input-error");
                lastname.classList.add("input");
                document.querySelector("#error-lastname").innerHTML = "";
                validForm++;
        }
        if (age.value == "") {
                error = "Please fill in your age";
                age.classList.remove("input");
                age.classList.add("input-error");
                document.querySelector("#error-age").innerHTML = error;
        }
        else {
                age.classList.remove("input-error");
                age.classList.add("input");
                document.querySelector("#error-age").innerHTML = "";
                validForm++;
        }
        if (!gender.value) {
                error = "Please choose a gender";
                gender.id = "gender-error";
                document.querySelector("#error-gender").innerHTML = error;
        }
        else {
                gender.id = "gender";
                document.querySelector("#error-gender").innerHTML = "";
                validForm++;
        }
        if (food.value == "") {
                error = "Please fill in your favorite food";
                food.classList.remove("input");
                food.classList.add("input-error");
                document.querySelector("#error-food").innerHTML = error;
        }
        else {
                food.classList.remove("input-error");
                food.classList.add("input");
                document.querySelector("#error-food").innerHTML = "";
                validForm++;
        }
        if (radios[0].checked == true){
                document.querySelector("#error-type").innerHTML = "";
                validForm++;
        }
        else if (radios[1].checked == true){
                document.querySelector("#error-type").innerHTML = "";
                validForm++;
        }
        else if(radios[0].checked == false && radios[1].checked == false) {
                document.querySelector("#error-type").innerHTML = "Please choose between doggo or catto";
        }
        // if (validForm == 6) {
        //         accountCreated();
        // }
        // validForm = 0;
});

function validateForm() {
        var formFirstname = document.forms["profile-form"]["firstname"].value;
        var formLastname = document.forms["profile-form"]["lastname"].value;
        var formAge = document.forms["profile-form"]["age"].value;
        var formGender = document.forms["profile-form"]["gender"].value;
        var formFood = document.forms["profile-form"]["food"].value;
        var formType = document.forms["profile-form"]["type"].value;

        if (formFirstname == "" || formLastname == "" || formAge == "" || formGender == "" || formFood == "" || formType == "") {
                return false;
        }
}
// function accountCreated() {
//         form.remove();

//         var createImg = document.createElement("img");
//         register.appendChild(createImg);
//         createImg.src = "assets/images/applaudissement-clap.gif";
//         createImg.classList.add("create-image");

//         header.innerHTML = "Account created!!!";

//         var createText = document.createElement("p");
//         register.appendChild(createText);
//         createText.innerHTML = "Your profile has been added to our database!";
//         createText.classList.add("text");

//         buttonElement.remove();

//         var createLink = document.createElement("a");
//         register.appendChild(createLink);
//         createLink.innerHTML = "Put people in a house!";
//         createLink.classList.add("action-button");
//         createLink.href = "houses.html";
// };