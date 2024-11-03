var navbar = document.querySelector('header div.navbar')
    window.addEventListener('scroll', function(){
        if(window.scrollY > 0){navbar.classList.add('fixed')}
        else{navbar.classList.remove('fixed')}
    })


    var open = document.querySelector('header button.open');
    var close = document.querySelector('header button.close');
    var nav = document.querySelector('header nav.navbar-mobile');
    open.addEventListener('click', function() {
        nav.style.transition = "all .3s linear";
        nav.style.display = "flex";
    })
    close.addEventListener('click', function() {
            nav.style.display = "none";
        })
    
    function change() {
        let results = Array.from(document.querySelectorAll('.result > div'));
        let checkboxes = Array.from(document.querySelectorAll('.checkbox label'));
        // Hide all results
        results.forEach(function(result) {
          result.style.display = 'none';
        });
        checkboxes.forEach(function(checkb) {
          checkb.classList.remove('filterChecked');
        });
        // Filter results to only those that meet ALL requirements:
        Array.from(document.querySelectorAll('.filter input[rel]:checked'), function(input) {
            const attrib = input.getAttribute('rel');
            input.parentElement.classList.add('filterChecked');
            results = results.filter(function(result) {
                return result.classList.contains(attrib);
            });
        });
        // Show those filtered results:
        results.forEach(function(result) {
            result.style.display = 'flex';
        });
    }
    change();
    function changeGalery() {
        let results = Array.from(document.querySelectorAll('.result a'));
        let checkboxes = Array.from(document.querySelectorAll('.checkbox label'));
        // Hide all results
        results.forEach(function(result) {
          result.style.display = 'none';
        });
        checkboxes.forEach(function(checkb) {
          checkb.classList.remove('filterChecked');
        });
        // Filter results to only those that meet ALL requirements:
        Array.from(document.querySelectorAll('.filter input[rel]:checked'), function(input) {
            const attrib = input.getAttribute('rel');
            input.parentElement.classList.add('filterChecked');
            results = results.filter(function(result) {
                return result.classList.contains(attrib);
            });
        });
        // Show those filtered results:
        results.forEach(function(result) {
            result.style.display = 'flex';
        });
    }
    changeGalery();
    window.addEventListener('load', function(){
        let loader = document.querySelector('.loader');
        loader.style.display = 'none';
        })