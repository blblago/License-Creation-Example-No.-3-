function keygen() {
	
    document.getElementById("box-key").innerHTML = '<div class="quote"> Пожалуйста, подождите идёт генерация ключа для вашего сайта...</center></div>';
	
	var typeLicense = document.getElementById("type-license").value;
	
	if (typeLicense == "trial") {
			
		var date = document.getElementById("license-date").value,
		param = "type=" + typeLicense + "&date=" + date;
	
	} else if (typeLicense == "permanent") {

		var domen = document.getElementById("license-domen").value,
			param = "type=" + typeLicense + "&host=" + domen;

	} 
	
	 $.post( "generator.php?" + param, function( data ) {
		$( "#box-key" ).html( data );
	 });
	
    return false
}

function selTypeLicense() {

		var typeLicense = document.getElementById("type-license").value;
		var inputLicenseDate = document.getElementById("input-license-date");
		var inputLicenseDomen = document.getElementById("input-license-domen");
		var version = document.getElementById("version");

		if (typeLicense == "trial") {
			inputLicenseDate.style.display="block";
			inputLicenseDomen.style.display="none";
			version.style.display="none";
			
			
		} else if(typeLicense == "permanent") {

			inputLicenseDate.style.display="none";
			inputLicenseDomen.style.display="block";
			version.style.display="block";
		} else if (typeLicense == "") {
		
			inputLicenseDate.style.display="none";
			inputLicenseDomen.style.display="none";
			version.style.display="none";
		}

};