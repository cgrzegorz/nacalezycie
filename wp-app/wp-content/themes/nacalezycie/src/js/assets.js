function readMore(){
   var content = document.getElementsByClassName('hiddenText__content')[0];
   var button = document.getElementsByClassName('hiddenText__readMore')[0];
   content.classList.remove("hiddenText__hiddenContent");
   button.style.display = "none";
}

