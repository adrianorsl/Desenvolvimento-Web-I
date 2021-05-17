var nome = prompt("Qual seu nome?");
var nome2 = "Computador";
var dado1 = Math.floor(Math.random() * 6 + 1);
var dado2 = Math.floor(Math.random() * 6 + 1);
var dadoC1 = Math.floor(Math.random() * 6 + 1);
var dadoC2 = Math.floor(Math.random() * 6 + 1);

mostrar(nome, dado1, dado2);

function mostrar(nome, d1, d2){
    alert(nome);
    alert(d1);
    alert(d2);
}

function soma(a,b){
    return a + b
}

var total = soma(dado1, dado2);
var totalC = soma(dadoC1, dadoC2);

function imagDados(n1){
    switch(n1){
        case 1 : document.write("<img src= https://images.vectorhq.com/images/previews/27e/dado-1-138329.png>"); break;
        case 2 : document.write("<img src= https://images.vectorhq.com/images/previews/482/dado-2-138325.png>"); break;
        case 3 : document.write("<img src= https://images.vectorhq.com/images/previews/194/dado-3-138321.png>"); break;
        case 4 : document.write("<img src= https://images.vectorhq.com/images/previews/6a9/dado-4-138319.png>"); break;
        case 5 : document.write("<img src= https://images.vectorhq.com/images/previews/93c/dado-5-138316.png>"); break;
        case 6 : document.write("<img src= https://cdn.picpng.com/dice/small/dice-cube-die-six-6-game-luck-91235.png>"); break;
    }
}
function mostrarTela(n, d1, d2, total){
    document.write(n + " seus dados são");
    document.write('<br>');
    document.write("Dado 1: " + d1);
    document.write('<br>');
    document.write(imagDados(d1));
    document.write('<br>');
    document.write("Dado 2: " + d2);
    document.write('<br>');
    document.write(imagDados(d2));
    document.write('<br>');
    document.write("Total = " + total);
    document.write('<br>');
    document.write('<br>');
}
function resultado(tH,tC, nH){
    if (tH > tC) 
        document.write("Você ganhou " + nH) ;
    else if (tH < tC) 
        document.write("A máquina venceu ");
    else
        document.write("Empatamos ");   
}
mostrarTela(nome, dado1, dado2,total);
mostrarTela(nome2, dadoC1, dadoC2, totalC);
resultado(total, totalC, nome);

