// flash data menggunakan sweet alert
const flashDataDaerah = $(".flash-data-daerah").data("flashdata");

if (flashDataDaerah) {
	Swal.fire({
		type: "success",
		title: "Data daerah berhasil",
		text: flashDataDaerah,
		showConfirmButton: true
	});
}

// tombol hapus
$(".tombol-hapus").on("click", function(e) {
	e.preventDefault();
	const href = $(this).attr("href");

	Swal.fire({
		title: "Apakah anda yakin?",
		text: "Anda akan menghapus data tersebut!",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Hapus!"
	}).then(result => {
		if (result.value) {
			document.location.href = href;
		}
	});
});
