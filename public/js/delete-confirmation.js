const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
        confirmButton: "btn btn-success",
        cancelButton: "btn btn-danger",
    },
    buttonsStyling: false,
});

document.addEventListener("DOMContentLoaded", function () {
    const deleteButtons = document.querySelectorAll(".delete-btn");

    deleteButtons.forEach(function (button) {
        button.addEventListener("click", function (e) {
            e.preventDefault();
            const form = this.closest("form");
            swalWithBootstrapButtons
                .fire({
                    title: "Es-tu sûr?",
                    text: "Vous ne pourrez pas revenir en arrière!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonText: "Oui, supprime-le!",
                    cancelButtonText: "Non, annule!",
                })
                .then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    } else if (result.dismiss === Swal.DismissReason.cancel) {
                        swalWithBootstrapButtons.fire({
                            title: "Annulé",
                            text: "La suppression a été annulée :)",
                            icon: "error",
                        });
                    }
                });
        });
    });
});
