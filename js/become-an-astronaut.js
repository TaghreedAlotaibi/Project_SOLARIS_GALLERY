
function toggleDetails(step) {
    const cardInner = document.querySelectorAll('.card-inner');
    cardInner.forEach((inner, index) => {
      if (index + 1 === step) {
        inner.style.transform = inner.style.transform === 'rotateY(180deg)' ? 'rotateY(0)' : 'rotateY(180deg)';
      } else {
        inner.style.transform = 'rotateY(0)';
      }
    });
  }
  
