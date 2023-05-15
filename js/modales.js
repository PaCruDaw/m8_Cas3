deleteModal.addEventListener('shown.bs.modal', event => {
    let button = event.relatedTarget
    let id = button.getAttribute('data-bs-id')
    deleteModal.querySelector('.modal-footer #id').value = id
})

