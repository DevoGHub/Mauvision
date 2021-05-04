function browserResized(){
  if(window.innerWidth > 700){
    closeNav();
  }
}

function openNav(){
  if(window.innerWidth <=700){
    document.getElementById('sideheaderdiv').style.display='grid';
  }
}

function closeNav(){
  document.getElementById('sideheaderdiv').style.display='none';
}
