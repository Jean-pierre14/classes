const open = document.getElementById('addClass')
const close = document.getElementById('close')
const content = document.getElementsByClassName('content')

open.addEventListener('click', openModal)
close.addEventListener('click', closeModal)

function openModal() {
    content.style.display = 'block'
}

function closeModal() {
    alert('Modal close')
}