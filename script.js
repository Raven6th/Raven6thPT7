$(".toggle-mode-btn").on("click", function(){
    if($(".main").hasClass("dark")){
        $(".main").removeClass("dark");
        $(".links").removeClass("dark");
        $(".about").removeClass("dark");
        $(".toggle-mode-btn").text("Light Mode");
    }
    else{
        $(".main").addClass("dark");
        $(".links").addClass("dark");
        $(".about").addClass("dark");
        $(".toggle-mode-btn").text("Dark Mode");
    }
});



    // const toggle = document.getElementById("toggle");
    // const main = document.getElementById("main");
    // const links = document.getElementById("links");
    // const about = document.getElementById("about");

    // let dark = false;

    // function mode(){
    //     dark = !dark;
    //     if(dark){
    //         setdark();
    //     }
    //     else{
    //         setlight();
    //     }
    // }

    // function setdark() {
    //     main.style.backgroundColor = "#333";
    //     main.style.color = "#fff";
    //     links.style.backgroundColor = "#333";
    //     links.style.color = "#fff";
    //     about.style.backgroundColor = "#333";
    //     about.style.color = "#fff";
    //     toggle.style.textcontent = "Light Mode"
    // }

    // function setlight() {
    //     main.style.backgroundColor = "#fff";
    //     main.style.color = "#333";
    //     links.style.backgroundColor = "#fff";
    //     links.style.color = "#333";
    //     about.style.backgroundColor = "#fff";
    //     about.style.color = "#333";
    //     toggle.textContent = "Dark Mode";  
    // }

    toggle.addEventListener("click", mode);