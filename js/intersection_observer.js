const sectionOne = document.querySelector('#call-to-action');

const options = {};

const observer = new IntersectionObserver(function(entries,observer) {
  entries.forEach(entry => {
    console.log(entry.isIntersecting);
  });
},options);

observer.observe(sectionOne);