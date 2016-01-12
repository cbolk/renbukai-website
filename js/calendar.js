function loadData(jsonFile){
	$.getJSON(jsonFile)
}

function loadData( jsonObject, listElement){
    for(var i in jsonObject){//iterate through the array or object
        //insert the next child into the list as a <li>
        var newLI = document.createElement('li');
        if  (jsonObject[i] instanceof Array){
            newLI.innerHTML=i+": ARRAY";
            newLI.className="arrayOrObject"; //add a class tag so we can style differently
        }
        else if (  jsonObject[i] instanceof Object){
            newLI.innerHTML=i+": OBJECT";
            newLI.className="arrayOrObject"; //add a class tag so we can style differently
        }
        else
            newLI.innerHTML=i+': '+jsonObject[i];
        listElement.appendChild(newLI);   
        //insert a <ul> for nested nodes 
        if  (jsonObject[i] instanceof Array || jsonObject[i] instanceof Object){
            var newUL = document.createElement('ul');
            //newUL.innerHTML=i;
            listElement.appendChild(newUL);
            makeList(jsonObject[i],newUL);
        }
    }
}