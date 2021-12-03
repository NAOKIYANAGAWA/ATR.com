auto_complate_user();
function auto_complate_user() {
    var xhr = new XMLHttpRequest();

    const $input = document.querySelector('#opponent_id');
    $input.addEventListener('input', function () {
        xhr.onreadystatechange = function() {
            if(xhr.readyState === 4 && xhr.status === 200) {
                $form = document.querySelector('.validate-form');
                $submitBtn = $form.querySelector('[type="submit"]');
                if (xhr.responseText) {
                    document.querySelector('#opponent_id').classList.add('is-valid');
                    document.querySelector('#opponent_id').classList.remove('is-invalid');
                    $submitBtn.removeAttribute('disabled');
                } else {
                    document.querySelector('#opponent_id').classList.add('is-invalid');
                    document.querySelector('#opponent_id').classList.remove('is-valid');
                    $submitBtn.setAttribute('disabled', true);
                }
            }
        }
        $opponent_id = document.querySelector('#opponent_id').value;
        xhr.open('GET', 'http://localhost/atr/ajax.php?opponent_id='+$opponent_id);
        xhr.send();
    });


}
