var A= ["Animal Science", "Forestry And Environment", "Food Science And Technology", "Home Science And Management", "Fisheries", "Crop/soil Science", "Agricultural Economics And Extension"];
    var B= ["Petroleum Engineering", "Mechanical Engineering", "Marine Engineering", "Civil Engineering", "Chemical/petrochemical Engineering", "Agricultural And Environmental Engineering", "Electrical Engineering"];
    var C= ["Land Survey", "Estate Management", "Quantity Surveying", "Architecture", "Urban And Regional Planning"];
    var D= ["Business Law", "International Law", "Private Property Law", "Public Law"];
    var Q= ["Banking and Finance", "Accountancy", "Mass Communication", "Office And Information Managemen", "Marketing", 'Management', 'Secretarial Administration'];
    var F= ["Mathematics", "Computer Science", "Physics", "Chemistry", "Medical Laboratory Science", "Applied And Environmental Biology"];
    var G= ["Science And Technical Education", "Educational Foundations", "Business Education"];

var changeCat = function changeCat(firstList) {
    var newSel = document.getElementById("category");
    //if you want to remove this default option use newSel.innerHTML=""
    newSel.innerHTML="<option value=\"\">Select Department</option>"; // to reset the second list everytime
    var opt;

      //test according to the selected value
      switch (firstList.options[firstList.selectedIndex].value) {
          case "A":
              for (var i=0; len=A.length, i<len; i++) {
                    opt = document.createElement("option");
                    opt.value = A[i];
                    opt.text = A[i];
                    newSel.appendChild(opt);
              }
              break;
          case "B":
              for (var i=0; len=B.length, i<len; i++) {
                    opt = document.createElement("option");
                    opt.value = B[i];
                    opt.text = B[i];
                    newSel.appendChild(opt);
              }
              break;
          case "C":
              for (var i=0; len=C.length, i<len; i++) {
                    opt = document.createElement("option");
                    opt.value = C[i];
                    opt.text = C[i];
                    newSel.appendChild(opt);
              }
              break;
            case "D":
              for (var i=0; len=D.length, i<len; i++) {
                    opt = document.createElement("option");
                    opt.value = D[i];
                    opt.text = D[i];
                    newSel.appendChild(opt);
              }
            case "Q":
              for (var i=0; len=Q.length, i<len; i++) {
                    opt = document.createElement("option");
                    opt.value = Q[i];
                    opt.text = Q[i];
                    newSel.appendChild(opt);
              }
            case "F":
              for (var i=0; len=F.length, i<len; i++) {
                    opt = document.createElement("option");
                    opt.value = F[i];
                    opt.text = F[i];
                    newSel.appendChild(opt);
              }
              case "G":
              for (var i=0; len=G.length, i<len; i++) {
                    opt = document.createElement("option");
                    opt.value = G[i];
                    opt.text = G[i];
                    newSel.appendChild(opt);
              }
      }

}
    