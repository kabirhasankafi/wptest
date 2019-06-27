function ghori() {
	var bzTime = new Date(),
		ghonta = bzTime.getHours(),
		minit = bzTime.getMinutes(),
		sec = bzTime.getSeconds(),
		dinrat = ' PM' ;


		if (ghonta < 12) {
			dinrat = ' AM';
		}
		if (ghonta == 0) {
			ghonta = 12;
		}
		if (ghonta > 12) {
			ghonta = ghonta - 12;
		}
		if (ghonta < 10) {
			ghonta = '0' + ghonta;
		}
		if (minit < 10) {
			minit = '0' + minit;
		}
		if (sec < 10) {
			sec = '0' + sec;
		}

		document.getElementById('bz-clock').innerHTML = ghonta + ':' + minit + ':' + sec + dinrat;
	
}
setInterval(ghori, 1000);
