function validate(){

    var username=document.getElementById("user").value;
    var password=document.getElementById("pass").value;
    if(username=="admin"&&password=="admin"){
        window.open("form.html");
        return false;
    }
    else if(username=="amar"&&password=="amar"){
        window.open("form.html");
        return false;
    }
    else if(username=="kripakara"&&password=="kripakara"){
        window.open("form.html");
        return false;
    }
    else if(username=="manoj"&&password=="manoj"){
        window.open("form.html");
        return false;
    }
    else{
        alert("Incorrect Username/Password");
    }
}