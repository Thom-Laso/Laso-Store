let count=0;
function increment() {
 
    count=count+1;
    let countEl=document.getElementById("count-el").value=count;
} 

function decrement() {
 
    count=count-1;
    if (count < 0){
        exit;
    }
    let countEl=document.getElementById("count-el").value=count;
} 

function JSbtnShop(){
    window.location.href = "../householdplastics.php";//Thank you Yes it works
}