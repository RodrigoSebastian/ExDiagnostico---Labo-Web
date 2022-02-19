let validateNum = (e) => {
    let key = e.charCode;
    return key >= 48 && key <= 57;
}

let load = () => {
    let numValidate = document.getElementById('inputTelefono');
    let ladaValidate = document.getElementById('inputLada');
    
    numValidate.addEventListener('keypress',(e) => {
        if(!validateNum(e)){
            e.preventDefault();
        }
    })
    ladaValidate.addEventListener('keypress',(e) => {
        if(!validateNum(e)){
            e.preventDefault();
        }
    })
}

addEventListener('DOMContentLoaded',load);