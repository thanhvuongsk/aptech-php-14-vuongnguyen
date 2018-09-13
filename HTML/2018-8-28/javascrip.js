function loadDoc() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && xhttp.status == 200) {
        //document.getElementById("demo").innerHTML =
        //this.responseText;
        var data = JSON.parse(xhttp.response);
        renderData(data);
      }
    };
    xhttp.open("GET", "data.json", true);
    xhttp.send();
  }

  function renderData(data) {
    var usersdemo = data.users;//users của file data.json
  
    usersdemo.forEach(function(user, index) {//user giá trị của mảng a,@,er@kgf và index là só thự tự mãng 0,1,2,3,4
      var para = document.createElement('p');
      var node = document.createTextNode(user.id);
      para.appendChild(node);
      var elementid = document.getElementById('div1');
      elementid.appendChild(para);
     
      



    });

     usersdemo.forEach(function(user, index) {//user giá trị của mảng a,@,er@kgf và index là só thự tự mãng 0,1,2,3,4
      var para1 = document.createElement('p');
      var node1 = document.createTextNode(user.name);
      para1.appendChild(node1);
      var elementid = document.getElementById('div2');
      elementid.appendChild(para1);
      



    });
  }
//   function renderData(data){
//     console.log(data.users);
//     //document.getElementById('json-demo').innerHTML = data.age;
//    // document.getElementById('json-demo').innerHTML = data.name;
// //    var para = document.createElement('h1');
// //    var node = document.createTextNode(data.name);
// //    para.appendChild(node);

// //    var element = document.getElementById('div1');
// //    element.appendChild(para);
   


//   }