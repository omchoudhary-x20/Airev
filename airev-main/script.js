

let username_arr=['sanchit','aman','nishant'];
let pass_arr=['1234','aman','nishu'];



const username_select=document.querySelector('input.uname');
const pass_select=document.querySelector('input.psw');
let username="";
let pass="";

let log=0;

function btn_clicked(){
    username=(username_select.value);
    pass=(pass_select.value);
    console.log(username,pass);
    
    for(let i=0;i<username_arr.length;i++){
        if(username_arr[i]===username && pass_arr[i]===pass){
            log=1; 
        }
        

    }

    if(log){
        console.log('hihi');
        document.body.querySelector(".dash123").style.opacity=100;
        document.body.querySelector(".login123").style.display="none";
        document.body.querySelector('span.admin_name').textContent=username;
    }
  
}



function btn_clicked2(){
    username_select.value="";
    pass_select.value="";
}


// function btn_clicked3(){
//     document.body.querySelector(".dash123").style.opacity=0;
//     document.body.querySelector(".login123").style.display="inline";
//     console.log("hello");

// }








document.querySelector('button.login_btn').addEventListener('click',btn_clicked);
document.querySelector('button.cancelbtn').addEventListener('click',btn_clicked2);







