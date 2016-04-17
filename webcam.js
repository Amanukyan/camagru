  var streaming = false,
      video        = document.querySelector('#video'),
      cover        = document.querySelector('#cover'),
      canvas       = document.querySelector('#canvas'),
      photo        = document.querySelector('#photo'),
      startbutton  = document.querySelector('#startbutton'),
      inputImgData = document.querySelector("#imgData"),
      width = 500,
      height = 375;

  var imgInp =  document.getElementById("imgInp");
  var myImg =  document.getElementById("myImg");

 
  navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia || navigator.oGetUserMedia;
   
  if (navigator.getUserMedia) {       
      navigator.getUserMedia({video: true}, handleVideo, videoError);
  }
   
  function handleVideo(stream) {
      video.src = window.URL.createObjectURL(stream);
  }
   
  function videoError(e) {
      // do something
  }





// take picture

  startbutton.addEventListener('click', function(ev){
      takepicture();

  }, false);


  function takepicture() {
    canvas.width = width;
    canvas.height = height;
    

    if (video.style.display != "none")
        canvas.getContext('2d').drawImage(video, 0, 0, width, height);
    else
        canvas.getContext('2d').drawImage(myImg, 0, 0, width, height);
      
    
    var data = canvas.toDataURL('image/png'); 


    inputImgData.value = data;
    

    photo.setAttribute('src', data);
  }







/// check if image is selected

function check()
{
  var ele = document.getElementsByName('choice');
  var flag=0;
  for(var i=0; i < ele.length; i++)
  {
      if ( ele[i].checked ) 
       flag = 1;
     
  } 
  if ( flag == 1 )
  {
    var button = document.getElementById('startbutton');
   button.disabled=false;
   button.style.backgroundColor = "green";
   button.value = "  Take a picture  ";
  }
}


// upload img



  
imgInp.addEventListener('change', function(ev){

        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = imageIsLoaded;
            reader.readAsDataURL(this.files[0]);
        }


});


function imageIsLoaded(e) {


   myImg.setAttribute('src', e.target.result);
   myImg.style.display = 'block';
   video.style.display = 'none';


  
};












