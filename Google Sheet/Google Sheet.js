const scriptURL ='https://script.google.com/macros/s/AKfycbzAltT11VM62_9hjsBb303287zzqCLJPc-WqdJCYBMYuma6lSepjzZ4jM_eQ9Wi9BCi/exec' 

const form = document.forms['contact-form']

form.addEventListener('submit', e => {
  e.preventDefault()
  fetch(scriptURL, { method: 'POST', body: new FormData(form)})
  .then(response => alert("Thank you! your form is submitted successfully." ))
  .then(() => { window.location.reload(); })
  .catch(error => console.error('Error!', error.message))
})