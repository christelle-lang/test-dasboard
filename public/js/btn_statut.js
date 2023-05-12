var status_btn = document.getElementById("status_btn");
if ({{ $table_conducteurs->statut }} == "actif") {
    status_btn.style.backgroundColor = "green";
} else {
    status_btn.style.backgroundColor = "red";
}
