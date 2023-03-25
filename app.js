document.getElementById('contactForm').addEventListener('submit', function(e) {

    e.preventDefault();

    let contactForm = new FormData(document.getElementById('contactForm'));

    fetch('registrar.php', {
        method: 'POST',
        body: contactForm 
    })
    .then(res => res.json())
    .then(data => {
        if(data == 'true') {
            document.getElementById('txt_nombre').value = '';
            document.getElementById('txt_emailAddress').value = '';
            document.getElementById('txt_message').value = ''; 
            alert('El ususario se registro correctamente');
        }else{
            console.log(data);
        }
    })


});