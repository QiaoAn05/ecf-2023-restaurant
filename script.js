//Horloge de site
function updateClock() {
    var now = new Date();
    var time = now.toLocaleTimeString();
    document.getElementById("clock").innerHTML = time;
  }
  
  setInterval(updateClock, 1000);
  
