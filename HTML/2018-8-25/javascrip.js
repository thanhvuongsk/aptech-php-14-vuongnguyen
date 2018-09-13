// function loadDoc() {
//     var xhttp = new XMLHttpRequest();
//     xhttp.onreadystatechange = function() {
//       if (this.readyState == 4 && xhttp.status == 200) {
//         //document.getElementById("demo").innerHTML =
//         //this.responseText;
//         var data = JSON.parse(xhttp.response);
//         renderData(data);
//       }
//     };
//     xhttp.open("GET", "data.json", true);
//     xhttp.send();
//   }

//   function renderData(data) {
//     var usersdemo = data.users;//users của file data.json
  
//     usersdemo.forEach(function(user, index) {//user giá trị của mảng a,@,er@kgf và index là só thự tự mãng 0,1,2,3,4
//       var para = document.createElement('p');
//       var node = document.createTextNode(user.id);
//       para.appendChild(node);
//       var elementid = document.getElementById('div1');
//       elementid.appendChild(para);
     
      



//     });

//      usersdemo.forEach(function(user, index) {//user giá trị của mảng a,@,er@kgf và index là só thự tự mãng 0,1,2,3,4
//       var para1 = document.createElement('p');
//       var node1 = document.createTextNode(user.name);
//       para1.appendChild(node1);
//       var elementid = document.getElementById('div2');
//       elementid.appendChild(para1);
      



//     });
//   }
// //   function renderData(data){
// //     console.log(data.users);
// //     //document.getElementById('json-demo').innerHTML = data.age;
// //    // document.getElementById('json-demo').innerHTML = data.name;
// // //    var para = document.createElement('h1');
// // //    var node = document.createTextNode(data.name);
// // //    para.appendChild(node);

// // //    var element = document.getElementById('div1');
// // //    element.appendChild(para);
   


// //   }

$(document).ready(function() {
  $('#js-button').click(function() {
    $.get('data.json', function(data, status) {
      if (status === 'success') {
        var table = '<table id="js-table" class="table"></table>';
        $('#js-div-table').append(table);
        var thead = '<thead id="js-thead"></thead>';
        $(thead).appendTo('#js-table');
        var tr = '<tr id="js-tr-head"></tr>';
        $(tr).appendTo('#js-thead');
        var th =
          '<th scope="col">#</th><th scope="col">Name</th><th scope="col">Email</th>';
        $(th).appendTo('#js-tr-head');
        var tbody = ' <tbody></tbody>';
        $('#js-thead').after(tbody);

        var users = data.users;
        users.forEach(function(user, index) {
          var trBody = '<tr id="js-tr-body-' + index + '"></tr>';
          $(trBody).appendTo('tbody');
          var thBody = ' <th scope="row">' + user.id + '</th>';
          var tdBody = '<td>' + user.name + '</td><td>' + user.email + '</td>';
          $('#js-tr-body-' + index).append(thBody, tdBody);
        });

        $('#js-button').hide();
      }
    });
  });
});