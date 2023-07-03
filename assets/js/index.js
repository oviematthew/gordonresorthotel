// Remove loader 3 seconds after website loads

// function onloadPage () {
//     setTimeout (() => {
//     const pageHide = document.querySelector('.loader-div').style.display = "none";

//     }, 2000);
// }

// document.onload = onloadPage ();


// Onclick of navbar toggle repsonsive class
function onMenuClick() {
    var navbar = document.getElementById("navigation-bar");
    var responsive_class_name = "responsive";

    navbar.classList.toggle(responsive_class_name);
}

// const pageHide = document.querySelector('.loader-div');
//   pageHide.classList.add(hide');

const hamburger = document.getElementById("hamburger");
const naviMenu = document.getElementById("navi-menu");
const openMenu = document.getElementById("openMenu");
const closeMenu = document.getElementById("closeMenu");


  window.addEventListener('mouseup', function(event){

    // On click of hamburger icons, toggle active menu and toggle hamburger classes
    openMenu.addEventListener("click", function () {

        
        naviMenu.classList.add("active"); 
        openMenu.classList.add("hide");
        closeMenu.classList.remove("hide");
        
      });

      closeMenu.addEventListener("click", function () {

        
        naviMenu.classList.remove("active"); 
        openMenu.classList.remove("hide");
        closeMenu.classList.add("hide");
        
      });


    // Close menu and deactivate hamburger classes on click outside the menu
    if (event.target != naviMenu ){
        naviMenu.classList.remove("active"); //close menu
        openMenu.classList.remove("hide");
        closeMenu.classList.add("hide");
    }

    

  });

  

    // //   Incrementor
    
    // const plus = document.querySelector(".plus"),
    // minus = document.querySelector(".minus"),
    // num = document.querySelector(".num");
    // let a = 0;
    // plus.addEventListener("click", ()=>{
    //   a++;
    //   a = (a < 10) ? + a : a;
    //   num.innerText = a;
    // });

    // minus.addEventListener("click", ()=>{
    //   if(a > 0){
    //     a--;
    //     a = (a < 10) ? + a : a;
    //     num.innerText = a;
    //   }
    // });



    // Date Picker


    $('#date-1').calendar({
      type: 'date'
    });

    $('#date-2').calendar({
        type: 'date'
      });
    
      // Video embed 
      $('body')
      .on('click', '.vimeo-launch', function () {
        var videoID = $(this).data('vimeo-id'),
            $video = '<div id="vimeo-pop-container"><div><span class="vimeo-close"></span><iframe src="https://player.vimeo.com/video/818039870?h=6a58613339&portrait=0&byline=0" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe></div></div>';
        $('body').append($video);
      } )
      
      .on('click', '.vimeo-close', function () {
        $(this).addClass('closing');
      
        $('#vimeo-pop-container').delay(700).animate({
          height: 0,
          top: '50%'
        }, 'fast', function () {
          $('#vimeo-pop-container').remove();
        });
      } );


      //   copyright get current year
    document.getElementById("year").innerHTML = (new Date().getFullYear());


  
// Back to top Button
const backToTopBtn = document.getElementById("btn-back-to-top");



// When the user scrolls down 20px from the top of the document, display the hidden button

function scrollFunction() {
  if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 20
  ) {
    backToTopBtn.style.display = "block";
  } else {
    backToTopBtn.style.display = "none";
  }
}


window.onscroll = function () {
  scrollFunction();
};

// When the user clicks on the button, scroll to the top of the document
backToTopBtn.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

// form input function
(function($){
	function floatLabel(inputType){
		$(inputType).each(function(){
			var $this = $(this);
			// on focus add cladd active to label
			$this.focus(function(){
				$this.next().addClass("active");
			});
			//on blur check field and remove class if needed
			$this.blur(function(){
				if($this.val() === '' || $this.val() === 'blank'){
					$this.next().removeClass();
				}
			});
		});
	}
	// just add a class of "floatLabel to the input field!"
	floatLabel(".floatLabel");
})(jQuery);


