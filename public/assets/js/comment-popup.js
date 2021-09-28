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

// Popup 2
var comingsoonpopup = document.getElementById('popup-commentcomingsoon')
comingsoonpopup.addEventListener('show.bs.modal', function (event2) {
    // Button that triggered the modal
    var button2 = event2.relatedTarget
    // Extract info from data-bs-* attributes
    var recipient = button2.getAttribute('data-bs-id')
    var commentcomingsoon = button2.getAttribute('data-bs-commentcomingsoon')
    // If necessary, you could initiate an AJAX request here
    // and then do the updating in a callback.
    //
    // Update the modal's content.
    var modalTitle2 = comingsoonpopup.querySelector('.modal-title')
    var modalBody2 = comingsoonpopup.querySelector('.modal-body')

    modalTitle2.textContent = 'Commentaire(s)'
    modalBody2.textContent = commentcomingsoon
})

// Popup 3
var customercontentreceptionpopup = document.getElementById('popup-commentcustomercontentreception')
customercontentreceptionpopup.addEventListener('show.bs.modal', function (event3) {
    // Button that triggered the modal
    var button3 = event3.relatedTarget
    // Extract info from data-bs-* attributes
    var recipient = button3.getAttribute('data-bs-id')
    var commentcustomercontentreception = button3.getAttribute('data-bs-commentcustomercontentreception')
    // If necessary, you could initiate an AJAX request here
    // and then do the updating in a callback.
    //
    // Update the modal's content.
    var modalTitle3 = customercontentreceptionpopup.querySelector('.modal-title')
    var modalBody3 = customercontentreceptionpopup.querySelector('.modal-body')

    modalTitle3.textContent = 'Commentaire(s)'
    modalBody3.textContent = commentcustomercontentreception
})

// Popup 4
var picturesreceptionpopup = document.getElementById('popup-commentpicturesreception')
picturesreceptionpopup.addEventListener('show.bs.modal', function (event3) {
    // Button that triggered the modal
    var button3 = event3.relatedTarget
    // Extract info from data-bs-* attributes
    var recipient = button3.getAttribute('data-bs-id')
    var commentpicturesreception = button3.getAttribute('data-bs-commentpicturesreception')
    // If necessary, you could initiate an AJAX request here
    // and then do the updating in a callback.
    //
    // Update the modal's content.
    var modalTitle3 = picturesreceptionpopup.querySelector('.modal-title')
    var modalBody3 = picturesreceptionpopup.querySelector('.modal-body')

    modalTitle3.textContent = 'Commentaire(s)'
    modalBody3.textContent = commentpicturesreception
})

// Popup 4
var webdesignprogresspopup = document.getElementById('popup-commentwebdesignprogress')
webdesignprogresspopup.addEventListener('show.bs.modal', function (event4) {
    // Button that triggered the modal
    var button4 = event4.relatedTarget
    // Extract info from data-bs-* attributes
    var recipient = button4.getAttribute('data-bs-id')
    var commentwebdesignprogress = button4.getAttribute('data-bs-commentwebdesignprogress')
    // If necessary, you could initiate an AJAX request here
    // and then do the updating in a callback.
    //
    // Update the modal's content.
    var modalTitle4 = webdesignprogresspopup.querySelector('.modal-title')
    var modalBody4 = webdesignprogresspopup.querySelector('.modal-body')

    modalTitle4.textContent = 'Commentaire(s)'
    modalBody4.textContent = commentwebdesignprogress
})