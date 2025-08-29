const sec=document.querySelector('.popup-container');
		setTimeout(function(){
			
			sec.classList.remove('hide');
		},5000);
        // JavaScript to show and hide the popup
		
		
       
        const closePopupButton = document.getElementById("closePopupButton");
        const popup = document.getElementById("popup");

       

        closePopupButton.addEventListener("click", () => {
            popup.style.display = "none";
        });