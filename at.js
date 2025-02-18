document = document.getElementById("form1").addEventListener("submit", submitFun1);

var studentDataArr =JSON.parse(localStorage.getItem("studentData"))|| [];
function submitFun1(e) {
    document.querySelector("#tbody").innerHTML = "";
    e.preventDefault();
    var name = document.querySelector("#name").value;
    var number = document.querySelector("#number").value;
    var role = document.querySelector("#role").value;
    var studentObj = {
        name: name,
        number: number,
        role: role
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
        td2.innerHTML = item.name;
        var td3 = document.createElement("td");
        td3.innerHTML = item.number;
        var td4 = document.createElement("td");
        td4.innerHTML = item.role;
        var td6 = document.createElement("td");
        var btn1 = document.createElement("button");
        btn1.innerHTML = "yes";
        btn1.addEventListener("click", function () {
            td6.innerHTML = "<button >yes</button>";
        });
        var btn2 = document.createElement("button");
        btn2.innerHTML = "no";
        btn2.addEventListener("click", function () {
            td6.innerHTML = "<button id='absent'>no</button>";
        
        });
        td6.classList.add("td6");
        td6.append(btn1, btn2);

        tr.append(td1, td2, td3,td4, td6);

        document.querySelector("#tbody").append(tr);

    });


}
displayFun(studentDataArr);