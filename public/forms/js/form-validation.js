'use strict';

window.addEventListener('load', function(){
    init();
}, false)

function init() {
    let forms = document.querySelectorAll('.cryptoki-form');

    for(let j = 0; j< forms.length; j++) {
        let form = forms[j];
        let formValidation = false;
        for(let i = 0; i<form.elements.length; i++){
            let element = form.elements[i];

            if(!element.hasAttribute("data-val")) {
                continue;
            } 
            let pattern = element.dataset.val;

            if (pattern) {

                element.addEventListener("change", function(e){
                    validateInput(e);
                    validateButton (e);
                    formValidation = true;
                })

                element.addEventListener("blur", function(e){
                    validateInput(e);
                    validateButton (e);
                    formValidation = true;
                })
            }

            form.onsubmit = validateForm;
        }
    
    }
}

function validateInput(e) {

    let element = e.target;
    let pattern = element.dataset.val;
    let message = element.dataset.valMsg;
    let messageID = element.dataset.valMsgId;
    let value = element.value;
    let result = value.search(pattern);

    if(result == -1) {
        document.getElementById(messageID).innerHTML = message;
        element.classList.remove("valid")
        element.classList.add("error");
    } else {
        document.getElementById(messageID).innerHTML = "";
        element.classList.remove("error");
        element.classList.add("valid");
    }

}


function validateButton (e) {
    
    let form = e.target.closest('form');

    let submitButton = form.querySelector("button") || form.querySelector("input[type=submit]") || form.querySelector("input[type=button]");
    submitButton.disabled = false;

    for(let i=0; i<form.elements.length; ++i) {
        let element = form.elements[i];
        if(element.classList.contains("error")) {
            submitButton.disabled = true;
        }
        
    }

}

function validateForm () {

    let invalid = false;

    let form = this;
    let submitButton = form.querySelector("button") || form.querySelector("input[type=submit]") || form.querySelector("input[type=button]");
    
    for(let i=0; i<form.elements.length; ++i) {
        let element = form.elements[i];
        let pattern = element.dataset.val;
        let message = element.dataset.valMsg;
        let messageID = element.dataset.valMsgId;
       if (element.hasAttribute("required") && element.value == "") {
            invalid = true;
            document.getElementById(messageID).innerHTML = message;
            element.classList.remove("valid");
            element.classList.add("error");
       }
       
    }

    if(invalid) {
        submitButton.disabled = true;
        e.preventDefault();
    }

}