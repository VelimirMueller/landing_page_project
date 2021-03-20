// animate helper - calls TW Animation class, works with multiple class childs
let vAnimateHelper = (event, element, value) => {

  let v = document.getElementsByClassName(element); // className Selector

  for (let i = 0; i < document.getElementsByClassName(element).length; i++) { //forloop 0 - lenght of DOM array
    v[i].addEventListener(event, function(){v[i].classList.add(value); // Add tw animation class name to v[i]
    setTimeout(function(){ // Start timeout function to automatically stop bounce animation
      v[i].classList.remove(value);
    },1500); //End timeout function
    })   
  }
}// End Animate Helper

vAnimateHelper('mouseenter', 'hover-bounce-images', 'animate-bounce'); // Start function 
vAnimateHelper('mouseenter', 'login-button-hero', 'animate-bounce'); // Start function 

let progressBarFiller = (progressBarId) => { // Start fill progress bar function
  let progress = 100;
  let invervalSpeed = 25;
  let incrementSpeed = 1;
  let bar = document.getElementById(progressBarId);
  progressInterval = setInterval(function(){
    progress += incrementSpeed;
    bar.style.width = progress + "%";
    if(progress >= 100){
      clearInterval(progressInterval);
    }
  }, invervalSpeed);
  console.log(progress)
}// End fill progress bar function

let fillProgressBar = () => {
  document.getElementById('bar-event-starter').addEventListener('pointerenter', function doit(){
    progressBarFiller('bar');
    featuresFadeIn();
  })
}

let featuresFadeIn = () => {
  let classList = document.getElementsByClassName('featuresValues');
  for(let i=0; i < classList.length; i++){
    setTimeout(function(){
      classList[i].classList.remove('opacity-0')
    },10)
  }
}

fillProgressBar();

let autoScrollWindow = (yOffSet, behaviour) => {
  window.scrollTo({
    top: yOffset,
    behavior: behaviour
  });
}
