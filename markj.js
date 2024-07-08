function Sub(){
    var name,ase,adb,aos,anm,asl, sum, avg;
    name = (document.getElementById('aname').value);
    ase = parseFloat(document.getElementById('se').value);
    adb = parseFloat(document.getElementById('db').value);
    aos = parseFloat(document.getElementById('os').value);
    anm = parseFloat(document.getElementById('nm').value);
    asl = parseFloat(document.getElementById('sl').value);

    // Calculating Total
    sum=ase+adb+aos+anm+asl;
    avg=sum/5;

    // Display on Student Data
    var newTable = document.getElementById('TableScore');
    var row = newTable.insertRow(-1);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(0);
    var cell3 = row.insertCell(0);
    var cell4 = row.insertCell(0);
    var cell5 = row.insertCell(0);
    var cell6 = row.insertCell(0);
    var cell7 = row.insertCell(0);
    var cell8 = row.insertCell(0);
    var cell9 = row.insertCell(0);

    
    cell2.innerHTML = avg;
    cell3.innerHTML = sum;
    cell4.innerHTML = asl;
    cell5.innerHTML = anm;
    cell6.innerHTML = aos;
    cell7.innerHTML = adb;
    cell8.innerHTML = ase;
    cell9.innerHTML = name;

    if(avg>=40 && ase>=40 && adb>=40 && aos>=40 && anm>=40 && asl>=40){
        cell1.innerHTML="<font color=green>Pass</font>";
    }else{
        cell1.innerHTML="<font color=red>Fail</font>";
    }
}