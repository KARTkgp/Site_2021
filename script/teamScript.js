import { TEAM_MEMBERS_DETAILS, TEAM_HEADS_DETAILS, TEAM_MANAGERS_DETAILS,TECHNICAL_MANAGERS_DETAILS } from "./teamDetails.js"

const member_container = document.querySelector("#members-details")
const heads_container = document.querySelector("#heads-details")
const manager_container = document.querySelector("#manager-details")

manager_container.innerHTML = `<div class = "managers" id = "team-managers">`
TEAM_MANAGERS_DETAILS.map((manager) =>{
  manager_container.innerHTML += `<div class="col col-xl-3 text-center" id = "manager-card">
              <div class="media mx-auto">
                <img
                  src="${manager.img}"
                  alt="avatar"
                  class="image"
                />
                <div class="team-contact fs-3 justify-content-center gap-3 d-flex">
                  <a
                    href="${manager.linkedin}"
                    
                    target="_blank"
                    ><i class="fab fa-linkedin-in"></i
                  ></a>
                  <a
                    href="https://mail.google.com/mail/?view=cm&fs=1&to=${manager.mail}"
                    target="_blank"
                    ><i class="fas fa-envelope"></i
                  ></a>
                </div>
              </div>
              <h3 class="pt-1">${manager.name}</h3>
              <h4 class="pt-1">${manager.designation1}</h4>
              <h4>${manager.designation2}</h4>
              <h4>${manager.designation3}</h4>
            </div>`
})
manager_container.innerHTML += `</div>`
manager_container.innerHTML += `<div class = "managers" id = "technical_manager">`
TECHNICAL_MANAGERS_DETAILS.map((manager)=>{
  manager_container.innerHTML += `<div class="col col-xl-3 text-center" id = "manager-card">
              <div class="media mx-auto">
                <img
                  src="${manager.img}"
                  alt="avatar"
                  class="image"
                />
                <div class="team-contact fs-3 d-flex justify-content-center gap-3"> "
                  <a
                    href="${manager.linkedin}"
                    
                    target="_blank"
                    ><i class="fab fa-linkedin-in"></i
                  ></a>
                  <a
                    href="https://mail.google.com/mail/?view=cm&fs=1&to=${manager.mail}"
                    target="_blank"
                    ><i class="fas fa-envelope"></i
                  ></a>
                </div>
              </div>
              <h3 class="pt-1">${manager.name}</h3>
              <h4 class="pt-1">${manager.designation1}</h4>
              <h4>${manager.designation2}</h4>
              <h4>${manager.designation3}</h4>
            </div>`
})
manager_container.innerHTML += `</div>`


TEAM_HEADS_DETAILS.map((head)=>{
  heads_container.innerHTML+=` 
  <div class="col col-xl-3 text-center" id="heads-details">             
  <div class="media mx-auto">
  <img
    src="${head.img}"
    alt="avatar"
    class="head-image"
  />
  <div class="team-contact fs-3 justify-content-center gap-3 d-flex">
    <a
      href="${head.linkedin}"
      target="_blank"
      ><i class="fab fa-linkedin-in"></i
    ></a>
    <a href="https://mail.google.com/mail/?view=cm&fs=1&to=${head.mail}" target="_blank"
      ><i class="fas fa-envelope"></i
    ></a>
  </div>
</div>
<h3 class="pt-1">${head.name}</h3>
<h4>${head.designation1}</h4>
<h4>${head.designation2}</h4>
</div>
</div>`
})
