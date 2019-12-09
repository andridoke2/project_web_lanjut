const id = $(".detail-daerah").data("id");

let xhr = new XMLHttpRequest();

xhr.onreadystatechange = function() {
	if (xhr.readyState == 4 && xhr.status == 200) {
		let daerah = this.responseText;
		console.log(daerah);
	}
};

xhr.open(
	"GET",
	"http://localhost/sisfo-pemetaan-pemanfaatan-lahan/daerah/getDaerahJSON/" +
		id,
	true
);

xhr.send();
