const CONTACT_DETAILS = [
  {
      name: "Sanket Agarwal",
      contact: "+91 98756 75383",
      number: "+91-9875675383"
  },
  {
      name: "Gokul R",
      contact: "+91 70101 65881",
      number: "+91-7010165881"
  }
]

const contact_details = document.querySelector("#contact-details")

CONTACT_DETAILS.map((person) => {
  contact_details.innerHTML += `
  <p class="manager-contact mb-2">
 ${person.name} <br />
  <a href="tel:${person.number}">${person.contact}</a>
</p>`
console.log(person.name)
})
