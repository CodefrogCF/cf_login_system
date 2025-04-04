function showForm(formId) {
    document.querySelectorAll(".form-box").forEach(form => form.classList.remove("active"));
    document.getElementById(formId).classList.add("active");

    fetch('set_active_form.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ active_form: formId })
    });
}


// important frog function
function frog() {
    alert("Ribbit!");
}