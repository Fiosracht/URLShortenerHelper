function check(id) {
	document.getElementById("itemCheckDiv"+id).classList.toggle("checked");
	document.getElementById("itemCheck"+id).checked = !(document.getElementById("itemCheck"+id).checked);
}