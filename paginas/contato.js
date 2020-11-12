function valida(campo,valor)
{
    elemento = document.getElementById(campo);

    if(campo == "nome")
    {
        valor.length >= 4 ? elemento.style.background = "green" : elemento.style.background = "red";
    }
    else
    {
        valor.length == 11 ? elemento.style.background = "green" : elemento.style.background = "red";
    }
}

function checkbox(nacionalidade)
{
    document.getElementById("chkbras").checked=false;
    document.getElementById("chkest").checked=false;

    document.getElementById(nacionalidade).checked=true;


    
}