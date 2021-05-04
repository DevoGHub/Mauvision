function browserResized(){
  if(window.screen.width>700){
    closeNav();
  }
}

function openNav(){
  document.getElementById('sideheaderdiv').style.display='grid';
}

function closeNav(){
  document.getElementById('sideheaderdiv').style.display='none';
}
