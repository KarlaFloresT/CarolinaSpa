(function () {
    'use strict';
    window.addEventListener('load', function() {
        var forms = document.getElementsByClassName('needs-validation');
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                event.preventDefault();
                if (form.checkValidity() === false) {                    
                    event.stopPropagation();
                    console.log('faltan datos');
                }
                else  {
                    console.log('Todo correcto');
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();