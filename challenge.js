document.getElementById("choice").addEventListener("change",donnerClient);

function donnerClient(){
    xhr = new XMLHttpRequest();
    var client= document.getElementById("choice").value;
    console.log(client);
    xhr.open("POST","traitement.php");
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    xhr.send("value="+client);
    
    xhr.onreadystatechange = function(){
     if(xhr.readyState === 4 && xhr.status === 200){
       document.getElementById("clients").innerHTML = xhr.responseText;
       }
      /* else{
           alert("error");
       }; */
     };
    
};