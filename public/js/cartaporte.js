$(function () {
    $('[data-toggle="tooltip"]').tooltip()

    $('#formAddContent').on('submit', function (e) {
        e.preventDefault();
        $(this).trigger('reset')
        $('#addContentModal').modal('toggle')
    })

    $('#modalShowCartaporte').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget) // Button that triggered the modal
        let info = button.data('info') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        let modal = $(this)
        modal.find('.modal-title').text('Carta porte ' + info)
        //.val(info)
    })
})