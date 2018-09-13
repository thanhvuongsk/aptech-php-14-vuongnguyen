$(document).ready(function(){
    var flag = 0;  
    console.log(flag);
    $("button#changeImage").click(function(){
      if(flag == 0) {
        $("#changeLink").attr("src","pic_bulbon.gif");
        flag = 1;
        console.log(flag);
      }
      else if(flag == 1) {
        $("#changeLink").attr("src","pic_bulboff.gif");
        flag = 0;
        console.log(flag);
      }
    });
  });
  //chạy khác với javascrip, jscrip gọi hàm ban đầu cờ điều set về giá trị đầu tiên