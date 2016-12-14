function disciplinaF(int){
    $.ajax({
	 type: 'get',
	 url: 'disciplinaShow.php',
	 data: {
	  discod:int
	 },
	 success: function (response) {
	  document.getElementById("disciplina").innerHTML=response; 
	 }
	 });
}
