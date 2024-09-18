function mensagem(x) {
	//Capturando o elemento msg
	var elemento=document.getElementById("msg");

	//Escrevendo no próprio documento html
	if (x==1)
		elemento.innerHTML="<h2>Olá, ganhei o foco!!</h2>";

	if (x==2)
		elemento.innerHTML="<h2>Olá, perdi o foco!!</h2>";

	if (x==3)
		elemento.innerHTML="<h2>Olá, pressionou a tecla!</h2>";
}
function mudaCor(cor){
	var elemento=document.getElementById('testeCor');
	elemento.style.color=cor;
	elemento.innerHTML = "Alterei o texto";
}
function calculos(){
	var nome=formulario.txtnome;
	var altura=formulario.txtaltura;
	var peso=formulario.txtpeso;
	var imc=0;
	

	altura=parseFloat(altura.value);
	peso=parseFloat(peso.value);
	imc=peso/(Math.pow(altura, 2));

	alert (formulario.ckrock.checked);

	alert("Oi " + nome.value + ", seu imc é: " + imc.toString() + "Receber email: " + email);
	teste();
}
function teste(){
	alert ("oi");
}
function valida_email(){
	var email=formulario.txtemail.value;
	var posicao1=email.indexOf("@");
	var posicao2=email.indexOf(".");

	if ((posicao1==-1)||(posicao2==-1)){
		formulario.txtemail.style.background = "#D4D4D4";
		alert ("Por favor, forneça um email válido!");
		formulario.txtemail.focus();
	}else{
		formulario.txtemail.style.background = "white";
	}
}
function popular(){
	var comboEstados = document.getElementById("cboEstados");

	//Verifica o estado marcado
	var selecionado=comboEstados.selectedIndex;

	switch (selecionado) {
    case 1:
        cidadesRJ();
        break;
    case 2:
        cidadesMG();
        break;
    case 3:
        cidadesBA();
        break;
    }
}
function cidadesMG(){
	var comboCidades = document.getElementById("cboCidades");

	//Antes de popular, remove todos os elementos que por acaso existam
    while (comboCidades.length) {
        comboCidades.remove(0);
    }

   	var opt0 = document.createElement("option");
    opt0.value = "MURIAE";
    opt0.text = "MURIAÉ";
    comboCidades.add(opt0, comboCidades.options[0]);

   	var opt1= document.createElement("option");
    opt1.value = "LEOPOLDINA";
    opt1.text = "LEOPOLDINA";
    comboCidades.add(opt1, comboCidades.options[1]);

   	var opt2 = document.createElement("option");
    opt2.value = "LARANJAL";
    opt2.text = "LARANJAL";
    comboCidades.add(opt2, comboCidades.options[2]);
}
function cidadesRJ(){
	var comboCidades = document.getElementById("cboCidades");

	//Antes de popular, remove todos os elementos que por acaso existam
    while (comboCidades.length) {
        comboCidades.remove(0);
    }

   	var opt0 = document.createElement("option");
    opt0.value = "ITAPERUNA";
    opt0.text = "ITAPERUNA";
    comboCidades.add(opt0, comboCidades.options[0]);

   	var opt1= document.createElement("option");
    opt1.value = "NATIVIDADE";
    opt1.text = "NATIVIDADE";
    comboCidades.add(opt1, comboCidades.options[1]);

   	var opt2 = document.createElement("option");
    opt2.value = "CAMPOS";
    opt2.text = "CAMPOS";
    comboCidades.add(opt2, comboCidades.options[2]);

}
function cidadesBA(){
	var comboCidades = document.getElementById("cboCidades");

    while (comboCidades.length) {
        comboCidades.remove(0);
    }

   	var opt0 = document.createElement("option");
    opt0.value = "SALVADOR";
    opt0.text = "SALVADOR";
    comboCidades.add(opt0, comboCidades.options[0]);

   	var opt1= document.createElement("option");
    opt1.value = "PORTO SEGURO";
    opt1.text = "SOROCABA";
    comboCidades.add(opt1, comboCidades.options[1]);

   	var opt2 = document.createElement("option");
    opt2.value = "CANAVIEIRAS";
    opt2.text = "CANAVIEIRAS";
    comboCidades.add(opt2, comboCidades.options[2]);

}