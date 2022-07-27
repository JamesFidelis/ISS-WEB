function myFunction()
{
    var x = document.getElementById("myTopnav");
    var y = document.getElementById('topnavhead');

    if (x.className === "topnav") {
        x.className += " responsive";
        y.className += " responsive";
    } else {
        x.className = "topnav";
        y.className = "topnav";
    }
}

function activity(evt)
{
    var z= document.getElementById("myTopnav");
    evt.currentTarget.className.replace("check", "active");
    // if (z.className === "check") {
    //     z.className.replace("check", "active");
    //     evt.currentTarget.className += " active";
    // }else {
    //     z.className = "check";
    // }
}