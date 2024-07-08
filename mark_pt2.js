function calculatePercentage() {
    var id = document.getElementById("id").value;
    var name = document.getElementById("name").value;
    var marks = [];
    for (var i = 1; i <= 5; i++) {
        marks.push(parseFloat(document.getElementById("subject" + i).value));
    }

    var sum = 0;
    for (var i = 0; i < marks.length; i++) {
        sum += marks[i];
    }

    var percentage = (sum / (marks.length * 100)) * 100; //per=(sum/500)*100;

    var table = document.getElementById("TableScore");
    var newRow = table.insertRow();
    var idCell = newRow.insertCell(0);
    var nameCell = newRow.insertCell(1);
    var marksCell1 = newRow.insertCell(2);
    var marksCell2 = newRow.insertCell(3);
    var marksCell3 = newRow.insertCell(4);
    var marksCell4 = newRow.insertCell(5);
    var marksCell5 = newRow.insertCell(6);
    var totalMarksCell = newRow.insertCell(7);
    var percentageCell = newRow.insertCell(8);
    var resultCell = newRow.insertCell(9);

    idCell.innerHTML = id;
    nameCell.innerHTML = name;
    marksCell1.innerHTML = marks[0];
    marksCell2.innerHTML = marks[1];
    marksCell3.innerHTML = marks[2];
    marksCell4.innerHTML = marks[3];
    marksCell5.innerHTML = marks[4];
    totalMarksCell.innerHTML = sum;
    percentageCell.innerHTML = percentage.toFixed(2) + "%";
    
    if(percentage>=40.00){
        resultCell.innerHTML="<font color=green>Pass</font>";
    }else{
        resultCell.innerHTML="<font color=red>Fail</font>";
    }
}