document = document.getElementById("form1").addEventListener("submit", submitFun1);

var studentDataArr =JSON.parse(localStorage.getItem("studentData"))|| [];
function submitFun1(e) {
    document.querySelector("#tbody").innerHTML = "";
    e.preventDefault();
    var first = document.querySelector("#first").value;
    var last = document.querySelector("#last").value;
    var email = document.querySelector("#email").value;
    var dob = document.querySelector("#dob").value;
    var mobile = document.querySelector("#mobile").value;
    var gender = document.querySelector("#gender").value;
    var native = document.querySelector("#native").value;
    var specification = document.querySelector("#specification").value;
    var studentObj = {
        first: first,
        last: last,
        email: email,
        dob: dob,
        mobile: mobile,
        gender: gender,
        native: native,
        specification: specification

    }

    studentDataArr.push(studentObj);
    localStorage.setItem("studentData", JSON.stringify(studentDataArr));
    document.querySelector("#form1").reset();
    alert("Student Added Successfully");

    displayFun(studentDataArr)
}

function displayFun(studentDataArr) {

    var count = 1;
    studentDataArr.map(function (item) {
    
        var tr = document.createElement("tr");

        var td1 = document.createElement("td");
        td1.innerHTML = count++
        var td2 = document.createElement("td");
        td2.innerHTML = item.first;
        var td3 = document.createElement("td");
        td3.innerHTML = item.last;
        var td4 = document.createElement("td");
        td4.innerHTML = item.email;
        var td5 = document.createElement("td");
        td5.innerHTML = item.dob;
        var td6 = document.createElement("td");
        td6.innerHTML = item.mobile;
        var td7 = document.createElement("td");
        td7.innerHTML = item.gender;
        var td8 = document.createElement("td");
        td8.innerHTML = item.native;
        var td9 = document.createElement("td");
        td9.innerHTML = item.specification;
        /*var td10 = document.createElement("td");
        var btn1 = document.createElement("button");
        btn1.innerHTML = "P";
        btn1.addEventListener("click", function () {
            td6.innerHTML = "<button >Present</button>";
        });
        var btn2 = document.createElement("button");
        btn2.innerHTML = "A";
        btn2.addEventListener("click", function () {
            td6.innerHTML = "<button id='absent'>Absent</button>";
        
        })
        td6.classList.add("td6");
        td6.append(btn1, btn2);*/

        tr.append(td1, td2, td3, td4, td5, td6, td7, td8, td9);

        document.querySelector("#tbody").append(tr);

    });


}
displayFun(studentDataArr);