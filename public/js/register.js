function changeActivity() {
    let checkbox = document.getElementById('agreement');
    if (checkbox.checked) {
        document.getElementById('store').classList.remove('disabled');
        document.getElementById('store').removeAttribute('disabled');
    } else {
        document.getElementById('store').classList.add('disabled');
        document.getElementById('store').setAttribute('disabled', 'disabled');
    }
}