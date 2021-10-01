function showResponsiveMenu() {
    const menu = document.getElementById("topnav_responsive_menu");
    const icon = document.getElementById("topnav_hamburger_icon");
    const root = document.getElementById("root");
    if (menu.className === "") {
      menu.className = "open";
      icon.className = "open";
      root.style.overflowY = "hidden";
    } else {
      menu.className = "";                    
      icon.className = "";
      root.style.overflowY = "";
    }
  }


  const activity = document.getElementById("activity");
  activity.addEventListener("click",function(){
    const instants = document.getElementsByClassName('instant');
    for (const instant of instants) {
        instant.classList.toggle('d-none');


        
       
    }

    const arrow = document.getElementById("arrow");
    arrow.classList.toggle('open');

  });



