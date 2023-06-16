var check = 1;

function appear() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
    if (!event.target.matches('.icon_keyboard')) {
        if (!event.target.matches('#myDropdown') && !event.target.matches('#myDropdown .text_apb')) {
            var dropdowns = document.getElementsByClassName("keyboard_letters");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
}
                            

function upcase(){                           
    if (check === 1){
        let letters = document.querySelectorAll("div.text_apb");
        let letters_length=letters.length;                                        
        for (let i=0;i<letters_length;i++){
            letters[i].innerHTML=letters[i].innerHTML.toUpperCase();
        }
        //document.getElementByClassName("gg-chevron-double-up-o").style.cssName = transform: rotate(95deg);";
        check = 0;     
    }else{                 
        let letters = document.querySelectorAll("div.text_apb");
        let letters_length=letters.length;
        for (let i=0;i<letters_length;i++){
            letters[i].innerHTML=letters[i].innerHTML.toLowerCase();
        }
        check = 1;
    }
}

function chen(){
    if(check === 0){
        document.getElementById('input').value += value.toUpperCase();
    }else{
        document.getElementById('input').value += value;
    }
}

// Hàm thay đổi ngôn ngữ bằng JS
function ed_vi() {
    // var from=document.querySelector("p.from");
    // var to=document.querySelector("p.to");
    // var middleText=from.innerHTML  ;
    // from.innerHTML=to.innerHTML;
    // to.innerHTML=middleText; 
    const from = document.getElementById('from')
    const to = document.getElementById('to')
    const temp = from.innerText
    from.innerText = to.innerText
    to.innerText = temp

    const langInput=document.getElementById('lang');
    if(langInput.value == 'ede'){
        langInput.value = 'vi'
    }else {
        langInput.value = 'ede'
    }
}

