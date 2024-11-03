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




function nextItem(){
  let activeItem = document.querySelector('.filterChecked');
  let nextItem = activeItem.parentElement.nextElementSibling.childNodes[1];
  let results = Array.from(document.querySelectorAll('.result > div'));
  let checkboxes = Array.from(document.querySelectorAll('.checkbox label'));
  // Hide all results
  results.forEach(function(result) {
    result.style.display = 'none';
  });
  checkboxes.forEach(function(checkb) {
    checkb.classList.remove('filterChecked');
  });
  // changer le item actif
  // activeItem.classList.remove('filterChecked');
  // nextItem.classList.add('filterChecked');
  
  nextItem.classList.add('filterChecked');
  Array.from(document.querySelectorAll('.filter input[rel]:checked'), function(input) {
    const attrib = nextItem.childNodes[0].getAttribute('rel');
    results = results.filter(function(result) {
        return result.classList.contains(attrib);
      });
  });
  
  results.forEach(function(result) {
    result.style.display = 'flex';
  });
}

function prevItem(){
  let activeItem = document.querySelector('.filterChecked');
  let prevItem = activeItem.parentElement.previousElementSibling.childNodes[1];
  let results = Array.from(document.querySelectorAll('.result > div'));
  let checkboxes = Array.from(document.querySelectorAll('.checkbox label'));
  // Hide all results
  results.forEach(function(result) {
    result.style.display = 'none';
  });
  checkboxes.forEach(function(checkb) {
    checkb.classList.remove('filterChecked');
  });
  // changer le item actif
  // activeItem.classList.remove('filterChecked');
  // nextItem.classList.add('filterChecked');
  
  prevItem.classList.add('filterChecked');
  Array.from(document.querySelectorAll('.filter input[rel]:checked'), function(input) {
    const attrib = prevItem.childNodes[0].getAttribute('rel');
    results = results.filter(function(result) {
        return result.classList.contains(attrib);
      });
  });
  
  results.forEach(function(result) {
    result.style.display = 'flex';
  });
}







// allItems = document.querySelectorAll('.result .bloc-item');
// allItems.forEach(btnItem => {
//   let btnNav = document.createElement('div')
//   btnNav.classList.add('btn-nav-group')
//   btnNav.innerHTML ='<button onclick="prevItem();return false" class="btn-nav btn"><i class="fa-solid fa-chevron-left fa-beat-fade"></i>Cours précédent</button><button onclick="nextItem();return false" class="btn-nav btn">Cours suivant <i class="fa-solid fa-chevron-right fa-beat-fade"></i></button>'  
//   btnItem.append(btnNav);
// })

// faq accordion
const items = document.querySelectorAll(".accordion button");

function toggleAccordion() {
  const itemToggle = this.getAttribute('aria-expanded');
  
  for (i = 0; i < items.length; i++) {
    items[i].setAttribute('aria-expanded', 'false');
  }
  
  if (itemToggle == 'false') {
    this.setAttribute('aria-expanded', 'true');
  }
}

items.forEach(item => item.addEventListener('click', toggleAccordion));
// faq accordion
