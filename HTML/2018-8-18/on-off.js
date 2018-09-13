function myFunction() {
    //document.getElementById("demo").innerHTML = "THAY ĐỔI";
    var x= document.getElementById("myImage");
    if(x.src.match("bulbon")){
        x.src="pic_bulboff.gif" ;
    }
    else{
        x.src="pic_bulbon.gif" ;
    }

    
    
}
function Battat(){
 var imge = document.getElementById("myImage");
 
 imge.src;
 console.log(imge.src);
 
 if(imge.src === 'http://127.0.0.1:5500/2018-8-18/pic_bulboff.gif'){
    console.log('Đã ĐÚng');
    imge.src = "pic_bulbon.gif";
 }
 else{
     imge.src = "pic_bulboff.gif";
 }
}

function evnetbuton(){
    var x = document.getElementById("bien");
    
     if (x.style.display === "none") {
         x.style.display = "block";
     } else {
         x.style.display = "none";
     }
    
}


