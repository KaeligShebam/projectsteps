var customerbriefpopup = document.getElementById('popup-commentcustomerbrief')
customerbriefpopup.addEventListener('show.bs.modal', function (event) {
    // Button that triggered the modal
    var button = event.relatedTarget
    // Extract info from data-bs-* attributes
    var recipient = button.getAttribute('data-bs-id')

    var commentcustomerbrief = button.getAttribute('data-bs-commentcustomerbrief')
    var datecustomerbrief = "Date du brief: " + button.getAttribute('data-bs-datecustomerbrief')
    // If necessary, you could initiate an AJAX request here
    // and then do the updating in a callback.
    //
    // Update the modal's content.
    var modalTitle = customerbriefpopup.querySelector('.modal-title')
    var modalBody = customerbriefpopup.querySelector('.modal-body')
    var modalBody2 = customerbriefpopup.querySelector('.modal-body2')


    modalTitle.textContent = 'Information(s)'
    modalBody.textContent = commentcustomerbrief
    modalBody2.textContent = datecustomerbrief
})

// Popup 2
var comingsoonpopup = document.getElementById('popup-commentcomingsoon')
comingsoonpopup.addEventListener('show.bs.modal', function (event) {
    // Button that triggered the modal
    var button = event.relatedTarget
    // Extract info from data-bs-* attributes
    var recipient = button.getAttribute('data-bs-id')
    var commentcomingsoon = button.getAttribute('data-bs-commentcomingsoon')
    var datecomingsoon = "Date de la coming soon: " + button.getAttribute('data-bs-datecomingsoon')
    // If necessary, you could initiate an AJAX request here
    // and then do the updating in a callback.
    //
    // Update the modal's content.
    var modalTitle = comingsoonpopup.querySelector('.modal-title')
    var modalBody = comingsoonpopup.querySelector('.modal-body')
    var modalBody2 = customerbriefpopup.querySelector('.modal-body2')

    modalTitle.textContent = 'Information(s)'
    modalBody.textContent = commentcomingsoon
    modalBody2.textContent = datecomingsoon
})

// Popup 3
var customercontentreceptionpopup = document.getElementById('popup-commentcustomercontentreception')
customercontentreceptionpopup.addEventListener('show.bs.modal', function (event) {
    // Button that triggered the modal
    var button = event.relatedTarget
    // Extract info from data-bs-* attributes
    var recipient = button.getAttribute('data-bs-id')
    var commentcustomercontentreception = button.getAttribute('data-bs-commentcustomercontentreception')
    // If necessary, you could initiate an AJAX request here
    // and then do the updating in a callback.
    //
    // Update the modal's content.
    var modalTitle = customercontentreceptionpopup.querySelector('.modal-title')
    var modalBody = customercontentreceptionpopup.querySelector('.modal-body')

    modalTitle.textContent = 'Commentaire(s)'
    modalBody.textContent = commentcustomercontentreception
})

// Popup 4
var picturesreceptionpopup = document.getElementById('popup-commentpicturesreception')
picturesreceptionpopup.addEventListener('show.bs.modal', function (event) {
    // Button that triggered the modal
    var button = event.relatedTarget
    // Extract info from data-bs-* attributes
    var recipient = button.getAttribute('data-bs-id')
    var commentpicturesreception = button.getAttribute('data-bs-commentpicturesreception')
    // If necessary, you could initiate an AJAX request here
    // and then do the updating in a callback.
    //
    // Update the modal's content.
    var modalTitle = picturesreceptionpopup.querySelector('.modal-title')
    var modalBody = picturesreceptionpopup.querySelector('.modal-body')

    modalTitle.textContent = 'Commentaire(s)'
    modalBody.textContent = commentpicturesreception
})

// Popup 5
var webdesignprogresspopup = document.getElementById('popup-commentwebdesignprogress')
webdesignprogresspopup.addEventListener('show.bs.modal', function (event) {
    // Button that triggered the modal
    var button = event.relatedTarget
    // Extract info from data-bs-* attributes
    var recipient = button.getAttribute('data-bs-id')
    var commentwebdesignprogress = button.getAttribute('data-bs-commentwebdesignprogress')
    // If necessary, you could initiate an AJAX request here
    // and then do the updating in a callback.
    //
    // Update the modal's content.
    var modalTitle = webdesignprogresspopup.querySelector('.modal-title')
    var modalBody = webdesignprogresspopup.querySelector('.modal-body')

    modalTitle.textContent = 'Commentaire(s)'
    modalBody.textContent = commentwebdesignprogress
})

// Popup 5
var webdesignpwaitspopup = document.getElementById('popup-commentwebdesignwait')
webdesignpwaitspopup.addEventListener('show.bs.modal', function (event) {
    // Button that triggered the modal
    var button = event.relatedTarget
    // Extract info from data-bs-* attributes
    var recipient = button.getAttribute('data-bs-id')
    var commentwebdesignwait = button.getAttribute('data-bs-commentwebdesignwait')
    // If necessary, you could initiate an AJAX request here
    // and then do the updating in a callback.
    //
    // Update the modal's content.
    var modalTitle = webdesignpwaitspopup.querySelector('.modal-title')
    var modalBody = webdesignpwaitspopup.querySelector('.modal-body')

    modalTitle.textContent = 'Commentaire(s)'
    modalBody.textContent = commentwebdesignwait
})

// Popup 6
var webdesignwalidatedpopup = document.getElementById('popup-commentwebdesignvalidated')
webdesignwalidatedpopup.addEventListener('show.bs.modal', function (event) {
    // Button that triggered the modal
    var button = event.relatedTarget
    // Extract info from data-bs-* attributes
    var recipient = button.getAttribute('data-bs-id')
    var commentwebdesignvalidated = button.getAttribute('data-bs-commentwebdesignvalidated')
    // If necessary, you could initiate an AJAX request here
    // and then do the updating in a callback.
    //
    // Update the modal's content.
    var modalTitle = webdesignwalidatedpopup.querySelector('.modal-title')
    var modalBody = webdesignwalidatedpopup.querySelector('.modal-body')

    modalTitle.textContent = 'Commentaire(s)'
    modalBody.textContent = commentwebdesignvalidated
})

// Popup 7
var domainnamepopup = document.getElementById('popup-commentdomainname')
domainnamepopup.addEventListener('show.bs.modal', function (event) {
    // Button that triggered the modal
    var button = event.relatedTarget
    // Extract info from data-bs-* attributes
    var recipient = button.getAttribute('data-bs-id')
    var commentdomainname = button.getAttribute('data-bs-commentdomainname')
    // If necessary, you could initiate an AJAX request here
    // and then do the updating in a callback.
    //
    // Update the modal's content.
    var modalTitle = domainnamepopup.querySelector('.modal-title')
    var modalBody = domainnamepopup.querySelector('.modal-body')

    modalTitle.textContent = 'Commentaire(s)'
    modalBody.textContent = commentdomainname
})

// Popup 8
var webintegrationpopup = document.getElementById('popup-commentwebintegration')
webintegrationpopup.addEventListener('show.bs.modal', function (event) {
    // Button that triggered the modal
    var button = event.relatedTarget
    // Extract info from data-bs-* attributes
    var recipient = button.getAttribute('data-bs-id')
    var commentwebintegration = button.getAttribute('data-bs-commentwebintegration')
    // If necessary, you could initiate an AJAX request here
    // and then do the updating in a callback.
    //
    // Update the modal's content.
    var modalTitle = webintegrationpopup.querySelector('.modal-title')
    var modalBody = webintegrationpopup.querySelector('.modal-body')

    modalTitle.textContent = 'Commentaire(s)'
    modalBody.textContent = commentwebintegration
})

// Popup 9
var onlinepopup = document.getElementById('popup-commentonline')
onlinepopup.addEventListener('show.bs.modal', function (event) {
    // Button that triggered the modal
    var button = event.relatedTarget
    // Extract info from data-bs-* attributes
    var recipient = button.getAttribute('data-bs-id')
    var commentonline = button.getAttribute('data-bs-commentonline')
    // If necessary, you could initiate an AJAX request here
    // and then do the updating in a callback.
    //
    // Update the modal's content.
    var modalTitle = onlinepopup.querySelector('.modal-title')
    var modalBody = onlinepopup.querySelector('.modal-body')

    modalTitle.textContent = 'Commentaire(s)'
    modalBody.textContent = commentonline
})