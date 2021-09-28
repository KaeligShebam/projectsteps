var exampleModal = document.getElementById('popup-commentcustomerbrief')
exampleModal.addEventListener('show.bs.modal', function (event) {
    // Button that triggered the modal
    var button = event.relatedTarget
    // Extract info from data-bs-* attributes
    var recipient = button.getAttribute('data-bs-id')
    var commentcustomerbrief = button.getAttribute('data-bs-commentcustomerbrief')
    // If necessary, you could initiate an AJAX request here
    // and then do the updating in a callback.
    //
    // Update the modal's content.
    var modalTitle = exampleModal.querySelector('.modal-title')
    var modalBody = exampleModal.querySelector('.modal-body')

    modalTitle.textContent = 'Commentaire(s)'
    modalBody.textContent = commentcustomerbrief
})



var popup = document2.getElementById('popup-commentcomingsoon')
popup.addEventListener('show.bs.modal', function (test) {
    // Button that triggered the modal
    var button2 = test.relatedTarget
    // Extract info from data-bs-* attributes
    var recipient2 = button2.getAttribute('data-bs-po')
    var commentcomingsoon = button2.getAttribute('data-bs-commentcomingsoon')
    // If necessary, you could initiate an AJAX request here
    // and then do the updating in a callback.
    //
    // Update the modal's content.
    var modalTitle2 = popup.querySelector('.modal-title')
    var modalBody2 = popup.querySelector('.modal-body')

    modalTitle2.textContent = 'Commentaire(s)'
    modalBody2.textContent = commentcomingsoon
})