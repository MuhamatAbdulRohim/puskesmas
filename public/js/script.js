function gantiWarna (id,warna) {
	if (document.getElementById(id).className != 'current-menu') {
		document.getElementById(id).style.backgroundColor = warna;
	};
}

function ganti_menu (a) {
	document.getElementById(a).className = 'current-menu';
	if (a == 'pasien') {
		document.getElementById('panel_pasien').style.display = 'inline-block';
		document.getElementById('panel_dokter').style.display = 'none';
		document.getElementById('panel_perawat').style.display = 'none';
		document.getElementById('dokter').className = 'menu-loket';
		document.getElementById('perawat').className = 'menu-loket';
	} else if (a == 'dokter') {
		document.getElementById('panel_pasien').style.display = 'none';
		document.getElementById('panel_dokter').style.display = 'inline-block';
		document.getElementById('panel_perawat').style.display = 'none';
		document.getElementById('pasien').className = 'menu-loket';
		document.getElementById('perawat').className = 'menu-loket';
	} else {
		document.getElementById('panel_pasien').style.display = 'none';
		document.getElementById('panel_dokter').style.display = 'none';
		document.getElementById('panel_perawat').style.display = 'inline-block';
		document.getElementById('dokter').className = 'menu-loket';
		document.getElementById('pasien').className = 'menu-loket';
	};
	gantiWarna('pasien','#5a5e5a');
	gantiWarna('dokter','#5a5e5a');
	gantiWarna('perawat','#5a5e5a');
}
