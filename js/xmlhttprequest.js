let request= new XMLHttpRequest();
request.open("GET","https://ghibliapi.herokuapp.com/films", true);

request.onload=() => {
    
    let data=JSON.parse(request.response);
    let tabla= document.getElementById("tpeliculas");

    if(request.status >= 200 && request.status < 400){
        data.forEach(movie => {
            let fila=document.createElement("tr");
            let celda1=document.createElement("td");
            let celda2=document.createElement("td");
            celda1.innerText=movie.id;
            celda2.innerText=movie.title;
            fila.appendChild(celda1);
            fila.appendChild(celda2);

            tabla.childNodes[1].appendChild(fila);

            
            console.log(movie.title);
        });
    }else {
        console.log("error no se encontraron datos");
    }
};

request.send();